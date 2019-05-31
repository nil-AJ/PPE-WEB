<?php

/**Une requete pour l'api ce constitue de cette facon
 * url?call_api=true&user=****&password=*******&CEquonveutdata=
 * les arguments de data doivent être passé sous forme de tableau avec en premier parametre la commande souhaité
 * getData
 * deleteData
 * insertData
 * updateData \\Peut etre accompagné du parametre clause=//
 *  les parametre du tableau qui les suivent demandent tous des paramètres differents et sont spceifiés dans la class API_Rest
 * Exemple : url?call_api=true&user=****&password=*******&getData=membre 
 * url/?call_api=true&user=**********&password=*********************&insertData=category,,Test,JB, - pas besoin de crochet juste de virgule le tableau est crée par le controleur
 * Attention  a bien envoyé le mot de passse encrypté en sha1 dans la requete pour qu'il ne soit pas visible par un potentiel attaquant
 * 
 */


 function api($args)
 {

    $api = $GLOBALS["api"];
    if( isset($args["user"]) && isset($args["password"]))
    {
        $verif =$api->verification("membre", array("email",'password'), $args["user"],$args["password"]);

         //Si l'argument user_exist n'est pas present on continue
        if(!isset($args["user_exist"]))
        {
            //On verifie que l'utilisateur est bein enregistré
            if($verif)
            {

                if(isset($args["getData"]))
                {
                    $api->getAllData($args["getData"]);

                }elseif(isset($args["deleteData"]))
                {
                    $argument = explode(",",$args["deleteData"]);
                    $api->deleteData($argument[0],$argument[1],$argument[2]);

                }elseif(isset($args["insertData"])){
                    
                        $arguments= explode(",",$args["insertData"]);
                        $rows = array_slice($arguments,1);
                        $api->insertData($arguments[0],$rows);
                }elseif(isset($args["updateData"]))
                {
                    $cond=[];
                    $val= explode(",",$args["updateData"]);
                    if(isset($args["clause"]))
                    {
                        $cond = explode(",",$args["clause"]);
                        $api->updateData($val[0],$val[1],$val[2],$cond);
                    }else{
                        $api->response([
                            "Success"=>503,
                            "Details"=>"Argument manquant"
                        ]);
                    }
                
                }
            }

         }else{
            //Si l'argument user_exist est present et que le mp et l'email match on renvoie une reponse positive
             if($verif)
             {
                
             }else{
                $api->response([
                    "Response"=>403,
                    "User"=>false
                ]
                );
             }

              
         }
    }else{
        throw new Exception(404); // On redirige l'utilisateur vers une page 404 si il essaye d'accéder a une page auquel il n'as pas accés
    }
 }
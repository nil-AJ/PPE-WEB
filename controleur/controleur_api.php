<?php

/**Une requete pour l'api ce constitue de cette facon
 * url?call_api=true&user=****&password=*******&data=
 * les arguments de data doivent être passé sous forme de tableau avec en premier parametre la commande souhaité
 * getData
 * deleteData
 * insertData
 *  les parametre du tableau qui les suivent demandent tous des paramètres differents et sont spceifiés dans la class API_Rest
 * Exemple : url?call_api=true&user=****&password=*******&data=getData,membre <- pas besoin de crochet juste de virgule le tableau est crée par php
 * url/?call_api=true&user=**********&password=*********************&data=insertData,category&rows="",Test,JB,
 * Attention  a bien envoyé le mot de passse encrypté en sha1 dans la requete pour qu'il ne soit pas compris
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
                    
                }
            }

         }else{
            //Si l'argument user_exist est present et que le mp et l'email match on renvoie une reponse positive
             if($verif)
             {
                 $api->response([
                     "Response"=>200,
                     "User"=>true
                 ]
                 );
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
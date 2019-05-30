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
    if( isset($args["user"]) && isset($args["user"]))
    {
        //On verifie que l'utilisateur est bein enregistré
        $dt = array("email",'password',2,"EEEEE");
         $verif =$api->verification("membre",$dt, $args["user"],$args["password"]);
         if($verif)
         {

             if(isset($args["getData"]))
             {
                $api->getAllData($args["getData"]);

             }elseif(isset($args["deleteData"]))
             {
                $arguments = explode(",",$args["deleteData"]);
                $api->deleteData($arguments[0],$arguments[1]);

             }elseif(isset($args["insertData"])){
                if(isset($args["rows"]))
                {
                    $rows= explode(",",$args["rows"]);
                    $api->insertData($args["insertData"],$rows);
                 }
             }

         }else{

             //L'utilisateur recois un reponse négative
             $api->response([["Response"=>"403",
                 "Access"=>"Restricted"]]);

              
         }
    }else{
        throw new Exception(404); // On redirige l'utilisateur vers une page 404 si il essaye d'accéder a une page auquel il n'as pas accés
    }
 }
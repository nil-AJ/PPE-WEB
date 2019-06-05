<?php

$bdd = $GLOBALS['bdd'];
//On récupere les emails de la bdd en comaprant par rapport a la valeur rentrer par l'utilisateur


$req = $bdd->createBDD()->prepare('INSERT INTO candidature(name, prename, email, phoneNumber, motivation,class) VALUES(?,?,?,?,?,?)');
$req->execute(array(

    $_POST['Cname'],
    $_POST['Cprename'],
    $_POST['Cemail'],
    $_POST['CphoneNumber'],
    $_POST['Cdescription'],
    $_POST['Cclass']
));

$_POST = array();//On vide le POST

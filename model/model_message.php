<?php

$bdd = $GLOBALS['bdd'];
//On récupere les emails de la bdd en comaprant par rapport a la valeur rentrer par l'utilisateur

$req = $bdd->createBDD()->prepare('SELECT * FROM message ');


    $req = $bdd->createBDD()->prepare('INSERT INTO message ( name, prename, email, phoneNumber, type,	content) VALUES(?,?,?,?,?,?)');
    $req->execute(array(

        $_POST['name'],
        $_POST['prename'],
        $_POST['email'],
        $_POST['phoneNumber'],
        $_POST['type'],
        $_POST['content']
    ));

    $req->closeCursor();
    $_POST = array();//On vide le POST




?>


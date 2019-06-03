<?php

$bdd = $GLOBALS['bdd'];
//On récupere les emails de la bdd en comaprant par rapport a la valeur rentrer par l'utilisateur

$req = $bdd->createBDD()->prepare('SELECT * FROM candidature ');


$req = $bdd->createBDD()->prepare('INSERT INTO candidature ( name, prename, email, phoneNumber, motivation,	class) VALUES(?,?,?,?,?,?)');
$req->execute(array(

    $_POST['name'],
    $_POST['prename'],
    $_POST['email'],
    $_POST['phoneNumber'],
    $_POST['motivation'],
    $_POST['class']
));

$req->closeCursor();
$_POST = array();//On vide le POST



?>


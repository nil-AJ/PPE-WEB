<?php

$bdd = $GLOBALS['bdd'];
//On récupere les emails de la bdd en comaprant par rapport a la valeur rentrer par l'utilisateur

$req = $bdd->createBDD()->prepare('SELECT * FROM partenaire ');


$req = $bdd->createBDD()->prepare('INSERT INTO partenaire ( name, description,dateStart, dateEnd, adder) VALUES(?,?,?,?,?)');
$req->execute(array(

    $_POST['name'],
    $_POST['description'],
    $_POST['dateStart'],
    $_POST['dateEnd'],
    $_POST['adder'],
));

$req->closeCursor();
$_POST = array();//On vide le POST




?>


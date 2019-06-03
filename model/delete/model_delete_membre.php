<?php

$bdd =$GLOBALS["bdd"];


$req = $bdd->createBDD()->prepare("DELETE FROM membre WHERE idMembre = ?");
$req->execute(array(
    $_POST["idMeb"],

));


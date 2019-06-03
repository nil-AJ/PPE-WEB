<?php

$bdd =$GLOBALS["bdd"];


$req = $bdd->createBDD()->prepare("DELETE FROM media WHERE idMedia = ?");
$req->execute(array(
    $_POST["idMed"]
));


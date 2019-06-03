<?php

$bdd =$GLOBALS["bdd"];


$req = $bdd->createBDD()->prepare("DELETE FROM candidature WHERE idCandidat = ?");
$req->execute(array(
    $_POST["idCand"]
));


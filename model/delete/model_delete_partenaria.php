<?php

$bdd =$GLOBALS["bdd"];


$req = $bdd->createBDD()->prepare("DELETE FROM partenaire WHERE idPartenaire = ?");
$req->execute(array(
    $_POST["idPart"]
));


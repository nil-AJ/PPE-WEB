<?php

$bdd =$GLOBALS["bdd"];


$req = $bdd->createBDD()->prepare("DELETE FROM category WHERE idCategory = ?");
$req->execute(array(
    $_POST["idCate"]
));


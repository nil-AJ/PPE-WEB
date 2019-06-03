<?php

$bdd =$GLOBALS["bdd"];


$req = $bdd->createBDD()->prepare("DELETE FROM news WHERE idNews = ?");
$req->execute(array(
    $_POST["idNew"]
));


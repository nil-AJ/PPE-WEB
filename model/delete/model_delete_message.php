<?php

$bdd =$GLOBALS["bdd"];


$req = $bdd->createBDD()->prepare("DELETE FROM message WHERE idMessage = ?");
$req->execute(array(
    $_POST["idMess"]
));


<?php

$bdd = $GLOBALS["bdd"];

$req =  $bdd->createBDD()->prepare("UPDATE membre SET name = ?, prename = ?,email = ?,phoneNumber = ?, status = ?, WHERE idMembre = ?");
$req->execute(array(
    $_POST["Mname"],
    $_POST["Mprename"],
    $_POST["Memail"],
    $_POST["MphoneNumber"],
    $_POST["Mstatus"],
    $_SESSION["user_info"]["idMembre"]
));


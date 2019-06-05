<?php

$bdd = $GLOBALS["bdd"];

$req =  $bdd->createBDD()->prepare("UPDATE membre SET name=?, prename=?, email=?, phoneNumber=?, status=? WHERE idMembre=?");
$req->execute(array(
    $_POST["Mname"],
    $_POST["Mprename"],
    $_POST["Memail"],
    $_POST["MphoneNumber"],
    $_POST["Mstatus"],
    $_SESSION["user_info"]["idMembre"]
));


$_SESSION["user_info"]["name"] =  $_POST["Mname"];
$_SESSION["user_info"]["prename"] =   $_POST["Mprename"];
$_SESSION["user_info"]["email"]=  $_POST["Memail"];
$_SESSION["user_info"]["phoneNumber"]=  $_POST["MphoneNumber"];
$_SESSION["user_info"]["status"]=  $_POST["Mstatus"];



<?php

 function membre()
 {
   $GLOBALS['u']->add("view/view_association/membre.php",1);
 }

 function logo()
 {
   $GLOBALS['u']->add("view/view_association/logo.php",1);
 }

 function partenariat()
 {
   $GLOBALS['u']->add("view/view_association/partenariat.php",1);
 }
function message()
{
    if (isset($_POST['name']) && isset($_POST['prename']) && isset($_POST['email']) && isset($_POST['phoneNumber']) && isset($_POST['type']) && isset($_POST['content'])) {
        include 'model/model_message.php';
    }

    $GLOBALS['u']->add("view/view_association/message.php",1);

}
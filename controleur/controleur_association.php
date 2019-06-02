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
        echo '<h4 style="position: absolute; margin-top: 45%; margin-left: 40%; color: #2bff00;">envoyer</h4>';
    }
    else{
        echo '<h4 style="position: absolute; margin-top: 45%; margin-left: 40%; color: red;">err le message a pas était envoyer</h4>';
    }
    $GLOBALS['u']->add("view/view_association/message.php",1);

}
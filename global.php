<?php
     include 'model/class/Used.class.php';
     include 'model/class/ConnexionBDD.class.php';

     $use = new Used(['view/navbar-foot/navbar.php','view/navbar-foot/foot.php']);
     $GLOBALS['u'] = $use;

$bdd = new ConnexionBDD('PPE_WAYZONE');
$GLOBALS['bdd'] = $bdd;
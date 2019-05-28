<?php
     include 'model/class/Used.class.php';
     include 'model/class/ConnexionBDD.class.php';
     include 'model/class/API_Rest.class.php';

     const BDD_NAME= "PPE_WAYZONE";

     //Used
     $use = new Used(['view/navbar-foot/navbar.php','view/navbar-foot/foot.php']);
     $GLOBALS['u'] = $use;

     //BDD
     $bdd = new ConnexionBDD(BDD_NAME);
     $GLOBALS['bdd'] = $bdd;

     //API
     $api = new ApiRest(BDD_NAME);
     $GLOBALS['api'] = $api;
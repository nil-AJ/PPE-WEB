<?php

//Generation de la liste des categories et evenement par php
 function dataList($arg)
 {
     $bdd = $GLOBALS['bdd'];

    if($arg)
    {
        $req  = $bdd->createBDD()->query('SELECT evenement FROM media');
        ob_start();
        foreach(array_unique($req) as $opt)
        {
            echo '<option value="'.$opt['evenement'].'">';
        }
        $req->closeCursor();
    
        ob_end_flush();
    }else{

        $req  = $bdd->createBDD()->query('SELECT categoryName FROM category');
        ob_start();
        foreach($req as $opt)
        {
            echo '<option value="'.$opt['categoryName'].'">';
        }
        $req->closeCursor();
    
        ob_end_flush();
    }
 }
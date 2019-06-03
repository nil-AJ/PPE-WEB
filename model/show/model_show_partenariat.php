
<?php

function show_news()
{

    $bdd = $GLOBALS['bdd'];
    $req = $bdd->createBDD()->query('SELECT * FROM partenaire');
    ob_start();
    foreach ($req->fetchAll() as $partenaire) {
        ?>

        
        <?php
    }
    $repo = ob_end_flush();

} ?>
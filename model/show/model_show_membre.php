
<?php

function show_news()
{

    $bdd = $GLOBALS['bdd'];
    $req = $bdd->createBDD()->query('SELECT * FROM membre');
    ob_start();
    foreach ($req->fetchAll() as $membre) {
        ?>



        <?php
    }
    $repo = ob_end_flush();

} ?>
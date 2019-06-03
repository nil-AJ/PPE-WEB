
<?php

function show_part()
{

    $bdd = $GLOBALS['bdd'];
    $req = $bdd->createBDD()->query('SELECT * FROM partenaire');
    ob_start();
    foreach ($req->fetchAll() as $partenaire) {
        ?>

            <div  style="margin-top: 50px; margin-bottom: 70px" class="card col-4">
                <img src="public/image/wayzone-logo-blanc.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">il nous font confiance : </h4>
                    <h3> <?= $partenaire['name'] ?></h3>
                    <p class="card-text"><?= $partenaire['description'] ?></p>
                    <p class="card-text">de puis <?= $partenaire['dateStart'] ?></p>
                </div>
            </div>



        <?php
    }
    $repo = ob_end_flush();

} ?>
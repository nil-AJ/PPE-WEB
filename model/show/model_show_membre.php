
<?php

function show_membre()
{

    $bdd = $GLOBALS['bdd'];
    $req = $bdd->createBDD()->query('SELECT * FROM membre');
    ob_start();
    foreach ($req->fetchAll() as $membre) {
        ?>
        <div style="margin-top: 50px; margin-bottom: 70px" class="col">
        <div class="card" style="width: 18rem;">
            <img src="public/image/membre/vayango.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"> <?= $membre['name'] . ' ' . $membre['prename'] ?></h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">email : <?= $membre['email'] ?></li>
                <li class="list-group-item">poste : <?= $membre['status'] ?></li>
            </ul>

        </div>
        </div>

        <?php
    }
    $repo = ob_end_flush();

} ?>
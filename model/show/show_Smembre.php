<?php

function show_smembre()
{

    $bdd = $GLOBALS['bdd'];
    $req = $bdd->createBDD()->query('SELECT * FROM membre');
    ob_start();
    $req->fetchAll()
    /// suprime l'usser connecter mais reste sur la page
        ?>



    <div class="container">
        <div  style="padding-bottom: 100px; padding-top: 100px" class="row">
            <div class="col-md-3 ">
                <div class="list-group ">
                    <a href="?section=profil" class="list-group-item list-group-item-action ">Profil</a>
                    <a href="?section=profil_modif" class="list-group-item list-group-item-action">Modifier</a>
                    <a href="?section=administration_sup_membre" class="list-group-item list-group-item-action active">Suprimer</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Profil : <?= $_SESSION['user_info']['prename'] . ' ' . $_SESSION['user_info']['name'] ?></h4>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                    <form method="post" action="">
                                        <input type="hidden" value="<?= $_SESSION["user_info"]["idMembre"]?>" name="idMeb">
                                        <button type="submit" class="btn btn-danger"><em class="fa fa-trash"><br>
                                                Suprimer votre profil </em></button>
                                    </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

        <?php

    $repo = ob_end_flush();

} ?>
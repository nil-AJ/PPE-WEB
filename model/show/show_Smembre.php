<?php

function show_smembre()
{

    $bdd = $GLOBALS['bdd'];
    $req = $bdd->createBDD()->query('SELECT * FROM membre');
    ob_start();
    $req->fetchAll()
    /// suprime l'usser connecter mais reste sur la page
        ?>
                <form method="post" action="">
                    <input type="hidden" value="<?= $_SESSION["user_info"]["idMembre"]?>" name="idMeb">
                    <button type="submit" class="btn btn-danger"><em class="fa fa-trash"><br>
                            Suprimer votre profil </em></button>
                </form>
        <?php

    $repo = ob_end_flush();

} ?>
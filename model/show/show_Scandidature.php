<?php

function show_candidature()
{

    $bdd = $GLOBALS['bdd'];
    $req = $bdd->createBDD()->query('SELECT * FROM candidature');
    ob_start();
    foreach ($req->fetchAll() as $candidature) {
        ?>
        <tr>
            <td align="center">
                <form method="post" action="">
                    <input type="hidden" value="<?=$candidature["idCandidat"]?>" name="idCand">
                    <button type="submit" class="btn btn-danger"><em class="fa fa-trash"></em></button>
                </form>
            </td>
            <td><?= $candidature['prename'] ?></td>
            <td><?= $candidature['name'] ?></td>
            <td><?= $candidature['email'] ?></td>
            <td><?= $candidature['phoneNumber'] ?></td>
            <td><?= $candidature['motivation'] ?></td>
            <td><?= $candidature['class'] ?></td>
        </tr>

        <?php
    }
    $repo = ob_end_flush();

} ?>
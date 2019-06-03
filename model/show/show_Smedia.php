<?php

function show_smedia()
{

    $bdd = $GLOBALS['bdd'];
    $req = $bdd->createBDD()->query('SELECT * FROM media');
    ob_start();
    foreach ($req->fetchAll() as $media) {
        ?>
        <tr>
            <td align="center">
                <form method="post" action="">
                    <input type="hidden" value="<?=$media["idMedia"]?>" name="idMed">
                    <button type="submit" class="btn btn-danger"><em class="fa fa-trash"></em></button>
                </form>
            </td>
            <td><?= $media['title'] ?></td>
            <td><?= $media['evenement'] ?></td>
            <td><?= $media['link'] ?></td>
            <td><?= $media['descriptionPicture'] ?></td>
            <td><?= $media['uploadDate'] ?></td>
        </tr>
        <?php
    }
    $repo = ob_end_flush();

} ?>
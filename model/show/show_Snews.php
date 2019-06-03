<?php

function show_snews()
{

    $bdd = $GLOBALS['bdd'];
    $req = $bdd->createBDD()->query('SELECT * FROM news');
    ob_start();
    foreach ($req->fetchAll() as $news) {
        ?>
        <tr>
            <td align="center">
                <form method="post" action="">
                    <input type="hidden" value="<?=$news["idNews"]?>" name="idNew">
                    <button type="submit" class="btn btn-danger"><em class="fa fa-trash"></em></button>
                </form>
            </td>
            <td><?= $news['title'] ?></td>
            <td><?= $news['content'] ?></td>
            <td><?= $news['category'] ?></td>
            <td><?= $news['dateStart'] ?></td>
        </tr>
        <?php
    }
    $repo = ob_end_flush();

} ?>
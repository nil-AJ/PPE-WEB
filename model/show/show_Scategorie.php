<?php

function show_scate()
{

    $bdd = $GLOBALS['bdd'];
    $req = $bdd->createBDD()->query('SELECT * FROM category');
    ob_start();
    foreach ($req->fetchAll() as $category) {
        ?>
        <tr>
            <td align="center">
                <form method="post" action="">
                    <input type="hidden" value="<?=$category["idCategory"]?>" name="idCate">
                    <button type="submit" class="btn btn-danger"><em class="fa fa-trash"></em></button>
                </form>
            </td>
            <td><?= $category['idCategory'] ?></td>
            <td><?= $category['categoryName'] ?></td>
            <td><?= $category['categoryAdder'] ?></td>
            <td><?= $category['categoryDescription'] ?></td>
        </tr>
        <?php
    }
    $repo = ob_end_flush();

} ?>
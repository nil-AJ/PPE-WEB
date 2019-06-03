<?php

function show_spartenaria()
{

    $bdd = $GLOBALS['bdd'];
    $req = $bdd->createBDD()->query('SELECT * FROM partenaire');
    ob_start();
    foreach ($req->fetchAll() as $partenaria) {
        ?>
        <tr>
            <td align="center">
                <form method="post" action="">
                    <input type="hidden" value="<?=$partenaria["idPartenaire"]?>" name="idPart">
                    <button type="submit" class="btn btn-danger"><em class="fa fa-trash"></em></button>
                </form>
            </td>
            <td><?= $partenaria['name'] ?></td>
            <td><?= $partenaria['description'] ?></td>
            <td><?= $partenaria['dateStart'] ?></td>
            <td><?= $partenaria['dateEnd'] ?></td>
            <td><?= $partenaria['adder'] ?></td>

        </tr>
        <?php
    }
    $repo = ob_end_flush();

} ?>
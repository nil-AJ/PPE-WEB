<?php

function show_contact()
{

    $bdd = $GLOBALS['bdd'];
    $req = $bdd->createBDD()->query('SELECT * FROM message');
    ob_start();
    foreach ($req->fetchAll() as $contact) {
        ?>
        <tr>
            <td align="center">
                <form method="post" action="">
                    <input type="hidden" value="<?=$contact["idMessage"]?>" name="idMess">
                    <button type="submit" class="btn btn-danger"><em class="fa fa-trash"></em></button>
                </form>
            </td>
            <td><?= $contact['prename'] ?></td>
            <td><?= $contact['name'] ?></td>
            <td><?= $contact['email'] ?></td>
            <td><?= $contact['phoneNumber'] ?></td>
            <td><?= $contact['type'] ?></td>
            <td><?= $contact['content'] ?></td>
        </tr>

        <?php
    }
    $repo = ob_end_flush();

} ?>
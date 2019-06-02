<?php

    function show_media()
    {

        $bdd = $GLOBALS['bdd'];
        $req = $bdd->createBDD()->query('SELECT * FROM media');
        ob_start();
        foreach($req->fetchAll() as $media)
        {?>
            <div class="">
                <figure class="imga effect-X">
                        <img style="height: 30%; width: 30%; border: solid black 2px" class="font" src="<?= $media['link']?> "/>
                </figure>
            </div>
        <?php
        }
         $rep = ob_end_flush();

    }?>
   

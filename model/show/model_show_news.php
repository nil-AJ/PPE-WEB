<?php



function show_filt_news()
{


    $bdd = $GLOBALS['bdd'];
    $req = $bdd->createBDD()->query('SELECT * FROM category');
    ob_start();
    foreach ($req->fetchAll() as $cate) {
        ?>

        <div class="col-auto my-1">
            <div class="custom-control custom-checkbox mr-sm-2">
                <input type="checkbox" class="custom-control-input" id="<?= $cate ['categoryName'] ?>">
                <label class="custom-control-label"
                       for="<?= $cate ['categoryName'] ?>"><?= $cate ['categoryName'] ?></label>
            </div>
        </div>

        <?php
    }
    $repo = ob_end_flush();

} ?>


<?php

function show_news()
{

    $bdd = $GLOBALS['bdd'];
    $req = $bdd->createBDD()->query('SELECT * FROM aff_new_cat');
    ob_start();
    foreach ($req->fetchAll() as $news) {
        ?>
        <div class="card mb-3 col-12 shadow">
            <div class="row no-gutters">
                <div class="col-md-3 col-sm-3 col-lg-3">
                    <div class='time'>
                        <div class='date'><strong><?= date('j M ', strtotime($news['dateStart'])) ?></strong></div>
                    </div>
                    <img src="public/image/wayzone-logo-blanc.png"
                         style="max-height: 250px; max-width: 250px" class="card-img">
                </div>
                <div class="col-md-8 col-sm-3 col-lg-8">
                    <div class="card-body">
                        <h5 class="card-title">  <?= $news['title'] ?></h5>
                        <div class="badge-groupe">

                            <span style="background-color: #607d8b"
                                  class="badge badge-secondary"><?= $news['categoryName'] ?></span>
                        </div>
                        <br>
                        <a href="<?= $news['content'] ?>" class="card-text"><?= $news['content'] ?></a>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    $repo = ob_end_flush();

} ?>
<?php


public function rechercher($tab, $mot_cle)
{
    $champs = array();
    foreach ($tab as $value) {
        $champs[] = $value . " like :mot_cle";
    }
    $chaine = implode(" or ", $champs);


    $query = "SELECT * FROM " . $this->table . " WHERE " . $chaine . ";";
    $data = array(":mot_cle" => "%" . $mot_cle . "%");
    if ($this->pdo != null) {
        $recherche = $this->pdo->prepare($query);
        $recherche->execute($data);
        $result = $recherche->fetchAll();
        return $result;
    } else {
        return null;
    }
}

function show_filt_news()
{







    $bdd = $GLOBALS['bdd'];
    $req = $bdd->createBDD()->query('SELECT * FROM aff_new_cat');
    ob_start();
    foreach ($req->fetchAll() as $news) {
        ?>

        <form action="">
            <div class="row">
                <div class=" inputnew col">
                    <label class="inserticon-fontico-new">
                        <i class="fas fa-search"></i>
                    </label>
                    <input type="text" placeholder="Title..." name=""/>
                </div>
                <div class=" inputnew col">
                    <label class="inserticon-fontico-new">
                        <i class="fas fa-calendar-alt"></i>
                    </label>
                    <input type="date" class="date" placeholder="Date max"/>
                </div>
                <div class=" inputnew col">
                    <label class="inserticon-fontico-new">
                        <i class="fas fa-calendar-alt"></i>
                    </label>
                    <input type="date" class="date" placeholder="Date min"/>
                </div>
            </div>
            <div style="padding-top: 30px" class="row">
                <div class="col-auto my-1">
                    <div class="custom-control custom-checkbox mr-sm-2">
                        <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                        <label class="custom-control-label"
                               for="customControlAutosizing"><?= $news['categoryName'] ?></label>
                    </div>
                </div>
            </div>
            <button style="margin-top:50px " class="btn btn-dark" type="submit">Filtré</button>
        </form>

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
                        <a href="<?= $news['content'] ?>" class="card-text">Lien de l'article</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    $repo = ob_end_flush();

} ?>
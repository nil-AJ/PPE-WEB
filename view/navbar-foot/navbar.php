<!DOCTYPE html>
<html lang="fr">
<head>
    <!--  meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--  title -->
    <title>PPE WAYZONE</title>
    <!-- CSS -->
    <link href="public/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="public/image/logo/BDE_CFA_INSTA/favicon/favicon.ico"
          type="public/image/logo/BDE_CFA_INSTA/favicon/favicon.ico">
    <!-- font-Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="public/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</head>
<body>
<nav class="navbar  navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
        <img src="public/image/wayzone-logo-blanc.png" width="50" height="30" class="d-inline-block align-top" alt="">
        Wayzone
    </a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="?section=home">Home </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="?section=news">News </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="?section=media">Média </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="?section=membre">Membre </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="?section=partenariat">Partenariat</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="?section=message">Contact</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="?section=candidature">Nous rejoindre</a>
            </li>
        </ul>
            <?php
            $connect = false;

            if (isset($_SESSION['user_info'])) {

                if ($_SESSION['user_info']['verification']) {
                    $connect = true;
                }
            }
            if (!$connect) {
                echo ' ';

            }
            if ($connect) {
                ?>
<div class="justify-content-end">

<ul class="navbar-nav mr-auto mt-3 mt-lg-0">
             <li class=" nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="ajout" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ajout Formulaire </a>
                 <div class="dropdown-menu" aria-labelledby="ajout">
                    <a class="dropdown-item" href="?section=creation_news">Ajout News</a>
                    <a class="dropdown-item" href="?section=administration_ajoue_partenaria">Ajout Partenariat</a>
                    <a class="dropdown-item" href="?section=inscription">Ajout Membre</a>
                    <a class="dropdown-item" href="?section=upload">Ajout Media</a>
                </div>
             </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="sup" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Formulaire supp </a>                              
                 <div class="dropdown-menu" aria-labelledby="sup">
                    <a class="dropdown-item" href="?section=administration_sup_categorie">Catégorie supp</a>
                    <a class="dropdown-item" href="?section=administration_sup_news">Suppression News</a>
                    <a class="dropdown-item" href="?section=administration_sup_partenaria">Suppression Partenariat</a>
                    <a class="dropdown-item" href="?section=administration_sup_media">Suppression Média</a>
                </div>
             </li>
              <li class="nav-item ">
                <a class="nav-link" href="?section=administration_message">Message</a>
            </li>
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="user" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <?= $_SESSION['user_info']['prename'] . ' ' . $_SESSION['user_info']['name'] ?>
                </a>
                 <div class="dropdown-menu" aria-labelledby="user">
                    <a class="dropdown-item" href="?section=deconnexion">Deconnexion</a>
                    <a class="dropdown-item" href="?section=profil">Profil</a>
                </div>
             </li>  
             </ul>
             <div>

           <?php } ?>

</nav>

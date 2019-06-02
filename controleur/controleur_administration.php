<?php

function upload()
{
    if (isset($_SESSION['user_info'])) //Toutes les fonction réservées au membres devront etre dans ces deux condition
    {

        if ($_SESSION['user_info']['verification']) {
            include 'model/upload/model_datalist_upload.php';

            if (isset($_FILES['userfile']) && isset($_POST['evenement'])) {
                include 'model/upload/model_media_upload.php';

            }

            $GLOBALS['u']->add("view/view_administration/form_ajou/upload.php", 1);
        }
    } else {

        throw new Exception(404); // On redirige l'utilisateur vers une page 404 si il essaye d'accéder a une page auquel il n'as pas accés
    }
}

//co déco du membre
function DEconnexion($mode)
{
    if ($mode)//Connexion
    {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            include 'model/model_connexion.php';
        }
        $GLOBALS['u']->add("view/view_administration/connexion.php", 1);

    } else {//Deconnexion

        if (isset($_SESSION['user_info'])) {

            if ($_SESSION['user_info']['verification']) {
                session_destroy();
                header('Location:.?section=connexion');
            }
        } else {

            throw new Exception(404);
        }

    }

}

//administration déclaration index
function administration_index()
{
    if (isset($_SESSION['user_info'])) {

        if ($_SESSION['user_info']['verification']) {
            $GLOBALS['u']->add("view/view_administration/administration_index.php", 1);
        }
    } else {

        throw new Exception(404); // On redirige l'utilisateur vers une page 404 si il essaye d'accéder a une page auquel il n'as pas accés
    }
}


//administration profil aff
function profil()
{
    if (isset($_SESSION['user_info'])) {

        if ($_SESSION['user_info']['verification']) {
            $GLOBALS['u']->add("view/view_administration/profil.php", 1);
        }
    } else {

        throw new Exception(404); // On redirige l'utilisateur vers une page 404 si il essaye d'accéder a une page auquel il n'as pas accés
    }
}
//administration modif profil
function profil_modif()
{
    if (isset($_SESSION['user_info'])) {

        if ($_SESSION['user_info']['verification']) {
            if(!empty($_POST["Mname"]) && !empty($_POST["Mprename"]) &&  !empty($_POST["Memail"]) && !empty($_POST["MphoneNumber"]))
            {
                include 'model/model_modif_profile.php';
            }
            $GLOBALS['u']->add("view/view_administration/profil_/modif_profil.php", 1);
        }
    } else {

        throw new Exception(404); // On redirige l'utilisateur vers une page 404 si il essaye d'accéder a une page auquel il n'as pas accés
    }
}

//administration déclaration affichage message
function administration_message()
{
    if (isset($_SESSION['user_info'])) {

        if ($_SESSION['user_info']['verification']) {

            if(!empty($_POST["idMess"]))
            {
                include 'model/delete/model_delete_message.php';
            }

            include 'model/show/model_show_contact.php';

            $GLOBALS['u']->add("view/view_administration/aff_message.php", 1);

        }
    } else {

        throw new Exception(404); // On redirige l'utilisateur vers une page 404 si il essaye d'accéder a une page auquel il n'as pas accés
    }
}

/////
/// ////////////////
/// //////////////////////////
/// ////////////////////
/// Page d'ajout


//ajout membre 1
function inscription()
{
    if (isset($_SESSION['user_info'])) //Toutes les fonction réservées au membres devront etre dans ces deux condition
    {
        if (!empty($_POST['name']) && !empty($_POST['prename']) && !empty($_POST['password']) && !empty($_POST['email']) && !empty($_POST['status'])) {

            include 'model/model_inscription.php';

        }

        $GLOBALS['u']->add("view/view_administration/form_ajou/inscription.php", 1);


    } else {

        throw new Exception(404); // On redirige l'utilisateur vers une page 404 si il essaye d'accéder a une page auquel il n'as pas accés
    }
}

//ajout news 2
function creation_news()
{
    if (isset($_SESSION['user_info'])) {
        if ($_SESSION['user_info']['verification']) {

            include 'model/upload/model_datalist_upload.php';

            if (isset($_POST['title_news']) && isset($_POST['content_news']) && isset($_POST['category_news'])) {
                include 'model/model_add_news.php';
            }
            $GLOBALS['u']->add("view/view_administration/form_ajou/creation_news.php", 1);
        }
    } else {

        throw new Exception(404); // On redirige l'utilisateur vers une page 404 si il essaye d'accéder a une page auquel il n'as pas accés
    }
}


// ajout partenaria 4
function administration_ajoue_partenaria()
{
    if (isset($_SESSION['user_info'])) //Toutes les fonction réservées au membres devront etre dans ces deux condition
    {

        $GLOBALS['u']->add("view/view_administration/form_ajou/creation_partenaria.php", 1);
    } else {

        throw new Exception(404); // On redirige l'utilisateur vers une page 404 si il essaye d'accéder a une page auquel il n'as pas accés
    }
}

/////
/// ////////////////
/// //////////////////////////
/// ////////////////////
/// Page de supretion


// supretion membre 1
function administration_sup_membre()
{

    if (!empty($_POST['name']) && !empty($_POST['prename']) && !empty($_POST['password']) && !empty($_POST['email']) && !empty($_POST['status'])) {


        $GLOBALS['u']->add("view/view_administration/form_sup/sup_membre.php", 1);
    } else {

        throw new Exception(404); // On redirige l'utilisateur vers une page 404 si il essaye d'accéder a une page auquel il n'as pas accés
    }
}


//supretion news 2
function administration_sup_news()
{
    if (isset($_SESSION['user_info'])) //Toutes les fonction réservées au membres devront etre dans ces deux condition
    {

        $GLOBALS['u']->add("view/view_administration/form_sup/sup_news.php", 1);
    } else {

        throw new Exception(404); // On redirige l'utilisateur vers une page 404 si il essaye d'accéder a une page auquel il n'as pas accés
    }
}

//supretion média 3
function administration_sup_media()
{
    if (isset($_SESSION['user_info'])) //Toutes les fonction réservées au membres devront etre dans ces deux condition
    {

        $GLOBALS['u']->add("view/view_administration/form_sup/sup_media.php", 1);
    } else {

        throw new Exception(404); // On redirige l'utilisateur vers une page 404 si il essaye d'accéder a une page auquel il n'as pas accés
    }
}

//supretion partenaria 4
function administration_sup_partenaria()
{
    if (isset($_SESSION['user_info'])) //Toutes les fonction réservées au membres devront etre dans ces deux condition
    {

        $GLOBALS['u']->add("view/view_administration/form_sup/sup_partenaria.php", 1);
    } else {

        throw new Exception(404); // On redirige l'utilisateur vers une page 404 si il essaye d'accéder a une page auquel il n'as pas accés
    }
}
//supretion categorie 5
function administration_sup_categorie()
{
    if (isset($_SESSION['user_info'])) //Toutes les fonction réservées au membres devront etre dans ces deux condition
    {

        $GLOBALS['u']->add("view/view_administration/form_sup/sup_categorie.php", 1);
    } else {

        throw new Exception(404); // On redirige l'utilisateur vers une page 404 si il essaye d'accéder a une page auquel il n'as pas accés
    }
}





<?php

function uploadMember()
{
    if(isset($_SESSION['user_info'])) //Toutes les fonction réservées au membres devront etre dans ces deux condition
    {

        if($_SESSION['user_info']['verification'])
        {
            include 'model/upload/model_datalist_upload.php';

            if(isset($_FILES['userfile']) && isset($_POST['evenement']) )
            {
                include 'model/upload/model_media_upload.php' ;
            }

            $GLOBALS['u']->add("view\view_administration\form_ajou\upload.php",1);
        }
        }else{

            throw new Exception(404); // On redirige l'utilisateur vers une page 404 si il essaye d'accéder a une page auquel il n'as pas accés
        }
    }
//déco du membre
    function DEconnexion($mode)
    {
        if($mode)//Connexion
        {
            if(isset($_POST['email']) && isset($_POST['password']))
            {
                include 'model/model_connexion.php';
            }
            $test="test";
            $GLOBALS['u']->add("view/view_administration/connexion.php",1);

        }else{//Deconnexion

            if(isset($_SESSION['user_info']))
            {

                if($_SESSION['user_info']['verification'])
                {
                    session_destroy();
                    header('Location:.?section=connexion');
                }
                }else{

                    throw new Exception(404);
                }

        }
        
    }
    
    //ajoue membre
    function inscription()
    {
        if(isset($_SESSION['user_info'])) //Toutes les fonction réservées au membres devront etre dans ces deux condition
        {
        if(isset($_POST['name']) && isset($_POST['prename']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['status']) && isset($_POST['class']) )
        {
            include 'model/model_inscription.php';
        }

        $GLOBALS['u']->add("view\view_administration\form_ajou\insciption.php",1);
        }else{

            throw new Exception(404); // On redirige l'utilisateur vers une page 404 si il essaye d'accéder a une page auquel il n'as pas accés
        }
    }


//administration déclaration index
function administration_index()
{
    if(isset($_SESSION['user_info'])) 
    {

        if($_SESSION['user_info']['verification'])
        {
              $GLOBALS['u']->add("view/view_administration/administration_index.php",1);
        }
}else{

    throw new Exception(404); // On redirige l'utilisateur vers une page 404 si il essaye d'accéder a une page auquel il n'as pas accés
}
}


//supretion ajoue news
function creation_news()
{
    if(isset($_SESSION['user_info'])) 
    {
        if($_SESSION['user_info']['verification'])
        {
        
            include 'model_datalist_upload.php';

            if(isset($_POST['title_news']) && isset($_POST['content_news']) && isset($_POST['category_news']) )
            {
                include 'model/model_add_news';
            }
             $GLOBALS['u']->add("view/view_administration/form_ajou\creation_news.php",1);
        }
    }else{

        throw new Exception(404); // On redirige l'utilisateur vers une page 404 si il essaye d'accéder a une page auquel il n'as pas accés
    }
}



//supretion supretion membre
function administration_sup_membre()
{
    if(isset($_SESSION['user_info'])) //Toutes les fonction réservées au membres devront etre dans ces deux condition
    {

        $GLOBALS['u']->add("view/view_administration/form_sup/sup_membre.php",1);
    }else{

        throw new Exception(404); // On redirige l'utilisateur vers une page 404 si il essaye d'accéder a une page auquel il n'as pas accés
    }
}


//supretion ajoue categorie
function administration_ajoue_categorie()
{
    if(isset($_SESSION['user_info'])) //Toutes les fonction réservées au membres devront etre dans ces deux condition
    {

        $GLOBALS['u']->add("view/view_administration/form_ajoue/creation_categorie.php",1);
    }else{

        throw new Exception(404); // On redirige l'utilisateur vers une page 404 si il essaye d'accéder a une page auquel il n'as pas accés
    }
}

//supretion ajoue partenaria
function administration_ajoue_partenaria()
{
    if(isset($_SESSION['user_info'])) //Toutes les fonction réservées au membres devront etre dans ces deux condition
    {

        $GLOBALS['u']->add("view/view_administration/form_ajoue/creation_partenaria.php",1);
    }else{

        throw new Exception(404); // On redirige l'utilisateur vers une page 404 si il essaye d'accéder a une page auquel il n'as pas accés
    }
}

//supretion news
function administration_sup_news()
{
    if(isset($_SESSION['user_info'])) //Toutes les fonction réservées au membres devront etre dans ces deux condition
    {

        $GLOBALS['u']->add("view/view_administration/form_sup//sup_news.php",1);
    }else{

        throw new Exception(404); // On redirige l'utilisateur vers une page 404 si il essaye d'accéder a une page auquel il n'as pas accés
    }
}
//supretion média
function administration_sup_media()
{
    if(isset($_SESSION['user_info'])) //Toutes les fonction réservées au membres devront etre dans ces deux condition
    {

        $GLOBALS['u']->add("view/view_administration/form_sup/sup_media.php",1);
    }else{

        throw new Exception(404); // On redirige l'utilisateur vers une page 404 si il essaye d'accéder a une page auquel il n'as pas accés
    }
}
//supretion partenaria
function administration_sup_partenaria()
{
    if(isset($_SESSION['user_info'])) //Toutes les fonction réservées au membres devront etre dans ces deux condition
    {

        $GLOBALS['u']->add("view/view_administration/form_sup/sup_partenaria.php",1);
    }else{

        throw new Exception(404); // On redirige l'utilisateur vers une page 404 si il essaye d'accéder a une page auquel il n'as pas accés
    }
}

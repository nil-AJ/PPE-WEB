<?php

//
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

            $GLOBALS['u']->add("view/view_administration/upload.php",1);
        }
        }else{

            throw new Exception(404); // On redirige l'utilisateur vers une page 404 si il essaye d'accéder a une page auquel il n'as pas accés
        }
    }


//
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
//
    function inscription()
    {
        if(isset($_SESSION['user_info'])) //Toutes les fonction réservées au membres devront etre dans ces deux condition
        {
        if(isset($_POST['name']) && isset($_POST['prename']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['status']) && isset($_POST['class']) )
        {
            include 'model/model_inscription.php';
        }

        $GLOBALS['u']->add("view/view_administration/inscription.php",1);
        }else{

            throw new Exception(404); // On redirige l'utilisateur vers une page 404 si il essaye d'accéder a une page auquel il n'as pas accés
        }
    }
//
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


//
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
             $GLOBALS['u']->add("view/view_administration/creation_news.php",1);
        }
    }else{

        throw new Exception(404); // On redirige l'utilisateur vers une page 404 si il essaye d'accéder a une page auquel il n'as pas accés
    }
}



//
function administration_sup_membre()
{
    if(isset($_SESSION['user_info'])) //Toutes les fonction réservées au membres devront etre dans ces deux condition
    {

        $GLOBALS['u']->add("view/view_administration/sup_membre.php",1);
    }else{

        throw new Exception(404); // On redirige l'utilisateur vers une page 404 si il essaye d'accéder a une page auquel il n'as pas accés
    }
}
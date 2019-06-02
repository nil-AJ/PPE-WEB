<?php
//Routeur 
session_start();
include('controleur/controleur_principal.php');
include('controleur/controleur_association.php');
include('controleur/controleur_administration.php');
include('controleur/controleur_api.php');
include('global.php');

    try
    {

        if(isset($_GET['section']))
        {
            switch ($_GET['section'])
            {

                ////view principal
                case 'home':
                    home();
                    break;

                case 'media':
                    media();
                    break;

                case 'news':
                    news();
                    break;

                ////view association

                case 'membre':
                    membre();
                    break;

                case 'partenariat':
                    partenariat();
                    break;
                case 'message':
                    message();
                    break;


                ////view administration
                case 'connexion':
                    DEconnexion(true);
                    break;

                case 'deconnexion':
                    DEconnexion(false);
                    break;

                case 'administration_index':
                    administration_index();
                    break;
                case 'administration_message':
                    administration_message();
                    break;
                ////view administration sup


                ////view administration ajout

                case 'inscription':
                    inscription();
                    break;

                case 'profil':
                    profil();
                    break;

                case 'upload':
                    upload();
                    break;

                case 'creation_news':
                    creation_news();
                    break;

                default:
                    throw new Exception(404);
                    break;
            }
                /// api application mobil
            ///
        }elseif( isset($_GET["call_api"]))
        {
            if($_GET["call_api"] == "true")
            {
                api($_GET);
            }else{
                home();
            }
        }
        else
            {
                home();
            }

        ////view error

    }catch(Exception $e)
    {
        switch ($e->getMessage()) {

            case 404:
                pageUnknown();//Page inconnue
                break;

            case 203:
                //Element de formulaire manquant
                break;
            
            default:
                echo 'Erreur test: '.$e->getMessage(); //Erreur générique
                break;
        }

    }

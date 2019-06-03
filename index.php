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
                ////
                ////view principal
                ///
                case 'home':
                    home();
                    break;

                case 'media':
                    media();
                    break;

                case 'news':
                    news();
                    break;
                ////
                ////view association
                ////
                case 'membre':
                    membre();
                    break;

                case 'partenariat':
                    partenariat();
                    break;
                case 'message':
                    message();
                    break;
                case 'candidature':
                    candidature();
                    break;

                ////
                ////view administration
                ///
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
                ////
                ////view administration sup
                ////
                case 'administration_sup_media':
                    administration_sup_media();
                    break;

                case 'administration_sup_membre':
                    administration_sup_membre();
                    break;
                case 'administration_sup_news':
                    administration_sup_news();
                    break;
                case 'administration_sup_categorie':
                    administration_sup_categorie();
                    break;
                case 'administration_sup_partenaria':
                    administration_sup_partenaria();
                    break;
                case 'administration_sup_candidature':
                    administration_sup_candidature();
                    break;

                ////
                ////view administration ajout
                ////
                case 'inscription':
                    inscription();
                    break;

                case 'profil':
                    profil();
                    break;
                case 'profil_modif':
                    profil_modif();
                    break;

                case 'upload':
                    upload();
                    break;

                case 'creation_news':
                    creation_news();
                    break;
                case 'administration_ajoue_partenaria':
                    administration_ajoue_partenaria();
                    break;
                ////
                ////
                ////
                default:
                    throw new Exception(404);
                    break;
            }
            ////
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
        ////
        ////view error
        ////
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

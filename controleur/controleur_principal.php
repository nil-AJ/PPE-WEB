<?php

    function home()
    {
        $GLOBALS['u']->add("view/view_principal/home.php",1);
    }

    function media()
    {
        include 'model/show/model_show_media.php';
        $GLOBALS['u']->add("view/view_principal/media.php",1);
    }

    function news()
    {
        include 'model/show/model_show_news.php';
        $GLOBALS['u']->add("view/view_principal/news.php",1);
    }


    function pageUnknown()
    {
        $GLOBALS['u']->add("view/view_error/page404.php",1);
    }
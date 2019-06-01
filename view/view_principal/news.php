<div class="container-fluid">
    <h3 class="titre_new">Les dernieres news</h3>
    <nav class="nav-filtre">
        <div class="marg-new">
            <div class="container">
                <div class="row in-new">

                    <?=  show_filt_news() ?>

                </div>
            </div>
        </div>
    </nav>
</div>
<br><br><br><br><br>

<div class="container">
    <div class="row">
        
        <?= show_news() ?>


    </div>
</div>

<br><br><br><br><br>
<style>

    .date {
        font-size: 1.1rem;
        font-weight: bolder;
    }


    .marg-new {
        padding-bottom: 3%;
    }

    /**********
    input form
    **********/

    .in-new {
        margin-bottom: 4%;
    }

    .titre_new {
        color: #7F8181;
        margin-top: 11%;
        margin-left: 6%;
        margin-bottom: 1%;
        font-weight: 600;
    }

    .inserticon-fontico-new {
        color: black;
        float: left;
        position: relative;
        z-index: 2;
        left: 0.5em;
        top: 2.2em;
        width: 0;
    }

    .inputnew input {
        background-color: #F5F5F5;
        padding-left: 38px;
        margin-top: 30px;
        font-weight: 300;
        border: 0;
        border-bottom: 1.5px solid darkgrey;
        width: 100%;
        height: 36px;
        font-size: 20px;
    }

    .inputnew input:focus {
        background-color: #F5F5F5;

        border-bottom: 1.5px solid #4169E1;
        outline: none;
        box-shadow: none;
    }

    @media (max-width: 1052px){
        .titre_new {
            margin-top: 30%;
            margin-bottom: 10%;
        }
    }

    /*****
     Code for nav filtre
      ******/
    .nav-filtre {
        margin-left: 8%;
        margin-right: 8%;
        background-color: #F5F5F5;
        box-shadow: 0px 2px 10px 2px rgba(119, 119, 119, 0.75);
        -moz-box-shadow: 0px 2px 10px 2px rgba(119, 119, 119, 0.75);
        -webkit-box-shadow: 0px 2px 10px 2px rgba(119, 119, 119, 0.75);

    }

</style>
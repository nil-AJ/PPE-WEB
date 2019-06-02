<footer class="footer-bs mobil-none">
    <div class=" row justify-content-center">

        <div class="footer-nav footer-left">
            <h5>Contact —</h5>
            <div class="col-12">
                <p>01 00 00 00 00 <br>
                    WayZone@CFA-INSTA.FR<br>
                    12 RUE CLERY 75002</p>
            </div>
        </div>
        <div class=" footer-nav">
            <h5>Menu —</h5>
            <div class="col-12">
                <ul class="pages">
                    <li><a href="?section=home">Home</a></li>
                    <li><a href="?section=membre">Membre</a></li>
                    <li><a href="?section=partenariat">Partenaria</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-nav">
            <div class="col-12">
                <ul class="pages-2 pages">
                    <li><a href="?section=news ">News</a></li>
                    <li><a href="?section=media">Media</a></li>
                    <li><a href="?section=contact">Contact</a></li>
                    <?php
                    $connect = false;
                    if (isset($_SESSION['user_info'])) {
                        $connect = true;

                    }
                    if (!$connect) {
                        echo ' <li>
                    <a  href="?section=connexion">connexion</a>
                </li>';

                    }
                    if ($connect) {
                        echo ' <li>
                    <a  href="?section=administration_index">espace membre</a>
                </li>   ';
                    } ?>
                </ul>
            </div>
        </div>
</footer>

<footer class="container-fluid footer-nav-end">
    <div class="row foot-end justify-content-center">
        <p> ©2018 WayZone . All Rights Reserved </p>
    </div>
</footer>

<style>
    /*****************
  *****************
  CSS footer.php
  ****************
  ****************/
    .foot-end{
        padding-top: 12px ;
    }
    .footer-nav-end{
        background-color: #23272a;
        color: white;
    }
    .footer-bs img {
        margin-left: 25px;
        height: 120px;
        width: 175px;
    }

    .footer-bs {
        color: white;
        background-color: #3c3d41;
        padding: 60px 40px;
    }

    .footer-bs .footer-brand p {
        padding-top: 20px;
        color: white;
    }

    .footer-bs .footer-nav ul.pages {
        list-style: none;
        padding: 0px;
        top: 2px;
    }

    .footer-bs .footer-nav ul.pages a {
        color: rgba(255, 255, 255, 1.00);
        font-weight: bold;
        text-transform: uppercase;
    }

    .pages-2 {
        margin-top: 31%;
    }

    .footer-bs .footer-nav ul.pages a:hover {
        color: rgba(255, 255, 255, 0.80);
        text-decoration: none;
    }

    .footer-bs .footer-nav ul.list a {
        color: white;
    }

    .footer-bs .footer-nav ul.list a:hover {
        color: rgba(255, 255, 255, 0.60);
        text-decoration: none;
    }

.footer-left{
    margin-right: 8%;
}
    @media (max-width: 1052px) {
    .mobil-none{
        display: none;
    }
    }

    /*****************
    END footer.php
    ****************/
</style>
<!-- JavaScript -->
<script src="public/Javascript/display-none.js"></script>
<!-- font-Awesome -->
<!-- jQuery Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="public/lib/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- end -->

</body>
</html>








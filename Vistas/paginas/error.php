<?php 
    if(!isset($_SESSION['validarIngreso'])){
        echo
        '
            <script>
                window.location = "index.php?pagina=login";
            </script>
        ';
        return;
    }else{
        if($_SESSION['validarIngreso'] != "ok"){
            echo
            '
                <script>
                    window.location = "index.php?pagina=login";
                </script>
            ';
            return;
        }
    }

    $usuarios = ControladorFormularios::ctrSeleccionarRegistros(null, null);
?>
<div class="scroll-up">
    <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<section class="breadcumd__banner">
    <div class="container">
        <div class="breadcumd__wrapper center">
            <h1 class="left__content">
                error 404
            </h1>
            <ul class="right__content">
                <li>
                <a href="index.php?pagina=home">
                    Home
                </a>
                </li>
                <li>
                <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li>
                404
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="error__section pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="error__thumb">
                <img src="HTML/assets/img/404/404.png" alt="error__image">
                </div>
                <div class="error__content">
                <h3>
                    Oops! Page Not Found!
                </h3>
                <p>
                    We are really, but the page you requested is missing:( Perhaps searching again can help.
                </p>
                <a href="index.php?pagina=home" class="cmn--btn mt-3">
                    back to home
                </a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="footer__section">
    <div class="container">
        <div class="border__area">
            <div class="container">
                <div class="footer__logo center">
                <a href="index.php?pagina=home">
                    <img src="HTML/assets/img/logo/logo.png" alt="footer__logo">
                </a>
                </div>
                <div class="footer__bottom center">
                <p>© 2023 All Rights Reserved. Designed by <a href="#0" class="text-base-2">NextGenerationDev</a></p>
                <ul class="footer__icon">
                    <li>
                        <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa-brands fa-twitter"></i></a>
                    </li>
                    <li class="active">
                        <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa-brands fa-whatsapp"></i></a>
                    </li>
                    <li class="mr-none">
                        <a href="#0"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                </ul>
                <ul class="footer__menu">
                    <li><a href="index.php?pagina=home">home</a></li>
                    <li><a href="index.php?pagina=about">about</a></li>
                    <li><a href="index.php?pagina=service">service</a></li>
                    <li><a href="index.php?pagina=story">Story</a></li>
                    <li><a href="index.php?pagina=gallery">gallery</a></li>
                    <li><a href="index.php?pagina=blog">blog</a></li>
                    <li class="mr-none"><a href="index.php?pagina=contact">contact</a></li>
                </ul>
                </div>
            </div>
        </div>
    </div>
</div>
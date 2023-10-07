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
            our Service
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
                Service
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="service__section pt-120 pb-120">
    <div class="left__shape">
        <img src="HTML/assets/img/testi/shape-left.png" alt="left__shape">
    </div>
    <div class="container">
        <div class="section__header section__center wow fadeInDown" data-wow-duration="4s">
            <h2 class="section__title">
            service
            </h2>
            <img src="HTML/assets/img/tittle/flower.png" alt="flower__tittle">
        </div>
        <div class="row g-4">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="service__items">
                <div class="service__thumb">
                    <a href="service-single.html">
                        <img src="HTML/assets/img/service/service1.jpg" alt="service__image">
                    </a>
                </div>
                <div class="service__content">
                    <h4>
                        <a href="service-single.html">
                            Photography
                        </a>
                    </h4>
                    <p>
                        It means so much to witness the joy of your wedding day. Congratulations to you both on finding the perfect person.
                    </p>
                    <a href="index.php?pagina=service-single" class="party__btn">
                        read more
                    </a>
                </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="service__items">
                <div class="service__thumb">
                    <a href="service-single.html">
                        <img src="HTML/assets/img/service/service2.jpg" alt="service__image">
                    </a>
                </div>
                <div class="service__content">
                    <h4>
                        <a href="service-single.html">
                            reception
                        </a>
                    </h4>
                    <p>
                        It means so much to witness the joy of your wedding day. Congratulations to you both on finding the perfect person.
                    </p>
                    <a href="index.php?pagina=service-single" class="party__btn">
                        read more
                    </a>
                </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="service__items">
                <div class="service__thumb">
                    <a href="service-single.html">
                        <img src="HTML/assets/img/party/wedding3.jpg" alt="service__image">
                    </a>
                </div>
                <div class="service__content">
                    <h4>
                        <a href="service-single.html">
                        wedding cake
                        </a>
                    </h4>
                    <p>
                        It means so much to witness the joy of your wedding day. Congratulations to you both on finding the perfect person.
                    </p>
                    <a href="index.php?pagina=service-single" class="party__btn">
                        read more
                    </a>
                </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="service__items">
                <div class="service__thumb">
                    <a href="service-single.html">
                        <img src="HTML/assets/img/service/service3.jpg" alt="service__image">
                    </a>
                </div>
                <div class="service__content">
                    <h4>
                        <a href="service-single.html">
                            wedding post
                        </a>
                    </h4>
                    <p>
                        It means so much to witness the joy of your wedding day. Congratulations to you both on finding the perfect person.
                    </p>
                    <a href="index.php?pagina=service-single" class="party__btn">
                        read more
                    </a>
                </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="service__items style__service">
                <div class="service__thumb">
                    <a href="service-single.html">
                        <img src="HTML/assets/img/service/service4.jpg" alt="service__image">
                    </a>
                </div>
                <div class="service__content">
                    <h4>
                        <a href="service-single.html">
                            wedding ring
                        </a>
                    </h4>
                    <p>
                        It means so much to witness the joy of your wedding day. Congratulations to you both on finding the perfect person.
                    </p>
                    <a href="index.php?pagina=service-single" class="party__btn">
                        read more
                    </a>
                </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="service__items style__two">
                <div class="service__thumb">
                    <a href="service-single.html">
                        <img src="HTML/assets/img/service/service5.jpg" alt="service__image">
                    </a>
                </div>
                <div class="service__content">
                    <h4>
                        <a href="service-single.html">
                        wedding dress
                        </a>
                    </h4>
                    <p>
                        It means so much to witness the joy of your wedding day. Congratulations to you both on finding the perfect person.
                    </p>
                    <a href="index.php?pagina=service-single" class="party__btn">
                        read more
                    </a>
                </div>
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
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
                our blog
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
                blog
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="blog__section pt-120 pb-120">
    <div class="left__shape">
        <img src="HTML/assets/img/testi/shape-left.png" alt="left__shape">
    </div>
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="blog__items">
                <div class="blog__thumb">
                    <img src="HTML/assets/img/blog/blog1.jpg" alt="blog__image">
                </div>
                <div class="blog__content">
                    <h4>
                        <a href="index.php?pagina=blog-single">top 10 gifts</a>
                    </h4>
                    <p>
                        The tradition is based on an Old English rhyme that dates back to 19th-century Lancashire.It describes the items a bride should have on her wedding day.
                    </p>
                    <div class="blog-button mt-2">
                        <a href="index.php?pagina=blog-single" class="blog-btn">read more</a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="blog__items">
                <div class="blog__thumb">
                    <img src="HTML/assets/img/blog/blog2.jpg" alt="blog__image">
                </div>
                <div class="blog__content">
                    <h4>
                        <a href="index.php?pagina=blog-single">Best Photography Idea</a>
                    </h4>
                    <p>
                        The tradition is based on an Old English rhyme that dates back to 19th-century Lancashire.It describes the items a bride should have on her wedding day.
                    </p>
                    <div class="blog-button mt-2">
                        <a href="index.php?pagina=blog-single" class="blog-btn">read more</a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="blog__items">
                <div class="blog__thumb">
                    <img src="HTML/assets/img/blog/blog3.jpg" alt="blog__image">
                </div>
                <div class="blog__content">
                    <h4>
                        <a href="index.php?pagina=blog-single">Wedding Flower Collect</a>
                    </h4>
                    <p>
                        The tradition is based on an Old English rhyme that dates back to 19th-century Lancashire.It describes the items a bride should have on her wedding day.
                    </p>
                    <div class="blog-button mt-2">
                        <a href="index.php?pagina=blog-single" class="blog-btn">read more</a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="blog__items">
                <div class="blog__thumb">
                    <img src="HTML/assets/img/blog/blog1.jpg" alt="blog__image">
                </div>
                <div class="blog__content">
                    <h4>
                        <a href="index.php?pagina=blog-single">top 10 gifts</a>
                    </h4>
                    <p>
                        The tradition is based on an Old English rhyme that dates back to 19th-century Lancashire.It describes the items a bride should have on her wedding day.
                    </p>
                    <div class="blog-button mt-2">
                        <a href="index.php?pagina=blog-single" class="blog-btn">read more</a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="blog__items">
                <div class="blog__thumb">
                    <img src="HTML/assets/img/blog/blog2.jpg" alt="blog__image">
                </div>
                <div class="blog__content">
                    <h4>
                        <a href="index.php?pagina=blog-single">Best Photography Idea</a>
                    </h4>
                    <p>
                        The tradition is based on an Old English rhyme that dates back to 19th-century Lancashire.It describes the items a bride should have on her wedding day.
                    </p>
                    <div class="blog-button mt-2">
                        <a href="index.php?pagina=blog-single" class="blog-btn">read more</a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="blog__items">
                <div class="blog__thumb">
                    <img src="HTML/assets/img/blog/blog3.jpg" alt="blog__image">
                </div>
                <div class="blog__content">
                    <h4>
                        <a href="index.php?pagina=blog-single">Wedding Flower Collect</a>
                    </h4>
                    <p>
                        The tradition is based on an Old English rhyme that dates back to 19th-century Lancashire.It describes the items a bride should have on her wedding day.
                    </p>
                    <div class="blog-button mt-2">
                        <a href="index.php?pagina=blog-single" class="blog-btn">read more</a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="blog__items">
                <div class="blog__thumb">
                    <img src="HTML/assets/img/blog/blog1.jpg" alt="blog__image">
                </div>
                <div class="blog__content">
                    <h4>
                        <a href="index.php?pagina=blog-single">top 10 gifts</a>
                    </h4>
                    <p>
                        The tradition is based on an Old English rhyme that dates back to 19th-century Lancashire.It describes the items a bride should have on her wedding day.
                    </p>
                    <div class="blog-button mt-2">
                        <a href="index.php?pagina=blog-single" class="blog-btn">read more</a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="blog__items">
                <div class="blog__thumb">
                    <img src="HTML/assets/img/blog/blog2.jpg" alt="blog__image">
                </div>
                <div class="blog__content">
                    <h4>
                        <a href="index.php?pagina=blog-single">Best Photography Idea</a>
                    </h4>
                    <p>
                        The tradition is based on an Old English rhyme that dates back to 19th-century Lancashire.It describes the items a bride should have on her wedding day.
                    </p>
                    <div class="blog-button mt-2">
                        <a href="index.php?pagina=blog-single" class="blog-btn">read more</a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="blog__items">
                <div class="blog__thumb">
                    <img src="HTML/assets/img/blog/blog3.jpg" alt="blog__image">
                </div>
                <div class="blog__content">
                    <h4>
                        <a href="index.php?pagina=blog-single">Wedding Flower Collect</a>
                    </h4>
                    <p>
                        The tradition is based on an Old English rhyme that dates back to 19th-century Lancashire.It describes the items a bride should have on her wedding day.
                    </p>
                    <div class="blog-button mt-2">
                        <a href="index.php?pagina=blog-single" class="blog-btn">read more</a>
                    </div>
                </div>
                </div>
            </div>
            <ul class="default-pagination">
                <li class="active-one">
                    <a href="#"><i class="fa-solid fa-angle-left"></i></a>
                </li>
                <li class="active">
                    <a href="#">1</a>
                </li>
                <li>
                    <a href="#">2</a>
                </li>
                <li class="active-one">
                    <a href="#">3</a>
                </li>
                <li>
                    <a href="#">4</a>
                </li>
                <li>
                    <a href="#">5</a>
                </li>
                <li class="active-two">
                    <a href="#"><i class="fa-solid fa-angle-right"></i></a>
                </li>
            </ul>
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
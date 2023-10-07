<?php 
    session_start();
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="NextGenerationDev">
    <title>Wedding, Wedding Planer & Event HTML Template</title>
    <script src="https://kit.fontawesome.com/15274bd2db.js" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!--Favicon img-->
    <link rel="shortcut icon" href="HTML/assets/img/favicon/favicon.png">
    <!--Bootstarp min css-->
    <link rel="stylesheet" href="HTML/assets/css/bootstrap.min.css">
    <!--Bootstarp map css-->
    <link rel="stylesheet" href="HTML/assets/css/bootstrap.css.map">
    <!--Owl Carousel css-->
    <link rel="stylesheet" href="HTML/assets/css/owl.min.css">
    <!--Owl Carousel Theme css-->
    <link rel="stylesheet" href="HTML/assets/css/owl.theme.default.min.css">
    <!--All min css-->
    <link rel="stylesheet" href="HTML/assets/css/all.min.css">
    <!--Animate css-->
    <link rel="stylesheet" href="HTML/assets/css/animate.css">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="HTML/assets/css/magnific-popup.css">
    <!--Swiper min css-->
    <link rel="stylesheet" href="HTML/assets/css/swiper-bundle.min.css">
    <!--main css-->
    <link rel="stylesheet" href="HTML/assets/css/main.css">
</head>
<body>
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo-menu">
                    <a href="index.php?pagina=home" class="logo">
                        <img src="HTML/assets/img/logo/logo1.png" alt="img">
                    </a>
                </div>
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul class="main-menu">
                    <?php if(isset($_GET['pagina'])): ?>
                        <?php if($_SESSION['validarIngreso'] != "ok"): ?>
                            <?php if($_GET['pagina'] == "home"): ?>
                                <li class="active">
                                    <a href="index.php?pagina=home">Home</a>
                                </li>
                            <?php else: ?>
                                <li>
                                    <a href="index.php?pagina=home">Home</a>
                                </li>
                            <?php endif ?>

                            <?php if($_GET['pagina'] == "login"): ?>
                                <li class="active">
                                    <a href="index.php?pagina=login">Login</a>
                                </li>
                            <?php else: ?>
                                <li>
                                    <a href="index.php?pagina=login">Login</a>
                                </li>
                            <?php endif ?>

                            <?php if($_GET['pagina'] == "register"): ?>
                                <li class="active">
                                    <a href="index.php?pagina=register">Sign up</a>
                                </li>
                            <?php else: ?>
                                <li>
                                    <a href="index.php?pagina=register">Sign up</a>
                                </li>
                            <?php endif ?>
                        <?php else: ?>
                            <?php if($_GET['pagina'] == "home"): ?>
                                <li class="active">
                                    <a href="index.php?pagina=home">Home</a>
                                </li>
                            <?php else: ?>
                                <li>
                                    <a href="index.php?pagina=home">Home</a>
                                </li>
                            <?php endif ?>

                            <?php if($_GET['pagina'] == "about"): ?>
                                <li class="active">
                                    <a href="index.php?pagina=about">About</a>
                                </li>
                            <?php else: ?>
                                <li>
                                    <a href="index.php?pagina=about">About</a>
                                </li>
                            <?php endif ?>

                            <li>
                                <a href="#0">Service <i class="fas fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <?php if($_GET['pagina'] == "service"): ?>
                                        <li class="subtwohober active">
                                            <a href="index.php?pagina=service">
                                                <span>Service</span>
                                            </a>
                                        </li>
                                    <?php else: ?>
                                        <li class="subtwohober">
                                            <a href="index.php?pagina=service">
                                                <span>Service</span>
                                            </a>
                                        </li>
                                    <?php endif ?>

                                    <?php if($_GET['pagina'] == "service-single"): ?>
                                        <li class="subtwohober">
                                            <a href="index.php?pagina=service-single">
                                                <span>Service Single</span>
                                            </a>
                                        </li>
                                    <?php else: ?>
                                        <li class="subtwohober">
                                            <a href="index.php?pagina=service-single">
                                                <span>Service Single</span>
                                            </a>
                                        </li>
                                    <?php endif ?>
                                </ul>
                            </li>

                            <?php if($_GET['pagina'] == "story"): ?>
                                <li class="active">
                                    <a href="index.php?pagina=story">Our story</a>
                                </li>
                            <?php else: ?>
                                <li>
                                    <a href="index.php?pagina=story">Our story</a>
                                </li>
                            <?php endif ?>

                            <li>
                                <a href="#0">Pages <i class="fas fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <?php if($_GET['pagina'] == "event"): ?>
                                        <li class="subtwohober active">
                                            <a href="index.php?pagina=event">
                                                <span>Our event</span>
                                            </a>
                                        </li>
                                    <?php else: ?>
                                        <li class="subtwohober">
                                            <a href="index.php?pagina=event">
                                                <span>Our event</span>
                                            </a>
                                        </li>
                                    <?php endif ?>

                                    <?php if($_GET['pagina'] == "gallery"): ?>
                                        <li class="subtwohober active">
                                            <a href="index.php?pagina=gallery">
                                                <span>Gallery</span>
                                            </a>
                                        </li>
                                    <?php else: ?>
                                        <li class="subtwohober">
                                            <a href="index.php?pagina=gallery">
                                                <span>Gallery</span>
                                            </a>
                                        </li>
                                    <?php endif ?>

                                    <?php if($_GET['pagina'] == "error"): ?>
                                        <li class="subtwohober active">
                                            <a href="index.php?pagina=error">
                                                <span>Error 404</span>
                                            </a>
                                        </li>
                                    <?php else: ?>
                                        <li class="subtwohober">
                                            <a href="index.php?pagina=error">
                                                <span>Error 404</span>
                                            </a>
                                        </li>
                                    <?php endif ?>
                                </ul>
                            </li>

                            <li>
                                <a href="#0">Blog <i class="fas fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <?php if($_GET['pagina'] == "blog"): ?>
                                        <li class="subtwohober active">
                                            <a href="index.php?pagina=blog">
                                                <span>Blog</span>
                                            </a>
                                        </li>
                                    <?php else: ?>
                                        <li class="subtwohober">
                                            <a href="index.php?pagina=blog">
                                                <span>Blog</span>
                                            </a>
                                        </li>
                                    <?php endif ?>

                                    <?php if($_GET['pagina'] == "blog-single"): ?>
                                        <li class="subtwohober active">
                                            <a href="index.php?pagina=blog-single">
                                                <span>Blog Single</span>
                                            </a>
                                        </li>
                                    <?php else: ?>
                                        <li class="subtwohober">
                                            <a href="index.php?pagina=blog-single">
                                                <span>Blog Single</span>
                                            </a>
                                        </li>
                                    <?php endif ?>
                                </ul>
                            </li>

                            <?php if($_GET['pagina'] == "contact"): ?>
                                <li>
                                    <a href="index.php?pagina=contact">Contact</a>
                                </li>
                            <?php else: ?>
                                <li>
                                    <a href="index.php?pagina=contact">Contact</a>
                                </li>
                            <?php endif ?>

                            <?php if($_GET['pagina'] == "table"): ?>
                                <li>
                                    <a href="index.php?pagina=table">Registros</a>
                                </li>
                            <?php else: ?>
                                <li>
                                    <a href="index.php?pagina=table">Registros</a>
                                </li>
                            <?php endif ?>

                            <?php if($_GET['pagina'] == "salir"): ?>
                                <li>
                                    <a href="index.php?pagina=salir">Log out</a>
                                </li>
                            <?php else: ?>
                                <li>
                                    <a href="index.php?pagina=salir">Log out</a>
                                </li>
                            <?php endif ?>
                            
                        <?php endif ?>
                    <?php else: ?>
                        <?php if($_SESSION['validarIngreso'] != "ok"): ?>
                            <li class="active">
                                <a href="index.php?pagina=home">Home</a>
                            </li>
                            <li>
                                <a href="index.php?pagina=login">Login</a>
                            </li>
                            <li>
                                <a href="index.php?pagina=register">Sign up</a>
                            </li>
                        <?php else: ?>
                            <li class="active">
                                <a href="index.php?pagina=home">Home</a>
                            </li>
                            <li>
                                <a href="index.php?pagina=about">About</a>
                            </li>
                            <li>
                                <a href="#0">Service <i class="fas fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=service">
                                            <span>Service</span>
                                        </a>
                                    </li>
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=service-single">
                                            <span>Service Single</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="index.php?pagina=story">Our story</a>
                            </li>
                            <li>
                                <a href="#0">Pages <i class="fas fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=event">
                                            <span>Our event</span>
                                        </a>
                                    </li>
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=gallery">
                                            <span>Gallery</span>
                                        </a>
                                    </li>
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=error">
                                            <span>Error 404</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#0">Blog <i class="fas fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=blog">
                                            <span>Blog</span>
                                        </a>
                                    </li>
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=blog-single">
                                            <span>Blog Single</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="index.php?pagina=contact">Contact</a>
                            </li>
                            <li>
                                <a href="index.php?pagina=table">Registros</a>
                            </li>
                            <li>
                                <a href="index.php?pagina=salir">Log out</a>
                            </li>
                        <?php endif ?>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </header>

    <?php
        if(isset($_GET['pagina'])){
            if(
                $_GET['pagina'] == "home" || $_GET['pagina'] == "about" || 
                $_GET['pagina'] == "blog" || $_GET['pagina'] == "blog-single" || 
                $_GET['pagina'] == "contact" || $_GET['pagina'] == "error" || 
                $_GET['pagina'] == "event" || $_GET['pagina'] == "gallery" || 
                $_GET['pagina'] == "service-single" || $_GET['pagina'] == "service" || 
                $_GET['pagina'] == "story" || $_GET['pagina'] == "login" || 
                $_GET['pagina'] == "register" || $_GET['pagina'] == "salir" || 
                $_GET['pagina'] == "table" || $_GET['pagina'] == "editar"
            ){
                include "paginas/" . $_GET['pagina'] . ".php";
            } else{
                include "./paginas/error.php";
            }
        }else{
            include "paginas/home.php";
        }
    ?>

    <!--Jquery 3 6 0 Min Js-->
    <script src="HTML/assets/js/jquery-3.6.0.min.js"></script>
    <!--Bootstrap bundle Js-->
    <script src="HTML/assets/js/bootstrap.bundle.min.js"></script>
    <!--Viewport Jquery Js-->
    <script src="HTML/assets/js/viewport.jquery.js"></script>
    <!--Wow min Js-->
    <script src="HTML/assets/js/wow.min.js"></script>
    <!--Owl Carousel min Js-->
    <script src="HTML/assets/js/owl.min.js"></script>
    <!--Swiper min Js-->
    <script src="HTML/assets/js/swiper-bundle.min.js"></script> 
    <!--Magnific popup min Js-->
    <script src="HTML/assets/js/jquery.magnific-popup.min.js"></script> 
    <!--main Js-->
    <script src="HTML/assets/js/main.js"></script>
</body>
</html>
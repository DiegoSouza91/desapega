<?php 
    require_once("App/Config/Autoloader.php");
 ?>

<!doctype html>
<html class="no-js" lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Desapega | Compra e venda</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/OwlCarousel/owl.theme.default.min.css">
    <!-- Main Menu CSS -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="css/select2.min.css">
    <!-- Magnific CSS -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- jquery-->
    <script src="js/jquery-3.2.1.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an 
        <strong>outdated</strong> browser. Please 
        <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
    </p>
    <![endif]-->
    <!-- Add your site or application content here -->
    <div id="wrapper">
        <!-- Header Area Start Here -->
        <header>
            <div id="header-three" class="header-style1 header-fixed">
                <div class="header-top-bar top-bar-style1">
                    <div class="container">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-8">
                                <div class="top-bar-left">
                                    <a href="?p=anunciar" class="cp-default-btn d-lg-none">Anuncie</a>
                                    <p class="d-none d-lg-block">
                                        <i class="fa fa-life-ring" aria-hidden="true"></i>Tem alguma pergunta? 11 3333-5555 ou mail@desapega.com.br
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-4">
                                <div class="top-bar-right">
                                    <ul>
                                        <li>
                                            <button type="button" class="login-btn" data-toggle="modal" data-target="#myModal">
                                                <i class="fa fa-lock" aria-hidden="true"></i>Login
                                            </button>
                                        </li>
                                        <li class="hidden-mb">
                                            <a class="login-btn" href="#" id="login-button" data-toggle="modal" data-target="#cadastro">
                                                <i class="fa fa-user-plus" aria-hidden="true"></i>Cadastre-se
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-menu-area bg-primary" id="sticker">
                    <div class="container">
                        <div class="row no-gutters d-flex align-items-center">
                            <div class="col-lg-2 col-md-2 col-sm-3">
                                <div class="logo-area">
                                    <a href="?p=home" class="img-fluid">
                                        <img src="img/logo.png" alt="logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-6 possition-static">
                                <div class="cp-main-menu">
                                    <nav>
                                        <ul>
                                            <li><a href="?p=home">Home</a></li>
                                            <li><a href="?p=quem-somos">Quem somos</a></li>
                                            <li><a href="?p=como-funciona">Como funciona?</a></li>
                                            <li><a href="?p=contato">Contato</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 text-right">
                                <a href="?p=anunciar" class="cp-default-btn">Anuncie</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area Start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <li><a href="?p=home">Home</a></li>
                                        <li><a href="?p=quem-somos">Quem somos</a></li>
                                        <li><a href="?p=como-sunciona">Como funciona?</a></li>
                                        <li><a href="?p=contato">Contato</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area End -->
        </header>
        <!-- Header Area End Here -->
        <!-- Search Area Start Here -->
        <section class="search-layout1 bg-body full-width-border-bottom fixed-menu-mt">
            <div class="container">
                <form id="cp-search-form">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="form-group search-input-area input-icon-location">
                                <select id="location" class="select2">
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="form-group search-input-area input-icon-category">
                                <select id="categories" class="select2">
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="form-group search-input-area input-icon-keywords">
                                <input placeholder="Pesquisar..." value="" name="key-word" type="text">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 text-right text-left-mb">
                            <a href="#" class="cp-search-btn">
                                <i class="fa fa-search" aria-hidden="true"></i>Buscar
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- Search Area End Here -->
        
        <?php require_once("App/Config/RequestPage.php"); ?>
        
        <!-- Footer Area Start Here -->
        <footer>
            <div class="footer-area-top s-space-equal">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="footer-box">
                                <h3 class="title-medium-light title-bar-left size-lg">Sobre</h3>
                                <ul class="useful-link">
                                    <li>
                                        <a href="about.html">Quem somos</a>
                                    </li>
                                    <li>
                                        <a href="#">Termos &amp; Condições</a>
                                    </li>
                                    <li>
                                        <a href="#">Política de Privacidade</a>
                                    </li>
                                    <li>
                                        <a href="#">Mapa do site</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="footer-box">
                                <h3 class="title-medium-light title-bar-left size-lg">Como vender rápido</h3>
                                <ul class="useful-link">
                                    <li>
                                        <a href="#">Como vender rápido</a>
                                    </li>
                                    <li>
                                        <a href="#">Compre agora no Desapega</a>
                                    </li>
                                    <li>
                                        <a href="#">Banner publicitário</a>
                                    </li>
                                    <li>
                                        <a href="#">Promova seu anúncio</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="footer-box">
                                <h3 class="title-medium-light title-bar-left size-lg">Ajuda &amp; Suporte</h3>
                                <ul class="useful-link">
                                    <li>
                                        <a href="#">Chat</a>
                                    </li>
                                    <li>
                                        <a href="faq.html">FAQ</a>
                                    </li>
                                    <li>
                                        <a href="#">Fique seguro no Desapega</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contato</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="footer-box">
                                <h3 class="title-medium-light title-bar-left size-lg">Siga-nos</h3>
                                <ul class="folow-us">
                                    <li>
                                        <a href="#">
                                            <img src="img/footer/follow1.jpeg" alt="follow">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="img/footer/follow2.jpeg" alt="follow">
                                        </a>
                                    </li>
                                </ul>
                                <ul class="social-link">
                                    <li class="fa-classipost">
                                        <a href="#">
                                            <img src="img/footer/facebook.jpeg" alt="social">
                                        </a>
                                    </li>
                                    <li class="tw-classipost">
                                        <a href="#">
                                            <img src="img/footer/twitter.jpeg" alt="social">
                                        </a>
                                    </li>
                                    <li class="yo-classipost">
                                        <a href="#">
                                            <img src="img/footer/youtube.jpeg" alt="social">
                                        </a>
                                    </li>
                                    <li class="pi-classipost">
                                        <a href="#">
                                            <img src="img/footer/pinterest.jpeg" alt="social">
                                        </a>
                                    </li>
                                    <li class="li-classipost">
                                        <a href="#">
                                            <img src="img/footer/linkedin.jpeg" alt="social">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-area-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 text-center-mb">
                            <p>Copyright © - <?= date('Y'); ?> <a href="?p=home">Desapega</a>. Todos os Direitos Reservados.</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 text-right text-center-mb">
                            <ul>
                                <li class="logo-pagseguro">
                                    <img src="img/footer/logo-pagseguro.png" alt="card">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End Here -->
    </div>
    <!-- Modal Start-->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="title-default-bold mb-none">Login</div>
                </div>
                <div class="modal-body">
                    <div class="login-form">
                        <form>
                            <label>Usuário ou E-mail *</label>
                            <input type="text" placeholder="Name or E-mail">
                            <label>Senha *</label>
                            <input type="password" placeholder="Password">
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1">Manter Logado</label>
                            </div>
                            <button class="default-big-btn" type="submit" value="Login">Login</button>
                            <label class="lost-password"><a href="#">Esqueceu a senha?</a></label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End-->

    <!-- Modal Cadastro-->
    <div class="modal fade" id="cadastro" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="title-default-bold mb-none">Novo Usuário</div>
                </div>
                <div class="modal-body">
                    <div class="login-form">
                        <form>
                            <label>Usuário *</label>
                            <input type="text" placeholder="Usuário">
                            <label>E-mail *</label>
                            <input type="email" placeholder="E-mail">
                            <label>Senha *</label>
                            <input type="password" placeholder="Senha">
                            
                            <button class="default-big-btn" type="submit" value="Login">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Cadastro End-->

    <!-- Report Abuse Modal Start-->
    <div class="modal fade" id="report_abuse" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content report-abuse-area radius-none">
                <div class="gradient-wrapper">
                    <div class="gradient-title">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h2 class="item-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>Há algo errado com esse anúncio?</h2>
                    </div>
                    <div class="gradient-padding reduce-padding">
                        <form id="report-abuse-form">
                            <div class="form-group">
                                <label class="control-label" for="first-name">Seu E-mail</label>
                                <input type="text" id="first-name" class="form-control" placeholder="Type your mail here ...">
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="control-label" for="first-name">Razão</label>
                                    <textarea placeholder="Type your reason..." class="textarea form-control" name="message" id="form-message" rows="7" cols="20" data-error="Message field is required" required=""></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="cp-default-btn-sm">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Report Abuse Modal End-->
    <!-- Popper js -->
    <script src="js/popper.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Owl Cauosel JS -->
    <script src="vendor/OwlCarousel/owl.carousel.min.js"></script>
    <!-- Meanmenu Js -->
    <script src="js/jquery.meanmenu.min.js"></script>
    <!-- Srollup js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- jquery.counterup js -->
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <!-- Select2 Js -->
    <script src="js/select2.min.js"></script>
    <!-- Isotope js -->
    <script src="js/isotope.pkgd.min.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/script.js"></script>
    <!-- jQuery Zoom -->
    <script src="js/jquery.zoom.min.js"></script>
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtmXSwv4YmAKtcZyyad9W7D4AC08z0Rb4"></script>
    <!-- Validator js -->
    <script src="js/validator.min.js"></script>
    <script type="text/javascript" src="//localhost/desapega/chat/php/app.php?widget-init.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>
</body>
</html>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="assets/image/favicon.png" type="assets/image/png">
    <title>Royal Hotel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/linericon/style.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="assets/vendors/nice-select/assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
    <!--================Header Area =================-->
    <header class="header_area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="?page=home"><img src="assets/image/Logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <?php if (estAdmin()) : ?>
                            <li class="nav-item <?= isset($_GET['page']) && $_GET['page'] == 'chambreAdmin' ? 'active' : '' ?>"><a class="nav-link" href="?page=chambreAdmin">Chambres</a></li>
                            <li class="nav-item <?= isset($_GET['page']) && $_GET['page'] == 'reservationAdmin' ? 'active' : '' ?>"><a class="nav-link" href="?page=reservationAdmin">Reservations</a></li>
                            <li class="nav-item"><a class="nav-link" href="?page=logout">Deconnexion</a></li>

                        <?php else : ?>
                            <li class="nav-item <?= !isset($_GET['page']) || (isset($_GET['page']) && $_GET['page'] == 'home') ? 'active' : '' ?>"><a class="nav-link" href="?page=home">Accueil</a></li>
                            <li class="nav-item <?= isset($_GET['page']) && $_GET['page'] == 'chambre' ? 'active' : '' ?>"><a class="nav-link" href="?page=chambre">Chambres</a></li>
                            <li class="nav-item <?= isset($_GET['page']) && $_GET['page'] == 'reservation' ? 'active' : '' ?>"><a class="nav-link" href="?page=reservation">Reservations</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                    <li class="nav-item"><a class="nav-link" href="blog-single.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <?php if (isset($_SESSION["user"])) : ?>
                                <li class="nav-item  <?= isset($_GET['page']) && $_GET['page'] == 'profil' ? 'active' : '' ?> submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> <?= $_SESSION["user"]->prenom ?></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="?page=profil">Mon profil</a></li>
                                        <li class="nav-item"><a class="nav-link" href="?logout">Deconnexion</a></li>
                                    </ul>
                                </li>
                            <?php else : ?>
                                <li class="nav-item <?= isset($_GET['page']) && $_GET['page'] == 'login' ? 'active' : '' ?>"><a class="nav-link" href="?page=login">Connexion</a></li>
                            <?php endif; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Area =================-->
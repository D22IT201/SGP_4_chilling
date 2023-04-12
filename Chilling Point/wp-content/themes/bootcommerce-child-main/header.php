<?php

/**
 * The header for our WooCommerce theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 *
 * @version 5.2.3.1
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Chilling Point</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons
    ================================================== -->
    <!--	<link rel="icon" href="img/favicon/favicon-32x32.png" type="image/x-icon" />-->
    <!--	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144x144.png">-->
    <!--	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72x72.png">-->
    <!--	<link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-54x54.png">-->

    <!-- CSS
    ================================================== -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/bootstrap.min.css">
    <!-- Template styles-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/style.css">
    <!-- Responsive styles-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/responsive.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/font-awesome.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/animate.css">
    <!-- Prettyphoto -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/prettyPhoto.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/owl.theme.css">
    <!-- Flexslider -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/flexslider.css">
    <!-- Flexslider -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/cd-hero.css">
    <!-- Style Swicther -->
    <link id="style-switch" href="<?php echo get_stylesheet_directory_uri();?>/css/presets/preset3.css" media="screen" rel="stylesheet" type="text/css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="<?php echo get_stylesheet_directory_uri();?>/js/html5shiv.js"></script>
      <script src="<?php echo get_stylesheet_directory_uri();?>/js/respond.min.js"></script>
    <![endif]-->

</head>

<header id="header" class="navbar-fixed-top header4" role="banner">
    <div class="container">
        <div class="row">
            <!-- Logo start -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand">
                    <a href="#">
                        <img class="img-responsive" src="images/logo2.png" alt="logo">
                    </a>
                </div>
            </div>
            <!--/ Logo end -->
            <nav class="collapse navbar-collapse clearfix" role="navigation">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="index.php" class="dropdown-toggle" >
                            Home
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <div class="dropdown-menu"></div>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <i class="fa fa-angle-down"></i></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="about_us.php">About Us</a></li>
                                <li><a href="service.php">Services</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="gallery.php" class="dropdown-toggle" >Gallery <i class="fa fa-angle-down"></i></a>
                        <div class="dropdown-menu">

                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="view_cart.php" class="dropdown-toggle" >View Cart <i class="fa fa-angle-down"></i></a>
                        <div class="dropdown-menu">

                        </div>
                    </li>
                    <!-- <li class="dropdown">
                           <a href="#" class="dropdown-toggle" >Booking <i class="fa fa-angle-down"></i></a>
                           <div class="dropdown-menu">
                        </div>
                    </li> -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact Us <i class="fa fa-angle-down"></i></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="feedback.php">Testimonial</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">SignIn/SignUp <i class="fa fa-angle-down"></i></a>
                        <div class="dropdown-menu">
                            <ul>
                                <!-- <li> <?php echo $user ?> </li> -->
                                <li><a href="login.php">Login</a></li>
                                <li><a href="register.php">Register</a></li>
                                <li><a href="logout.php">Log Out</a></li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </nav><!--/ Navigation end -->
        </div><!--/ Row end -->
    </div><!--/ Container end -->
</header>
<body>

<!--/ Header end -->


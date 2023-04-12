<!-- Header start -->
<?php
//    get_header();
//?>
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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">
    <!-- Template styles-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
    <!-- Responsive styles-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/responsive.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/font-awesome.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/animate.css">
    <!-- Prettyphoto -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/prettyPhoto.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/owl.theme.css">
    <!-- Flexslider -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/flexslider.css">
    <!-- Flexslider -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/cd-hero.css">
    <!-- Style Swicther -->
    <link id="style-switch" href="<?php echo get_template_directory_uri();?>/css/presets/preset3.css" media="screen" rel="stylesheet" type="text/css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="<?php echo get_template_directory_uri();?>/js/html5shiv.js"></script>
      <script src="<?php echo get_template_directory_uri();?>/js/respond.min.js"></script>
    <![endif]-->

</head>
<div id="snackbar">Login SucessFully</div>
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
					    	<img class="img-responsive" src="<?php echo get_template_directory_uri();?>/images/logo2.png" alt="logo">
					    </a>
				    </div>
				</div>
				<!--/ Logo end -->
                <?php
                    wp_nav_menu(array(
                            'theme_location'=>'primary-menu','menu_class'=>'collapse navbar-collapse clearfix nav navbar-nav navbar-right`'
                    ))
                ?>

			</div>
		</div><!--/ Container end -->
	</header>
<body>

<!--/ Header end -->


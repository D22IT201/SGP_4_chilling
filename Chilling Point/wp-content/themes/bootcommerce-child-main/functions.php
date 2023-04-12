<?php

// Style and scripts
add_action( 'wp_enqueue_scripts', 'bootscore_child_enqueue_styles' );
function bootscore_child_enqueue_styles() {
    // Enqueue parent theme stylesheets
    wp_enqueue_style( 'bootscore-parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'bootscore-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootscore-fontawesome', get_template_directory_uri() . '/css/font-awesome.css' );
    wp_enqueue_style( 'bootscore-cd-hero', get_template_directory_uri() . '/css/cd-hero.css' );
    wp_enqueue_style( 'bootscore-prettyPhoto', get_template_directory_uri() . '/css/prettyPhoto.css' );
    wp_enqueue_style( 'bootscore-owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css' );
    wp_enqueue_style( 'bootscore-owl-theme', get_template_directory_uri() . '/css/owl.theme.css' );
    wp_enqueue_style( 'bootscore-responsive', get_template_directory_uri() . '/css/responsive.css' );

    // Enqueue child theme stylesheets
    wp_enqueue_style( 'bootscore-child-style', get_stylesheet_directory_uri() . '/css/style.css' );
    wp_enqueue_style( 'bootscore-animate', get_stylesheet_directory_uri() . '/css/animate.css' );

    // Compiled main.css
    $modified_bootscoreChildCss = date( 'YmdHi', filemtime( get_stylesheet_directory() . '/css/main.css' ) );
    wp_enqueue_style( 'bootscore-main', get_stylesheet_directory_uri() . '/css/main.css', array( 'bootscore-child-style' ), $modified_bootscoreChildCss );

    // Custom.js
    wp_enqueue_script( 'bootscore-custom', get_stylesheet_directory_uri() . '/js/custom.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'bootscore-bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'bootscore-cd-hero', get_stylesheet_directory_uri() . '/js/cd-hero.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'bootscore-gmap3', get_stylesheet_directory_uri() . '/js/gmap3.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'bootscore-isotope', get_stylesheet_directory_uri() . '/js/ini.isotope.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'bootscore-counterup', get_stylesheet_directory_uri() . '/js/jquery.counterup.min.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'bootscore-easing', get_stylesheet_directory_uri() . '/js/jquery.easing.1.3.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'bootscore-flexslider', get_stylesheet_directory_uri() . '/js/jquery.flexslider.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'bootscore-owl-carousel', get_stylesheet_directory_uri() . '/js/owl.carousel.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'bootscore-respond', get_stylesheet_directory_uri() . '/js/respond.min.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'bootscore-smoothscroll', get_stylesheet_directory_uri() . '/js/smoothscroll.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'bootscore-smoothscroll', get_stylesheet_directory_uri() . '/js/smoothscroll.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'bootscore-style-switcher', get_stylesheet_directory_uri() . '/js/style-switcher.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'bootscore-wow', get_stylesheet_directory_uri() . '/js/wow.min.js', '', '', true );
    wp_enqueue_script( 'bootscore-waypoints', get_stylesheet_directory_uri() . '/js/waypoints.min.js', array( 'jquery' ), '', true );
}

// WooCommerce
require get_stylesheet_directory() . '/woocommerce/woocommerce-functions.php';

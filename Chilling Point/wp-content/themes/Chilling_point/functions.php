<?php

register_nav_menus(
    array('primary-menu'=>'Top Menu')
);
?>
<?php
function customtheme_add_woocommerce_support()
{
    add_theme_support( 'woocommerce');
}
add_action( 'after_setup_theme', 'customtheme_add_woocommerce_support' );
?>
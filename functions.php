<?php

function init_script_css() {

    /* Initialise css */

    wp_enqueue_style( "fancybox_stylesheet", "https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css");
    wp_enqueue_style( "boostrap_stylesheet", "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");
    wp_enqueue_style( "fontawesome_stylesheet", "https://use.fontawesome.com/releases/v5.0.8/css/all.css");
    wp_enqueue_style( "aos_stylesheet", get_template_directory_uri() . "/assets/lib/aos/aos.css");
    wp_enqueue_style( "xphotography_stylesheet", get_template_directory_uri() . "/style.css");

    /* Initialise scripts */

    wp_enqueue_script( "jquery_script", "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js");
    wp_enqueue_script( "fancybox_script", "https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js", array ( 'jquery' ), "3.2.5", true);
    wp_enqueue_script( "popper_script", "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js", array ( 'jquery' ), "1.12.9", true);
    wp_enqueue_script( "bootstrap_script", "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js", array ( 'jquery' ), "4.0.0", true);
    wp_enqueue_script( "aos_script", get_template_directory_uri() . "/assets/lib/aos/aos.js", array ( 'jquery' ), "1.0", true);
    wp_enqueue_script( "xphotography_script", get_template_directory_uri() . "/assets/js/script.js", array ( 'jquery' ), "1.3", true);

}

add_action( "wp_enqueue_scripts", "init_script_css" );

function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'extra-menu' => __( 'Extra Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );
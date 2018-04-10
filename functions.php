<?php

function init_script_css() {

    /* Initialise css */

    wp_enqueue_style( "google_font", "//fonts.googleapis.com/css?family=Lato:300,400,600");
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
    wp_enqueue_script( "xphotography_script", get_template_directory_uri() . "/assets/js/script.js", array ( 'jquery' ), "1.0", true);

}

add_action( "wp_enqueue_scripts", "init_script_css" );

function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'footer-menu' => __( 'Footer Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );

add_theme_support( 'post-formats', array('gallery', 'video' ) );

function arphabet_widgets_init() {

    register_sidebar( array(
        'name'          => 'Home right sidebar',
        'id'            => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

function xphotography_settings(){
    ?>
    <div class="wrap">
        <h1>xPhotography Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields("section");
            do_settings_sections("theme-options");
            submit_button();
            ?>
        </form>
    </div>
<?php
}

function add_theme_menu_item()
{
    add_menu_page("xPhotography Settings", "xPhotography", "manage_options", "xphotography", "xphotography_settings", null, 99);
}

add_action("admin_menu", "add_theme_menu_item");

function get_video_ids($content){
    $ids = explode("[/videos]",$content);
    $ids = str_replace("[videos]","",$ids[0]);

    if($ids != "0") $ids = explode(",", $ids);

    return $ids;
}

function getUrl($content){
    $url = explode("[/embed]",$content);
    $url = str_replace("[embed]","",$url[0]);
    $thumb = explode("watch?v=",$url);

    $thumb = "https://img.youtube.com/vi/".$thumb["1"]."/mqdefault.jpg";

    return array("url" => $url, "thumb" => $thumb);

}

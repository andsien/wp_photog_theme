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
    wp_enqueue_script( "xphotography_script", get_template_directory_uri() . "/assets/js/script.js", array ( 'jquery' ), "1.3", true);

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

function display_instagram_element(){
    ?>
    <input size="50" type="text" name="instagram_url" id="instagram_url" value="<?php echo get_option('instagram_url'); ?>" />
    <?php
}

function display_twitter_element(){
    ?>
    <input size="50" type="text" name="twitter_url" id="twitter_url" value="<?php echo get_option('twitter_url'); ?>" />
<?php
}

function display_facebook_element(){
    ?>
    <input size="50" type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>" />
<?php
}

function display_logo_element(){
    ?>
    <input size="50" type="text" name="logo_url" id="logo_url" value="<?php echo get_option('logo_url'); ?>" />
<?php
}

function display_hero_element(){
    ?>
    <input size="50" type="text" name="hero_url" id="hero_url" value="<?php echo get_option('hero_url'); ?>" />
<?php
}

function display_contact_code(){
    ?>
    <textarea style="width: 370px;" name="contact_shortcode" id="contact_shortcode"><?php echo get_option('contact_shortcode'); ?></textarea>
<?php
}

function display_footer_element(){
    ?>
    <input size="50" type="text" name="footer_text" id="footer_text" value="<?php echo get_option('footer_text'); ?>" />
<?php
}


function display_theme_panel_fields(){
    add_settings_section("section", "Settings", null, "theme-options");

    add_settings_field("facebook_url", "Facebook Profile Url", "display_facebook_element", "theme-options", "section");
    add_settings_field("instagram_url", "Instagram Profile Url", "display_instagram_element", "theme-options", "section");
    add_settings_field("twitter_url", "Twitter Profile Url", "display_twitter_element", "theme-options", "section");
    add_settings_field("logo_url", "Logo Url", "display_logo_element", "theme-options", "section");
    add_settings_field("hero_url", "Hero Url (video/image)", "display_hero_element", "theme-options", "section");
    add_settings_field("footer_text", "Footer Text", "display_footer_element", "theme-options", "section");
    add_settings_field("contact_shortcode", "Contact Form Short Code", "display_contact_code", "theme-options", "section");

    register_setting("section", "instagram_url");
    register_setting("section", "twitter_url");
    register_setting("section", "facebook_url");
    register_setting("section", "logo_url");
    register_setting("section", "hero_url");
    register_setting("section", "footer_text");
    register_setting("section", "contact_shortcode");
}

add_action("admin_init", "display_theme_panel_fields");

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

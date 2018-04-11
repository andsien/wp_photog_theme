<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if ( is_front_page() ) : ?>
<div class="header-overlay embed-responsive embed-responsive-16by9">
    <video autoplay muted loop id="video-background">
        <source src="<?php echo get_option('hero_url'); ?>" type="video/mp4">
    </video>
    <div class="header-social row cm-absolute">
        <div class="col text-center">
            <ul>
                <?php if(get_option('instagram_url') != "") : ?>
                <li><a target="_blank" href="<?php echo get_option('instagram_url'); ?>"><i data-aos="fade-down" class="fab fa-instagram"></i></a></li>
                <?php endif; ?>
                <?php if(get_option('facebook_url') != "") : ?>
                <li><a target="_blank" href="<?php echo get_option('facebook_url'); ?>"><i data-aos="fade-down" class="fab fa-facebook-square"></i></a></li>
                <?php endif; ?>
                <?php if(get_option('twitter_url') != "") : ?>
                <li><a target="_blank" href="<?php echo get_option('twitter_url'); ?>"><i data-aos="fade-down" class="fab fa-twitter"></i></a></li>
                <?php endif; ?>
            </ul><br/>
            <button data-overlay="xBook" data-aos="fade-up" type="button" class="btnOverlayOpen btn btn-lg btn-block btn-outline-light">Book Now</button>
        </div>
    </div>
<?php else: ?>
<div class="">
<?php endif; ?>
    <div class="header row">
        <div class="col-lg-4 col-md-4 col-2 text-left">
            <ul>
                <li><a class="btnOverlayOpen" href="#" data-overlay="xSearch"><i class="fas fa-search"></i></a></li>
                <?php
                    $dnone = "";
                    if ( is_front_page() ) {
                        $dnone = 'id="showHideBook" style="display: none"';
                    }
                ?>
                <li class="li-book"><a <?php echo $dnone; ?> class="xPhotosBook btnOverlayOpen" href="#" data-overlay="xBook">Book Now</a></li>
            </ul>
        </div>
        <div class="col-lg-4 col-md-4 col-8 text-center">
            <a href="<?php echo get_home_url(); ?>">
                <img class="xPhotosLogo" src="<?php echo get_option('logo_url'); ?>">
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-2 text-right">
            <ul>
                <li><a href="#" class="btnOverlayOpen" data-overlay="xMenu"><i class="fas fa-bars"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- The overlay -->
<div id="xPhotoOverlay" class="xOverlay">
    <a href="#" class="btnOverlayClose">&times;</a>
    <div id="xSearch" class="overlay-content cm-absolute">
        <?php get_search_form(); ?>
    </div>
    <div id="xBook" class="overlay-content cm-absolute">
        <div class="row">
            <div class="col-12"><?php echo do_shortcode( get_option('contact_shortcode') ); ?></div>
        </div>
    </div>
    <div id="xMenu" class="overlay-content cm-absolute">
        <div class="row">
            <?php echo wp_nav_menu(); ?>
        </div>
    </div>
</div>

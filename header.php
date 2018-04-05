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
        <source src="<?php echo get_template_directory_uri() ?>/assets/video/intro_website.mp4" type="video/mp4">
    </video>
    <div class="header-social row cm-absolute">
        <div class="col text-center">
            <ul>
                <li><a href="#"><i data-aos="fade-down" class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i data-aos="fade-down" class="fab fa-facebook-square"></i></a></li>
                <li><a href="#"><i data-aos="fade-down" class="fab fa-twitter"></i></a></li>
            </ul><br/>
            <button data-overlay="xBook" data-aos="fade-right" type="button" class="btnOverlayOpen btn btn-lg btn-block btn-outline-light">Book Now</button>
        </div>
    </div>
<?php else: ?>
<div class="">
<?php endif; ?>
    <div class="header row">
        <div class="col-4 text-left">
            <ul>
                <li><a class="btnOverlayOpen" href="#" data-overlay="xSearch"><i class="fas fa-search"></i></a></li>
            </ul>
        </div>
        <div class="col-4 text-center">
            <img class="xPhotosLogo" src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png?sdsd">
        </div>
        <div class="col-4 text-right">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) );?>
        </div>
    </div>
</div>
<!-- The overlay -->
<div id="xPhotoOverlay" class="xOverlay">
    <a href="#" class="btnOverlayClose">&times;</a>
    <div id="xSearch" class="overlay-content cm-absolute">
        <form class="form-inline">
            <input class="form-control mr-sm-2 form-control-lg" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-lg btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    <div id="xBook" class="overlay-content cm-absolute">
        <h1>Book</h1>
    </div>
</div>

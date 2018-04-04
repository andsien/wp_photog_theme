<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="home" class="header-overlay embed-responsive embed-responsive-16by9">
    <img class="logo" src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png">
    <div class="header row">
        <div class="col text-right">
            <ul>
                <li><a class="anchor-tag" href="#home">home</a></li>
                <li><a class="anchor-tag" href="#photography">photography</a></li>
                <li><a class="anchor-tag" href="#cinematography">cinematography</a></li>
            </ul>
        </div>
    </div>
    <div class="header-social row">
        <div class="col text-center">
            <!--<h1>Andrew Sienes</h1>-->
            <!--<h3>PHOTOGRAPHY | CINEMATOGRAPHY</h3>-->
            <ul>
                <li><a href="#"><i data-aos="fade-down" class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i data-aos="fade-down" class="fab fa-facebook-square"></i></a></li>
                <li><a href="#"><i data-aos="fade-down" class="fab fa-twitter"></i></a></li>
            </ul><br/>
            <button data-aos="fade-right" type="button" class="btn btn-lg btn-block btn-outline-light">Book Now</button>
        </div>
    </div>
    <video autoplay muted loop id="video-background">
        <source src="<?php echo get_template_directory_uri() ?>/assets/video/intro_website.mp4" type="video/mp4">
    </video>
</div>

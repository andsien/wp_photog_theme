<?php
/**
 * Template part for displaying gallery posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php
    $gallery = get_post_gallery( get_the_ID(), false );
    $ids = explode( ",", $gallery['ids'] );
    $cat = get_the_category(get_the_ID());
    $permalink = get_post_permalink(get_the_ID());
    ?>

    <div class="xPhotos-container">
        <h3 data-aos="fade-right" id="<?php echo $cat[0]->slug; ?>"><?php echo $cat[0]->name; ?></h3>
        <div class="xPhotos">

            <?php
            foreach($ids as $id ) :
                $limg = wp_get_attachment_image_src( $attachment_id = $id, $size = "large");
                $mimg = wp_get_attachment_image_src( $attachment_id = $id, $size = "medium");
                ?>
                <a data-fancybox="photo-gallery" href="<?php echo $limg[0]; ?>">
                    <img data-aos="flip-right" src="<?php echo $mimg[0]; ?>" alt="Photography">
                </a>

            <?php
            endforeach;?>

        </div>
    </div>

</article>

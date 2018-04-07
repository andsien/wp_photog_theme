<?php

get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        if ( get_post_gallery() &&  $cat[0]->slug != "uncategorized") : ?>
            <?php
            $gallery = get_post_gallery( get_the_ID(), false );
            $ids = explode( ",", $gallery['ids'] );
            $cat = get_the_category(get_the_ID());
            $permalink = get_post_permalink(get_the_ID());
            ?>

            <div class="container-fluid">
                <div class="row">

                    <div class="xPhotos-container">
                        <h3 data-aos="fade-right" id="<?php echo strtolower(get_the_title()); ?>"><a class="underline" href="<?php echo $permalink; ?>"><?php echo get_the_title(); ?></a></h3>
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
                    <div class="container-buttom-bg"></div>
                    <div class="xPhotos-more"><a data-aos="flip-left" class="btn btn-outline-dark btn-lg" href="<?php echo $permalink; ?>" role="button">View More <?php echo $cat[0]->name; ?></a></div>
                </div>
            </div>
        <?php
        endif;
    endwhile;
else :
    get_template_part( 'template-parts/content', 'none' );
endif;
?>
<?php get_footer();
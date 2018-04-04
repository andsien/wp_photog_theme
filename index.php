<?php

get_header(); ?>
    <div class="container">
        <div class="row">

            <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                        $cat = get_the_category(get_the_ID());?>
                        <h1 data-aos="fade-down" id="<?php echo $cat[0]->slug; ?>"><?php echo $cat[0]->name; ?></h1>
                        <div class="xPhotos">
                    <?php
                        if ( get_post_gallery() ) :
                            $gallery = get_post_gallery( get_the_ID(), false );
                            $ids = explode( ",", $gallery['ids'] );

                            foreach($ids as $id ) :
                                $img = wp_get_attachment_image_src( $attachment_id = $id, $size = "medium_large" ); ?>
                                <a data-fancybox="photo-gallery" href="<?php echo $img[0]; ?>">
                                    <img src="<?php echo $img[0]; ?>" alt="Photography">
                                </a>
                            <?php
                            endforeach;
                        endif;?>
                        </div>
                <?php endwhile;

                else :
                get_template_part( 'template-parts/content', 'none' );

                endif;
            ?>
        </div>
    </div>
<?php get_footer();
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="xPhotos-container xPage">
        <?php if (get_video_ids($post->post_content === false)) : ?>
            <h3 data-aos="fade-right" id="<?php echo strtolower(get_the_title()); ?>"><?php echo get_the_title(); ?></h3>
            <?php the_content();

            else:
                get_template_part( 'template-parts/post/content', "gallery-video" );
            endif;
        if ( is_front_page() ) : ?>
        <div class="container-buttom-bg"></div>
        <div class="xPhotos-more">
            <a data-aos="flip-left" class="btn btn-outline-dark btn-lg" href="<?php echo get_post_permalink(get_the_ID()); ?>" role="button">View More</a>
        </div>
    <?php endif; ?>
</article>
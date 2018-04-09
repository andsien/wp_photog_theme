<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="xPhotos-container">

        <?php if ( is_front_page() || (is_array(get_video_ids($post->post_content)) || get_video_ids($post->post_content) == "0")) :
            get_template_part( 'template-parts/post/content', "gallery-video" );
            else:
                the_content();
            endif;
        if ( is_front_page() ) : ?>
        <div class="container-buttom-bg"></div>
        <div class="xPhotos-more">
            <a data-aos="flip-left" class="btn btn-outline-dark btn-lg" href="<?php echo get_post_permalink(get_the_ID()); ?>" role="button">View More <?php echo get_the_title(); ?></a>
        </div>
    <?php endif; ?>
</article>
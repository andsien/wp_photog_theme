<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="xPhotos-container">
        <h3 data-aos="fade-right" id="<?php echo strtolower(get_the_title()); ?>"><?php echo get_the_title(); ?></h3>

        <?php the_content(); ?>
    </div>

</article>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="xPhotos-container">
	    <?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    </div>
</article>

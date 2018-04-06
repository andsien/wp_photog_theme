<?php

get_header(); ?>
<div class="container container-post">
    <div class="row">
        <div class="col-2">
            <?php get_sidebar(); ?>
        </div>
        <div class="col-10">

            <?php
            if ( have_posts() ) :

                /* Start the Loop */
                while ( have_posts() ) : the_post();

                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part( 'template-parts/post/content', get_post_format() );

                endwhile;

                the_posts_pagination( array(
                    'prev_text' => '<span>Prev</span>',
                    'next_text' => '<span>Next</span>',
                    'before_page_number' => '<span class="meta-nav screen-reader-text"> </span>',
                ) );

            else :

                get_template_part( 'template-parts/post/content', 'none' );

            endif;
            ?>

        </div>
    </div>
</div>

<?php get_footer();

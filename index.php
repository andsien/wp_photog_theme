<?php

get_header(); ?>
<div class="container container-post">
    <div class="row">
        <?php if(is_active_sidebar("home_right_1")) : ?>
        <div class="col-2">
            <?php get_sidebar(); ?>
        </div>
        <div class="col-10">
        <?php else : ?>
        <div class="col-12">
        <?php endif; ?>

            <?php
            if ( have_posts() ) :

                /* Start the Loop */
                while ( have_posts() ) : the_post();

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

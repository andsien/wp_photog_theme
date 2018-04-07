<?php

get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        if ( get_post_gallery() &&  $cat[0]->slug != "uncategorized") : ?>

            <div class="container-fluid">
                <div class="row">

                <?php get_template_part( 'template-parts/post/content', get_post_format() ); ?>

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
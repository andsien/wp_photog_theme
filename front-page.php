<?php

get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>

            <div class="container-fluid">
                <div class="row">

                <?php if(get_post_format() != "video") get_template_part( 'template-parts/post/content', get_post_format() ); ?>

                </div>
            </div>
<?php

    endwhile;
else :
    get_template_part( 'template-parts/content', 'none' );
endif;
?>
<?php get_footer();
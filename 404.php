<?php

get_header(); ?>
<div class="container container-post">
    <div class="row">
        <div class="col">

            <header class="page-header">
                <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyseventeen' ); ?></h1>
            </header><!-- .page-header -->
            <div class="page-content">
                <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyseventeen' ); ?></p>

                <?php get_search_form(); ?>

            </div><!-- .page-content -->

        </div>
    </div>
</div>

<?php get_footer();


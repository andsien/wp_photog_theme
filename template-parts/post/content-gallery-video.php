<h3 data-aos="fade-right" id="<?php echo strtolower(get_the_title()); ?>">
    <?php if ( is_front_page() ) : ?>
        <a class="underline" href="<?php echo get_post_permalink(get_the_ID()); ?>"><?php echo get_the_title(); ?></a>
    <?php else: ?>
        <?php echo get_the_title(); ?>
    <?php endif; ?>
</h3>
<div class="row">
<?php

    $ids = get_video_ids($post->post_content);

    if(is_array($ids)) :
        $ids = array_slice($ids, 0, 9);
        foreach($ids as $id) :
            $gpost = get_post($id);
            $content = getUrl($gpost->post_content);

            ?>

            <div class="col-4">
                <div data-aos="flip-up" class="card"">
                    <a data-fancybox="" data-width="640" data-height="360" href="<?php echo $content['url']; ?>">
                        <img class="card-img-top" src="<?php echo $content['thumb']; ?>">
                    </a>
                    <div class="card-body">
                        <p class="card-text"><?php echo $gpost->post_title; ?></p>
                        <p class="card-p text-center">
                            <a data-aos="flip-left" class="btn btn-outline-dark btn" href="<?php echo get_post_permalink($gpost->ID) ?>" role="button">More</a>
                        </p>
                    </div>
                </div>
            </div>

    <?php
        endforeach;
    else :
        $args = array(
            'numberposts' =>9,
            'post_type'=> 'post',
            'post_status' => 'publish',
            'order' => 'DESC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'post_format',
                    'field' => 'slug',
                    'terms' => array( 'post-format-video' )
                )
            )
        );
        $getpost = get_posts($args);
        foreach($getpost as $gpost) :

            $content = getUrl($gpost->post_content);

            ?>

                <div class="col-4">
                    <div data-aos="flip-up" class="card"">
                        <a data-fancybox="" data-width="640" data-height="360" href="<?php echo $content['url']; ?>">
                            <img class="card-img-top" src="<?php echo $content['thumb']; ?>">
                        </a>
                        <div class="card-body">
                            <p class="card-text"><?php echo $gpost->post_title; ?></p>
                            <p class="card-p text-center">
                                <a data-aos="flip-left" class="btn btn-outline-dark btn" href="<?php echo get_post_permalink($gpost->ID) ?>" role="button">More</a>
                            </p>
                        </div>
                    </div>
                </div>

        <?php
        endforeach;
    endif;
?>
</div>



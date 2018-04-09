<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php
    $gallery = get_post_gallery( get_the_ID(), false );
    $ids = explode( ",", $gallery['ids'] );

    if(is_front_page()) $ids = array_slice($ids, 0, 30);

    $permalink = get_post_permalink(get_the_ID());
    ?>

    <div class="xPhotos-container">
        <h3 data-aos="fade-right" id="<?php echo strtolower(get_the_title()); ?>">
            <?php if ( is_front_page() ) : ?>
                <a class="underline" href="<?php echo $permalink; ?>"><?php echo get_the_title(); ?></a>
            <?php else: ?>
                <?php echo get_the_title(); ?>
            <?php endif; ?>
        </h3>

        <div class="xPhotos">

            <?php
            foreach($ids as $id ) :
                $limg = wp_get_attachment_image_src( $attachment_id = $id, $size = "large");
                $mimg = wp_get_attachment_image_src( $attachment_id = $id, $size = "medium");
                ?>
                <a data-fancybox="photo-gallery" href="<?php echo $limg[0]; ?>">
                    <img data-aos="flip-right" src="<?php echo $mimg[0]; ?>" alt="Photography">
                </a>

            <?php
            endforeach;?>

        </div>
    </div>
    <?php if ( is_front_page() ) : ?>
    <div class="container-buttom-bg"></div>
    <div class="xPhotos-more">
        <a data-aos="flip-left" class="btn btn-outline-dark btn-lg" href="<?php echo $permalink; ?>" role="button">View More <?php echo get_the_title(); ?></a>
    </div>
    <?php endif; ?>
</article>

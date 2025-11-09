<?php

global $post;

if ($args) {
    preg_match_all('~(?<=src=")[^"]+(?=")~', $args, $product_cert_arr);
    $certificates = $product_cert_arr[0];
} else {
    $certificates = get_posts(array(
        'post_type' => 'certificates'
    ));
}
?>

<?php if ($args && $certificates): ?>
    <div class="swiper swiper-certificate">
        <div class="swiper-wrapper">
            <?php foreach ($certificates as $src): ?>
                <div class="swiper-slide">
                    <div class="certificate__item">
                        <img
                            class="certificate-img-js"
                            src="<?php echo $src; ?>"
                            data-src="<?php echo $src; ?>"
                            alt="<?php the_title(); ?>" />
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- /swiper-wrapper -->
    </div>
    <!-- /swiper swiper-certificate -->
<?php elseif ($certificates): ?>
    <div class="swiper swiper-certificate">
        <div class="swiper-wrapper">
            <?php foreach ($certificates as $post): setup_postdata($post); ?>
                <div class="swiper-slide">
                    <div class="certificate__item">
                        <img
                            class="certificate-img-js"
                            src="<?php the_post_thumbnail_url('full'); ?>"
                            data-src="<?php the_post_thumbnail_url('full'); ?>"
                            alt="<?php the_title(); ?>" />
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- /swiper-wrapper -->
    </div>
    <!-- /swiper swiper-certificate -->

    <?php wp_reset_postdata(); ?>
<?php endif; ?>
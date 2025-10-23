<?php

global $post;
$certificates = get_posts(array(
    'post_type' => 'certificates'
));
?>

<?php if ($certificates): ?>
    <div class="swiper swiper-certificate">
        <div class="swiper-wrapper">
            <?php foreach ($certificates as $post): setup_postdata($post); ?>
                <div class="swiper-slide">
                    <div class="certificate__item">
                        <img
                            class="certificate-img-js"
                            data-src="<?php the_post_thumbnail_url('full'); ?>"
                            src="<?php the_post_thumbnail_url('full'); ?>"
                            alt="<?php the_title() ?>" />
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- /swiper-wrapper -->
    </div>
    <!-- /swiper swiper-certificate -->
<?php endif; ?>
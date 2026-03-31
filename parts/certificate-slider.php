<?php global $post; ?>

<?php if (!empty($args)) : ?>
    <div class="swiper swiper-certificate">
        <div class="swiper-wrapper">
            <?php foreach ($args->get_terms() as $value): ?>
                <div class="swiper-slide">
                    <div class="certificate__item">
                        <img
                            class="certificate-img-js"
                            src="<?php echo $value->name; ?>"
                            data-src="<?php echo $value->name; ?>"
                            alt="<?php echo $value->name; ?>" />
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- /swiper-wrapper -->
    </div>
    <!-- /swiper swiper-certificate -->
<?php else : ?>
    <?php
    $certificates = get_posts(array(
        'post_type' => 'certificates'
    ));
    ?>

    <?php if (!empty($certificates)) : ?>
        <div class="swiper swiper-certificate">
            <div class="swiper-wrapper">
                <?php foreach ($certificates as $post): setup_postdata($post); ?>
                    <div class="swiper-slide">
                        <div class="certificate__item">
                            <img
                                class="certificate-img-js"
                                src="<?php the_post_thumbnail_url(array(200, 300)); ?>"
                                data-src="<?php the_post_thumbnail_url('full'); ?>"
                                alt="<?php the_title(); ?>" />
                        </div>
                    </div>
                <?php endforeach; ?>

                <?php wp_reset_postdata(); ?>
            </div>
            <!-- /swiper-wrapper -->
        </div>
        <!-- /swiper swiper-certificate -->
    <?php endif; ?>
<?php endif; ?>
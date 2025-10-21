<?php
global $post;
$certificates = get_posts(array(
    'post_type' => 'certificates'
));
?>

<section id="certificate" class="certificate section section--pt">
    <div class="container">
        <div class="section-header">
            <div class="row">
                <div class="col-md-4">
                    <span class="mini-logo">Экспертиза</span>
                </div>
                <div class="col-md-8">
                    <h2 class="section-header-title">Сертификаты и документы</h2>
                    <div class="section-header-subtitle">
                        Вся продукция Laboratory Cytolife имеет регистрационные удостоверения и<br />проходит проверку в
                        соответствии с российским законодательством.
                    </div>
                </div>
            </div>
        </div>

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
            </div>
        <?php endif; ?>
    </div>
</section>
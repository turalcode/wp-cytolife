<?php defined('ABSPATH') || exit; ?>

<?php get_header(); ?>

<div class="single-article">
    <section class="single-article section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="single-article-header">
                        <h1>Anti-age терапия у пациентов с розацеа</h1>

                        <div class="single-article-share product__share">
                            <div class="product__share-title">Поделиться:</div>
                            <div class="product__share-list">
                                <a href="<?php echo esc_url(get_tg_share_url(get_permalink())); ?>" class="product__share-link">
                                    <svg class="icon-share">
                                        <use href="#icon-tg-share"></use>
                                    </svg>
                                </a>

                                <a href="<?php echo esc_url(get_wa_share_url(get_permalink())); ?>" class="product__share-link">
                                    <svg class="icon-share">
                                        <use href="#icon-wa-share"></use>
                                    </svg>
                                </a>

                                <a href="<?php echo esc_url(get_mail_share_url(get_permalink())); ?>" class="product__share-link">
                                    <svg class="icon-share">
                                        <use href="#icon-mail-share"></use>
                                    </svg>
                                </a>

                                <a href="<?php echo esc_url(get_vk_share_url(get_permalink())); ?>" class="product__share-link">
                                    <svg class="icon-share icon-share--vk">
                                        <use href="#icon-vk-share"></use>
                                    </svg>
                                </a>

                                <a href="#" class="product__share-link share-link-js">
                                    <svg class="icon-share">
                                        <use href="#icon-copy-share"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="article-card-header">
                        <div class="article-card-info-item">Облик</div>
                        <div class="article-card-info-item">2&nbsp;(61)</div>
                        <div class="article-card-info-item">апрель</div>
                        <div class="article-card-info-item">2025</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="single-article-speaker-info">
                                <div>Автор:</div>

                                <div class="single-article-speaker-name">
                                    <div>Желендинова А.И</div>
                                    <div>врач-дерматовенеролог, косметолог.</div>
                                </div>

                                <a href="#" class="single-event-speaker-link cb-button">Об авторе
                                    <svg class="icon">
                                        <use href="#icon-arrow"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="speaker-slider-photo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/founder.jpg" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /single-article -->

    <section class="single-article-cl section section--pt">
        <div class="container">
            <?php echo do_shortcode('[pdf-embedder url="https://cytolife.dev/wp-content/themes/cytolife/assets/images/test-article-cytolife.pdf"]'); ?>
        </div>
    </section>
    <!-- /single-article-cl -->

    <div class="single-article-share-mob product__share">
        <div class="container">
            <div class="product__share-title">Поделиться:</div>
            <div class="product__share-list">
                <a href="<?php echo esc_url(get_tg_share_url(get_permalink())); ?>" class="product__share-link">
                    <svg class="icon-share">
                        <use href="#icon-tg-share"></use>
                    </svg>
                </a>

                <a href="<?php echo esc_url(get_wa_share_url(get_permalink())); ?>" class="product__share-link">
                    <svg class="icon-share">
                        <use href="#icon-wa-share"></use>
                    </svg>
                </a>

                <a href="<?php echo esc_url(get_mail_share_url(get_permalink())); ?>" class="product__share-link">
                    <svg class="icon-share">
                        <use href="#icon-mail-share"></use>
                    </svg>
                </a>

                <a href="<?php echo esc_url(get_vk_share_url(get_permalink())); ?>" class="product__share-link">
                    <svg class="icon-share icon-share--vk">
                        <use href="#icon-vk-share"></use>
                    </svg>
                </a>

                <a href="#" class="product__share-link share-link-js">
                    <svg class="icon-share">
                        <use href="#icon-copy-share"></use>
                    </svg>
                </a>
            </div>
        </div>
        <!-- /container -->
    </div>
    <!-- /single-article-share -->
</div>
<!-- /single-article-cl -->

<?php get_footer(); ?>
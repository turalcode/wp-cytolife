<?php defined('ABSPATH') || exit; ?>

<?php get_header(); ?>

<div class="single-article-cl">
    <section class="single-article section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
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
                <div class="col-lg-6">2</div>
            </div>
        </div>
    </section>
    <!-- /single-article -->
</div>
<!-- /single-article-cl -->

<?php get_footer(); ?>
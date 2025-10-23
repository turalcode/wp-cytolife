<?php defined('ABSPATH') || exit; ?>

<?php get_header(); ?>

<?php do_action('woocommerce_before_main_content'); ?>

<section class="catalog-f-screen section section--f-screen">
    <div class="container">
        <h1 class="catalog-f-screen__title"><?php woocommerce_page_title(); ?></h1>

        <div class="tabs">
            <div class="tabs__desktop">
                <div class="tabs__row">
                    <a href="#" class="button">Новинки</a>
                    <a href="#" class="button">Популярное</a>
                    <a href="#" class="button">Категория</a>
                    <a href="#" class="button">Категория</a>
                </div>

                <div class="tabs__row">
                    <a href="#" class="button">Крема</a>
                    <a href="#" class="button">Иньекции</a>
                    <a href="#" class="button">Пилинги</a>
                    <a href="#" class="button">Маски</a>
                    <a href="#" class="button">Уходовая косметика</a>
                    <a href="#" class="button">Стерильний концентрат</a>
                </div>
            </div>

            <div class="tabs__mob">
                <div class="tabs__row">
                    <a class="tabs__mob-link" href="#">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/product-4.png" alt="#" />
                        <span>Новинки</span>
                    </a>

                    <a class="tabs__mob-link" href="#">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/product-1.png" alt="#" />
                        <span>Популярное</span>
                    </a>
                </div>

                <div class="swiper swiper-tabs">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#" class="button">Крема</a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="button">Иньекции</a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="button">Пилинги</a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="button">Маски</a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="button">Уходовая косметика</a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="button">Стерильний концентрат</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php do_action('woocommerce_shop_loop_header'); ?>

<section class="catalog-product section">
    <div class="container">
        <div class="catalog-product__list products-js">
            <?php

            if (woocommerce_product_loop()) {
                do_action('woocommerce_before_shop_loop');

                woocommerce_product_loop_start();

                if (wc_get_loop_prop('total')) {
                    while (have_posts()) {
                        the_post();

                        do_action('woocommerce_shop_loop');

                        wc_get_template_part('content', 'product');
                    }
                }

                woocommerce_product_loop_end();

                do_action('woocommerce_after_shop_loop');
            } else {
                do_action('woocommerce_no_products_found');
            }

            ?>
        </div>
        <!-- catalog-product__list -->

        <div class="catalog-product__more">
            <a href="#" class="button button--bg-light">
                Загрузить еще
                <svg class="icon">
                    <use href="#icon-arrow"></use>
                </svg>
            </a>
        </div>
        <!-- /catalog-product__more -->
    </div>
    <!-- /container -->
</section>
<!-- /catalog-product section -->

<?php if (is_shop()) : ?>
    <section class="catalog-info section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Заголовок второго уровня</h2>
                    <div class="catalog-info__text">
                        В каталоге Laboratory Cytolife вы найдете прогрессивные решения для эстетической медицины: от
                        высокobiодоступных гидрогелей до комплексных препаратов и уходовых средств. Все продукты подходят для
                        современной практики — безопасны, клинически проверены, сертифицированы.
                    </div>
                    <div>
                        Мы активно обучаем и поддерживаем специалистов через мастер-классы и дистрибуцию по России и СНГ.
                        Откройте «науку в красоте» с нами.
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="catalog-info__img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/catalog-img.jpg" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /catalog-info section -->

    <section id="certificate" class="catalog-cert certificate section section--pt">
        <div class="container">
            <div class="section-header">
                <h2 class="section-header-title">Сертификаты</h2>
                <div class="section-header-subtitle">
                    Вся продукция Laboratory Cytolife имеет регистрационные удостоверения и<br />проходит проверку в
                    соответствии с российским законодательством.
                </div>
            </div>

            <?php get_template_part('parts/certificate', 'slider', $post->ID); ?>
        </div>
    </section>
    <!-- /certificate -->
<?php endif; ?>

<?php

do_action('woocommerce_after_main_content');

do_action('woocommerce_sidebar');

get_footer();

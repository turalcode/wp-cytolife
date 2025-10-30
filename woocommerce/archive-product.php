<?php defined('ABSPATH') || exit; ?>

<?php get_header(); ?>

<?php do_action('woocommerce_before_main_content'); ?>

<?php
$exclude_categories = '229, 230';

$categories = get_terms(array(
    'taxonomy' => 'product_cat',
    'exclude' => $exclude_categories
));
?>

<section class="catalog-f-screen section section--f-screen">
    <div class="container">
        <h1 class="catalog-f-screen__title"><?php woocommerce_page_title(); ?></h1>

        <?php if (is_product_category()) : ?>
            <div class="row">
                <div class="col-lg-8">
                    <div class="catalog-f-screen__subtitle"><?php do_action('woocommerce_archive_description'); ?></div>
                </div>
            </div>
        <?php endif; ?>

        <div class="tabs tabs-filter-js tabs--category">
            <div class="tabs__desktop">
                <?php if (is_shop()) : ?>
                    <div class="tabs__row">
                        <button class="button button-filter-js" data-filter="<?php echo CYTOLIFE_SLUG_NEW_PRODUCTS; ?>">Новинки</button>
                        <button class="button button-filter-js" data-filter="<?php echo CYTOLIFE_SLUG_POPULAR_PRODUCTS; ?>">Популярное</button>
                    </div>
                <?php endif; ?>

                <div class="tabs__row">
                    <?php foreach ($categories as $cat) : ?>
                        <button class="button button-filter-js" data-filter="<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></button>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="tabs__mob">
                <div class="tabs__row">
                    <button class="tabs__mob-link button-filter-js" data-filter="<?php echo CYTOLIFE_SLUG_NEW_PRODUCTS; ?>">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/category-1.png" alt="Новинки" />
                        <span>Новинки</span>
                    </button>
                    <button class="tabs__mob-link button-filter-js" data-filter="<?php echo CYTOLIFE_SLUG_POPULAR_PRODUCTS; ?>">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/category-2.png" alt="Популярное" />
                        <span>Популярное</span>
                    </button>
                </div>

                <div class="swiper swiper-tabs">
                    <div class="swiper-wrapper">
                        <?php foreach ($categories as $cat) : ?>
                            <div class="swiper-slide">
                                <button class="button button-filter-js" data-filter="<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></button>
                            </div>
                        <?php endforeach; ?>
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
            <div class="row">
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
            <!-- /row -->

            <?php if (is_shop()) : ?>
                <div class="catalog-product__more">
                    <button class="button button--bg-light button-more-js">
                        Загрузить еще
                        <svg class="icon">
                            <use href="#icon-arrow"></use>
                        </svg>
                    </button>
                </div>
                <!-- /catalog-product__more -->
            <?php endif; ?>

        </div>
        <!-- /catalog-product__list -->



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
<?php endif; ?>

<?php if (is_product_category()) : ?>
    <section class="category-adv section section--pt">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="section-header-title">Ключевые преимущества</h2>

                    <div class="category-adv__list">
                        <div class="category-adv__list-item">
                            <div class="category-adv__list-item-header">
                                <div class="category-adv__list-item-number">01</div>
                                <h3 class="category-adv__list-item-title">Клиническая обоснованность</h3>
                            </div>

                            <div class="category-adv__list-item-footer">
                                Разработки основаны на современных научных исследованиях и подтверждены практическим применением.
                            </div>
                        </div>

                        <div class="category-adv__list-item">
                            <div class="category-adv__list-item-header">
                                <div class="category-adv__list-item-number">02</div>
                                <h3 class="category-adv__list-item-title">Высокий профиль безопасности</h3>
                            </div>

                            <div class="category-adv__list-item-footer">
                                Препараты проходят строгий контроль качества и могут использоваться в работе с пациентами с
                                различными типами кожи.
                            </div>
                        </div>

                        <div class="category-adv__list-item">
                            <div class="category-adv__list-item-header">
                                <div class="category-adv__list-item-number">03</div>
                                <h3 class="category-adv__list-item-title">Эффективные протоколы</h3>
                            </div>

                            <div class="category-adv__list-item-footer">
                                Средства позволяют врачу выстраивать индивидуальные программы коррекции: от биоревитализации и
                                мезотерапии до комплексного anti-age ухода.
                            </div>
                        </div>

                        <div class="category-adv__list-item">
                            <div class="category-adv__list-item-header">
                                <div class="category-adv__list-item-number">04</div>
                                <h3 class="category-adv__list-item-title">Интеграция в практику</h3>
                            </div>

                            <div class="category-adv__list-item-footer">
                                Подходят для использования как в монопроцедурах, так и в сочетании с аппаратными методиками,
                                усиливая результат.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="category-adv__img">
                        <img class="category-adv__img-desktop" src="<?php echo get_template_directory_uri() ?>/assets/images/category-adv.jpg" alt="#">
                        <img class="category-adv__img-mob" src="<?php echo get_template_directory_uri() ?>/assets/images/category-adv-mob.jpg" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<section id="certificate" class="catalog-cert certificate section section--pt">
    <div class="container">
        <div class="section-header">
            <h2 class="section-header-title">Сертификаты</h2>
            <div class="section-header-subtitle">
                Вся продукция Laboratory Cytolife имеет регистрационные удостоверения и<br />проходит проверку в
                соответствии с российским законодательством.
            </div>
        </div>

        <?php get_template_part('parts/certificate', 'slider'); ?>
    </div>
</section>
<!-- /certificate -->



<?php

do_action('woocommerce_after_main_content');

do_action('woocommerce_sidebar');

get_footer();

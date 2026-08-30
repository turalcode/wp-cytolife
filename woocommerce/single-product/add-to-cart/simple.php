<?php

/**
 * Simple product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/simple.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 10.2.0
 */

defined('ABSPATH') || exit;

global $product;

if (! $product->is_purchasable()) {
    return;
}

echo wc_get_stock_html($product); // WPCS: XSS ok.

if ($product->is_in_stock()) : ?>
    <?php do_action('woocommerce_before_add_to_cart_form'); ?>

    <form class="cart" action="<?php echo esc_url(apply_filters('woocommerce_add_to_cart_form_action', $product->get_permalink())); ?>" method="post" enctype='multipart/form-data'>
        <?php do_action('woocommerce_before_add_to_cart_button'); ?>

        <div class="single-product products__item-footer">
            <?php if (CYTOLIFE_IS_LOGIN) : ?>
                <!-- Если продукт "НЕ ТОЛЬКО" для медперсонала -->
                <?php if (!get_field('product_ismedic')) : ?>
                    <?php
                    do_action('woocommerce_before_add_to_cart_quantity');

                    woocommerce_quantity_input(
                        array(
                            'min_value'   => $product->get_min_purchase_quantity(),
                            'max_value'   => $product->get_max_purchase_quantity(),
                            'input_value' => isset($_POST['quantity']) ? wc_stock_amount(wp_unslash($_POST['quantity'])) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
                        )
                    );

                    do_action('woocommerce_after_add_to_cart_quantity');
                    ?>

                    <button type="submit" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>" class="single_add_to_cart_button button alt<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>"><?php echo esc_html($product->single_add_to_cart_text()); ?>
                        <svg class="icon">
                            <use href="#icon-arrow"></use>
                        </svg>
                    </button>

                    <button class="product__like wishlist-icon-js <?php echo cytolife_is_wishlist($product->get_id()) ? 'active' : '' ?>" data-id="<?php echo $product->get_id(); ?>">
                        <svg class="icon">
                            <use href="#icon-heart"></use>
                        </svg>

                        <div class="ajax-loader">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/spinner.svg" alt="Анимация загрузки">
                        </div>
                    </button>
                <?php else : ?>
                    <!-- Если продукт "ТОЛЬКО" для медиков или косметологов -->
                    <?php if (CYTOLIFE_IS_MEDIC || (CYTOLIFE_IS_CST && get_field('product_iscst'))) : ?>
                        <?php
                        do_action('woocommerce_before_add_to_cart_quantity');

                        woocommerce_quantity_input(
                            array(
                                'min_value'   => $product->get_min_purchase_quantity(),
                                'max_value'   => $product->get_max_purchase_quantity(),
                                'input_value' => isset($_POST['quantity']) ? wc_stock_amount(wp_unslash($_POST['quantity'])) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
                            )
                        );

                        do_action('woocommerce_after_add_to_cart_quantity');
                        ?>

                        <button type="submit" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>" class="single_add_to_cart_button button alt<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>"><?php echo esc_html($product->single_add_to_cart_text()); ?>
                            <svg class="icon">
                                <use href="#icon-arrow"></use>
                            </svg>
                        </button>

                        <button class="product__like wishlist-icon-js <?php echo cytolife_is_wishlist($product->get_id()) ? 'active' : '' ?>" data-id="<?php echo $product->get_id(); ?>">
                            <svg class="icon">
                                <use href="#icon-heart"></use>
                            </svg>
                            <div class="ajax-loader">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/spinner.svg" alt="Анимация загрузки">
                            </div>
                        </button>
                    <?php else : ?>
                        <div class="products__item-counter disabled">
                            <button class="button-reset" aria-label="Уменьшить количество">
                                <svg class="icon">
                                    <use href="#icon-minus"></use>
                                </svg>
                            </button>

                            <input type="number" step="1" min="1" max="99" aria-label="Количество" value="1" />

                            <button class="button-reset" aria-label="Увеличить количество">
                                <svg class="icon">
                                    <use href="#icon-plus"></use>
                                </svg>
                            </button>
                        </div>

                        <button class="button h-100 disabled">В корзину
                            <svg class="icon">
                                <use href="#icon-arrow"></use>
                            </svg>
                        </button>

                        <button class="product__like wishlist-icon-js <?php echo cytolife_is_wishlist($product->get_id()) ? 'active' : '' ?>" data-id="<?php echo $product->get_id(); ?>">
                            <svg class="icon">
                                <use href="#icon-heart"></use>
                            </svg>
                            <div class="ajax-loader">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/spinner.svg" alt="Анимация загрузки">
                            </div>
                        </button>
                    <?php endif; ?>
                <?php endif; ?>
            <?php else : ?>
                <a class="button login-button-js" href="#">
                    Авторизоваться
                    <svg class="icon">
                        <use href="#icon-arrow"></use>
                    </svg>
                </a>
            <?php endif; ?>

            <?php do_action('woocommerce_after_add_to_cart_button'); ?>
        </div>
        <!-- /single-product products__item-footer -->
    </form>

    <?php do_action('woocommerce_after_add_to_cart_form'); ?>
<?php endif; ?>
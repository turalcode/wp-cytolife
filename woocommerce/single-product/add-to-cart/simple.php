<?php

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
            <?php endif; ?>

            <?php if (CYTOLIFE_IS_LOGIN) : ?>
                <button type="submit" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>" class="single_add_to_cart_button button alt<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>"><?php echo esc_html($product->single_add_to_cart_text()); ?>
                    <svg class="icon">
                        <use href="#icon-arrow"></use>
                    </svg>
                </button>
            <?php else : ?>
                <a class="button" href="#">
                    Авторизоваться
                    <svg class="icon">
                        <use href="#icon-arrow"></use>
                    </svg>
                </a>
            <?php endif; ?>

            <?php do_action('woocommerce_after_add_to_cart_button'); ?>

            <?php if (CYTOLIFE_IS_LOGIN) : ?>
                <button class="single-product product__like wishlist-icon-js <?php echo cytolife_is_wishlist($product->get_id()) ? 'active' : '' ?>" data-id="<?php echo $product->get_id(); ?>">
                    <svg class="icon">
                        <use href="#icon-heart"></use>
                    </svg>

                    <div class="ajax-loader">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/spinner.svg" alt="Анимация загрузки">
                    </div>
                </button>
            <?php endif; ?>
        </div>
    </form>

    <?php do_action('woocommerce_after_add_to_cart_form'); ?>
<?php endif; ?>
<?php

add_filter('woocommerce_enqueue_styles', '__return_false');

// КАРТОЧКА ТОВАРА

remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);
add_action('woocommerce_before_shop_loop_item', 'woocommerce_show_product_loop_sale_flash', 10);

remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
add_action('woocommerce_shop_loop_item_title', function () {
    global $product;
    echo '<h3 class="products__item-title">
        <a href="' . $product->get_permalink() . '">' . $product->get_title() . '</a>
    </h3>';
});

add_filter('woocommerce_product_add_to_cart_text', 'truemisha_product_btn_text', 20, 2);

function truemisha_product_btn_text($text, $product)
{
    $text = 'В корзину';
    return $text;
}

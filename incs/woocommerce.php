<?php

// СБРОС СТИЛЕЙ WOOCOMMERCE

add_filter('woocommerce_enqueue_styles', '__return_false');

// ХЛЕБНЫЕ КРОШКИ

add_filter('woocommerce_breadcrumb_defaults', function () {
    return array(
        'delimiter'   => '<span>/</span>',
        'wrap_before' => '<nav class="breadcrumbs">',
        'wrap_after'  => '</nav>',
        'before'      => '',
        'after'       => '',
        'home'        => 'Главная',
    );
});

// CONTENT PRODUCT

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

// ARCHIVE PRODUCT

remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
remove_action('woocommerce_shop_loop_header', 'woocommerce_product_taxonomy_archive_header', 10);
remove_action('woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10);
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
remove_action('woocommerce_after_shop_loop', 'woocommerce_pagination', 10);
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

// CONTENT SINGLE PRODUCT

remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20);
add_filter('wc_add_to_cart_message_html', '__return_null');

// CART

remove_action('woocommerce_cart_is_empty', 'wc_empty_cart_message', 10);
remove_action('woocommerce_cart_collaterals', 'woocommerce_cart_totals', 10);

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

remove_action('woocommerce_before_single_product', 'woocommerce_output_all_notices', 10);
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20);
add_filter('wc_add_to_cart_message_html', '__return_null');

// CART

remove_action('woocommerce_cart_is_empty', 'wc_empty_cart_message', 10);
remove_action('woocommerce_cart_collaterals', 'woocommerce_cart_totals', 10);
remove_action('woocommerce_before_cart', 'woocommerce_output_all_notices', 10);
remove_action('woocommerce_cart_is_empty', 'woocommerce_output_all_notices', 5);

add_filter('woocommerce_add_to_cart_fragments', function ($fragments) {
    $fragments["a.cart-link"] = '
        <a class="cart-link" href="' . wc_get_cart_url() . '">
            <svg class="icon">
            <use href="#icon-cart"></use>
            </svg>
            <span>' . count(WC()->cart->get_cart()) . '</span>
        </a>
    ';

    return $fragments;
});

add_action('wp_footer', function () {
    if (!(is_cart() || is_product())) return;
?>
    <script type="text/javascript">
        jQuery(function($) {
            $(document).on('click', 'button.cart-increment-js, button.cart-decrement-js', function(e) {
                e.preventDefault();

                var qty = $(this).parent('.quantity').find('.qty');
                var val = parseFloat(qty.val());
                var max = parseFloat(qty.attr('max'));
                var min = parseFloat(qty.attr('min'));
                var step = parseFloat(qty.attr('step'));

                if ($(this).is('.cart-increment-js')) {
                    if (max && (max <= val)) {
                        qty.val(max).change();
                    } else {
                        qty.val(val + step).change();
                    }
                } else {
                    if (min && (min >= val)) {
                        qty.val(min).change();
                    } else if (val > 1) {
                        qty.val(val - step).change();
                    }
                }

                $('[name="update_cart"]').trigger('click');
            });

            // function debounce(func, wait, immediate) {
            //     var timeout;
            //     return function() {
            //         var context = this,
            //             args = arguments;
            //         var later = function() {
            //             timeout = null;
            //             if (!immediate) func.apply(context, args);
            //         };
            //         var callNow = immediate && !timeout;
            //         clearTimeout(timeout);
            //         timeout = setTimeout(later, wait);
            //         if (callNow) func.apply(context, args);
            //     };
            // }
        });
    </script>
<?php
});

add_filter('woocommerce_cart_subtotal', function ($cart_subtotal) {
    $discount_total = 0;

    foreach (WC()->cart->get_cart() as $cart_item_key => $values) {
        $_product = $values['data'];

        if ($_product->is_on_sale()) {
            $regular_price = $_product->get_regular_price();
            $sale_price = $_product->get_sale_price();
            $discount = ($regular_price - $sale_price) * $values['quantity'];
            $discount_total += $discount;
        }
    }

    $cart_subtotal = sprintf('<div>Сумма: %s</div><div>Скидка: %s ₽</div>', $cart_subtotal, $discount_total);
    return $cart_subtotal;
}, 25);

add_filter('woocommerce_shipping_package_details_heading', 'custom_shipping_heading_text');
function custom_shipping_heading_text($heading)
{
    cytolife_dump($heading);
    return $heading;
}

// LOGIN

add_action('woocommerce_login_form_start', 'truemisha_form_registration_fields', 25);

function truemisha_form_registration_fields()
{
    $login_privacy_policy = ! empty($_POST['login_privacy_policy']) ? $_POST['login_privacy_policy'] : '0';
    // echo '<p class="form-row form-row-first">
    // 	<label for="kind_of_name">Имя <span class="required">*</span></label>
    // 	<input type="text" class="input-text" name="login_privacy_policy" id="kind_of_name" value="' . esc_attr($login_privacy_policy) . '" />
    // </p>';

    echo '
    <div class="form-cb__group-check">
        <label>
            <input type="checkbox" name="login_privacy_policy" value="' . esc_attr($login_privacy_policy) . '">

            <span>Я принимаю условия <a href="/private-policy/">Политики конфиденциальности</a> и даю <a href="/user-agreement/">согласие на обработку персональных данных</a> в соответствии с Федеральным законом №152-ФЗ «О персональных данных»
            </span>
        </label>
    </div>
    ';
}

// add_filter('woocommerce_registration_errors', 'truemisha_validate_registration', 25);

// function truemisha_validate_registration($errors)
// {
//     if (empty($_POST['login_privacy_policy'])) {
//         $errors->add('name_err', '<strong>Ошибка</strong>: Заполните Имя и Фамилию плз.');
//     }

//     return $errors;
// }

// add_action('woocommerce_created_customer', 'truemisha_save_fields', 25);

// function truemisha_save_fields($user_id)
// {
//     if (isset($_POST['login_privacy_policy'])) {
//         update_user_meta($user_id, 'login_privacy_policy', sanitize_text_field($_POST['login_privacy_policy']));
//     }
// }

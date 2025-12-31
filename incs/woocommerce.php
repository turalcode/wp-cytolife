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

// REGISTER

add_filter('woocommerce_registration_errors', function ($errors) {
    // Education*
    if (isset($_POST['user_education']) && empty(trim($_POST['user_education']))) {
        $errors->add('user_education_error', 'Образование является обязательным полем.');
    }

    // Education match*
    if (isset($_POST['user_education']) && !empty(trim($_POST['user_education']))) {
        if ($_POST['user_education'] != CYTOLIFE_ROLE_RETAIL && $_POST['user_education'] != CYTOLIFE_ROLE_MEDIC) {
            $errors->add('user_education_error', 'Образование не соотвествует выпадающему списку');
        }
    }

    // If medic education*
    if (isset($_POST['user_education']) && $_POST['user_education'] == CYTOLIFE_ROLE_MEDIC) {
        $errors = file_validation($_FILES['user_documents'], $errors);
    }

    // First name*
    if (isset($_POST['user_firstname']) && empty(trim($_POST['user_firstname']))) {
        $errors->add('reg_name_error', 'Имя является обязательным полем.');
    }

    // Last name*
    if (isset($_POST['user_lastname']) && empty(trim($_POST['user_lastname']))) {
        $errors->add('reg_lastname_error', 'Фамилия является обязательным полем.');
    }

    // City*
    if (isset($_POST['user_city']) && empty(trim($_POST['user_city']))) {
        $errors->add('reg_city_error', 'Город является обязательным полем.');
    }

    // Phone*
    if (isset($_POST['user_tel']) && empty(trim($_POST['user_tel']))) {
        $errors->add('reg_tel_error', 'Телефон является обязательным полем.');
    }

    // Policy*
    if (isset($_POST['policy']) && empty(trim($_POST['policy']))) {
        $errors->add('reg_policy_error', 'Необходимо принять условия Политики конфиденциальности и дать согласие на обработку персональных данных в соответствии с Федеральным законом №152-ФЗ «О персональных данных»');
    }

    // Email*
    if (isset($_POST['email']) && empty(trim($_POST['email']))) {
        $errors->add('reg_email_error', 'Email является обязательным полем.');
    }

    // Password*
    $pass = isset($_POST['password']) && !empty($_POST['password']) ? str_replace(' ', '', $_POST['password']) : '';

    if (!$pass) {
        $errors->add('reg_pass_error', 'Пароль является обязательным полем.');
    }

    if (strlen($pass) < 6 || strlen($pass) > 20) {
        $errors->add('reg_pass_length_error', 'Пароль должен содержать не менее 6 и не более 20 символов');
    }

    // Password2*
    $pass2 = isset($_POST['password2']) && !empty($_POST['password2']) ? str_replace(' ', '', $_POST['password2']) : '';

    if (!$pass2) {
        $errors->add('reg_pass2_error', 'Повторный пароль является обязательным полем.');
    }

    // Password match*
    if ($pass != $pass2) {
        $errors->add('reg_pass_dont_match_error', 'Пароли не совпадают');
    }

    return $errors;
}, 25);

add_action('woocommerce_created_customer', function ($user_id) {
    // First name*
    update_user_meta($user_id, 'first_name', sanitize_text_field($_POST['user_firstname']));
    update_user_meta($user_id, 'billing_first_name', sanitize_text_field($_POST['user_firstname']));

    // Last name*
    update_user_meta($user_id, 'last_name', sanitize_text_field($_POST['user_lastname']));
    update_user_meta($user_id, 'billing_last_name', sanitize_text_field($_POST['user_lastname']));

    // City*
    update_user_meta($user_id, 'user_city', sanitize_text_field($_POST['user_city']));

    // Phone*
    update_user_meta($user_id, 'user_tel', sanitize_text_field($_POST['user_tel']));

    // Policy*
    update_user_meta($user_id, 'policy', sanitize_text_field($_POST['policy']));

    // Education*
    update_user_meta($user_id, 'user_education', sanitize_text_field($_POST['user_education']));

    // If medic education*
    if (isset($_POST['user_education']) && $_POST['user_education'] == CYTOLIFE_ROLE_MEDIC) {
        $files = $_FILES['user_documents'];
        $user_docs = array();

        foreach ($files['name'] as $key => $value) {
            // Пропускаем пустые или ошибочные загрузки
            if ($files['error'][$key] !== UPLOAD_ERR_OK) {
                continue;
            }

            $file = array(
                'name'     => sanitize_file_name($files['name'][$key]),
                'type'     => $files['type'][$key],
                'tmp_name' => $files['tmp_name'][$key],
                'error'    => $files['error'][$key],
                'size'     => $files['size'][$key],
            );

            $movefile = wp_handle_upload($file, ['test_form' => false]);

            if ($movefile && empty($movefile['error'])) {
                $user_docs[] = $movefile['url'];
            }
        }

        if (!empty($user_docs)) {
            update_user_meta($user_id, 'user_documents', $user_docs);
        }
    }
}, 25);

// МЕНЮ В ЛИЧНОМ КАБИНЕТЕ

add_filter('woocommerce_account_menu_items', function ($items) {
    if (isset($items['dashboard'])) {
        unset($items['dashboard']);
    }

    if (isset($items['edit-account'])) {
        unset($items['edit-account']);
        $temp = ['edit-account' => 'Мой профиль'];
        $items = array_merge($temp, $items);
    }

    if (isset($items['downloads'])) {
        $items['downloads'] = 'Обучение';
    }

    if (isset($items['edit-address'])) {
        unset($items['edit-address']);
    }

    $items['support'] = 'Поддержка';
    $items['change-password'] = 'Смена пароля';

    if (isset($items['customer-logout'])) {
        unset($items['customer-logout']);
    }

    return $items;
}, 10);

add_action('init', function () {
    add_rewrite_endpoint('support', EP_PAGES);
    add_rewrite_endpoint('change-password', EP_PAGES);
});

add_action('woocommerce_account_support_endpoint', function () {
    get_template_part('woocommerce/myaccount/support');
});

add_action('woocommerce_account_change-password_endpoint', function () {
    get_template_part('woocommerce/myaccount/change-password');
});

// Login redirect

add_filter('woocommerce_login_redirect', function () {
    return site_url('/my-account/');
}, 10, 2);

// Edit account validate

add_action('woocommerce_save_account_details_errors', function ($errors) {
    // User photo
    if (isset($_FILES['user_photo']) && !empty($_FILES['user_photo']['name'])) {
        if (is_array($_FILES['user_photo']['name'])) {
            $errors->add('user_photo_count_error', 'Допускается загрузка только 1 фотографии.');
        } else {
            $file = $_FILES['user_photo'];
            $allowed_types = array('image/jpeg', 'image/png');
            $max_file_size = 2 * 1024 * 1024; // 2 MB

            if ($file['error'] !== UPLOAD_ERR_OK) {
                $errors->add('user_photo_upload_error', 'Возникла ошибка при загрузке фотографии.');
            }

            $file_tmp_name = $file['tmp_name'];
            $file_name = sanitize_file_name($file['name']);

            // WordPress функция для безопасной проверки типа файла
            $wp_file_type = wp_check_filetype($file_name);
            $checked_type = $wp_file_type['type'];

            // Валидация типа файла
            if (!in_array($checked_type, $allowed_types)) {
                unlink($file_tmp_name);
                $errors->add('user_photo_type_error', 'Неверный тип фотографии. Допускаются файлы формата JPG, JPEG, PNG.');
            }

            if ($file['size'] > $max_file_size) {
                $errors->add('user_photo_size_error', 'Размер фотографии превышает 2MB.');
            }
        }
    }

    // Education*
    if (isset($_POST['user_education']) && empty(trim($_POST['user_education']))) {
        $errors->add('user_education_error', 'Образование является обязательным полем.');
    }

    if (isset($_POST['user_education']) && !empty(trim($_POST['user_education']))) {
        if ($_POST['user_education'] != CYTOLIFE_ROLE_RETAIL && $_POST['user_education'] != CYTOLIFE_ROLE_MEDIC) {
            $errors->add('user_education_error', 'Образование не соотвествует выпадающему списку');
        }
    }

    // If medic education*
    if (isset($_POST['user_education']) && $_POST['user_education'] == CYTOLIFE_ROLE_MEDIC) {
        $errors = file_validation($_FILES['user_documents'], $errors);
    }

    // Phone*
    if (isset($_POST['user_tel']) && empty(trim($_POST['user_tel']))) {
        $errors->add('user_tel_error', 'Телефон является обязательным полем.');
    }

    // City*
    if (isset($_POST['user_city']) && empty(trim($_POST['user_city']))) {
        $errors->add('user_city_error', 'Город является обязательным полем.');
    }

    return $errors;
}, 10, 25);


add_action('woocommerce_save_account_details', function ($user_id) {
    // First name*
    update_user_meta($user_id, 'billing_first_name', sanitize_text_field($_POST['account_first_name']));

    // Last name*
    update_user_meta($user_id, 'billing_last_name', sanitize_text_field($_POST['account_last_name']));

    // Middle name
    if (isset($_POST['user_middle_name']) && !empty(trim($_POST['user_middle_name']))) {
        update_user_meta($user_id, 'middle_name', sanitize_text_field($_POST['user_middle_name']));
    }

    // Phone*
    update_user_meta($user_id, 'user_tel', sanitize_text_field($_POST['user_tel']));

    // City*
    update_user_meta($user_id, 'user_city', sanitize_text_field($_POST['user_city']));

    // User photo
    if (isset($_FILES['user_photo']) && !empty($_FILES['user_photo']['name'])) {
        $user_photo = $_FILES['user_photo'];
        $file = array(
            'name'     => sanitize_file_name($user_photo['name']),
            'type'     => $user_photo['type'],
            'tmp_name' => $user_photo['tmp_name'],
            'error'    => $user_photo['error'],
            'size'     => $user_photo['size'],
        );
        $movefile = wp_handle_upload($file, ['test_form' => false]);
        update_user_meta($user_id, 'user_photo', $movefile['url']);
    } else {
        update_user_meta($user_id, 'user_photo', get_template_directory_uri() . '/assets/images/profile-placeholder.jpg');
    }

    // Education* (если статус мед. работника на рассмотрении, то user_education не отображается в форме)
    if (isset($_POST['user_education'])) {
        update_user_meta($user_id, 'user_education', sanitize_text_field($_POST['user_education']));
    }

    // If medic education*
    if (isset($_POST['user_education']) && $_POST['user_education'] == CYTOLIFE_ROLE_MEDIC) {
        $files = $_FILES['user_documents'];
        $user_docs = array();

        foreach ($files['name'] as $key => $value) {
            // Пропускаем пустые или ошибочные загрузки
            if ($files['error'][$key] !== UPLOAD_ERR_OK) {
                continue;
            }

            $file = array(
                'name'     => sanitize_file_name($files['name'][$key]),
                'type'     => $files['type'][$key],
                'tmp_name' => $files['tmp_name'][$key],
                'error'    => $files['error'][$key],
                'size'     => $files['size'][$key],
            );

            $movefile = wp_handle_upload($file, ['test_form' => false]);

            if ($movefile && empty($movefile['error'])) {
                $user_docs[] = $movefile['url'];
            }
        }

        if (!empty($user_docs)) {
            update_user_meta($user_id, 'user_documents', $user_docs);
        }
    }

    // $log_data = print_r($_POST, true);
    // file_put_contents(ABSPATH . 'cl_debug.log', $log_data . "\n", FILE_APPEND);
}, 25);

function file_validation($files, $errors)
{
    if (isset($files) && !empty($files['name'])) {
        if (is_array($files['name']) && count($files['name']) < 4) {
            $allowed_types = array('image/jpeg', 'image/png', 'application/pdf');
            $max_file_size = 2 * 1024 * 1024; // 2 MB

            foreach ($files['name'] as $key => $value) {
                // Пропускаем пустые или ошибочные загрузки
                if ($files['error'][$key] !== UPLOAD_ERR_OK) {
                    $errors->add('user_documents_upload_error', 'Не удалось загрузить документ');
                    continue;
                }

                $file_tmp_name = $files['tmp_name'][$key];
                $file_name = sanitize_file_name($files['name'][$key]);

                // WordPress функция для безопасной проверки типа файла
                $wp_file_type = wp_check_filetype($file_name);
                $checked_type = $wp_file_type['type'];

                // Валидация типа файла
                if (!in_array($checked_type, $allowed_types)) {
                    unlink($file_tmp_name);
                    $errors->add('user_documents_type_error', 'Неверный тип файла. Допускаются файлы формата JPG, JPEG, PNG и PDF.');
                }

                // Валидация размера файла
                if ($files['size'][$key] > $max_file_size) {
                    unlink($file_tmp_name);
                    $errors->add('user_documents_size_error', 'Размер фотографии превышает 2MB.');
                }
            }
        } else {
            $errors->add('user_documents_count_error', 'Допускается загрузка не более 3 файлов.');
        }
    } else {
        $errors->add('user_documents_error', 'Если выбрано мед. образование, то необходимо прикрепить диплом.');
    }

    return $errors;
}

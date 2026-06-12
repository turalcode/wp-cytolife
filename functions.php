<?php
add_filter('woocommerce_add_error', 'change_wc_login_error_text');

function change_wc_login_error_text($error)
{
	// Список фраз, которые мы ищем в тексте ошибки (для русской версии)
	$search_terms = array('Неверный логин');

	foreach ($search_terms as $term) {
		if (strpos($error, $term) !== false) {
			// Здесь напишите ваш новый текст уведомления
			return 'Неверный email или пароль.';
		}
	}

	return $error;
}

if (is_admin() && current_user_can('manage_options')) {
	// 1. Регистрируем колонку
	add_filter('manage_users_columns', function ($columns) {
		$new_columns = array();

		foreach ($columns as $key => $title) {
			// Перед тем как добавить 'role', вставляем нашу колонку
			if ($key === 'role') {
				$new_columns['medic_status'] = 'Статус мед. работника';
			}
			$new_columns[$key] = $title;
		}

		return $new_columns;
	});

	// 2. Выводим данные
	add_filter('manage_users_custom_column', function ($value, $column_name, $user_id) {
		// Проверка нужной колонки
		if ('medic_status' === $column_name) {
			// Проверяем наличие WooCommerce, чтобы не было Fatal Error
			if (!function_exists('wc_user_has_role')) {
				return 'Ошибка: WC не активен';
			}

			$education = get_user_meta($user_id, 'user_education', true);

			// Если пользователь имеет роль "Клиент" и образование указано как "Медик"
			if (wc_user_has_role($user_id, CYTOLIFE_ROLE_CUSTOMER) && $education === CYTOLIFE_ROLE_MEDIC) {
				$value = '<span style="color: tomato">Ожидает подтверждение</span>';
			} else if (wc_user_has_role($user_id, CYTOLIFE_ROLE_MEDIC)) {
				$value = '<span style="color: #6ccc61">Подтвержден</span>';
			} else {
				$value = '-';
			}
		}

		return $value;
	}, 10, 3);

	// Сортировка вывода пользователей (начиная с ожидающих подтверждение мед. образования)
	add_action('pre_user_query', function ($user_search) {
		// Проверка, что мы в админке на нужной странице
		if (!is_admin()) return;
		$screen = get_current_screen();
		if (!$screen || $screen->id !== 'users') return;

		global $wpdb;

		// 1. Безопасно добавляем JOIN для user_education, только если его нет
		// Используем уникальный алиас 'mt_med_status', чтобы не было конфликтов с WP
		if (!strpos($user_search->query_from, 'mt_med_status')) {
			$user_search->query_from .= " LEFT JOIN {$wpdb->usermeta} AS mt_med_status ON ({$wpdb->users}.ID = mt_med_status.user_id AND mt_med_status.meta_key = 'user_education')";
		}

		// 2. Ключ мета-данных для ролей (учитывает префикс базы, например wp_capabilities)
		$cap_key = $wpdb->prefix . 'capabilities';

		// 3. Формируем условие: сначала customer + medic (даем 1), остальные (даем 2)
		// Мы используем EXISTS или подзапрос для ролей, так как это надежнее
		$custom_order = "CASE 
        WHEN EXISTS (
            SELECT 1 FROM {$wpdb->usermeta} 
            WHERE user_id = {$wpdb->users}.ID 
            AND meta_key = '{$cap_key}' 
            AND meta_value LIKE '%\"customer\"%'
        ) AND mt_med_status.meta_value = 'medic' 
        THEN 1 ELSE 2 END ASC";

		// 4. Внедряем в ORDER BY
		if (empty($user_search->query_orderby)) {
			$user_search->query_orderby = "ORDER BY {$custom_order}";
		} else {
			// Убираем лишние ORDER BY, если они пролезли, и ставим наш приоритет первым
			$current_order = str_replace('ORDER BY', '', $user_search->query_orderby);
			$user_search->query_orderby = "ORDER BY {$custom_order}, {$current_order}";
		}
	}, 100);
}

// file_put_contents(ABSPATH . 'cl_debug.log', print_r($data) . "\n", FILE_APPEND);

// Сортировка мероприятий по ACF полю "event_datafilter" перед выводом (по возрастанию, по актуальности).
add_action('pre_get_posts', function ($query) {
	// Применяем только для "мероприятий"
	if (!is_admin() && $query->is_main_query() && is_post_type_archive('events')) {
		$current_date = date('Ymd'); // Получаем текущую дату в формате ACF (Ymd)
		$meta_key = 'event_datefilter'; // Название ACF поля

		$query->set('meta_key', $meta_key);
		$query->set('orderby', 'meta_value_num'); // Сортируем как число
		$query->set('order', 'ASC');

		// Добавляем фильтрацию: только те, где дата больше или равна текущей
		$meta_query = array(
			array(
				'key'     => $meta_key,
				'value'   => $current_date,
				'compare' => '>=', // Больше или равно
				'type'    => 'NUMERIC' // Сравниваем как числа
			)
		);

		$query->set('meta_query', $meta_query);
	}
}, 25);

add_action('after_setup_theme', function () {
	add_theme_support('woocommerce');
	add_theme_support('title-tag');
	// add_theme_support('post-thumbnail');

	register_nav_menus(
		array(
			'header-menu' => __('Header menu', 'cytolife'),
		)
	);
});

add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style('cytolife-swiper', 'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css');
	wp_enqueue_style('cytolife-index', get_template_directory_uri() . '/assets/css/index.css');

	// wp_enqueue_script('jquery');
	wp_enqueue_script('cytolife-swiper', 'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js', array(), false, true);
	wp_enqueue_script('cytolife-jquery-cookie', get_template_directory_uri() . '/assets/js/jquery.cookie.js', array(), false, true);
	wp_enqueue_script('cytolife-jquery-validate', get_template_directory_uri() . '/assets/js/jquery.validate.js', array(), false, true);
	wp_enqueue_script('cytolife-index', get_template_directory_uri() . '/assets/js/index.js', array(), false, true);
});

require_once get_template_directory() . '/incs/constants.php';
require_once get_template_directory() . '/incs/woocommerce.php';
require_once get_template_directory() . '/incs/customizer.php';
require_once get_template_directory() . '/incs/cpt.php';
require_once get_template_directory() . '/incs/roles.php';
require_once get_template_directory() . '/incs/share.php';
require_once get_template_directory() . '/incs/ajax-search.php';
require_once get_template_directory() . '/incs/acf.php';

function getFirstWord($text)
{
	$spacePos = strpos(trim($text), ' ');

	if ($spacePos !== false && mb_strlen($text) > 6) {
		$text = substr($text, 0, $spacePos);
		$text .= '...';
	}

	$text = str_replace(' ', '&nbsp;', $text);
	return $text;
}

function cytolife_is_wishlist($product_id)
{
	$wishlist = cytolife_get_wishlist();
	return array_search($product_id, $wishlist) !== false;
}

function cytolife_get_wishlist()
{
	$wishlist = isset($_COOKIE['cytolife_wishlist']) ? $_COOKIE['cytolife_wishlist'] : [];

	if ($wishlist) {
		$wishlist = json_decode($wishlist);
	}

	return $wishlist;
}

function cytolife_dump($data)
{
	echo "<pre>" . print_r($data, 1) . "</pre>";
}

function cytolife_str_replace_phone($phone)
{
	// 1. Удаляем всё, кроме цифр
	$phone = preg_replace('/\D/', '', $phone);

	// 2. Если номер начинается с 8 и его длина 11 цифр — меняем 8 на 7
	if (strlen($phone) === 11 && strpos($phone, '8') === 0) {
		$phone[0] = '7';
	}

	return $phone;
};

function cytolife_formatted_phone($phone)
{
	// 1. Очищаем строку: оставляем только цифры
	$phone = preg_replace('/[^0-9]/', '', $phone);
	// 2. Форматируем по маске: +7 (XXX) XXX-XX-XX
	// Если номер начинается с 7 или 8 (11 цифр)
	if (strlen($phone) == 11) {
		$formatted = preg_replace(
			'/(\d{1})(\d{3})(\d{3})(\d{2})(\d{2})/',
			'+7 ($2) $3-$4-$5',
			$phone
		);
	} else {
		$formatted = $phone; // Если формат не совпал, возвращаем как было
	}

	return $formatted;
}

function get_shorte_name($name)
{
	$words = explode(' ', $name);

	if (count($words) > 1) {
		for ($i = 1; $i < count($words); $i++) {
			$words[$i] = mb_substr($words[$i], 0, 1, 'UTF-8') . '.';
		}
	}

	$result = implode(' ', $words);
	return $result;
}

function check_user_active_orders($user_id)
{
	$args = array(
		'customer_id' => $user_id,
		'status' => array('pending', 'processing', 'on-hold'), // Статусы активных заказов
		'limit' => 1, // Нам не нужно много заказов, достаточно одного, чтобы проверить наличие
	);

	$orders = wc_get_orders($args);

	if (empty($orders)) {
		return false; // Нет активных заказов
	} else {
		return true; // Есть активные заказы
	}
}

add_filter('the_content', function ($content) {
	if (!is_single()) return $content; // Работает только на страницах записей

	return preg_replace_callback('/<h2(.*?)>(.*?)<\/h2>/i', function ($matches) {
		$attrs = $matches[1]; // Существующие атрибуты
		$title = $matches[2]; // Текст внутри <h2>

		// Транслитерация и очистка заголовка для ID
		$slug = sanitize_title(rus_to_lat($title));

		return "<h2{$attrs} id=\"{$slug}\">{$title}</h2>";
	}, $content);
});

function rus_to_lat($str)
{
	$tr = [
		"А" => "a",
		"Б" => "b",
		"В" => "v",
		"Г" => "g",
		"Д" => "d",
		"Е" => "e",
		"Ё" => "yo",
		"Ж" => "zh",
		"З" => "z",
		"И" => "i",
		"Й" => "j",
		"К" => "k",
		"Л" => "l",
		"М" => "m",
		"Н" => "n",
		"О" => "o",
		"П" => "p",
		"Р" => "r",
		"С" => "s",
		"Т" => "t",
		"У" => "u",
		"Ф" => "f",
		"Х" => "h",
		"Ц" => "ts",
		"Ч" => "ch",
		"Ш" => "sh",
		"Щ" => "shch",
		"Ъ" => "",
		"Ы" => "y",
		"Ь" => "",
		"Э" => "e",
		"Ю" => "yu",
		"Я" => "ya",
		"а" => "a",
		"б" => "b",
		"в" => "v",
		"г" => "g",
		"д" => "d",
		"е" => "e",
		"ё" => "yo",
		"ж" => "zh",
		"з" => "z",
		"и" => "i",
		"й" => "j",
		"к" => "k",
		"л" => "l",
		"м" => "m",
		"н" => "n",
		"о" => "o",
		"п" => "p",
		"р" => "r",
		"с" => "s",
		"т" => "t",
		"у" => "u",
		"ф" => "f",
		"х" => "h",
		"ц" => "ts",
		"ч" => "ch",
		"ш" => "sh",
		"щ" => "shch",
		"ъ" => "",
		"ы" => "y",
		"ь" => "",
		"э" => "e",
		"ю" => "yu",
		"я" => "ya",
		" " => "-",
		"." => "",
		"," => ""
	];
	return strtr($str, $tr);
}

// Получает массив всех ID из указанных тегов в контенте
function get_tag_ids_from_content($post_id = null, $tag)
{
	// 1. Получаем контент (если ID поста не передан, берем текущий)
	$content = get_post_field('post_content', $post_id);
	// 2. ОБЯЗАТЕЛЬНО применяем фильтры (чтобы сработала ваша функция транслитерации ID)
	$content = apply_filters('the_content', $content);

	$result = [];

	// 3. Регулярка: ищет id="..." и текст между <h2>...</h2>
	// $matches[1] — значение ID
	// $matches[2] — текст внутри тега
	preg_match_all('/<' . $tag . '[^>]+id=["\'](.*?)["\'][^>]*>(.*?)<\/' . $tag . '>/i', $content, $matches);

	if (! empty($matches[1])) {
		foreach ($matches[1] as $i => $anchor) {
			$result[] = [
				'id' => $anchor,
				'label'  => strip_tags($matches[2][$i]) // Убираем вложенные теги, если они есть
			];
		}
	}

	return $result;
}

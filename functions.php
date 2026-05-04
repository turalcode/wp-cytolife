<?php

// file_put_contents(ABSPATH . 'cl_debug.log', print_r($data) . "\n", FILE_APPEND);

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

// function cytolife_str_replace_phone($phone)
// {
// 	return str_replace(
// 		array(' ', '-', '+', ')', '('),
// 		array(
// 			'',
// 			'',
// 			'',
// 			'',
// 			''
// 		),
// 		$phone
// 	);
// };

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

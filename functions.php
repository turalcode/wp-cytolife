<?php

add_action('after_setup_theme', function () {
	add_theme_support('woocommerce');
	add_theme_support('title-tag');
	// add_theme_support( 'post-thumbnail' );

	register_nav_menus(
		array(
			'header-menu' => __('Header menu', 'cytolife'),
		)
	);
});

add_action('wp_enqueue_scripts', function () {
	$ver = '1.0.2';

	wp_enqueue_style('cytolife-swiper', 'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css');
	wp_enqueue_style('cytolife-index', get_template_directory_uri() . '/assets/css/index.css', array(), $ver);

	wp_enqueue_script('jquery');
	wp_enqueue_script('cytolife-swiper', 'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js', array(), false, true);
	wp_enqueue_script('cytolife-jquery-cookie', get_template_directory_uri() . '/assets/js/jquery.cookie.js', array(), false, true);
	wp_enqueue_script('cytolife-index', get_template_directory_uri() . '/assets/js/index.js', array(), $ver, true);
});

require_once get_template_directory() . '/incs/constants.php';
require_once get_template_directory() . '/incs/woocommerce.php';
require_once get_template_directory() . '/incs/customizer.php';
require_once get_template_directory() . '/incs/cpt.php';
require_once get_template_directory() . '/incs/roles.php';
require_once get_template_directory() . '/incs/share.php';

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
	return str_replace(
		array(' ', '-', '+', ')', '('),
		array(
			'',
			'',
			'',
			'',
			''
		),
		$phone
	);
};

// AJAX SEARCH

add_action('wp_ajax_ajax_search', 'cytolife_ajax_search');
add_action('wp_ajax_nopriv_ajax_search', 'cytolife_ajax_search');

function cytolife_ajax_search()
{
	$query = isset($_GET['query']) ? sanitize_text_field($_GET['query']) : '';

	if (strlen($query) < 2) {
		wp_send_json_error(['message' => 'Запрос слишком короткий']);
	}

	$args = [
		's' => $query,
		'post_type' => ['product'],
		'post_status' => 'publish'
	];

	$search_query = new WP_Query($args);
	$result = [];

	if ($search_query->have_posts()) {
		while ($search_query->have_posts()) {
			$search_query->the_post();
			$result[] = [
				'title' => get_the_title(),
				'link'  => get_permalink(),
				'src' => get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : wc_placeholder_img_src('woocommerce_full')
			];
		}
		wp_reset_postdata();
	}

	wp_send_json_success($result);
}

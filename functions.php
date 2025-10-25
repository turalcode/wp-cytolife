<?php

// https://woocommerce.com/document/woocommerce-theme-developer-handbook/#section-5
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
	wp_enqueue_style('cytolife-swiper', 'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css');
	wp_enqueue_style('cytolife-index', get_template_directory_uri() . '/assets/css/index.css');

	wp_enqueue_script('jquery');
	wp_enqueue_script('cytolife-swiper', 'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js', array(), false, true);
	wp_enqueue_script('cytolife-index', get_template_directory_uri() . '/assets/js/index.js', array(), false, true);
});

require_once get_template_directory() . '/incs/constants.php';
require_once get_template_directory() . '/incs/woocommerce.php';
require_once get_template_directory() . '/incs/customizer.php';
require_once get_template_directory() . '/incs/cpt.php';
require_once get_template_directory() . '/incs/roles.php';

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

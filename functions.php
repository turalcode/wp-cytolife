<?php

// https://woocommerce.com/document/woocommerce-theme-developer-handbook/#section-5
add_action('after_setup_theme', function () {
	add_theme_support('woocommerce');

	add_theme_support('title-tag');
});

add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style('cytolife-swiper', 'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css');
	wp_enqueue_style('cytolife-index', get_template_directory_uri() . '/assets/css/index.css');

	// wp_enqueue_script( 'jquery' );
	wp_enqueue_script('cytolife-swiper', 'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js', array(), false, true);
	wp_enqueue_script('cytolife-index', get_template_directory_uri() . '/assets/js/index.js', array(), false, true);
});

require_once get_template_directory() . '/incs/woocommerce.php';

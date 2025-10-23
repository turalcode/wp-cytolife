<?php

/**
 * Product loop sale flash
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/sale-flash.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

global $post, $product;
$category_slug = 'novinki';

$roleMedic = 'medic';
$current_user = wp_get_current_user();
$isMedic = in_array($roleMedic, $current_user->roles);
?>

<div class="products__item-info">
	<div class="products__item-acces" title="Доступ только для мед персонала">
		<?php if (!$isMedic) : ?>
			<svg class="icon">
				<use href="#icon-lock"></use>
			</svg>

			<?php if (!has_term($category_slug, 'product_cat', $product->id)) : ?>
				<div class="products__item-lock-text">Доступно для мед персонала</div>
			<?php endif; ?>
		<?php endif; ?>
	</div>
	<!-- ./products__item-acces -->

	<div class="products__item-icons">
		<?php if (has_term($category_slug, 'product_cat', $product->id)) : ?>
			<div class="onsale products__item-icon-text">
				<svg class="icon">
					<use href="#icon-lightning"></use>
				</svg>
				<span>Новинка</span>
			</div>
		<?php endif; ?>

		<a href="#" class="products__item-like">
			<svg class="icon">
				<use href="#icon-heart"></use>
			</svg>
		</a>
	</div>
	<!-- ./products__item-icons -->
</div>
<!-- ./products__item-info -->
<?php

/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.4.0
 */

defined('ABSPATH') || exit;

global $product;

// Check if the product is a valid WooCommerce product and ensure its visibility before proceeding.
if (! is_a($product, WC_Product::class) || ! $product->is_visible()) {
	return;
}
?>

<div <?php wc_product_class('swiper-slide', $product); ?>>
	<div class="products__item">
		<div class="products__item-header">
			<?php
			/**
			 * Hook: woocommerce_before_shop_loop_item.
			 *
			 * @hooked woocommerce_template_loop_product_link_open - 10
			 */
			do_action('woocommerce_before_shop_loop_item');
			?>
			<a class="products__item-picture" href="<?php echo $product->get_permalink() ?>">
				<?php
				/**
				 * Hook: woocommerce_before_shop_loop_item_title.
				 *
				 * @hooked woocommerce_show_product_loop_sale_flash - 10
				 * @hooked woocommerce_template_loop_product_thumbnail - 10
				 */
				do_action('woocommerce_before_shop_loop_item_title');
				?>
			</a>
		</div>
		<!-- ./products__item-header -->

		<div class="products__item-footer-wrapper">
			<?php
			/**
			 * Hook: woocommerce_shop_loop_item_title.
			 *
			 * @hooked woocommerce_template_loop_product_title - 10
			 */
			do_action('woocommerce_shop_loop_item_title');

			/**
			 * Hook: woocommerce_after_shop_loop_item_title.
			 *
			 * @hooked woocommerce_template_loop_rating - 5
			 * @hooked woocommerce_template_loop_price - 10
			 */

			do_action('woocommerce_after_shop_loop_item_title');
			?>

			<div class="products__item-footer">
				<div class="products__item-counter product-quantity-js">
					<button class="decrement-js button-reset" aria-label="Уменьшить количество">
						<svg class="icon">
							<use href="#icon-minus"></use>
						</svg>
					</button>

					<input type="number" step="1" min="1" max="99" aria-label="Количество" value="1">

					<button class="increment-js button-reset" aria-label="Увеличить количество">
						<svg class="icon">
							<use href="#icon-plus"></use>
						</svg>
					</button>
				</div>

				<?php
				/**
				 * Hook: woocommerce_after_shop_loop_item.
				 *
				 * @hooked woocommerce_template_loop_product_link_close - 5
				 * @hooked woocommerce_template_loop_add_to_cart - 10
				 */
				do_action('woocommerce_after_shop_loop_item');
				?>

			</div>
			<!-- ./products__item-footer -->
		</div>
		<!-- ./products__item-footer-wrapper -->
	</div>
	<!-- ./products__item -->
</div>
<!-- ./swiper-slide -->
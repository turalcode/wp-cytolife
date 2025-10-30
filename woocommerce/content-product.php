<?php

defined('ABSPATH') || exit;

global $product;

if (! is_a($product, WC_Product::class) || ! $product->is_visible()) {
	return;
}

$category_ids = $product->get_category_ids();
$categories = get_terms(array(
	'taxonomy' => 'product_cat',
	'include' => $category_ids
));

$classes = 'products__item col-lg-4 col-md-6 all ' . implode(" ", array_column($categories, 'slug'));
$classes .= is_product_category() ? '' : ' d-none';
$product_classes = is_product_category() || is_shop() ? $classes : 'swiper-slide';
?>

<div <?php wc_product_class($product_classes, $product); ?>>
	<?php if (! (is_product_category() || is_shop())) : ?>
		<div class="products__item">
		<?php endif; ?>

		<div class="products__item-header">
			<?php do_action('woocommerce_before_shop_loop_item'); ?>

			<a class="products__item-picture" href="<?php echo $product->get_permalink() ?>">
				<?php do_action('woocommerce_before_shop_loop_item_title'); ?>
			</a>
		</div>
		<!-- ./products__item-header -->

		<div class="products__item-footer-wrapper">
			<?php
			do_action('woocommerce_shop_loop_item_title');
			do_action('woocommerce_after_shop_loop_item_title');
			?>

			<div class="products__item-footer">

				<?php if (CYTOLIFE_IS_LOGIN) : ?>
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

				<?php endif ?>

				<?php do_action('woocommerce_after_shop_loop_item'); ?>

			</div>
			<!-- ./products__item-footer -->
		</div>
		<!-- ./products__item-footer-wrapper -->

		<div class="ajax-loader">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/spinner.svg" alt="Анимация загрузки">
		</div>

		<?php if (!(is_product_category() || is_shop())) : ?>
		</div>
		<!-- ./products__item -->
	<?php endif; ?>

</div>
<!-- ./$product_classes -->
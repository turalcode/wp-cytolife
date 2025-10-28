<?php

defined('ABSPATH') || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action('woocommerce_before_single_product_summary');
	?>

	<section class="product section">
		<div class="container">
			<h1 class="product__title product__title-mob"><?php echo $product->get_title(); ?></h1>

			<div class="row">
				<div class="col-lg-6 col-md-5">
					<div class="product__img">
						<?php
						$product_img_id = $product->get_image_id();

						if ($product_img_id) {
							$main_img = wp_get_attachment_url($product_img_id);
						} else {
							$main_img = wc_placeholder_img_src('woocommerce_full');
						}
						?>

						<img src="<?php echo $main_img; ?>" alt="<?php echo $product->get_title(); ?>">

						<a href="#" class="product__like product__like-mob">
							<svg class="icon">
								<use href="#icon-heart"></use>
							</svg>
						</a>
					</div>
				</div>

				<div class="col-lg-6 col-md-7">
					<div class="product__content">
						<h1 class="product__title"><?php echo $product->get_title(); ?></h1>

						<div class="product__info">

							<div class="product__article">Артикул:
								<?php if ($product->sku) : ?>
									<span><?php echo $product->sku; ?></span>
								<?php else : ?>
									<span>Нет артикула</span>
								<?php endif; ?>
							</div>

							<div class="product__available">Наличие:
								<?php if ($product->stock_status == 'instock') : ?>
									<span>В наличии</span>
								<?php else : ?>
									<span>Нет в наличии</span>
								<?php endif; ?>
							</div>
						</div>

						<div class="product__price">
							<div class="product__price-new">
								<?php if ($product->price) : ?>
									<?php echo $product->price; ?> руб.
								<?php endif; ?>
							</div>

							<div class="product__price-old">
								<?php if ($product->sale_price) : ?>
									<?php echo $product->regular_price; ?> руб.
								<?php endif; ?>
							</div>
						</div>

						<?php if ($product->short_description) : ?>
							<div class="single-product product__short-descr">
								<?php echo $product->short_description; ?>
							</div>
						<?php endif; ?>

						<?php woocommerce_template_single_add_to_cart(); ?>

						<?php cytolife_dump($product); ?>
					</div>
				</div>
			</div>
	</section>

	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action('woocommerce_single_product_summary');
		?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action('woocommerce_after_single_product_summary');
	?>
</div>

<?php do_action('woocommerce_after_single_product'); ?>
<?php

/**
 * Single Product Up-Sells
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/up-sells.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     9.6.0
 */

if (! defined('ABSPATH')) {
	exit;
}

global $product;

if ($upsells) : ?>

	<section class="product-protocol section section--pt up-sells upsells products">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<?php if (get_field('product_protocoltitle', $product->id)) : ?>
						<h2 class="product-protocol__title"><?php echo get_field('product_protocoltitle', $product->id); ?></h2>
					<?php endif; ?>

					<?php if (get_field('product_protocoldescr', $product->id)) : ?>
						<div class="product-protocol__subtitle">
							<?php echo get_field('product_protocoldescr', $product->id); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>

			<?php woocommerce_product_loop_start(); ?>

			<?php foreach ($upsells as $upsell) : ?>

				<?php
				$post_object = get_post($upsell->get_id());

				setup_postdata($GLOBALS['post'] = $post_object); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

				wc_get_template_part('content', 'product');
				?>

			<?php endforeach; ?>

			<?php woocommerce_product_loop_end(); ?>
		</div>
	</section>
	<!-- /product-protocol section section--pt up-sells upsells products -->
<?php endif;

wp_reset_postdata();

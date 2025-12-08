<?php

if (! defined('ABSPATH')) {
	exit;
}

global $product;

if ($upsells) : ?>
	<section class="product-protocol wishlist-js section section--pt up-sells upsells products">
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

<?php
defined('ABSPATH') || exit;

do_action('woocommerce_cart_is_empty');
?>

<section class="cart-empty section">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<h1>Корзина пуста</h1>

				<?php if (wc_get_page_id('shop') > 0) : ?>
					<p class="return-to-shop">
						<a class="button wc-backward<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>" href="<?php echo esc_url(apply_filters('woocommerce_return_to_shop_redirect', wc_get_page_permalink('shop'))); ?>">
							<?php echo esc_html(apply_filters('woocommerce_return_to_shop_text', 'В каталог')); ?>

							<svg class="icon">
								<use href="#icon-arrow"></use>
							</svg>
						</a>
					</p>
				<?php endif; ?>
			</div>

			<div class="col-lg-8 col-md-6">
				<div class="cart-empty__img">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/cart-empty.jpg" alt="#">
				</div>
			</div>
		</div>
	</div>
</section>
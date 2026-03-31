<?php defined('ABSPATH') || exit; ?>

<div class="shop_table woocommerce-checkout-review-order-table">
	<?php do_action('woocommerce_review_order_before_cart_contents'); ?>

	<ul class="product-list">
		<?php foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) : ?>
			<?php $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key); ?>

			<?php if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key)) : ?>
				<li class="<?php echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key)); ?>">
					<div class="product-thumb">
						<?php if ($thumb = get_the_post_thumbnail($_product->get_id(), array(100, 'auto'))) : ?>
							<?php echo $thumb; ?>
						<?php else : ?>
							<img src="<?php echo wc_placeholder_img_src(); ?>" alt="<?php echo $_product->get_name(); ?>">
						<?php endif; ?>
					</div>

					<div>
						<div class="product-name">
							<?php echo wp_kses_post(apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key)) . '&nbsp;'; ?>
							<?php echo wc_get_formatted_cart_item_data($cart_item); ?>
						</div>

						<div class="product-total">
							Цена: <?php echo apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key); ?>
						</div>

						<?php echo apply_filters('woocommerce_checkout_cart_item_quantity', '<div class="product-quantity">Кол-во: ' . sprintf('%s', $cart_item['quantity']) . '&nbsp;шт.</div>', $cart_item, $cart_item_key); ?>
					</div>
				</li>
			<?php endif; ?>
		<?php endforeach; ?>
	</ul>

	<?php do_action('woocommerce_review_order_after_cart_contents'); ?>

	<div class="cart-subtotal">
		<h3>Подитог:</h3>

		<?php if (CYTOLIFE_IS_MEDIC) : ?>
			<?php wc_cart_totals_subtotal_html(); ?>
		<?php else : ?>
			<div>Сумма: <?php echo WC()->cart->get_total(); ?></div>
			<div>Скидка: 0 &#8381;</div>
		<?php endif; ?>
	</div>

	<?php foreach (WC()->cart->get_coupons() as $code => $coupon) : ?>
		<div class="cart-discount coupon-<?php echo esc_attr(sanitize_title($code)); ?>">
			<div><?php wc_cart_totals_coupon_label($coupon); ?></div>
			<div><?php wc_cart_totals_coupon_html($coupon); ?></div>
		</div>
	<?php endforeach; ?>

	<?php if (WC()->cart->needs_shipping() && WC()->cart->show_shipping()) : ?>
		<?php do_action('woocommerce_review_order_before_shipping'); ?>
		<?php wc_cart_totals_shipping_html(); ?>
		<?php do_action('woocommerce_review_order_after_shipping'); ?>
	<?php endif; ?>

	<?php foreach (WC()->cart->get_fees() as $fee) : ?>
		<div class="fee">
			<div><?php echo esc_html($fee->name); ?></div>
			<div><?php wc_cart_totals_fee_html($fee); ?></div>
		</div>
	<?php endforeach; ?>

	<?php if (wc_tax_enabled() && ! WC()->cart->display_prices_including_tax()) : ?>
		<?php if ('itemized' === get_option('woocommerce_tax_total_display')) : ?>
			<?php foreach (WC()->cart->get_tax_totals() as $code => $tax) : ?>
				<div class="tax-rate tax-rate-<?php echo esc_attr(sanitize_title($code)); ?>">
					<div><?php echo esc_html($tax->label); ?></div>
					<div><?php echo wp_kses_post($tax->formatted_amount); ?></div>
				</div>
			<?php endforeach; ?>
		<?php else : ?>
			<div class="tax-total">
				<div><?php echo esc_html(WC()->coundivies->tax_or_vat()); ?></div>
				<div><?php wc_cart_totals_taxes_total_html(); ?></div>
			</div>
		<?php endif; ?>
	<?php endif; ?>

	<?php do_action('woocommerce_review_order_before_order_total'); ?>

	<div class="order-total">
		<h3>Итого: <?php wc_cart_totals_order_total_html(); ?></h3>
	</div>

	<?php do_action('woocommerce_review_order_after_order_total'); ?>
</div>
<!-- /shop_table woocommerce-checkout-review-order-table -->
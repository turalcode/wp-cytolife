<?php

/**
 * Order details
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/order/order-details.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 10.1.0
 *
 * @var bool $show_downloads Controls whether the downloads table should be rendered.
 */

// phpcs:disable WooCommerce.Commenting.CommentHooks.MissingHookComment

defined('ABSPATH') || exit;

$order = wc_get_order($order_id); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited

if (! $order) {
	return;
}

$order_items        = $order->get_items(apply_filters('woocommerce_purchase_order_item_types', 'line_item'));
$show_purchase_note = $order->has_status(apply_filters('woocommerce_purchase_note_order_statuses', array('completed', 'processing')));
$downloads          = $order->get_downloadable_items();
$actions            = array_filter(
	wc_get_account_orders_actions($order),
	function ($key) {
		return 'view' !== $key;
	},
	ARRAY_FILTER_USE_KEY
);

$show_customer_details = $order->get_user_id() === get_current_user_id();

if ($show_downloads) {
	wc_get_template(
		'order/order-downloads.php',
		array(
			'downloads'  => $downloads,
			'show_title' => true,
		)
	);
}
?>

<section class="single-order-details">
	<?php do_action('woocommerce_order_details_before_order_table', $order); ?>

	<div class="row">
		<div class="col-3">
			<ul class="single-order-details-keys">
				<li>ФИО</li>
				<li>Телефон</li>
				<li>E-mail</li>
				<li>Способ доставки</li>
				<li>Адрес</li>
				<li>Способ оплаты</li>
				<li>Дата получения</li>
			</ul>
		</div>
		<div class="col-9">
			<ul class="single-order-details-values">
				<li><?php echo $order->get_billing_first_name(); ?> <?php echo $order->get_billing_last_name(); ?></li>
				<li><?php echo $order->get_billing_phone(); ?></li>
				<li><?php echo $order->get_billing_email(); ?></li>
				<li><?php echo $order->get_payment_method(); ?></li>
				<li><?php echo $order->get_shipping_postcode(); ?>, г. <?php echo $order->get_shipping_city(); ?></li>
				<li><?php echo $order->get_payment_method_title(); ?></li>

				<?php if ($order->get_status() === CYTOLIFE_COMPLETED) : ?>
					<li><?php echo $order->get_date_completed()->format('d.m.Y'); ?></li>
				<?php elseif ($order->get_status() === CYTOLIFE_PROCESSING) : ?>
					<li>В обработке</li>
				<?php elseif ($order->get_status() === CYTOLIFE_CANCELLED) : ?>
					<li>Отменен</li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</section>
<!-- /single-order-details -->

<section class="single-order-products wishlist-js products-js">
	<h2 class="single-order-products-title">Товары</h2>

	<?php
	do_action('woocommerce_order_details_before_order_table_items', $order);

	foreach ($order_items as $item_id => $item) {
		$product = $item->get_product();

		wc_get_template(
			'order/order-details-item.php',
			array(
				'order'              => $order,
				'item_id'            => $item_id,
				'item'               => $item,
				'show_purchase_note' => $show_purchase_note,
				'purchase_note'      => $product ? $product->get_purchase_note() : '',
				'product'            => $product,
			)
		);
	}

	do_action('woocommerce_order_details_after_order_table_items', $order);
	?>
</section>
<!-- /single-order-products wishlist-js products-js -->

<section class="single-order-details single-order-details--footer">
	<div class="row">
		<div class="col-3">
			<ul class="single-order-details-keys">
				<li>Сумма заказа:</li>
				<li>Скидка:</li>
				<li>Сумма доставки:</li>
				<li>Итого:</li>
		</div>
		<div class="col-9">
			<ul class="single-order-details-values">
				<li><?php echo $order->get_subtotal(); ?> руб.</li>
				<li><?php echo $order->get_discount_total(); ?> руб.</li>
				<li><?php echo $order->get_shipping_total(); ?> руб.</li>
				<li><?php echo $order->get_total(); ?> руб.</li>
			</ul>
		</div>
	</div>
</section>
<!-- /single-order-details single-order-details--footer -->

<?php do_action('woocommerce_order_details_after_order_table', $order); ?>

<?php do_action('woocommerce_after_order_details', $order); ?>
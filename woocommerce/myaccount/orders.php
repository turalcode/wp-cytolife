<?php

defined('ABSPATH') || exit;

do_action('woocommerce_before_account_orders', $has_orders); ?>

<?php if ($has_orders) : ?>
	<section class="account-orders">
		<div class="account-orders-list">
			<?php foreach ($customer_orders->orders as $customer_order) : ?>
				<?php $order = wc_get_order($customer_order); ?>
				<?php $item_count = $order->get_item_count() - $order->get_item_count_refunded(); ?>
				<?php $actions = wc_get_account_orders_actions($order); ?>

				<ul>
					<li>Заказ №:&nbsp;<?php echo $order->get_order_number(); ?></li>
					<li><time datetime="<?php echo esc_attr($order->get_date_created()->date('c')); ?>"><?php echo esc_html(wc_format_datetime($order->get_date_created())); ?></time></li>
					<li class="account-orders-status <?php echo $order->get_status(); ?>">
						<span></span>
						<?php echo esc_html(wc_get_order_status_name($order->get_status())); ?>
					</li>
					<li><?php echo $order->get_formatted_order_total(); ?></li>
					<li>
						<a class="button-light button-light--account-orders" href="<?php echo esc_url($actions['view']['url']); ?>">Перейти
							<svg class="icon">
								<use href="#icon-arrow"></use>
							</svg>
						</a>
					</li>
				</ul>
			<?php endforeach; ?>
		</div>
	</section>

	<?php do_action('woocommerce_before_account_orders_pagination'); ?>

	<?php if (1 < $customer_orders->max_num_pages) : ?>
		<div class="account-orders-pagination">
			<?php if (1 !== $current_page) : ?>
				<a class="prev <?php echo esc_attr($wp_button_class); ?>" href="<?php echo esc_url(wc_get_endpoint_url('orders', $current_page - 1)); ?>">
					<svg class="icon">
						<use href="#icon-arrow-right"></use>
					</svg>
					Назад
				</a>
			<?php endif; ?>

			<?php if (intval($customer_orders->max_num_pages) !== $current_page) : ?>
				<a class="next <?php echo esc_attr($wp_button_class); ?>" href="<?php echo esc_url(wc_get_endpoint_url('orders', $current_page + 1)); ?>">Далее
					<svg class="icon">
						<use href="#icon-arrow-right"></use>
					</svg>
				</a>
			<?php endif; ?>
		</div>
	<?php endif; ?>
<?php else : ?>
	<p>У вас нет заказов</p>
<?php endif; ?>

<?php do_action('woocommerce_after_account_orders', $has_orders); ?>
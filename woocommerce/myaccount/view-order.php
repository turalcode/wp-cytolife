<?php
defined('ABSPATH') || exit;

// Если статус заказа отличен от "on-hold, processing, completed, cancelled" редиректим на страницу заказов
if ($order->has_status(array(CYTOLIFE_PENDING, CYTOLIFE_REFUNDED, CYTOLIFE_FAILED, CYTOLIFE_CHECKOUT_DRAFT))) {
    $orders_url = wc_get_endpoint_url( 'orders', '', wc_get_page_permalink( 'myaccount' ) );
    wp_redirect( $orders_url );
    exit;
};

$notes = $order->get_customer_order_notes();
?>

<section class="single-order-status">
	<div class="row">
		<div class="col-md-6">
			от&nbsp;<?php echo $order->get_date_created()->format('d.m.Y'); ?>
			время&nbsp;<?php echo $order->get_date_created()->format('H:i'); ?>
		</div>
		<div class="col-md-6">
            <?php
				$order_status = '';
				$order_status_cls = '';

				if ($order->has_status(array(CYTOLIFE_ON_HOLD, CYTOLIFE_PROCESSING))) {
					$order_status = 'В&nbsp;обработке';
					$order_status_cls = CYTOLIFE_PROCESSING;
				} else if($order->has_status(array(CYTOLIFE_COMPLETED))) {
				    $order_status = 'Выполнен ' . $order->get_date_completed()->format('d.m.Y');
					$order_status_cls = CYTOLIFE_COMPLETED;
				} else if($order->has_status(array(CYTOLIFE_CANCELLED))) {
				    $order_status = 'Отменен';
					$order_status_cls = CYTOLIFE_CANCELLED;
				}
			?>

			Статус:
			<span class="<?php echo $order_status_cls; ?>">
			    <?php echo $order_status; ?>
			</span>
		</div>
	</div>
</section>

<?php if ($notes) : ?>
	<h2><?php esc_html_e('Order updates', 'woocommerce'); ?></h2>
	<ol class="woocommerce-OrderUpdates commentlist notes">
		<?php foreach ($notes as $note) : ?>
			<li class="woocommerce-OrderUpdate comment note">
				<div class="woocommerce-OrderUpdate-inner comment_container">
					<div class="woocommerce-OrderUpdate-text comment-text">
						<p class="woocommerce-OrderUpdate-meta meta">
							<?php echo date_i18n(esc_html__('l jS \o\f F Y, h:ia', 'woocommerce'), strtotime($note->comment_date)); ?>
						</p>

						<div class="woocommerce-OrderUpdate-description description">
							<?php echo wpautop(wptexturize($note->comment_content)); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
							?>
						</div>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
			</li>
		<?php endforeach; ?>
	</ol>
<?php endif; ?>

<?php do_action('woocommerce_view_order', $order_id); ?>
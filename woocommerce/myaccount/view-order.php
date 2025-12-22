<?php
defined('ABSPATH') || exit;

$notes = $order->get_customer_order_notes();
?>

<section class="single-order-status">
	<div class="row">
		<div class="col-md-6">
			от <?php echo $order->get_date_created()->format('d.m.Y'); ?>
			время&nbsp;<?php echo $order->get_date_created()->format('H:i'); ?>
		</div>
		<div class="col-md-6">
			Статус:
			<span class="<?php echo $order->get_status(); ?>">
				<?php if ($order->get_status() === CYTOLIFE_COMPLETED) : ?>
					Выполнен&nbsp;<?php echo $order->get_date_completed()->format('d.m.Y'); ?>
				<?php elseif ($order->get_status() === CYTOLIFE_PROCESSING) : ?>
					В обработке
				<?php elseif ($order->get_status() === CYTOLIFE_CANCELLED) : ?>
					Отменен&nbsp;<?php echo $order->get_date_completed()->format('d.m.Y'); ?>
				<?php endif; ?>
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
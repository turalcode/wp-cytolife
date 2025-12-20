<?php
defined('ABSPATH') || exit;

$notes = $order->get_customer_order_notes();
?>

<section class="single-order">
	<div class="single-order-status">
		<div>
			от <?php echo $order->get_date_created()->format('d.m.Y'); ?>
			время <?php echo $order->get_date_created()->format('H:i'); ?>
		</div>

		<div>Статус:
			<span class="<?php echo $order->get_status(); ?>">
				<?php echo wc_get_order_status_name($order->get_status()); ?>
				<?php echo $order->get_date_completed()->format('d.m.Y'); ?>
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
						<p class="woocommerce-OrderUpdate-meta meta"><?php echo date_i18n(esc_html__('l jS \o\f F Y, h:ia', 'woocommerce'), strtotime($note->comment_date)); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
																		?></p>
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
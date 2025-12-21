<?php
defined('ABSPATH') || exit;
?>

<div class="single-order-again order-again">
	<a href="<?php echo esc_url($order_again_url); ?>" class="button<?php echo esc_attr($wp_button_class); ?>">
		Повторить заказ
		<svg class="icon">
			<use href="#icon-arrow"></use>
		</svg>
	</a>
</div>
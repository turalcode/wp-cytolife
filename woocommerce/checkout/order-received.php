<?php defined('ABSPATH') || exit; ?>

<div class="order-received">
	<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received">
		<?php
		$message = apply_filters(
			'woocommerce_thankyou_order_received_text',
			'Ваш заказ принят в обработку. Благодарим вас за покупку',
			$order
		);

		echo $message;
		?>
	</p>
</div>
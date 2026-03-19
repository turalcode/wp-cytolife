<?php
if (! defined('ABSPATH')) {
	exit;
}

global $product;

$aria_describedby = isset($args['aria-describedby_text']) ? sprintf('aria-describedby="woocommerce_loop_add_to_cart_link_describedby_%s"', esc_attr($product->get_id())) : '';

if (CYTOLIFE_IS_LOGIN) {
	// Если продукт "НЕ ТОЛЬКО" для медперсонала
	if (!get_field('product_ismedic')) {
		echo apply_filters(
			'woocommerce_loop_add_to_cart_link',
			sprintf(
				'<a href="%s" %s data-quantity="%s" class="%s" %s>%s<svg class="icon"><use href="#icon-arrow"></use></svg></a>',
				esc_url($product->add_to_cart_url()),
				$aria_describedby,
				esc_attr(isset($args['quantity']) ? $args['quantity'] : 1),
				esc_attr(isset($args['class']) ? $args['class'] : 'button'),
				isset($args['attributes']) ? wc_implode_html_attributes($args['attributes']) : '',
				esc_html($product->add_to_cart_text())
			),
			$product,
			$args
		);
	} else {
		// Если продукт "ТОЛЬКО" для медперсонала
		if (CYTOLIFE_IS_MEDIC) {
			echo apply_filters(
				'woocommerce_loop_add_to_cart_link',
				sprintf(
					'<a href="%s" %s data-quantity="%s" class="%s" %s>%s
						<svg class="icon">
							<use href="#icon-arrow"></use>
						</svg>
					</a>',
					esc_url($product->add_to_cart_url()),
					$aria_describedby,
					esc_attr(isset($args['quantity']) ? $args['quantity'] : 1),
					esc_attr(isset($args['class']) ? $args['class'] : 'button'),
					isset($args['attributes']) ? wc_implode_html_attributes($args['attributes']) : '',
					esc_html($product->add_to_cart_text())
				),
				$product,
				$args
			);
		} else {
			echo '<button class="button h-100 disabled">В корзину<svg class="icon"><use href="#icon-arrow"></use></svg></button>';
		}
	}
} else {
?>
	<button class="button login-button-js">Авторизоваться
		<svg class="icon">
			<use href="#icon-arrow"></use>
		</svg>
	</button>
<?php
};
?>

<?php if (isset($args['aria-describedby_text'])) : ?>
	<span id="woocommerce_loop_add_to_cart_link_describedby_<?php echo esc_attr($product->get_id()); ?>" class="screen-reader-text">
		<?php echo esc_html($args['aria-describedby_text']); ?>
	</span>
<?php endif; ?>
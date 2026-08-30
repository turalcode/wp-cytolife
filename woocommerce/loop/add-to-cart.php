<?php

/**
 * Loop Add to Cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/add-to-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     9.2.0
 */

if (! defined('ABSPATH')) {
	exit;
}

global $product;
global $args;

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
		// Если продукт "ТОЛЬКО" для медиков или косметологов
		if (CYTOLIFE_IS_MEDIC || (CYTOLIFE_IS_CST && get_field('product_iscst'))) {
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
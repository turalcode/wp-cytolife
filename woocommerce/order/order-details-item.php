<?php
if (! defined('ABSPATH')) {
	exit;
}

if (! apply_filters('woocommerce_order_item_visible', true, $item)) {
	return;
}
?>

<div class="cart-product ajax-loader-parent-js">
	<div class="cart-product__info">
		<?php
		$product_img_id = $product->get_image_id();

		if ($product_img_id) {
			$product_img_src = wp_get_attachment_url($product_img_id);
		} else {
			$product_img_src = wc_placeholder_img_src('woocommerce_full');
		}
		?>

		<?php
		$is_visible = $product && $product->is_visible();
		$product_permalink = apply_filters('woocommerce_order_item_permalink', $is_visible ? $product->get_permalink($item) : '', $item, $order);
		?>

		<a href="<?php echo $product_permalink; ?>">
			<img src="<?php echo $product_img_src; ?>" alt="<?php echo $item->get_name(); ?>">
		</a>

		<div class="cart-product__info-text">
			<div class="cart-product__article">Артикул: <?php echo $product->get_sku(); ?></div>
			<a href="<?php echo $product_permalink; ?>"><?php echo $item->get_name(); ?></a>
		</div>
	</div>

	<div class="cart-product__quantity product-quantity" data-title="Количество">
		<div class="quantity product-quantity-js" data-add-to-cart-btn-id="add-to-cart-btn-<?php echo $item->get_product_id(); ?>">
			<button class="decrement-js button-reset" aria-label="Уменьшить количество">
				<svg class="icon">
					<use href="#icon-minus"></use>
				</svg>
			</button>

			<label class="screen-reader-text" for="quantity_<?php echo $item->get_product_id(); ?>">Количество товара AMBER LIFE</label>

			<input type="number" id="quantity_<?php echo $item->get_product_id(); ?>" name="off" value="<?php echo $item->get_quantity(); ?>" aria-label="Количество товара" min="1" step="1" inputmode="numeric" autocomplete="off">

			<button class="increment-js button-reset" aria-label="Увеличить количество">
				<svg class="icon">
					<use href="#icon-plus"></use>
				</svg>
			</button>
		</div>
	</div>

	<div class="product-price" data-title="Цена">
		<span><bdi><?php echo $item->get_subtotal(); ?>&nbsp;<span>₽</span></bdi></span>
	</div>

	<button class="products__item-like button-reset wishlist-icon-js <?php echo cytolife_is_wishlist($item->get_product_id()) ? 'active' : '' ?>" data-id="<?php echo $item->get_product_id(); ?>">
		<svg class="icon">
			<use href="#icon-heart"></use>
		</svg>
	</button>

	<a id="add-to-cart-btn-<?php echo $item->get_product_id(); ?>" href="/?add-to-cart=<?php echo $item->get_product_id(); ?>" aria-describedby="woocommerce_loop_add_to_cart_link_describedby_<?php echo $item->get_product_id(); ?>" data-quantity="<?php echo $item->get_quantity(); ?>" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $item->get_product_id(); ?>" data-product_sku="<?php echo $product->get_sku(); ?>" aria-label="Добавить в корзину <?php echo $item->get_name(); ?>" rel="nofollow" data-success_message="<?php echo $item->get_name(); ?> добавлен в вашу корзину" role="button">Добавить в корзину снова
		<svg class="icon">
			<use href="#icon-arrow"></use>
		</svg>
	</a>

	<div class="ajax-loader">
		<img decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/spinner.svg" alt="Анимация загрузки">
	</div>
</div>

<?php if ($show_purchase_note && $purchase_note) : ?>
	<div class="woocommerce-table__product-purchase-note product-purchase-note">
		<div>
			<?php echo wpautop(do_shortcode(wp_kses_post($purchase_note))); ?>
		</div>
	</div>
<?php endif; ?>
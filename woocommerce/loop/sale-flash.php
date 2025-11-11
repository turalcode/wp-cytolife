<?php

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

global $post, $product;

$current_user = wp_get_current_user();
$isMedic = in_array(CYTOLIFE_ROLE_MEDIC, $current_user->roles);
?>

<div class="products__item-info">
	<div class="products__item-acces" title="Доступ только для мед персонала">
		<?php if (! $isMedic) : ?>
			<svg class="icon">
				<use href="#icon-lock"></use>
			</svg>

			<?php if (! has_term(CYTOLIFE_SLUG_NEW_PRODUCTS, 'product_cat', $product->get_id())) : ?>
				<div class="products__item-lock-text">Доступно для мед персонала</div>
			<?php endif; ?>
		<?php endif; ?>
	</div>
	<!-- ./products__item-acces -->

	<div class="products__item-icons">
		<?php if (has_term(CYTOLIFE_SLUG_NEW_PRODUCTS, 'product_cat', $product->get_id())) : ?>
			<div class="onsale products__item-icon-text">
				<svg class="icon">
					<use href="#icon-lightning"></use>
				</svg>
				<span>Новинка</span>
			</div>
		<?php endif; ?>

		<button class="products__item-like wishlist-icon-js <?php echo cytolife_is_wishlist($product->get_id()) ? 'active' : '' ?>" data-id="<?php echo $product->get_id(); ?>">
			<svg class="icon">
				<use href="#icon-heart"></use>
			</svg>
		</button>
	</div>
	<!-- ./products__item-icons -->
</div>
<!-- ./products__item-info -->
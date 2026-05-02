<?php

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

global $post, $product;
$product_is_medic = get_field('product_ismedic');
$product_is_new = get_field('product_isnew');
$product_is_popular = get_field('product_ispopular');
?>

<div class="products__item-info">
	<div class="products__item-acces">
		<?php if ($product_is_medic) : ?>
			<svg class="icon">
				<use href="#icon-lock"></use>
			</svg>

			<?php if (!$product_is_new && $product_is_popular) : ?>
				<div class="products__item-lock-text">Доступно для мед персонала</div>
			<?php endif; ?>
		<?php endif; ?>

		<div class="tooltip tooltip--lock">
			<span class="tooltip-mark tooltip-mark-mob"></span>
			<span class="tooltip-text-lock">К покупке доступно только медицинским<br />специалистам. Пройдите авторизацию</span>
		</div>
	</div>
	<!-- ./products__item-acces -->

	<div class="products__item-icons">
		<?php if ($product_is_new) : ?>
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

			<div class="tooltip tooltip--wishlist">
				<span class="tooltip-text-wishlist">Добавлено в ваш<br />список избранного</span>
				<span class="tooltip-mark"></span>
			</div>
		</button>
	</div>
	<!-- ./products__item-icons -->
</div>
<!-- ./products__item-info -->
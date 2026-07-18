<?php
if (!defined('ABSPATH')) {
	exit;
}

/** @var array $downloads */
?>
<section class="downloads">
	<p>Обучающие материалы, которые Вы приобрели.</p>

	<div class="downloads-list">
		<?php foreach ($downloads as $download) : ?>
			<?php $product = wc_get_product($download['product_id']); ?>

			<?php if (!$product) continue; ?>

			<div class="downloads-item">
				<div class="downloads-item-img">
					<?php echo $product->get_image('woocommerce_thumbnail'); ?>

					<button class="downloads-item-btn button-reset">
						<svg class="icon icon-play">
							<use href="#icon-play"></use>
						</svg>
					</button>
				</div>

				<h3 class="downloads-item-title"><?php echo esc_html($download['product_name']); ?></h3>

				<div class="downloads-item-descr">
					<?php echo $product->get_description(); ?>
				</div>
			</div>
		<?php endforeach; ?>
	</div>

	<h2 class="downloads-title">Новые видео</h2>

	<div class="downloads-list">
		<?php foreach ($downloads as $download) : ?>
			<?php $product = wc_get_product($download['product_id']); ?>

			<?php if (!$product) continue; ?>

			<div class="downloads-item">
				<div class="downloads-item-img">
					<?php echo $product->get_image('woocommerce_thumbnail'); ?>

					<button class="downloads-item-btn button-reset">
						<svg class="icon">
							<use href="#icon-lock"></use>
						</svg>
					</button>
				</div>

				<h3 class="downloads-item-title"><?php echo esc_html($download['product_name']); ?></h3>

				<div class="downloads-item-descr">
					<?php echo $product->get_description(); ?>
				</div>
			</div>
		<?php endforeach; ?>
	</div>

	<button class="button button-reset downloads-btn">Другие видео
		<svg class="icon">
			<use href="#icon-arrow-down"></use>
		</svg>
	</button>
</section>
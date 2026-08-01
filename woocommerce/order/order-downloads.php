<?php
if (!defined('ABSPATH')) {
	exit;
}

/** @var array $downloads */
?>

<section class="downloads dl-js">
	<p>Обучающие материалы, которые Вы приобрели.</p>

	<div class="downloads-list">
		<?php foreach ($downloads as $download) : ?>
			<?php $product = wc_get_product($download['product_id']); ?>

			<?php if (!$product) continue; ?>

			<?php get_template_part('parts/downloads', 'item', array(
				'cls' => '',
				'image' => $product->get_image('woocommerce_thumbnail'),
				'icon' => '<svg class="icon icon-play"> <use href="#icon-play"></use></svg>',
				'title' => $product->get_title(),
				'descr' => $product->get_description()
			)); ?>
		<?php endforeach; ?>
	</div>

	<h2 class="downloads-title">Новые видео</h2>

	<div class="downloads-list dl-products-js">
		<?php
		// 1. Собираем ID всех купленных товаров из вашего массива $downloads
		$exclude_ids = array();

		if (!empty($downloads) && is_array($downloads)) {
			foreach ($downloads as $download) {
				if (isset($download['product_id'])) {
					$exclude_ids[] = $download['product_id'];
				}
			}

			// Удаляем дубликаты ID
			$exclude_ids = array_unique($exclude_ids);
		}

		// 2. Делаем запрос на получение ОСТАЛЬНЫХ скачиваемых товаров
		$args = array(
			'limit'      => -1,
			'status'     => 'publish',
			'meta_key'   => '_downloadable',
			'meta_value' => 'yes',
			'return'     => 'objects',
			'exclude'    => $exclude_ids, // Исключаем ID из массива выше
		);

		$downloads_other = wc_get_products($args);
		?>

		<?php foreach ($downloads_other as $download) : ?>
			<?php $product = wc_get_product($download->get_id()); ?>

			<?php if (!$product) continue; ?>

			<?php get_template_part('parts/downloads', 'item', array(
				'cls' => 'd-none',
				'image' => $product->get_image('woocommerce_thumbnail'),
				'icon' => '<svg class="icon"><use href="#icon-lock"></use></svg>',
				'title' => $product->get_title(),
				'descr' => $product->get_description()
			)); ?>
		<?php endforeach; ?>
	</div>

	<button class="button button-reset downloads-btn dl-button-more-js d-none">Другие видео
		<svg class="icon">
			<use href="#icon-arrow-down"></use>
		</svg>
	</button>
</section>
<?php
if (! defined('ABSPATH')) {
	exit;
}

$downloads = WC()->customer->get_downloadable_products();
$has_downloads = (bool) $downloads;

do_action('woocommerce_before_account_downloads', $has_downloads); ?>

<?php if ($has_downloads) : ?>
	<?php do_action('woocommerce_before_available_downloads'); ?>
	<?php do_action('woocommerce_available_downloads', $downloads); ?>
	<?php do_action('woocommerce_after_available_downloads'); ?>
<?php else : ?>
	<section class="downloads dl-js">
		<div class="downloads-list dl-products-js">
			<?php
			// Если у пользователя нет скачиваемых товаров - делаем запрос на получение всех скачиваемых товаров
			$args = array(
				'limit'      => -1,
				'status'     => 'publish',
				'meta_key'   => '_downloadable',
				'meta_value' => 'yes',
				'return'     => 'ids',
			);

			$downloads_ids = wc_get_products($args);
			?>

			<?php foreach ($downloads_ids as $dl_id) : ?>
				<?php $product = wc_get_product($dl_id); ?>

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
<?php endif; ?>

<?php do_action('woocommerce_after_account_downloads', $has_downloads); ?>
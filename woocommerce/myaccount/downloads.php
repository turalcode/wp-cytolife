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
	<p>У вас нет обучающих видео</p>
<?php endif; ?>

<?php do_action('woocommerce_after_account_downloads', $has_downloads); ?>
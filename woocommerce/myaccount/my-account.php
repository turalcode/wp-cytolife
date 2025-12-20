<?php
defined('ABSPATH') || exit;

$link = get_self_link();
$isEndpoint = false;
$title = '';

foreach (wc_get_account_menu_items() as $endpoint => $label) {
	if (str_contains($link, $endpoint)) {
		$title = $label;
	}

	if ($endpoint === 'orders') {
		$title = 'Мои заказы';
	}
}

if (is_view_order_page()) {
	$orderNumber = preg_replace('/\D/', '', $link);
	$title = 'Информация о заказе №' . ' ' . $orderNumber;
}

if (str_contains($link, 'edit-account') || str_contains($link, 'orders') || str_contains($link, 'downloads') || str_contains($link, 'support') || str_contains($link, 'change-password') || is_view_order_page()) {
	$isEndpoint = true;
};
?>

<?php if (CYTOLIFE_IS_LOGIN) : ?>
	<div class="woocommerce-MyAccount-content">
		<div class="row">
			<?php if ($isEndpoint): ?>
				<div class="col-md-4"></div>
				<div class="col-md-8">
					<h1> <?php echo $title; ?></h1>
				</div>
			<?php endif; ?>

			<div class="col-md-4"><?php do_action('woocommerce_account_navigation'); ?></div>
			<div class="col-md-8"><?php do_action('woocommerce_account_content'); ?></div>
		</div>
	</div>
<?php endif; ?>
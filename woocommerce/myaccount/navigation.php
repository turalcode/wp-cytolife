<?php
if (! defined('ABSPATH')) {
	exit;
}

$iconLinks = array(
	'edit-account' => 'icon-profile',
	'orders' => 'icon-cart',
	'downloads' => 'icon-education',
	'support' => 'icon-support',
	'change-password' => 'icon-refresh'
);

do_action('woocommerce_before_account_navigation');
?>

<nav class="account-menu woocommerce-MyAccount-navigation" aria-label="<?php esc_html_e('Account pages', 'woocommerce'); ?>">
	<ul>
		<?php foreach (wc_get_account_menu_items() as $endpoint => $label) : ?>
			<li class="<?php echo wc_get_account_menu_item_classes($endpoint); ?>">
				<a href="<?php echo esc_url(wc_get_account_endpoint_url($endpoint)); ?>" <?php echo wc_is_current_account_menu_item($endpoint) ? 'aria-current="page"' : ''; ?>>
					<svg class="icon icon-arrow">
						<use href="#icon-arrow-right"></use>
					</svg>
					<svg class="icon">
						<use href="#<?php echo $iconLinks[$endpoint]; ?>"></use>
					</svg>
					<?php echo esc_html($label); ?>
				</a>
			</li>
		<?php endforeach; ?>

		<li>
			<hr>
		</li>

		<li>
			<a href="<?php echo esc_url(wc_logout_url()); ?>">
				<svg class="icon">
					<use href="#icon-logout"></use>
				</svg>Выход
			</a>
		</li>
	</ul>
</nav>

<!-- <?php cytolife_dump(wc_get_account_menu_items()); ?> -->

<?php do_action('woocommerce_after_account_navigation'); ?>
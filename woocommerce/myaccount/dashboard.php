<?php
if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

$allowed_html = array(
	'a' => array(
		'href' => array(),
	),
);

$user_id = get_current_user_id();
$first_name = get_user_meta($user_id, 'first_name', true);
$last_name = get_user_meta($user_id, 'last_name', true);
$user_name = $first_name . ' ' . $last_name;
$education = get_user_meta($user_id, 'user_education', true);

$isActiveOrders = check_user_active_orders($user_id);
?>

<section class="account">
	<div class="row">
		<div class="col-lg-8">
			<h1 class="account-title">
				<?php echo $user_name; ?>
			</h1>

			<?php if (!CYTOLIFE_IS_MEDIC) : ?>
				<?php if ($education == CYTOLIFE_ROLE_MEDIC) : ?>
					<div class="account-notice">Статус мед. работника на рассмотрении</div>
				<?php endif; ?>
			<?php endif; ?>

			<?php if (CYTOLIFE_IS_MEDIC) : ?>
				<div class="account-status">Статус: <span>Медицинский работник</span></div>
			<?php else: ?>
				<div class="account-status">Статус: <span>Розничный покупатель</span></div>
			<?php endif; ?>

			<?php if (CYTOLIFE_IS_MEDIC) : ?>
				<div class="account-discount">Текущая скидка: <span>30%</span></div>
			<?php else: ?>
				<div class="account-discount">Текущая скидка: <span>0%</span></div>
			<?php endif; ?>

			<div class="account-active-orders">Активные заказы: <span>нет</span></div>
		</div>
		<div class="col-lg-4 account-profile-block">
			<div class="account-profile-photo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile-placeholder.jpg" alt="<?php echo $user_name; ?>">
			</div>
			<h1 class="account-title account-title-desktop">
				<?php echo $user_name; ?>
			</h1>
		</div>
	</div>
</section>

<!-- <p>
	<?php
	printf(
		/* translators: 1: user display name 2: logout url */
		wp_kses(__('Hello %1$s (not %1$s? <a href="%2$s">Log out</a>)', 'woocommerce'), $allowed_html),
		'<strong>' . esc_html($current_user->display_name) . '</strong>',
		esc_url(wc_logout_url())
	);
	?>
</p> -->

<!-- <p>
	<?php
	/* translators: 1: Orders URL 2: Address URL 3: Account URL. */
	$dashboard_desc = __('From your account dashboard you can view your <a href="%1$s">recent orders</a>, manage your <a href="%2$s">billing address</a>, and <a href="%3$s">edit your password and account details</a>.', 'woocommerce');
	if (wc_shipping_enabled()) {
		/* translators: 1: Orders URL 2: Addresses URL 3: Account URL. */
		$dashboard_desc = __('From your account dashboard you can view your <a href="%1$s">recent orders</a>, manage your <a href="%2$s">shipping and billing addresses</a>, and <a href="%3$s">edit your password and account details</a>.', 'woocommerce');
	}
	printf(
		wp_kses($dashboard_desc, $allowed_html),
		esc_url(wc_get_endpoint_url('orders')),
		esc_url(wc_get_endpoint_url('edit-address')),
		esc_url(wc_get_endpoint_url('edit-account'))
	);
	?>
</p> -->

<?php
/**
 * My Account dashboard.
 *
 * @since 2.6.0
 */
do_action('woocommerce_account_dashboard');

/**
 * Deprecated woocommerce_before_my_account action.
 *
 * @deprecated 2.6.0
 */
do_action('woocommerce_before_my_account');

/**
 * Deprecated woocommerce_after_my_account action.
 *
 * @deprecated 2.6.0
 */
do_action('woocommerce_after_my_account');

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */

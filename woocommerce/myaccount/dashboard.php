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

			<?php if (!CYTOLIFE_IS_MEDIC && !CYTOLIFE_IS_CST) : ?>
				<!-- Если есть запись "medic" в метаполе "user_education" значит был добавлен какой либо документ, который находится на рассмотрении у администратора. Я оставил запись "medic" независимо от того какой документ был добавлен, так как это нужно только для того, чтобы администратор рассмотрел его. -->
				<?php if ($education == CYTOLIFE_ROLE_MEDIC) : ?>
					<div class="account-notice">Статус медработника или косметолога на рассмотрении</div>
				<?php endif; ?>
			<?php endif; ?>

			<?php if (CYTOLIFE_IS_MEDIC) : ?>
				<div class="account-status">Статус: <span>Медицинский работник</span></div>
			<?php elseif (CYTOLIFE_IS_CST): ?>
				<div class="account-status">Статус: <span>Косметолог</span></div>
			<?php else: ?>
				<div class="account-status">Статус: <span>Розничный покупатель</span></div>
			<?php endif; ?>

			<?php if (CYTOLIFE_IS_MEDIC) : ?>
				<div class="account-discount">Текущая скидка: <span>активна</span></div>
			<?php else: ?>
				<div class="account-discount">Текущая скидка: <span>0%</span></div>
			<?php endif; ?>

			<?php
			$active_orders = wc_get_orders(array(
				'customer' => get_current_user_id(),
				'status'   => array(CYTOLIFE_PROCESSING, CYTOLIFE_ON_HOLD, CYTOLIFE_PENDING),
				'limit'    => 1,
			));
			?>

			<?php if (!empty($active_orders)) : ?>
				<div class="account-active-orders">Активные заказы: <span><a href="<?php echo wc_get_endpoint_url('orders'); ?>">есть</a></span></div>
			<?php else : ?>
				<div class="account-active-orders">Активные заказы: <span>нет</span></div>
			<?php endif; ?>
		</div>
		<div class="col-lg-4 account-profile-block">
			<div class="account-profile-photo">
				<?php $user_photo = get_user_meta($user_id, 'user_photo', true); ?>

				<?php if ($user_photo) : ?>
					<?php $src = CYTOLIFE_ABS_PATH_PHOTOS . '/' . $user_photo; ?>

					<img loading="lazy" id="account-photo-preview" src="<?php echo esc_url($src); ?>">
				<?php else: ?>
					<img loading="lazy" id="account-photo-preview" src="<?php echo get_template_directory_uri(); ?>/assets/images/profile-placeholder.jpg">
				<?php endif; ?>
			</div>
			<h1 class="account-title account-title-desktop">
				<?php echo $user_name; ?>
			</h1>
		</div>
	</div>
</section>

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

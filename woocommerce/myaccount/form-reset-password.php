<?php
defined('ABSPATH') || exit;

do_action('woocommerce_before_reset_password_form');
?>

<section class="account-lost-pass">
	<div class="account-lost-pass-title-block">
		<h1 class="account-lost-pass-title">Введите новый пароль</h1>
	</div>

	<form id="account-reset-password-form" method="post" class="account-lost-pass-form woocommerce-ResetPassword lost_reset_password">
		<input type="hidden" name="reset_key" value="<?php echo esc_attr($args['key']); ?>" />
		<input type="hidden" name="reset_login" value="<?php echo esc_attr($args['login']); ?>" />

		<div class="form__group form-cb__group">
			<label for="password_1">Новый пароль&nbsp;<span class="required" aria-hidden="true">*</span><span class="screen-reader-text"><?php esc_html_e('Required', 'woocommerce'); ?></span></label>
			<input type="text" name="password_1" id="password_1" autocomplete="new-password" required aria-required="true" />
		</div>

		<div class="form__group form-cb__group">
			<label for="password_2">Повторите новый пароль&nbsp;<span class="required" aria-hidden="true">*</span><span class="screen-reader-text"><?php esc_html_e('Required', 'woocommerce'); ?></span></label>
			<input type="text" name="password_2" id="password_2" autocomplete="new-password" required aria-required="true" />
		</div>

		<?php do_action('woocommerce_resetpassword_form'); ?>

		<div class="form__group">
			<input type="hidden" name="wc_reset_password" value="true" />
			<button type="submit" class="button button-reset<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>" value="<?php esc_attr_e('Save', 'woocommerce'); ?>">Сохранить
				<svg class="icon">
					<use href="#icon-arrow"></use>
				</svg>
			</button>
		</div>

		<?php wp_nonce_field('reset_password', 'woocommerce-reset-password-nonce'); ?>
	</form>
</section>

<?php
do_action('woocommerce_after_reset_password_form');

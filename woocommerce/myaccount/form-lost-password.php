<?php
defined('ABSPATH') || exit;

do_action('woocommerce_before_lost_password_form');
?>

<section class="account-lost-pass">
	<div class="account-lost-pass-title-block">
		<h1 class="account-lost-pass-title">Страница сброса пароля</h1>
		<h2 class="account-lost-pass-subtitle">Забыли свой пароль?</h2>
	</div>

	<form method="post" class="account-lost-pass-form woocommerce-ResetPassword lost_reset_password">
		<div>Введите адрес электронной почты, указанный при регистрации. Мы вышлем вам письмо со ссылкой для создания нового пароля.</div>

		<div class="account-lost-pass-form-content">
			<div class="form__group form-cb__group">
				<label for="user_login">E-mail&nbsp;<span class="required" aria-hidden="true">*</span><span class="screen-reader-text"><?php esc_html_e('Required', 'woocommerce'); ?></span></label>
				<input type="text" name="user_login" id="user_login" placeholder="ivanov@mail.ru" autocomplete="email" required aria-required="true" />
			</div>

			<?php do_action('woocommerce_lostpassword_form'); ?>

			<div class="form__group">
				<input type="hidden" name="wc_reset_password" value="true" />
				<button type="submit" class="button button-reset<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>">Отправить
					<svg class="icon">
						<use href="#icon-arrow"></use>
					</svg>
				</button>
			</div>
		</div>

		<div>Проверьте папку «Спам» или «Промоакции», если письмо не пришло в течение нескольких минут.</div>

		<?php wp_nonce_field('lost_password', 'woocommerce-lost-password-nonce'); ?>

	</form>
</section>

<?php
do_action('woocommerce_after_lost_password_form');

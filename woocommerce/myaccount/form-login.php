<?php
if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

do_action('woocommerce_before_customer_login_form'); ?>

<?php if ('yes' === get_option('woocommerce_enable_myaccount_registration')) : ?>
	<h1>Регистрация аккаунта</h1>

	<form method="post" id="register-form" class="woocommerce-form--auth woocommerce-form--register woocommerce-form woocommerce-form-register register" <?php do_action('woocommerce_register_form_tag'); ?>>
		<div class="row">
			<div class="col-lg-8 register-padding">
				<?php do_action('woocommerce_register_form_start'); ?>

				<div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_user_education">Образование<span class="required" aria-hidden="true">*</span></label>
					<div>
						<select id="reg_user_education" name="user_education" class="required" required>
							<option value="subscriber" selected>Розничный покупатель</option>
							<option value="medic">Медицинский работник</option>
						</select>
					</div>
				</div>

				<div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_username">Имя<span class="required" aria-hidden="true">*</span></label>
					<div>
						<input type="text" class="required" name="username" id="reg_username" autocomplete="username" value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" required aria-required="true" />
					</div>
				</div>

				<div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_user_lastname">Фамилия<span class="required" aria-hidden="true">*</span></label>
					<div>
						<input type="text" class="required" name="user_lastname" id="reg_user_lastname" value="<?php echo (!empty($_POST['user_lastname'])) ? esc_attr(wp_unslash($_POST['user_lastname'])) : ''; ?>" required aria-required="true" />
					</div>
				</div>

				<div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_user_city">Город<span class="required" aria-hidden="true">*</span></label>
					<div>
						<input type="text" class="required" name="user_city" id="reg_user_city" value="<?php echo (!empty($_POST['user_city'])) ? esc_attr(wp_unslash($_POST['user_city'])) : ''; ?>" required aria-required="true" />
					</div>
				</div>

				<div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_user_tel">Телефон<span class="required" aria-hidden="true">*</span></label>
					<div>
						<input type="text" class="required" name="user_tel" id="reg_user_tel" value="<?php echo (!empty($_POST['user_tel'])) ? esc_attr(wp_unslash($_POST['user_tel'])) : ''; ?>" required aria-required="true" />
					</div>
				</div>

				<div class="form-cb__group-check">
					<label>
						<input type="checkbox" class="required" name="policy" required aria-required="true">
						<span>Я принимаю условия <a href="/privacy-policy/">Политики конфиденциальности</a> и даю <a href="/user-agreement/">согласие на обработку персональных данных</a> в соответствии с Федеральным законом №152-ФЗ «О персональных данных»
						</span>
					</label>
				</div>

				<?php do_action('woocommerce_register_form'); ?>

				<div class="woocommerce-form-row form-row">
					<?php wp_nonce_field('woocommerce-register', 'woocommerce-register-nonce'); ?>
					<button type="submit" class="button-reset woocommerce-Button woocommerce-button button<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?> woocommerce-form-register__submit" name="register" value="<?php esc_attr_e('Register', 'woocommerce'); ?>">Зарегистрироваться
						<svg class="icon">
							<use href="#icon-arrow"></use>
						</svg></button>
				</div>

				<?php do_action('woocommerce_register_form_end'); ?>
			</div>

			<div class="col-lg-4">
				<div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<div>
						<input type="file" class="required" name="user_document" required aria-required="true" />
					</div>
				</div>

				<div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_email">Email<span class="required" aria-hidden="true">*</span></label>
					<input type="email" class="required" name="email" id="reg_email" autocomplete="email" value="<?php echo (!empty($_POST['email'])) ? esc_attr(wp_unslash($_POST['email'])) : ''; ?>" required aria-required="true" />
				</div>

				<div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_password">Пароль<span class="required" aria-hidden="true">*</span></label>
					<div>
						<input type="password" class="required" name="password" id="reg_password" required aria-required="true" />
					</div>
				</div>

				<div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_password2">Повторите пароль<span class="required" aria-hidden="true">*</span></label>
					<div>
						<input type="password" class="required" name="password2" id="reg_password2" required aria-required="true" />
					</div>
				</div>
			</div>
		</div>
	</form>
<?php endif; ?>

<?php do_action('woocommerce_after_customer_login_form'); ?>
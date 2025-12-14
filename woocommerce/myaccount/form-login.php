<?php
if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
?>

<?php if ('yes' === get_option('woocommerce_enable_myaccount_registration')) : ?>
	<h1>Регистрация аккаунта</h1>

	<?php do_action('woocommerce_before_customer_login_form'); ?>

	<form enctype="multipart/form-data" method="post" id="register-form" class="woocommerce-form--auth woocommerce-form--register woocommerce-form woocommerce-form-register register" <?php do_action('woocommerce_register_form_tag'); ?>>
		<div class="row">
			<div class="col-xl-8 col-lg-7 register-padding register-flex-desktop">
				<?php do_action('woocommerce_register_form_start'); ?>

				<div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_user_education">Медицинское образование<span class="required" aria-hidden="true">*</span></label>

					<div>
						<select id="reg_user_education" name="user_education">
							<option value="" selected>Розничный покупатель</option>
							<option value="<?php echo CYTOLIFE_ROLE_MEDIC; ?>">Медицинский работник</option>
						</select>
					</div>
				</div>

				<div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_user_firstname">Имя<span class="required" aria-hidden="true">*</span></label>

					<div>
						<input type="text" class="required" name="user_firstname" id="reg_user_firstname" value="<?php echo (!empty($_POST['user_firstname'])) ? esc_attr(wp_unslash($_POST['user_firstname'])) : ''; ?>" required aria-required="true" />
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
						<input type="tel" class="required" name="user_tel" id="reg_user_tel" value="<?php echo (!empty($_POST['user_tel'])) ? esc_attr(wp_unslash($_POST['user_tel'])) : ''; ?>" required aria-required="true" />
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-lg-5">
				<div style="display: none;" class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide" id="user-documents-block">
					<label for="reg_user_documents" style="opacity: 0;">Медицинское образование<span class="required" aria-hidden="true">*</span></label>

					<div class="upload-wrapper">
						<input type="file" name="off_user_documents[]" id="reg_user_documents" multiple accept="image/jpeg, image/png, application/pdf" />
						<label for="reg_user_documents" class="file-label">Обзор
							<svg class="icon">
								<use href="#icon-folder"></use>
							</svg>
						</label>
						<label for="reg_user_documents" class="file-name-label" id="reg-user-document-name">Файлы не выбраны</label>
						<label for="reg_user_documents" class="input-error" id="reg-user-document-error"></label>
					</div>
				</div>

				<div class="mt-desktop woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_email">Email<span class="required" aria-hidden="true">*</span></label>
					<input type="email" class="required" name="email" id="reg_email" autocomplete="email" value="<?php echo (!empty($_POST['email'])) ? esc_attr(wp_unslash($_POST['email'])) : ''; ?>" required aria-required="true" />
				</div>

				<div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_password">Пароль<span class="required" aria-hidden="true">*</span></label>
					<div>
						<input type="text" class="required" name="password" id="reg_password" value="<?php echo (!empty($_POST['password'])) ? esc_attr(wp_unslash($_POST['password'])) : ''; ?>" required aria-required="true" />
					</div>
				</div>

				<div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_password2">Повторите пароль<span class="required" aria-hidden="true">*</span></label>
					<div>
						<input type="text" class="required" name="password2" id="reg_password2" value="<?php echo (!empty($_POST['password2'])) ? esc_attr(wp_unslash($_POST['password2'])) : ''; ?>" required aria-required="true" />
					</div>
				</div>
			</div>

			<div class="col-xl-5 col-lg-6">
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
		</div>
	</form>
<?php endif; ?>

<?php do_action('woocommerce_after_customer_login_form'); ?>
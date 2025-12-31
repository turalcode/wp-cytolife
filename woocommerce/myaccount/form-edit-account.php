<?php
defined('ABSPATH') || exit;

do_action('woocommerce_before_edit_account_form');
$user_id = get_current_user_id();
?>

<form id="register-form" enctype="multipart/form-data" class="form form-account woocommerce-EditAccountForm edit-account" action="" method="post" <?php do_action('woocommerce_edit_account_form_tag'); ?>>
	<?php do_action('woocommerce_edit_account_form_start'); ?>

	<div class="row">
		<div class="col-lg-5">
			<div class="row">
				<div class="col-lg-12 col-6">
					<label class="mb-0" for="reg_user_photo">
						<div class="account-profile-photo">
							<?php $user_photo = get_user_meta($user_id, 'user_photo', true); ?>

							<?php if ($user_photo) : ?>
								<img id="account-photo-preview" src="<?php echo esc_url($user_photo); ?>" alt="<?php echo esc_attr($user->first_name); ?>">
							<?php else: ?>
								<img id="account-photo-preview" src="<?php echo get_template_directory_uri(); ?>/assets/images/profile-placeholder.jpg" alt="<?php echo esc_attr($user->first_name); ?>">
							<?php endif; ?>
						</div>
					</label>
				</div>

				<div class="col-lg-12 col-6 form-account-photo-action-desktop">
					<label for="reg_user_photo" class="file-error-label" id="reg-user-photo-error"></label>
					<div class="form-account-photo-action">
						<input type="file" name="user_photo" class="form-account-user-photo-input" id="reg_user_photo" accept="image/jpeg, image/png">
						<label class="action" for="reg_user_photo">Загрузить фото</label>
						<div class="action" id="account-photo-remove">Удалить фото</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-7">
			<div class="form-account-education-block">
				<div class="form__group">
					<?php if (CYTOLIFE_IS_MEDIC) : ?>
						<div class="form__group-title">Статус: <span>Медицинский работник</span></div>
					<?php else: ?>
						<div class="form__group-title">Статус: <span>Розничный покупатель</span></div>
					<?php endif; ?>

					<?php if (!CYTOLIFE_IS_MEDIC) : $education = get_user_meta($user_id, 'user_education', true); ?>
						<?php if ($education == CYTOLIFE_ROLE_MEDIC) : ?>
							<div class="form-account account-notice">Статус мед. работника на рассмотрении</div>
						<?php else : ?>
							<label for="reg_user_education">Медицинское образование<span class="required" aria-hidden="true">*</span></label>
							<div>
								<select id="reg_user_education" name="user_education" class="form-select" required>
									<option value="<?php echo CYTOLIFE_ROLE_RETAIL; ?>" selected>Розничный покупатель</option>
									<option value="<?php echo CYTOLIFE_ROLE_MEDIC; ?>">Медицинский работник</option>
								</select>
							</div>
						<?php endif; ?>
					<?php endif; ?>
				</div>

				<div style="display: none;" class="form__group" id="user-documents-block">
					<label for="reg_user_documents">Добавьте сканы дипломов для подтверждения<span class="required" aria-hidden="true">*</span></label>

					<div class="upload-wrapper">
						<input type="file" name="off_user_documents[]" class="file-upload required" id="reg_user_documents" multiple accept="image/jpeg, image/png, application/pdf" />
						<label for="reg_user_documents" class="file-label">Выбрать файл
							<svg class="icon">
								<use href="#icon-folder"></use>
							</svg>
						</label>
						<label for="reg_user_documents" class="file-name-label" id="reg-user-document-name"></label>
						<label for="reg_user_documents" class="file-error-label" id="reg-user-document-error"></label>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php do_action('woocommerce_edit_account_form_fields'); ?>

	<div class="form-account-details">
		<div class="row">
			<div class="col-lg-11">
				<div class="row">
					<div class="col-lg-6">
						<div class="form__group">
							<label for="account_first_name">Имя&nbsp;<span class="required" aria-hidden="true">*</span></label>
							<input type="text" name="account_first_name" id="account_first_name" value="<?php echo esc_attr($user->first_name); ?>" rrequired aria-required="true" />
						</div>

						<div class="form__group">
							<label for="account_last_name">Фамилия&nbsp;<span class="required" aria-hidden="true">*</span></label>
							<input type="text" name="account_last_name" id="account_last_name" value="<?php echo esc_attr($user->last_name); ?>" rrequired aria-required="true" />
						</div>

						<?php $user_middle_name = get_user_meta($user_id, 'middle_name', true); ?>

						<div class="form__group">
							<label for="user_middle_name">Отчество</label>
							<input type="text" name="user_middle_name" id="user_middle_name" value="<?php echo esc_attr($user_middle_name); ?>" aria-required="true" />
						</div>
					</div>
					<div class="col-lg-6">
						<?php $user_tel = get_user_meta($user_id, 'user_tel', true); ?>

						<div class="form__group">
							<label for="reg_user_tel">Телефон<span class="required" aria-hidden="true">*</span></label>
							<input type="tel" name="user_tel" id="reg_user_tel" value="<?php echo esc_attr($user_tel); ?>" rrequired aria-required="true" />
						</div>

						<div class="form__group">
							<label for="account_email">E-mail&nbsp;<span class="required" aria-hidden="true">*</span></label>
							<input type="email" name="account_email" id="account_email" autocomplete="email" value="<?php echo esc_attr($user->user_email); ?>" rrequired aria-required="true" />
						</div>

						<?php $user_city = get_user_meta($user_id, 'user_city', true); ?>

						<div class="form__group">
							<label for="reg_user_city">Город<span class="required" aria-hidden="true">*</span></label>
							<input type="text" name="user_city" id="reg_user_city" value="<?php echo esc_attr($user_city); ?>" rrequired aria-required="true" />
						</div>
					</div>
				</div>

				<!-- <div class="form__group form__group--account-address">
					<label for="reg_user_address">Адрес</label>
					<input type="text" name="user_address" id="reg_user_address" value="" aria-required="true" />
				</div> -->
			</div>
		</div>
	</div>

	<div style="display: none;">
		<div>
			<label for="account_display_name"><?php esc_html_e('Display name', 'woocommerce'); ?>&nbsp;<span class="required" aria-hidden="true">*</span></label>
			<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_display_name" id="account_display_name" aria-describedby="account_display_name_description" value="<?php echo esc_attr($user->display_name); ?>" aria-required="true" /> <span id="account_display_name_description"><em><?php esc_html_e('This will be how your name will be displayed in the account section and in reviews', 'woocommerce'); ?></em></span>
		</div>
	</div>

	<?php do_action('woocommerce_edit_account_form'); ?>

	<?php wp_nonce_field('save_account_details', 'save-account-details-nonce'); ?>

	<div class="row">
		<div class="col-lg-7">
			<button type="submit" class="woocommerce-Button button<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>" name="save_account_details" value="<?php esc_attr_e('Save changes', 'woocommerce'); ?>">
				Сохранить изменения
				<svg class="icon">
					<use href="#icon-arrow"></use>
				</svg>
			</button>
			<input type="hidden" name="action" value="save_account_details" />
		</div>
	</div>

	<?php do_action('woocommerce_edit_account_form_end'); ?>
</form>

<?php do_action('woocommerce_after_edit_account_form'); ?>
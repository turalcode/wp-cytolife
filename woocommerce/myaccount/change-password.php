<?php
defined('ABSPATH') || exit;

$errorMessages = array();

if (CYTOLIFE_IS_LOGIN && !empty($_POST['current_password']) && !empty($_POST['new_password'] && !empty($_POST['repeat_password']))) {
    $user = wp_get_current_user();

    if (!wp_check_password($_POST['current_password'], $user->data->user_pass)) {
        $errorMessages[] = 'Старый пароль неверный';
    }

    $new_pass = str_replace(' ', '', $_POST['new_password']);

    if (!$new_pass) {
        $errorMessages[] = 'Укажите новый пароль';
    }

    if (strlen($new_pass) < 6 || strlen($new_pass) > 20) {
        $errorMessages[] = 'Новый пароль должен содержать не менее 6 и не более 20 символов';
    }

    $repeat_pass = str_replace(' ', '', $_POST['repeat_password']);

    if (!$repeat_pass) {
        $errorMessages[] = 'Укажите новый пароль повторно';
    }

    if (strcmp($new_pass, $repeat_pass) !== 0) {
        $errorMessages[] = 'Пароли не совпадают';
    }

    if (empty($errorMessages)) {
        wp_set_password($new_pass, $user->data->ID);

        $params = ['change-password' => true];

        $query_string = http_build_query($params);
        $full_url = site_url() . '?' . $query_string;
        wp_redirect($full_url);
        exit;
    }
}
?>

<section class="account-change-password">
    <?php if (!empty($errorMessages)) : ?>
        <div class="notices-wrapper">
            <div class="notices-error">
                <?php foreach ($errorMessages as $message) : ?>
                    <div><?php echo $message; ?></div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>

    <form id="account-change-password-form" class="form" method="post">
        <div class="form__group">
            <label for="current_password">Старый пароль<span class="required">*</span></label>
            <input value="<?php echo (!empty($_POST['current_password'])) ? esc_attr(wp_unslash($_POST['current_password'])) : ''; ?>" name="current_password" class="form__control required" type="text" id="current_password" required>
        </div>
        <div class="form__group">
            <label for="new_password">Новый пароль<span class="required">*</span></label>
            <input value="<?php echo (!empty($_POST['new_password'])) ? esc_attr(wp_unslash($_POST['new_password'])) : ''; ?>" name="new_password" class="form__control required" type="text" id="new_password" required>
        </div>
        <div class="form__group">
            <label for="repeat_password">Подтверждение пароля<span class="required">*</span></label>
            <input value="<?php echo (!empty($_POST['repeat_password'])) ? esc_attr(wp_unslash($_POST['repeat_password'])) : ''; ?>" name="repeat_password" class="form__control required" type="text" id="repeat_password" required>
        </div>

        <div class="form__group">
            <button class="button" type="submit">Сохранить изменения
                <svg class="icon">
                    <use href="#icon-arrow"></use>
                </svg>
            </button>
        </div>
    </form>
</section>
<?php defined('ABSPATH') || exit; ?>

<?php do_action('woocommerce_before_lost_password_confirmation_message'); ?>

<section class="account-lost-pass-conf">
    <h4><?php wc_print_notice(esc_html__('Password reset email has been sent.', 'woocommerce')); ?></h4>

    <div class="account-lost-pass-conf-message">
        <p>Письмо со ссылкой для сброса пароля было направлено на адрес электронной почты, привязанный к вашей учетной записи, доставка сообщения может занять несколько минут.</p>
        <p>Пожалуйста, подождите не менее 10 минут, прежде чем инициировать ещё один запрос.</p>
    </div>
</section>

<?php do_action('woocommerce_after_lost_password_confirmation_message'); ?>
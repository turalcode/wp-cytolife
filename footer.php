<?php defined('ABSPATH') || exit; ?>

<?php if (is_account_page()) : ?>
    <?php
    $iconLinks = array(
        'edit-account' => 'icon-profile',
        'orders' => 'icon-cart',
        'downloads' => 'icon-education',
        'support' => 'icon-support',
        'change-password' => 'icon-refresh'
    );
    ?>

    <nav id="account-menu-desktop" class="account-menu-desktop woocommerce-MyAccount-navigation" aria-label="<?php esc_html_e('Account pages', 'woocommerce'); ?>">
        <div class="container">
            <?php $index = 0; ?>

            <ul>
                <?php foreach (wc_get_account_menu_items() as $endpoint => $label) : $index++; ?>
                    <?php $cls = $index > 3 ? 'account-menu-item account-menu-item-js hide' : ''; ?>

                    <li class="<?php echo wc_get_account_menu_item_classes($endpoint); ?> <?php echo $cls; ?>">
                        <?php if ($label === 'Мой профиль') : ?>
                            <?php $label = 'Профиль' ?>
                        <?php endif; ?>

                        <a href="<?php echo esc_url(wc_get_account_endpoint_url($endpoint)); ?>" <?php echo wc_is_current_account_menu_item($endpoint) ? 'aria-current="page"' : ''; ?>>
                            <svg class="icon">
                                <use href="#<?php echo $iconLinks[$endpoint]; ?>"></use>
                            </svg>
                            <span><?php echo esc_html($label); ?></span>
                        </a>
                    </li>

                    <?php if ($index === 3) : ?>
                        <li class="account-more-menu" id="account-more-menu">
                            <button class="button-reset">
                                <svg class="icon">
                                    <use href="#icon-more-menu"></use>
                                </svg>
                                <span>Еще</span>
                            </button>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>

                <li class="account-menu-item account-menu-item-js hide">
                    <a href="<?php echo esc_url(wc_logout_url()); ?>">
                        <svg class="icon">
                            <use href="#icon-logout"></use>
                        </svg>
                        <span>Выход</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
<?php endif; ?>
</main>

<footer class="footer <?php echo is_account_page() ? 'footer--account' : ''; ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <a href="/" class="logo">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo-light.svg" alt="#" />
                </a>

                <div>
                    Разработка и производство препаратов для эстетической медицины
                </div>

                <button class="button-light button-light--footer-btn button-reset write-button-js">Напишите нам
                    <span>
                        <svg class="icon">
                            <use href="#icon-arrow"></use>
                        </svg>
                    </span>
                </button>
            </div>

            <div class="col-lg-4 col-md-6">
                <h4 class="footer__title">Для связи</h4>
                <div>
                    <a class="footer__tel" href="tel:74991309969">+7 (499) 130-99-69</a>
                </div>
                <div>
                    <a class="footer__mail" href="mailto:info@cytolife.ru">info@cytolife.ru</a>
                </div>
                <div class="footer__soc">
                    <a href="#">
                        <svg class="icon">
                            <use href="#icon-vk"></use>
                        </svg></a><a href="#">
                        <svg class="icon">
                            <use href="#icon-tg"></use>
                        </svg>
                    </a>
                </div>

                <address>
                    123242, г. Москва, ул. Дружинниковская, д.11/2, помещ.1/1
                </address>
            </div>

            <div class="col-lg-4">
                <h4 class="footer__title">Информация</h4>

                <nav class="footer__nav">
                    <ul>
                        <li><a href="#">Доставка и оплата</a></li>
                        <li>
                            <a href="#">Политика конфиденциальности</a>
                        </li>
                        <li>
                            <a href="#">Согласие на обработку персональных данных</a>
                        </li>
                        <li><a href="#">Договор-оферта</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <hr />

        <div class="footer__copyright">
            Copyright  © 2019 - 2025 | ООО «Медтендергруп»
        </div>
    </div>
</footer>

<div id="modal-cert" class="modal modal-js">
    <div class="modal__bg modal-bg-js">
        <div class="modal__body">
            <div id="modal-certificate" class="modal__certificate">
                <img id="modal-certificate-img" src="#" alt="#" />
            </div>

            <div class="modal__close modal-close-js">&times;</div>
        </div>
    </div>
</div>
<!-- /modal-cert -->

<div id="modal-form-cb" class="modal modal-js">
    <div class="modal__bg modal-bg-js">
        <div class="modal__body">
            <section class="form-cb pos-r">
                <h2 class="form-cb__title">
                    <span>Перезвоните мне</span>

                    <button class="form-cb__close button-reset modal-close-js">
                        <svg class="icon">
                            <use href="#icon-close"></use>
                        </svg>
                    </button>
                </h2>

                <!-- production [contact-form-7 id="b414fdc" title="Перезвоните мне"] -->
                <!-- dev-job [contact-form-7 id="d2692eb" title="Перезвоните мне"] -->
                <!-- dev-home [contact-form-7 id="0e6abc5" title="Перезвоните мне"] -->

                <?php echo do_shortcode('[contact-form-7 id="0e6abc5" title="Перезвоните мне"]'); ?>
            </section>
        </div>
    </div>
</div>
<!-- /modal-form-cb -->

<div id="modal-form-write" class="modal modal-js">
    <div class="modal__bg modal-bg-js">
        <div class="modal__body">
            <section class="form-cb form-cb--write pos-r">
                <h2 class="form-cb__title">
                    <span>Напишите нам</span>

                    <button class="form-cb__close button-reset modal-close-js">
                        <svg class="icon">
                            <use href="#icon-close"></use>
                        </svg>
                    </button>
                </h2>

                <!-- production [contact-form-7 id="67b86de" title="Напишите нам"] -->
                <!-- dev-job [contact-form-7 id="000f9b5" title="Напишите нам"] -->
                <!-- dev-home [contact-form-7 id="47ce3ef" title="Напишите нам"] -->

                <?php echo do_shortcode('[contact-form-7 id="47ce3ef" title="Напишите нам"]'); ?>
            </section>
        </div>
    </div>
</div>
<!-- /modal-form-write -->

<?php if (!CYTOLIFE_IS_LOGIN) : ?>
    <?php
    $cls = isset($_GET['change-password']) || isset($_REQUEST['login']) ? 'visible' : '';
    ?>

    <div id="modal-form-login" class="modal modal-js <?php echo $cls; ?>">
        <div class="modal__bg modal-bg-js">
            <div class="modal__body">
                <section class="woocommerce-form--auth form-cb form-cb--login pos-r">
                    <div class="text-right">
                        <button class="form-cb__close button-reset modal-close-js">
                            <svg class="icon">
                                <use href="#icon-close"></use>
                            </svg>
                        </button>
                    </div>

                    <h2 class="form-cb__title form-cb__title--login">
                        <span>Вход в личный кабинет</span>
                    </h2>

                    <?php if (isset($_GET['change-password'])) : ?>
                        <div class="notices-wrapper">
                            <div class="notices-success">
                                Пароль успешно изменен, необходимо авторизоваться с новым паролем
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (isset($_REQUEST['login'])) : ?>
                        <div class="notices-wrapper">
                            <div class="notices-error">
                                Неверный логин или пароль
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php do_action('woocommerce_before_customer_login_form'); ?>
                    <?php wc_print_notices(); ?>

                    <form id="login-form" class="woocommerce-form woocommerce-form-login login" method="post" novalidate>
                        <?php do_action('woocommerce_login_form_start'); ?>

                        <div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="username">E-mail<span class="required" aria-hidden="true">*</span><span class="screen-reader-text"><?php esc_html_e('Required', 'woocommerce'); ?></span></label>

                            <div class="form-cb__group">
                                <input type="text" class="required woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="<?php echo (! empty($_POST['username']) && is_string($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" required aria-required="true" placeholder="mail@mail.ru" />
                            </div>
                        </div>
                        <div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="password">Пароль<span class="required" aria-hidden="true">*</span><span class="screen-reader-text"><?php esc_html_e('Required', 'woocommerce'); ?></span></label>

                            <div class="form-cb__group">
                                <div class="password-input">
                                    <input class="required woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" required aria-required="true" placeholder="password" />
                                    <div class="show-password-input"></div>
                                </div>
                            </div>
                        </div>

                        <?php do_action('woocommerce_login_form'); ?>

                        <div class="form-cb__group-check">
                            <label>
                                <input type="checkbox" class="required" name="policy" required aria-required="true" />

                                <span>При входе и регистрации я даю согласие на обработку<br>своих персональных данных в соответствии с <a href="/user-agreement/">политикой обработки персональных данных</a></span>
                            </label>
                        </div>

                        <div class="form-row">
                            <?php wp_nonce_field('woocommerce-login', 'woocommerce-login-nonce'); ?>

                            <button type="submit" class="button-reset woocommerce-button button woocommerce-form-login__submit<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>" name="login" value="<?php esc_attr_e('Log in', 'woocommerce'); ?>">Авторизоваться
                                <svg class="icon">
                                    <use href="#icon-arrow"></use>
                                </svg>
                            </button>
                        </div>

                        <div class="form-row form-links">
                            <a href="<?php echo esc_url(wp_lostpassword_url()); ?>">Забыли пароль</a>
                            <a href="<?php echo wc_get_page_permalink('myaccount') ?>">Регистрация</a>
                        </div>

                        <?php do_action('woocommerce_login_form_end'); ?>
                    </form>

                    <?php do_action('woocommerce_after_customer_login_form'); ?>
                </section>
            </div>
        </div>
    </div>
    <!-- /modal-form-login -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>

</html>
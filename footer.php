<?php defined('ABSPATH') || exit; ?>

</main>

<footer class="footer">
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

<div id="modal-form-login" class="modal modal-js visible">
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

                <?php echo do_shortcode('[woocommerce_my_account]'); ?>
            </section>
        </div>
    </div>
</div>
<!-- /modal-form-login -->

<?php wp_footer(); ?>
</body>

</html>
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

                <a class="button-light button-light--footer-btn" href="#">Напишите нам
                    <span>
                        <svg class="icon">
                            <use href="#icon-arrow"></use>
                        </svg></span>
                </a>
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
                        </svg></a>
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

<div id="modal" class="modal">
    <div class="modal__bg modal-bg-js">
        <div class="modal__body">
            <div id="modal-certificate" class="modal__certificate">
                <img id="modal-certificate-img" src="#" alt="#" />
            </div>

            <div class="modal__close modal-close-js">&times;</div>
        </div>
    </div>
</div>
<!-- /modal -->

<?php wp_footer(); ?>
</body>

</html>
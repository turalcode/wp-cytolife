<?php defined('ABSPATH') || exit; ?>

<section class="account-support">
    <div class="row">
        <div class="col-lg-10">
            <ul class="account-support-info-list">
                <li class="account-support-info-item">
                    <div class="account-support-info-item-title">Техническая поддержка сайта:</div>
                    <div>+7 (495) 123-45-67 (с 10:00 до 18:30, Пн–Пт)</div>
                    <div>Пожалуйста, звоните, если у вас возникают сложности с входом, регистрацией, оформлением заказа, работой личного кабинета.</div>
                </li>
                <li class="account-support-info-item">
                    <div class="account-support-info-item-title">Вопросы по заказам:</div>
                    <div>+7 (499) 130-99-69</div>
                    <div>Консультанты помогут уточнить наличие товара, сроки отгрузки, статус оплаты и доставки.</div>
                </li>
                <li class="account-support-info-item">
                    <div class="account-support-info-item-title">Вопросы по доставке:</div>
                    <div>+7 (499) 130-99-69</div>
                    <div>Консультанты помогут уточнить наличие товара, сроки отгрузки, статус оплаты и доставки.</div>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="account-support-form">
    <div class="row">
        <div class="col-lg-10">
            <h3 class="account-support-form-title">Напишите нам</h3>
            <div class="section-header-subtitle">
                Если вопрос не требует срочного решения - вы можете воспользоваться формой обратной связи. Мы ответим в течение 1 рабочего дня.
            </div>

            <!-- production [contact-form-7 id="c50c2ec" title="Мы ценим ваше мнение"] -->
            <!-- dev-home [contact-form-7 id="5f1dc1d" title="Мы ценим ваше мнение"] -->

            <div class="form">
                <?php echo do_shortcode('[contact-form-7 id="5f1dc1d" title="Мы ценим ваше мнение"]'); ?>
            </div>
        </div>
    </div>
</section>

<section class="account-support-faq">
    <h2 class="account-support-faq-title">Часто задаваемые вопросы</h2>

    <div class="accordion">
        <div class="accordion-item">
            <div class="accordion-trigger active">
                <h3 class="account-support-faq-question">Почему я не вижу цены и не могу оформить заказ?</h3>
                <div class="accordion-trigger-action">
                    <svg class="icon">
                        <use href="#icon-arrow"></use>
                    </svg>
                </div>
            </div>
            <div class="accordion-panel active">
                <div class="accordion-hidden">
                    <div class="account-support-faq-answer">
                        Цены на инъекционные препараты отображаются только после авторизации и подтверждения статуса медицинского специалиста. Это требование законодательства и профессиональных стандартов. Для всех остальных препаратов цены доступны без ограничений — вы можете просматривать ассортимент и оформлять заказ в любое время.
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <div class="accordion-trigger">
                <h3 class="account-support-faq-question">Почему я не вижу цены и не могу оформить заказ?</h3>
                <div class="accordion-trigger-action">
                    <svg class="icon">
                        <use href="#icon-arrow"></use>
                    </svg>
                </div>
            </div>
            <div class="accordion-panel">
                <div class="accordion-hidden">
                    <div class="account-support-faq-answer">
                        Цены на инъекционные препараты отображаются только после авторизации и подтверждения статуса медицинского специалиста. Это требование законодательства и профессиональных стандартов. Для всех остальных препаратов цены доступны без ограничений — вы можете просматривать ассортимент и оформлять заказ в любое время.
                    </div>
                </div>
            </div>
        </div>
</section>
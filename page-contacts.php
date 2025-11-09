<?php get_header(); ?>

<section class="contacts-f-screen section">
    <div class="container">
        <h1>Контакты</h1>

        <div class="contacts-f-screen__switch switch-js">
            <button class="contacts-f-screen__switch-action switch-action-js active" data-switch-content="switch-moscow-js">
                <span>Офис Москва</span>
                <span>Москва</span>
            </button>
            <button class="contacts-f-screen__switch-action switch-action-js" data-switch-content="switch-other-js">
                <span>Региональные представительства</span>
                <span>Регионы</span>
            </button>
        </div>
    </div>
</section>
<!-- /contact-f-screen -->

<div class="contacts-content">
    <div class="contacts-content__body switch-content-js switch-moscow-js active">
        <section class="office section">
            <div class="container">
                <div class="section-header">
                    <div class="row">
                        <div class="col-md-4">
                            <span class="mini-logo">Главный</span>
                        </div>
                        <div class="col-md-8">
                            <h2 class="section-header-title">Офис Москва</h2>
                            <div class="section-header-subtitle">
                                <div class="office__info">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <?php if (!empty($cytolife_theme_options['phone'])): ?>
                                                <a class="office__info-tel" href="tel:+<?php echo cytolife_str_replace_phone($cytolife_theme_options['phone']); ?>">
                                                    <?php echo $cytolife_theme_options['phone']; ?>
                                                </a>
                                            <?php endif; ?>

                                            <div>Прием звонков с 10:00 до 18:30 (Пн-Пт)</div>

                                            <?php if (!empty($cytolife_theme_options['email'])): ?>
                                                <a class="office__info-mail" href="mailto:<?php echo cytolife_str_replace_phone($cytolife_theme_options['email']); ?>">
                                                    <?php echo cytolife_str_replace_phone($cytolife_theme_options['email']); ?>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-md-6">
                                            <div>м. Краснопресненская</div>
                                            <address>
                                                1223242, г. Москва, ул Дружинниковская, д. 11/2
                                                (вход с пер. Капранова)
                                            </address>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="office__location">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="office__map">
                                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A09a50eb0df2cfa0e149fcdbf9b2ffaaca7a41402b94303c8ba8c47b081b093e0&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="office__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/office.jpg" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /office -->

        <section class="office-info section section--pt">
            <div class="container">
                <div class="section-header mb-0">
                    <div class="row">
                        <div class="col-md-4">
                            <span class="mini-logo">Регионы</span>
                        </div>
                        <div class="col-md-8">
                            <h2 class="section-header-title">
                                Отдел по работе с регионами
                            </h2>
                            <div class="section-header-subtitle">
                                <div class="office__info">
                                    <?php if (!empty($cytolife_theme_options['region_phone'])): ?>
                                        <a class="office__info-tel" href="tel:+<?php echo cytolife_str_replace_phone($cytolife_theme_options['region_phone']); ?>">
                                            <?php echo $cytolife_theme_options['region_phone']; ?>
                                        </a>
                                    <?php endif; ?>

                                    <div>Прием звонков с 10:00 до 18:30 (Пн-Пт)</div>

                                    <?php if (!empty($cytolife_theme_options['region_email'])): ?>
                                        <a class="office__info-mail" href="mailto:<?php echo cytolife_str_replace_phone($cytolife_theme_options['region_email']); ?>">
                                            <?php echo cytolife_str_replace_phone($cytolife_theme_options['region_email']); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /office-info -->

        <section class="office-info section section--pt">
            <div class="container">
                <div class="section-header mb-0">
                    <div class="row">
                        <div class="col-md-4">
                            <span class="mini-logo">Партнёрство</span>
                        </div>
                        <div class="col-md-8">
                            <h2 class="section-header-title">
                                По вопросам сотрудничества
                            </h2>
                            <div class="section-header-subtitle">
                                <div class="office__info">
                                    <div>
                                        Открыты к партнёрству, дистрибуции и<br>совместным
                                        проектам.
                                    </div>
                                    <div>Пишите — обсудим условия и возможности.</div>

                                    <?php if (!empty($cytolife_theme_options['cooperation_email'])): ?>
                                        <a class="office__info-mail" href="mailto:<?php echo cytolife_str_replace_phone($cytolife_theme_options['cooperation_email']); ?>">
                                            <?php echo cytolife_str_replace_phone($cytolife_theme_options['cooperation_email']); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /office-info -->

        <section class="details section section--pt">
            <div class="container">
                <div class="section-header mb-0">
                    <div class="row">
                        <div class="col-md-4">
                            <span class="mini-logo">Документы</span>
                        </div>
                        <div class="col-md-8">
                            <h2 class="section-header-title">Реквизиты</h2>
                            <div class="section-header-subtitle">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="details__info">
                                            <ul class="details__list">
                                                <li>ООО «МедТендерГруп»</li>
                                                <li>
                                                    Юридический адрес: 123242, г. Москва, ул.
                                                    Дружинниковская, д.11/2, помещ.1/1
                                                </li>
                                                <li>
                                                    Фактический адрес: 123242, г. Москва, ул.
                                                    Дружинниковская, д.11/2, помещ.1/1
                                                </li>
                                                <li>ИНН 7708816800</li>
                                                <li>КПП 770301001</li>
                                                <li>ОГРН 1147746768344</li>
                                                <li>ОКПО 29036912</li>
                                                <li>Р/сч 40702.810.6.38000102018</li>
                                                <li>ПАО СБЕРБАНК Г. МОСКВА</li>
                                                <li>БИК 044525225</li>
                                                <li>кор/сч 30101.810.4.00000000225</li>
                                            </ul>

                                            <a href="<?php echo get_template_directory_uri(); ?>/assets/images/details.docx" class="details__btn button" download="">Скачать реквизиты
                                                <svg class="icon">
                                                    <use href="#icon-arrow"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="details__img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/details.jpg" alt="#">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /details -->

        <section class="contacts-form section section--pt">
            <div class="container">
                <div class="section-header mb-0">
                    <div class="row">
                        <div class="col-md-4">
                            <span class="mini-logo">Диалог</span>
                        </div>
                        <div class="col-md-8">
                            <h2 class="section-header-title">Мы ценим ваше мнение</h2>
                            <div class="section-header-subtitle">
                                Есть вопросы или предложения? Мы всегда<br>открыты для
                                общения! Отправьте ваше<br>
                                сообщение через форму ниже, и мы ответим в<br>течение
                                одного рабочего дня.
                            </div>

                            <div class="form">
                                <form>
                                    <div class="form__group">
                                        <label for="name">ФИО*</label>
                                        <input id="name" class="form__control" type="text" placeholder="Иванова Анастасия Ивановна">
                                    </div>

                                    <div class="form__group">
                                        <label for="tel">Телефон*</label>
                                        <input id="tel" class="form__control" type="tel" placeholder="+7 (999) 999-99-99">
                                    </div>

                                    <div class="form__group">
                                        <label for="mail">E-mail*</label>
                                        <input id="mail" class="form__control" type="mail" placeholder="ivanova@mail.ru">
                                    </div>

                                    <div class="form__group">
                                        <label for="message">Сообщение*</label>
                                        <input id="message" class="form__control" type="message">
                                    </div>

                                    <div class="form__group form__group--check">
                                        <input id="check" class="form__control-check" type="checkbox">
                                        <label class="form__check" for="check">Я принимаю условия
                                            <a href="#">Политики конфиденциальности</a> и даю
                                            <a href="#">согласие на обработку персональных данных</a>
                                            в соответствии с Федеральным законом №152-ФЗ «О
                                            персональных данных».</label>
                                    </div>

                                    <div class="form__group">
                                        <button class="button" type="submit">
                                            Отправить
                                            <svg class="icon">
                                                <use href="#icon-arrow"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /contacts-form -->

        <section class="social section section--pt">
            <div class="container">
                <div class="section-header mb-0">
                    <div class="row">
                        <div class="col-md-4">
                            <span class="mini-logo">Медиа</span>
                        </div>
                        <div class="col-md-8">
                            <h2 class="section-header-title">Социальные сети</h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="social__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social.jpg" alt="#">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="social__links">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="social__qr">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/qr-code-vk.jpg" alt="#">
                                            <a class="button" href="#" alt="#">VKontakte<svg class="icon">
                                                    <use href="#icon-arrow"></use>
                                                </svg></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="social__qr">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/qr-code-tg.jpg" alt="#">
                                            <a class="button" href="#" alt="#">Telegram<svg class="icon">
                                                    <use href="#icon-arrow"></use>
                                                </svg></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="social__img-mob">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social.jpg" alt="#">
                    </div>
                </div>
            </div>
        </section>
        <!-- /social -->
    </div>

    <div class="contacts-content__body switch-content-js switch-other-js">
        <section class="office-info section">
            <div class="container">
                <div class="section-header mb-0">
                    <div class="row">
                        <div class="col-md-4">
                            <span class="mini-logo">Регионы</span>
                        </div>
                        <div class="col-md-8">
                            <h2 class="section-header-title">
                                Отдел по работе с регионами
                            </h2>
                            <div class="section-header-subtitle">
                                <div class="office__info">
                                    <?php if (!empty($cytolife_theme_options['region_phone'])): ?>
                                        <a class="office__info-tel" href="tel:+<?php echo cytolife_str_replace_phone($cytolife_theme_options['region_phone']); ?>">
                                            <?php echo $cytolife_theme_options['region_phone']; ?>
                                        </a>
                                    <?php endif; ?>

                                    <div>Прием звонков с 10:00 до 18:30 (Пн-Пт)</div>

                                    <?php if (!empty($cytolife_theme_options['region_email'])): ?>
                                        <a class="office__info-mail" href="mailto:<?php echo cytolife_str_replace_phone($cytolife_theme_options['region_email']); ?>">
                                            <?php echo cytolife_str_replace_phone($cytolife_theme_options['region_email']); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /office-info -->

        <section class="office-info section section--pt">
            <div class="container">
                <div class="section-header mb-0">
                    <div class="row">
                        <div class="col-md-4">
                            <span class="mini-logo">Партнёрство</span>
                        </div>
                        <div class="col-md-8">
                            <h2 class="section-header-title">
                                По вопросам сотрудничества
                            </h2>
                            <div class="section-header-subtitle">
                                <div class="office__info">
                                    <div>
                                        Открыты к партнёрству, дистрибуции и<br>совместным
                                        проектам.
                                    </div>
                                    <div>Пишите — обсудим условия и возможности.</div>

                                    <?php if (!empty($cytolife_theme_options['cooperation_email'])): ?>
                                        <a class="office__info-mail" href="mailto:<?php echo cytolife_str_replace_phone($cytolife_theme_options['cooperation_email']); ?>">
                                            <?php echo cytolife_str_replace_phone($cytolife_theme_options['cooperation_email']); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /office-info -->

        <div class="distributors section section--pt">
            <div class="container">
                <h2 class="distributors__title section-title--center">
                    Дистрибьюторы
                </h2>

                <div class="distributors__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/distributors.jpg" alt="#">
                </div>

                <div class="distributors__filter filter filter-distributors">
                    <div class="filter-dropdown-section">
                        <div class="filter-dropdown">
                            <button class="filter-dropdown-action">
                                <span class="filter-dropdown-action-text region-action-text">
                                    Южный
                                </span>
                                <svg class="icon">
                                    <use href="#icon-arrow-dropdown"></use>
                                </svg>
                            </button>

                            <div class="filter-dropdown-list-wrapper">
                                <div class="filter-dropdown-scroll reset-scroll">
                                    <ul class="filter-dropdown-list">
                                        <li class="filter-dropdown-list-item active" data-action-class="region-action-text" data-filter-class="region-1" data-category="region">
                                            Южный
                                        </li>
                                        <li class="filter-dropdown-list-item" data-action-class="region-action-text" data-filter-class="region-2" data-category="region">
                                            Центральный
                                        </li>
                                        <li class="filter-dropdown-list-item" data-action-class="region-action-text" data-filter-class="region-3" data-category="region">
                                            Уральский
                                        </li>
                                        <li class="filter-dropdown-list-item" data-action-class="region-action-text" data-filter-class="region-4" data-category="region">
                                            Приволжский
                                        </li>
                                        <li class="filter-dropdown-list-item" data-action-class="region-action-text" data-filter-class="region-5" data-category="region">
                                            Сибирский
                                        </li>
                                        <li class="filter-dropdown-list-item" data-action-class="region-action-text" data-filter-class="region-6" data-category="region">
                                            Дальневосточный
                                        </li>
                                        <li class="filter-dropdown-list-item" data-action-class="region-action-text" data-filter-class="region-7" data-category="region">
                                            Северо-западный
                                        </li>
                                        <li class="filter-dropdown-list-item" data-action-class="region-action-text" data-filter-class="region-8" data-category="region">
                                            Избранное
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="filter-dropdown">
                            <button class="filter-dropdown-action">
                                <span class="filter-dropdown-action-text area-action-text">
                                    Московская область
                                </span>
                                <svg class="icon">
                                    <use href="#icon-arrow-dropdown"></use>
                                </svg>
                            </button>

                            <div class="filter-dropdown-list-wrapper">
                                <div class="filter-dropdown-scroll">
                                    <div class="filter-search-wrapper">
                                        <input class="filter-search" data-search="area-search" type="text" placeholder="Найти область">
                                        <svg class="icon">
                                            <use href="#icon-arrow-airplane"></use>
                                        </svg>
                                    </div>

                                    <ul class="filter-dropdown-list area-search">
                                        <li class="filter-dropdown-list-item active" data-action-class="area-action-text" data-filter-class="area-1" data-category="area">
                                            Московская область
                                        </li>
                                        <li class="filter-dropdown-list-item" data-action-class="area-action-text" data-filter-class="area-2" data-category="area">
                                            Область-2
                                        </li>
                                        <li class="filter-dropdown-list-item" data-action-class="area-action-text" data-filter-class="area-3" data-category="area">
                                            Область-3
                                        </li>
                                        <li class="filter-dropdown-list-item" data-action-class="area-action-text" data-filter-class="area-4" data-category="area">
                                            Область-4
                                        </li>
                                        <li class="filter-dropdown-list-item" data-action-class="area-action-text" data-filter-class="area-5" data-category="area">
                                            Область-5
                                        </li>
                                        <li class="filter-dropdown-list-item" data-action-class="area-action-text" data-filter-class="area-6" data-category="area">
                                            Область-6
                                        </li>
                                        <li class="filter-dropdown-list-item" data-action-class="area-action-text" data-filter-class="area-7" data-category="area">
                                            Область-7
                                        </li>
                                        <li class="filter-dropdown-list-item" data-action-class="area-action-text" data-filter-class="area-8" data-category="area">
                                            Область-8
                                        </li>
                                        <li class="filter-dropdown-list-item" data-action-class="area-action-text" data-filter-class="area-9" data-category="area">
                                            Область-9
                                        </li>
                                        <li class="filter-dropdown-list-item" data-action-class="area-action-text" data-filter-class="area-10" data-category="area">
                                            Область-10
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="filter-dropdown">
                            <button class="filter-dropdown-action active">
                                <span class="filter-dropdown-action-text city-action-text">Город</span>

                                <svg class="icon">
                                    <use href="#icon-arrow-dropdown"></use>
                                </svg>
                            </button>

                            <div class="filter-dropdown-list-wrapper active">
                                <div class="filter-dropdown-scroll">
                                    <div class="filter-search-wrapper">
                                        <input class="filter-search" data-search="city-search" type="text" placeholder="Найти город">
                                        <svg class="icon">
                                            <use href="#icon-arrow-airplane"></use>
                                        </svg>
                                    </div>

                                    <ul class="filter-dropdown-list city-search">
                                        <li class="filter-dropdown-list-item" data-action-class="city-action-text" data-filter-class="city-1" data-category="city">
                                            Город-1
                                        </li>
                                        <li class="filter-dropdown-list-item" data-action-class="city-action-text" data-filter-class="city-2" data-category="city">
                                            Город-2
                                        </li>
                                        <li class="filter-dropdown-list-item" data-action-class="city-action-text" data-filter-class="city-3" data-category="city">
                                            Город-3
                                        </li>
                                        <li class="filter-dropdown-list-item" data-action-class="city-action-text" data-filter-class="city-4" data-category="city">
                                            Город-4
                                        </li>
                                        <li class="filter-dropdown-list-item" data-action-class="city-action-text" data-filter-class="city-5" data-category="city">
                                            Город-5
                                        </li>
                                        <li class="filter-dropdown-list-item" data-action-class="city-action-text" data-filter-class="city-6" data-category="city">
                                            Город-6
                                        </li>
                                        <li class="filter-dropdown-list-item" data-action-class="city-action-text" data-filter-class="city-7" data-category="city">
                                            Город-7
                                        </li>
                                        <li class="filter-dropdown-list-item" data-action-class="city-action-text" data-filter-class="city-8" data-category="city">
                                            Город-8
                                        </li>
                                        <li class="filter-dropdown-list-item" data-action-class="city-action-text" data-filter-class="city-9" data-category="city">
                                            Город-9
                                        </li>
                                        <li class="filter-dropdown-list-item" data-action-class="city-action-text" data-filter-class="city-10" data-category="city">
                                            Город-10
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="filter-dropdown">
                            <button class="filter-dropdown-action">
                                <span class="filter-dropdown-action-text distributor-action-text">Наименование</span>

                                <svg class="icon">
                                    <use href="#icon-arrow-dropdown"></use>
                                </svg>
                            </button>

                            <div class="filter-dropdown-list-wrapper">
                                <div class="filter-dropdown-scroll">
                                    <div class="filter-search-wrapper">
                                        <input class="filter-search" data-search="distributor-search" type="text" placeholder="Найти дистрибьютора">
                                        <svg class="icon">
                                            <use href="#icon-arrow-airplane"></use>
                                        </svg>
                                    </div>

                                    <ul class="filter-dropdown-list distributor-search">
                                        <li class="filter-dropdown-list-item" data-action-class="distributor-action-text" data-filter-class="distributor-1" data-category="distributor">
                                            Дистрибьютор-1
                                        </li>
                                        <li class="filter-dropdown-list-item" data-action-class="distributor-action-text" data-filter-class="distributor-2" data-category="distributor">
                                            Дистрибьютор-2
                                        </li>
                                        <li class="filter-dropdown-list-item" data-action-class="distributor-action-text" data-filter-class="distributor-3" data-category="distributor">
                                            Дистрибьютор-3
                                        </li>
                                        <li class="filter-dropdown-list-item" data-action-class="distributor-action-text" data-filter-class="distributor-4" data-category="distributor">
                                            Дистрибьютор-4
                                        </li>
                                        <li class="filter-dropdown-list-item" data-action-class="distributor-action-text" data-filter-class="distributor-5" data-category="distributor">
                                            Дистрибьютор-5
                                        </li>
                                        <li class="filter-dropdown-list-item" data-action-class="distributor-action-text" data-filter-class="distributor-6" data-category="distributor">
                                            Дистрибьютор-6
                                        </li>
                                        <li class="filter-dropdown-list-item" data-action-class="distributor-action-text" data-filter-class="distributor-7" data-category="distributor">
                                            Дистрибьютор-7
                                        </li>
                                        <li class="filter-dropdown-list-item" data-action-class="distributor-action-text" data-filter-class="distributor-8" data-category="distributor">
                                            Дистрибьютор-8
                                        </li>
                                        <li class="filter-dropdown-list-item" data-action-class="distributor-action-text" data-filter-class="distributor-9" data-category="distributor">
                                            Дистрибьютор-9
                                        </li>
                                        <li class="filter-dropdown-list-item" data-action-class="distributor-action-text" data-filter-class="distributor-10" data-category="distributor">
                                            Дистрибьютор-10
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="filter-result">
                        <ul class="filter-result-list">
                            <li class="filter-result-item region-3 area-3 city-4 distributor-4" style="display: none;">
                                <h3 class="filter-result-item-title">Москва</h3>
                                <div class="filter-result-item-subtitle">
                                    Московская область
                                </div>

                                <div>FILARAcosmo</div>

                                <div class="filter-result-item-links">
                                    <div>
                                        <a href="tel:+7(988)0095560">+7 (988) 009-55-60</a>
                                    </div>
                                    <div>
                                        <a href="mailto:info@filara-cosmo.ru">info@filara-cosmo.ru</a>
                                    </div>
                                    <div>
                                        <a href="https://filara-cosmo.ru">https://filara-cosmo.ru</a>
                                    </div>
                                </div>
                            </li>

                            <li class="filter-result-item region-1 area-1 city-2 distributor-2" style="display: block;">
                                <h3 class="filter-result-item-title">Волгоград</h3>
                                <div class="filter-result-item-subtitle">
                                    Волгоградская область
                                </div>

                                <div>FILARAcosmo</div>

                                <div class="filter-result-item-links">
                                    <div>
                                        <a href="tel:+7(988)0095560">+7 (988) 009-55-60</a>
                                    </div>
                                    <div>
                                        <a href="mailto:info@filara-cosmo.ru">info@filara-cosmo.ru</a>
                                    </div>
                                    <div>
                                        <a href="https://filara-cosmo.ru">https://filara-cosmo.ru</a>
                                    </div>
                                </div>
                            </li>

                            <li class="filter-result-item region-1 area-2 city-3 distributor-4" style="display: none;">
                                <h3 class="filter-result-item-title">Владивкавказ</h3>
                                <div class="filter-result-item-subtitle">
                                    Республика Северная Осетия-Алания
                                </div>

                                <div>FILARAcosmo</div>

                                <div class="filter-result-item-links">
                                    <div>
                                        <a href="tel:+7(988)0095560">+7 (988) 009-55-60</a>
                                    </div>
                                    <div>
                                        <a href="mailto:info@filara-cosmo.ru">info@filara-cosmo.ru</a>
                                    </div>
                                    <div>
                                        <a href="https://filara-cosmo.ru">https://filara-cosmo.ru</a>
                                    </div>
                                </div>
                            </li>

                            <li class="filter-result-item region-4 area-3 city-2 distributor-1" style="display: none;">
                                <h3 class="filter-result-item-title">Новороссийск</h3>
                                <div class="filter-result-item-subtitle">
                                    Краснодарский край
                                </div>

                                <div>FILARAcosmo</div>

                                <div class="filter-result-item-links">
                                    <div>
                                        <a href="tel:+7(988)0095560">+7 (988) 009-55-60</a>
                                    </div>
                                    <div>
                                        <a href="mailto:info@filara-cosmo.ru">info@filara-cosmo.ru</a>
                                    </div>
                                    <div>
                                        <a href="https://filara-cosmo.ru">https://filara-cosmo.ru</a>
                                    </div>
                                </div>
                            </li>

                            <li class="filter-result-item region-3 area-3 city-4 distributor-4" style="display: none;">
                                <h3 class="filter-result-item-title">Москва</h3>
                                <div class="filter-result-item-subtitle">
                                    Московская область
                                </div>

                                <div>FILARAcosmo</div>

                                <div class="filter-result-item-links">
                                    <div>
                                        <a href="tel:+7(988)0095560">+7 (988) 009-55-60</a>
                                    </div>
                                    <div>
                                        <a href="mailto:info@filara-cosmo.ru">info@filara-cosmo.ru</a>
                                    </div>
                                    <div>
                                        <a href="https://filara-cosmo.ru">https://filara-cosmo.ru</a>
                                    </div>
                                </div>
                            </li>

                            <li class="filter-result-item region-1 area-1 city-2 distributor-2" style="display: block;">
                                <h3 class="filter-result-item-title">Волгоград</h3>
                                <div class="filter-result-item-subtitle">
                                    Волгоградская область
                                </div>

                                <div>FILARAcosmo</div>

                                <div class="filter-result-item-links">
                                    <div>
                                        <a href="tel:+7(988)0095560">+7 (988) 009-55-60</a>
                                    </div>
                                    <div>
                                        <a href="mailto:info@filara-cosmo.ru">info@filara-cosmo.ru</a>
                                    </div>
                                    <div>
                                        <a href="https://filara-cosmo.ru">https://filara-cosmo.ru</a>
                                    </div>
                                </div>
                            </li>

                            <li class="filter-result-item region-1 area-2 city-3 distributor-4" style="display: none;">
                                <h3 class="filter-result-item-title">Владивкавказ</h3>
                                <div class="filter-result-item-subtitle">
                                    Республика Северная Осетия-Алания
                                </div>

                                <div>FILARAcosmo</div>

                                <div class="filter-result-item-links">
                                    <div>
                                        <a href="tel:+7(988)0095560">+7 (988) 009-55-60</a>
                                    </div>
                                    <div>
                                        <a href="mailto:info@filara-cosmo.ru">info@filara-cosmo.ru</a>
                                    </div>
                                    <div>
                                        <a href="https://filara-cosmo.ru">https://filara-cosmo.ru</a>
                                    </div>
                                </div>
                            </li>

                            <li class="filter-result-item region-4 area-3 city-2 distributor-1" style="display: none;">
                                <h3 class="filter-result-item-title">Новороссийск</h3>
                                <div class="filter-result-item-subtitle">
                                    Краснодарский край
                                </div>

                                <div>FILARAcosmo</div>

                                <div class="filter-result-item-links">
                                    <div>
                                        <a href="tel:+7(988)0095560">+7 (988) 009-55-60</a>
                                    </div>
                                    <div>
                                        <a href="mailto:info@filara-cosmo.ru">info@filara-cosmo.ru</a>
                                    </div>
                                    <div>
                                        <a href="https://filara-cosmo.ru">https://filara-cosmo.ru</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /distributors -->

        <section class="details section section--pt">
            <div class="container">
                <div class="section-header mb-0">
                    <div class="row">
                        <div class="col-md-4">
                            <span class="mini-logo">Документы</span>
                        </div>
                        <div class="col-md-8">
                            <h2 class="section-header-title">Реквизиты</h2>
                            <div class="section-header-subtitle">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="details__info">
                                            <ul class="details__list">
                                                <li>ООО «МедТендерГруп»</li>
                                                <li>
                                                    Юридический адрес: 123242, г. Москва, ул.
                                                    Дружинниковская, д.11/2, помещ.1/1
                                                </li>
                                                <li>
                                                    Фактический адрес: 123242, г. Москва, ул.
                                                    Дружинниковская, д.11/2, помещ.1/1
                                                </li>
                                                <li>ИНН 7708816800</li>
                                                <li>КПП 770301001</li>
                                                <li>ОГРН 1147746768344</li>
                                                <li>ОКПО 29036912</li>
                                                <li>Р/сч 40702.810.6.38000102018</li>
                                                <li>ПАО СБЕРБАНК Г. МОСКВА</li>
                                                <li>БИК 044525225</li>
                                                <li>кор/сч 30101.810.4.00000000225</li>
                                            </ul>

                                            <a href="<?php echo get_template_directory_uri(); ?>/assets/images/details.docx" class="details__btn button" download="">Скачать реквизиты
                                                <svg class="icon">
                                                    <use href="#icon-arrow"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="details__img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/details.jpg" alt="#">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /details -->

        <section class="contacts-form section section--pt">
            <div class="container">
                <div class="section-header mb-0">
                    <div class="row">
                        <div class="col-md-4">
                            <span class="mini-logo">Диалог</span>
                        </div>
                        <div class="col-md-8">
                            <h2 class="section-header-title">Мы ценим ваше мнение</h2>
                            <div class="section-header-subtitle">
                                Есть вопросы или предложения? Мы всегда<br>открыты для
                                общения! Отправьте ваше<br>
                                сообщение через форму ниже, и мы ответим в<br>течение
                                одного рабочего дня.
                            </div>

                            <div class="form">
                                <form>
                                    <div class="form__group">
                                        <label for="name">ФИО*</label>
                                        <input id="name" class="form__control" type="text" placeholder="Иванова Анастасия Ивановна">
                                    </div>

                                    <div class="form__group">
                                        <label for="tel">Телефон*</label>
                                        <input id="tel" class="form__control" type="tel" placeholder="+7 (999) 999-99-99">
                                    </div>

                                    <div class="form__group">
                                        <label for="mail">E-mail*</label>
                                        <input id="mail" class="form__control" type="mail" placeholder="ivanova@mail.ru">
                                    </div>

                                    <div class="form__group">
                                        <label for="message">Сообщение*</label>
                                        <input id="message" class="form__control" type="message">
                                    </div>

                                    <div class="form__group form__group--check">
                                        <input id="check" class="form__control-check" type="checkbox">
                                        <label class="form__check" for="check">Я принимаю условия
                                            <a href="#">Политики конфиденциальности</a> и даю
                                            <a href="#">согласие на обработку персональных данных</a>
                                            в соответствии с Федеральным законом №152-ФЗ «О
                                            персональных данных».</label>
                                    </div>

                                    <div class="form__group">
                                        <button class="button" type="submit">
                                            Отправить
                                            <svg class="icon">
                                                <use href="#icon-arrow"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /contacts-form -->

        <section class="social section section--pt">
            <div class="container">
                <div class="section-header mb-0">
                    <div class="row">
                        <div class="col-md-4">
                            <span class="mini-logo">Медиа</span>
                        </div>
                        <div class="col-md-8">
                            <h2 class="section-header-title">Социальные сети</h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="social__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social.jpg" alt="#">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="social__links">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="social__qr">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/qr-code-vk.jpg" alt="#">
                                            <a class="button" href="#" alt="#">VKontakte<svg class="icon">
                                                    <use href="#icon-arrow"></use>
                                                </svg></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="social__qr">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/qr-code-tg.jpg" alt="#">
                                            <a class="button" href="#" alt="#">Telegram<svg class="icon">
                                                    <use href="#icon-arrow"></use>
                                                </svg></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="social__img-mob">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social.jpg" alt="#">
                    </div>
                </div>
            </div>
        </section>
        <!-- /social -->
    </div>
</div>

<?php get_footer(); ?>
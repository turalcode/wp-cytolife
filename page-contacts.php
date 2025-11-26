<?php defined('ABSPATH') || exit; ?>

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

                            <!-- production [contact-form-7 id="c50c2ec" title="Мы ценим ваше мнение"] -->
                            <!-- dev-home [contact-form-7 id="5f1dc1d" title="Мы ценим ваше мнение"] -->

                            <div class="form">
                                <?php echo do_shortcode('[contact-form-7 id="5f1dc1d" title="Мы ценим ваше мнение"]'); ?>
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

        <section class="distributors section section--pt">
            <div class="container">
                <h2 class="distributors__title section-title--center">
                    Дистрибьюторы
                </h2>

                <div class="distributors__map">
                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A8591d3fc17d14eb51bf1af7992b2235e01526f2212dce116d555fce253bc85d3&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>
                </div>

                <?php
                global $post;

                $distributors = get_posts(array(
                    'post_type' => 'distributors'
                ));
                ?>

                <?php if (!empty($distributors)): ?>
                    <div class="distributors__filter filter filter-distributors">
                        <div class="filter-dropdown-section">
                            <?php
                            $terms = get_terms('distributor_regions', array(
                                'hide_empty' => false
                            ));
                            ?>

                            <?php if (!empty($terms)) : ?>
                                <div class="filter-dropdown">
                                    <button class="filter-dropdown-action">
                                        <span class="filter-dropdown-action-text region-action-text">
                                            Регион
                                        </span>
                                        <svg class="icon">
                                            <use href="#icon-arrow-dropdown"></use>
                                        </svg>
                                    </button>

                                    <div class="filter-dropdown-list-wrapper">
                                        <div class="filter-dropdown-scroll reset-scroll">
                                            <ul class="filter-dropdown-list">
                                                <?php foreach ($terms as $term): ?>
                                                    <li class="filter-dropdown-list-item" data-action-class="region-action-text" data-filter-class="<?php echo $term->slug; ?>" data-category="region">
                                                        <?php echo $term->name; ?>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php
                            $terms = get_terms('distributor_areas', array(
                                'hide_empty' => false
                            ));
                            ?>

                            <?php if (!empty($terms)) : ?>
                                <div class="filter-dropdown">
                                    <button class="filter-dropdown-action">
                                        <span class="filter-dropdown-action-text area-action-text">
                                            Область
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
                                                <?php foreach ($terms as $term): ?>
                                                    <li class="filter-dropdown-list-item" data-action-class="area-action-text" data-filter-class="<?php echo $term->slug; ?>" data-category="area">
                                                        <?php echo $term->name; ?>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php
                            $terms = get_terms('distributor_cities', array(
                                'hide_empty' => false
                            ));
                            ?>

                            <?php if (!empty($terms)) : ?>
                                <div class="filter-dropdown">
                                    <button class="filter-dropdown-action">
                                        <span class="filter-dropdown-action-text city-action-text">Город</span>

                                        <svg class="icon">
                                            <use href="#icon-arrow-dropdown"></use>
                                        </svg>
                                    </button>

                                    <div class="filter-dropdown-list-wrapper">
                                        <div class="filter-dropdown-scroll">
                                            <div class="filter-search-wrapper">
                                                <input class="filter-search" data-search="city-search" type="text" placeholder="Найти город">
                                                <svg class="icon">
                                                    <use href="#icon-arrow-airplane"></use>
                                                </svg>
                                            </div>

                                            <ul class="filter-dropdown-list city-search">
                                                <?php foreach ($terms as $term): ?>
                                                    <li class="filter-dropdown-list-item" data-action-class="city-action-text" data-filter-class="<?php echo $term->slug; ?>" data-category="city">
                                                        <?php echo $term->name; ?>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>


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
                                            <?php foreach ($distributors as $post): setup_postdata($post); ?>
                                                <li class="filter-dropdown-list-item" data-action-class="distributor-action-text" data-filter-class="<?php echo $post->post_name; ?>" data-category="distributor">
                                                    <?php the_title(); ?>
                                                </li>
                                            <?php endforeach; ?>

                                            <?php wp_reset_postdata(); ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="filter-result">
                            <ul class="filter-result-list">
                                <?php foreach ($distributors as $post): setup_postdata($post); ?>
                                    <?php
                                    $region = get_the_terms($post->ID, 'distributor_regions');
                                    $area = get_the_terms($post->ID, 'distributor_areas');
                                    $city = get_the_terms($post->ID, 'distributor_cities');

                                    $reg_slug = $region ? $region[0]->slug : '';
                                    $a_slug = $area ? $area[0]->slug : '';
                                    $c_slug = $city ? $city[0]->slug : '';

                                    $classes = $reg_slug . ' ' . $a_slug . ' ' . $c_slug . ' ' . $post->post_name;
                                    ?>

                                    <li class="filter-result-item <?php echo $classes; ?>" style="display: none;">
                                        <?php if ($city) : ?>
                                            <h3 class="filter-result-item-title"><?php echo $city[0]->name; ?></h3>
                                        <?php endif; ?>

                                        <?php if ($area) : ?>
                                            <div class="filter-result-item-subtitle">
                                                <?php echo $area[0]->name; ?>
                                            </div>
                                        <?php endif; ?>

                                        <div><?php the_title(); ?></div>

                                        <div class="filter-result-item-links">
                                            <?php if ($phone = get_field('distributor_phone')) : ?>
                                                <div>
                                                    <a href="tel:+<?php echo cytolife_str_replace_phone($phone); ?>"><?php echo $phone; ?></a>
                                                </div>
                                            <?php endif; ?>

                                            <?php if ($email = get_field('distributor_email')) : ?>
                                                <div>
                                                    <a href="mailto:info@filara-cosmo.ru"><?php echo $email; ?></a>
                                                </div>
                                            <?php endif; ?>

                                            <?php if ($link = get_field('distributor_link')) : ?>
                                                <div>
                                                    <a href="<?php echo esc_url($link); ?>"><?php echo esc_url($link); ?></a>
                                                </div>
                                            <?php endif; ?>

                                        </div>
                                    </li>
                                <?php endforeach; ?>

                                <?php wp_reset_postdata(); ?>
                            </ul>

                            <div class="filter-result-more">
                                <button class="button button-reset filter-result-more">
                                    Загрузить еще
                                    <svg class="icon">
                                        <use href="#icon-arrow"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </section>
        <!-- /distributors section section--pt -->

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
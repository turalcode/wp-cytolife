<?php get_header(); ?>

<section class="first-screen section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="first-screen__title">Профессиональные препараты для эстетической&nbsp;<br />медицины</h1>
                <div class="first-screen__subtitle">
                    Разрабатываем и производим в России.<br />
                    Для специалистов, которые ценят<br />
                    результат и безопасность.
                </div>

                <a href="#" class="button first-screen--button">В каталог
                    <svg class="icon">
                        <use href="#icon-arrow"></use>
                    </svg>
                </a>
            </div>
            <div class="col-lg-6">
                <div class="first-screen__img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/first-screen.png" alt="#" />
                </div>
            </div>
        </div>

        <div class="first-screen__partners">
            <h3 class="first-screen__partners-title">Сотрудничаем с ведущими научными центрами</h3>

            <ul class="first-screen__partners-list">
                <li>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/partner-1.svg" alt="#" />
                </li>
                <li>
                    <img class="partners-img-desktop" src="<?php echo get_template_directory_uri() ?>/assets/images/partner-2.svg" alt="#" />
                    <img class="partners-img-mob" src="<?php echo get_template_directory_uri() ?>/assets/images/partner-3.svg" alt="#" />
                </li>
                <li>
                    <img class="partners-img-desktop" src="<?php echo get_template_directory_uri() ?>/assets/images/partner-3.svg" alt="#" />
                    <img class="partners-img-mob" src="<?php echo get_template_directory_uri() ?>/assets/images/partner-5.svg" alt="#" />
                </li>
                <li>
                    <img class="partners-img-desktop" src="<?php echo get_template_directory_uri() ?>/assets/images/partner-4.svg" alt="#" />
                    <img class="partners-img-mob" src="<?php echo get_template_directory_uri() ?>/assets/images/partner-4-mob.svg" alt="#" />
                </li>
                <li>
                    <img class="partners-img-desktop" src="<?php echo get_template_directory_uri() ?>/assets/images/partner-5.svg" alt="#" />
                    <img class="partners-img-mob" src="<?php echo get_template_directory_uri() ?>/assets/images/partner-5-mob.svg" alt="#" />
                </li>
                <li>
                    <img class="partners-img-desktop" src="<?php echo get_template_directory_uri() ?>/assets/images/partner-6.svg" alt="#" />
                    <img class="partners-img-mob" src="<?php echo get_template_directory_uri() ?>/assets/images/partner-6-mob.svg" alt="#" />
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- /first-screen -->

<section class="products section">
    <div class="container">
        <h2 class="products__title section-title section-title--center">
            <span class="mini-logo">Открытие</span>Новинки
        </h2>

        <div class="swiper swiper-products">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="products__item">
                        <div class="products__item-header">
                            <div class="products__item-info">
                                <div class="products__item-acces"></div>

                                <div class="products__item-icons">
                                    <div class="products__item-icon-text">
                                        <svg class="icon">
                                            <use href="#icon-lightning"></use>
                                        </svg><span>Новинка</span>
                                    </div>
                                    <a href="#" class="products__item-like">
                                        <svg class="icon">
                                            <use href="#icon-heart"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <a class="products__item-picture" href="#">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/product-3.png" alt="#" />
                            </a>
                        </div>

                        <div class="products__item-footer-wrapper">
                            <div class="products__item-title">
                                <a href="#">
                                    <b>Крем Ultra Hydration 30</b>
                                </a>
                            </div>

                            <div class="products__item-price">1000 руб.</div>

                            <div class="products__item-footer">
                                <div class="products__item-counter product-quantity-js">
                                    <button class="decrement-js button-reset" aria-label="Уменьшить количество">
                                        <svg class="icon">
                                            <use href="#icon-minus"></use>
                                        </svg>
                                    </button>

                                    <input type="number" step="1" min="1" max="99" aria-label="Количество" value="1" />

                                    <button class="increment-js button-reset" aria-label="Увеличить количество">
                                        <svg class="icon">
                                            <use href="#icon-plus"></use>
                                        </svg>
                                    </button>
                                </div>

                                <a href="#" class="button h-100">В корзину
                                    <svg class="icon">
                                        <use href="#icon-arrow"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="products__item">
                        <div class="products__item-header">
                            <div class="products__item-info">
                                <div class="products__item-acces"></div>

                                <div class="products__item-icons">
                                    <div class="products__item-icon-text">
                                        <svg class="icon">
                                            <use href="#icon-lightning"></use>
                                        </svg><span>Новинка</span>
                                    </div>
                                    <a href="#" class="products__item-like">
                                        <svg class="icon">
                                            <use href="#icon-heart"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <a class="products__item-picture" href="#">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/product-3.png" alt="#" />
                            </a>
                        </div>

                        <div class="products__item-footer-wrapper">
                            <div class="products__item-title">
                                <a href="#">
                                    <b>Крем Ultra Hydration 30</b>
                                </a>
                            </div>

                            <div class="products__item-price">1000 руб.</div>

                            <div class="products__item-footer">
                                <div class="products__item-counter product-quantity-js">
                                    <button class="decrement-js button-reset" aria-label="Уменьшить количество">
                                        <svg class="icon">
                                            <use href="#icon-minus"></use>
                                        </svg>
                                    </button>

                                    <input type="number" step="1" min="1" max="99" aria-label="Количество" value="1" />

                                    <button class="increment-js button-reset" aria-label="Увеличить количество">
                                        <svg class="icon">
                                            <use href="#icon-plus"></use>
                                        </svg>
                                    </button>
                                </div>

                                <a href="#" class="button h-100">В корзину
                                    <svg class="icon">
                                        <use href="#icon-arrow"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="products__item">
                        <div class="products__item-header">
                            <div class="products__item-info">
                                <div class="products__item-acces"></div>

                                <div class="products__item-icons">
                                    <div class="products__item-icon-text">
                                        <svg class="icon">
                                            <use href="#icon-lightning"></use>
                                        </svg><span>Новинка</span>
                                    </div>
                                    <a href="#" class="products__item-like">
                                        <svg class="icon">
                                            <use href="#icon-heart"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <a class="products__item-picture" href="#">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/product-3.png" alt="#" />
                            </a>
                        </div>

                        <div class="products__item-footer-wrapper">
                            <div class="products__item-title">
                                <a href="#">
                                    <b>Крем Ultra Hydration 30</b>
                                </a>
                            </div>

                            <div class="products__item-price">1000 руб.</div>

                            <div class="products__item-footer">
                                <div class="products__item-counter product-quantity-js">
                                    <button class="decrement-js button-reset" aria-label="Уменьшить количество">
                                        <svg class="icon">
                                            <use href="#icon-minus"></use>
                                        </svg>
                                    </button>

                                    <input type="number" step="1" min="1" max="99" aria-label="Количество" value="1" />

                                    <button class="increment-js button-reset" aria-label="Увеличить количество">
                                        <svg class="icon">
                                            <use href="#icon-plus"></use>
                                        </svg>
                                    </button>
                                </div>

                                <a href="#" class="button h-100">В корзину
                                    <svg class="icon">
                                        <use href="#icon-arrow"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="products__item">
                        <div class="products__item-header">
                            <div class="products__item-info">
                                <div class="products__item-acces"></div>

                                <div class="products__item-icons">
                                    <div class="products__item-icon-text">
                                        <svg class="icon">
                                            <use href="#icon-lightning"></use>
                                        </svg><span>Новинка</span>
                                    </div>
                                    <a href="#" class="products__item-like">
                                        <svg class="icon">
                                            <use href="#icon-heart"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <a class="products__item-picture" href="#">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/product-3.png" alt="#" />
                            </a>
                        </div>

                        <div class="products__item-footer-wrapper">
                            <div class="products__item-title">
                                <a href="#">
                                    <b>Крем Ultra Hydration 30</b>
                                </a>
                            </div>

                            <div class="products__item-price">1000 руб.</div>

                            <div class="products__item-footer">
                                <div class="products__item-counter product-quantity-js">
                                    <button class="decrement-js button-reset" aria-label="Уменьшить количество">
                                        <svg class="icon">
                                            <use href="#icon-minus"></use>
                                        </svg>
                                    </button>

                                    <input type="number" step="1" min="1" max="99" aria-label="Количество" value="1" />

                                    <button class="increment-js button-reset" aria-label="Увеличить количество">
                                        <svg class="icon">
                                            <use href="#icon-plus"></use>
                                        </svg>
                                    </button>
                                </div>

                                <a href="#" class="button h-100">В корзину
                                    <svg class="icon">
                                        <use href="#icon-arrow"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /products -->

<section class="products section products--popular">
    <div class="container">
        <h2 class="products__title section-title section-title--center">
            <span class="mini-logo">Лидеры</span>Популярные
        </h2>

        <div class="swiper swiper-products">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="products__item">
                        <div class="products__item-header">
                            <div class="products__item-info">
                                <div class="products__item-acces"></div>

                                <div class="products__item-icons">
                                    <div class="products__item-icon-text">
                                        <svg class="icon">
                                            <use href="#icon-lightning"></use>
                                        </svg><span>Новинка</span>
                                    </div>
                                    <a href="#" class="products__item-like">
                                        <svg class="icon">
                                            <use href="#icon-heart"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <a class="products__item-picture" href="#">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/product-3.png" alt="#" />
                            </a>
                        </div>

                        <div class="products__item-footer-wrapper">
                            <div class="products__item-title">
                                <a href="#">
                                    <b>Крем Ultra Hydration 30</b>
                                </a>
                            </div>

                            <div class="products__item-price">1000 руб.</div>

                            <div class="products__item-footer">
                                <div class="products__item-counter product-quantity-js">
                                    <button class="decrement-js button-reset" aria-label="Уменьшить количество">
                                        <svg class="icon">
                                            <use href="#icon-minus"></use>
                                        </svg>
                                    </button>

                                    <input type="number" step="1" min="1" max="99" aria-label="Количество" value="1" />

                                    <button class="increment-js button-reset" aria-label="Увеличить количество">
                                        <svg class="icon">
                                            <use href="#icon-plus"></use>
                                        </svg>
                                    </button>
                                </div>

                                <a href="#" class="button h-100">В корзину
                                    <svg class="icon">
                                        <use href="#icon-arrow"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="products__item">
                        <div class="products__item-header">
                            <div class="products__item-info">
                                <div class="products__item-acces">
                                    <svg class="icon">
                                        <use href="#icon-lock"></use>
                                    </svg>
                                    <div class="products__item-lock-text">Доступно для мед персонала</div>
                                </div>

                                <div class="products__item-icons">
                                    <a href="#" class="products__item-like">
                                        <svg class="icon">
                                            <use href="#icon-heart"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <a class="products__item-picture" href="#">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/product-1.png" alt="#" />
                            </a>
                        </div>

                        <div class="products__item-footer-wrapper">
                            <div class="products__item-title">
                                <a href="#"><b>Ambre Life</b></a>
                            </div>

                            <div>
                                <div class="products__item-price">Цена доступна при авторизации</div>

                                <div class="products__item-footer">
                                    <a href="#" class="button h-100">Авторизация
                                        <svg class="icon">
                                            <use href="#icon-arrow"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="products__item">
                        <div class="products__item-header">
                            <div class="products__item-info">
                                <div class="products__item-acces"></div>

                                <div class="products__item-icons">
                                    <div class="products__item-icon-text">
                                        <svg class="icon">
                                            <use href="#icon-lightning"></use>
                                        </svg><span>Новинка</span>
                                    </div>
                                    <a href="#" class="products__item-like">
                                        <svg class="icon">
                                            <use href="#icon-heart"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <a class="products__item-picture" href="#">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/product-3.png" alt="#" />
                            </a>
                        </div>

                        <div class="products__item-footer-wrapper">
                            <div class="products__item-title">
                                <a href="#">
                                    <b>Крем Ultra Hydration 30</b>
                                </a>
                            </div>

                            <div class="products__item-price">1000 руб.</div>

                            <div class="products__item-footer">
                                <div class="products__item-counter product-quantity-js">
                                    <button class="decrement-js button-reset" aria-label="Уменьшить количество">
                                        <svg class="icon">
                                            <use href="#icon-minus"></use>
                                        </svg>
                                    </button>

                                    <input type="number" step="1" min="1" max="99" aria-label="Количество" value="1" />

                                    <button class="increment-js button-reset" aria-label="Увеличить количество">
                                        <svg class="icon">
                                            <use href="#icon-plus"></use>
                                        </svg>
                                    </button>
                                </div>

                                <a href="#" class="button h-100">В корзину
                                    <svg class="icon">
                                        <use href="#icon-arrow"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="products__item">
                        <div class="products__item-header">
                            <div class="products__item-info">
                                <div class="products__item-acces"></div>

                                <div class="products__item-icons">
                                    <div class="products__item-icon-text">
                                        <svg class="icon">
                                            <use href="#icon-lightning"></use>
                                        </svg><span>Новинка</span>
                                    </div>
                                    <a href="#" class="products__item-like">
                                        <svg class="icon">
                                            <use href="#icon-heart"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <a class="products__item-picture" href="#">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/product-3.png" alt="#" />
                            </a>
                        </div>

                        <div class="products__item-footer-wrapper">
                            <div class="products__item-title">
                                <a href="#">
                                    <b>Крем Ultra Hydration 30</b>
                                </a>
                            </div>

                            <div class="products__item-price">1000 руб.</div>

                            <div class="products__item-footer">
                                <div class="products__item-counter product-quantity-js">
                                    <button class="decrement-js button-reset" aria-label="Уменьшить количество">
                                        <svg class="icon">
                                            <use href="#icon-minus"></use>
                                        </svg>
                                    </button>

                                    <input type="number" step="1" min="1" max="99" aria-label="Количество" value="1" />

                                    <button class="increment-js button-reset" aria-label="Увеличить количество">
                                        <svg class="icon">
                                            <use href="#icon-plus"></use>
                                        </svg>
                                    </button>
                                </div>

                                <a href="#" class="button h-100">В корзину
                                    <svg class="icon">
                                        <use href="#icon-arrow"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /products products--popular -->

<section class="laboratory section section--pt">
    <div class="container">
        <div class="section-header">
            <div class="row">
                <div class="col-md-4">
                    <span class="mini-logo">Инновации</span>
                </div>
                <div class="col-md-8">
                    <h2 class="section-header-title">Laboratory Cytolife производит</h2>
                    <div class="section-header-subtitle">
                        Laboratory Cytolife — российская компания, специализирующаяся на разработке и производстве препаратов
                        для профессиональной косметологии. В основе — собственные исследования, клинические испытания и работа
                        с экспертами в области эстетической медицины.
                    </div>
                </div>
            </div>
        </div>

        <div class="laboratory__item">
            <div class="row">
                <div class="col-md-4">
                    <div class="laboratory__item-img-block">
                        <div class="laboratory__item-number">01</div>

                        <div class="laboratory__item-picture">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/laboratory-1.png" alt="#" />
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="laboratory__item-text">
                        <h3 class="laboratory__item-title">Препараты для инъекционной косметологии</h3>

                        <div class="laboratory__item-picture-mob">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/laboratory-1.png" alt="#" />
                        </div>

                        <div>
                            Средства для биоревитализации, мезотерапии и коррекции возрастных изменений. Высокая эффективность,
                            подтверждённая исследованиями.
                        </div>

                        <a class="button-light button-light--laboratory-item" href="#">Перейти на страницу
                            <span>
                                <svg class="icon">
                                    <use href="#icon-arrow"></use>
                                </svg></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="laboratory__item">
            <div class="row">
                <div class="col-md-4">
                    <div class="laboratory__item-img-block">
                        <div class="laboratory__item-number">02</div>

                        <div class="laboratory__item-picture">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/laboratory-2.png" alt="#" />
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="laboratory__item-text">
                        <h3 class="laboratory__item-title">Химические пилинги</h3>

                        <div class="laboratory__item-picture-mob">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/laboratory-2.png" alt="#" />
                        </div>

                        <div>Линейка пилингов с предсказуемым результатом и контролируемым воздействием.</div>

                        <a class="button-light button-light--laboratory-item" href="#">Перейти на страницу
                            <span>
                                <svg class="icon">
                                    <use href="#icon-arrow"></use>
                                </svg></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="laboratory__item">
            <div class="row">
                <div class="col-md-4">
                    <div class="laboratory__item-img-block">
                        <div class="laboratory__item-number">03</div>

                        <div class="laboratory__item-picture">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/laboratory-3.png" alt="#" />
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="laboratory__item-text">
                        <h3 class="laboratory__item-title">Профессиональная уходовая линия</h3>

                        <div class="laboratory__item-picture-mob">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/laboratory-3.png" alt="#" />
                        </div>

                        <div>
                            Профессиональная уходовая линия. Средства для постпроцедурного восстановления и поддержания здоровья
                            кожи.
                        </div>

                        <a class="button-light button-light--laboratory-item" href="#">Перейти на страницу
                            <span>
                                <svg class="icon">
                                    <use href="#icon-arrow"></use>
                                </svg></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /laboratory -->

<section class="education section section--pt">
    <div class="container">
        <div class="section-header">
            <div class="row">
                <div class="col-md-4">
                    <span class="mini-logo">Развитие</span>
                </div>
                <div class="col-md-8">
                    <h2 class="section-header-title">Обучение для специалистов</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <div class="education__img-block">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/education.jpg" alt="#" />
                </div>
            </div>
            <div class="col-sm-8">
                <div class="education__text-wrapper">
                    <div>
                        Проводим мастер-классы, вебинары и обучающие курсы для врачей-<br />косметологов.<br />
                        Помогаем освоить технику работы с препаратами и получать максимальный<br />
                        результат для пациентов.
                    </div>

                    <div class="education__btn">
                        <a class="button" href="#">Перейти в личный кабинет
                            <svg class="icon">
                                <use href="#icon-arrow"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /education -->

<section class="advantages section section--pt">
    <div class="container">
        <div class="section-header">
            <div class="row">
                <div class="col-md-4">
                    <span class="mini-logo">Преимущества</span>
                </div>
                <div class="col-md-8">
                    <h2 class="section-header-title">Почему выбирают CYTOLIFE</h2>
                </div>
            </div>
        </div>

        <div class="advantages__gallery">
            <div class="advantages__gallery-col">
                <div class="advantages__item advantages__item--bg">
                    <div class="advantages__item-title">10+ лет</div>
                    <div class="advantages__item-subtitle">собственных разработок</div>
                </div>

                <div class="advantages__item">
                    <div class="advantages__item-title">100 000+</div>
                    <div class="advantages__item-subtitle">процедур проводим ежегодно</div>
                </div>

                <div class="advantages__item">
                    <div class="advantages__item-title">80+</div>
                    <div class="advantages__item-subtitle">партнёров в России и СНГ</div>
                </div>
            </div>

            <div class="advantages__gallery-col">
                <div class="advantages__item advantages__item--reset">
                    <div>
                        Эффективность продуктов подтверждена клиническими испытаниями. Собственное производство в Москве
                        обеспечивает полный контроль качества на каждом этапе.
                    </div>
                    <a href="#" class="button">О компании
                        <svg class="icon">
                            <use href="#icon-arrow"></use>
                        </svg>
                    </a>
                </div>

                <div class="advantages__item advantages__item--reset"></div>

                <div class="advantages__item advantages__item--reset advantages__item--text-flex-end">
                    <div>
                        Мы сотрудничаем с дистрибьюторами в России и странах СНГ. Предоставляем полную информационную
                        поддержку, обучающие материалы и рекламные инструменты для продвижения продукции.
                    </div>
                    <a href="#" class="button">Стать дистрибьютором
                        <svg class="icon">
                            <use href="#icon-arrow"></use>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="advantages__gallery-col">
                <div class="advantages__item">
                    <div class="advantages__item-title">600+</div>
                    <div class="advantages__item-subtitle">Обучающих вебинаров и мастер-классов</div>
                </div>

                <div class="advantages__item advantages__item--reset advantages__item--height">
                    <div>
                        Мы регулярно проводим обучение специалистов, чтобы они могли работать с продуктами на профессиональном
                        уровне. Программы включают теоретическую базу и практические мастер-классы под руководством экспертов.
                    </div>
                </div>

                <div class="advantages__item advantages__item--reset advantages__item--height advantages__item--hidden">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/advantages-item-img.jpg" alt="#" />
                </div>
            </div>
        </div>

        <div class="advantages__gallery-mob">
            <div class="advantages__item advantages__item--bg">
                <div class="advantages__item-title">10+ лет</div>
                <div class="advantages__item-subtitle">собственных разработок</div>
            </div>

            <div class="advantages__item advantages__item--reset">
                <div>
                    Эффективность продуктов подтверждена клиническими испытаниями. Собственное производство в Москве
                    обеспечивает полный контроль качества на каждом этапе.
                </div>
                <a href="#" class="button">О компании
                    <svg class="icon">
                        <use href="#icon-arrow"></use>
                    </svg>
                </a>
            </div>

            <div class="advantages__item advantages__item--reset advantages__item--height advantages__item--hidden">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/advantages-item-img.jpg" alt="#" />
            </div>

            <div class="advantages__item">
                <div class="advantages__item-title">100 000+</div>
                <div class="advantages__item-subtitle">процедур проводим ежегодно</div>
            </div>

            <div class="advantages__item pos-r">
                <img class="advantages__item-decor" src="<?php echo get_template_directory_uri() ?>/assets/images/microbe.png" alt="#" />
                <div class="advantages__item-title">600+</div>
                <div class="advantages__item-subtitle">Обучающих вебинаров и мастер-классов</div>
            </div>

            <div class="advantages__item advantages__item--reset advantages__item--height">
                <div>
                    Мы регулярно проводим обучение специалистов, чтобы они могли работать с продуктами на профессиональном
                    уровне. Программы включают теоретическую базу и практические мастер-классы под руководством экспертов.
                </div>
            </div>

            <div class="advantages__item">
                <div class="advantages__item-title">80+</div>
                <div class="advantages__item-subtitle">партнёров в России и СНГ</div>
            </div>

            <div class="advantages__item advantages__item--reset advantages__item--text-flex-end">
                <div>
                    Мы сотрудничаем с дистрибьюторами в России и странах СНГ. Предоставляем полную информационную поддержку,
                    обучающие материалы и рекламные инструменты для продвижения продукции.
                </div>
                <a href="#" class="button">Стать дистрибьютором
                    <svg class="icon">
                        <use href="#icon-arrow"></use>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- /advantages -->

<section id="certificate" class="certificate section section--pt">
    <div class="container">
        <div class="section-header">
            <div class="row">
                <div class="col-md-4">
                    <span class="mini-logo">Экспертиза</span>
                </div>
                <div class="col-md-8">
                    <h2 class="section-header-title">Сертификаты и документы</h2>
                    <div class="section-header-subtitle">
                        Вся продукция Laboratory Cytolife имеет регистрационные удостоверения и<br />проходит проверку в
                        соответствии с российским законодательством.
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper swiper-certificate">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="certificate__item">
                        <img
                            class="certificate-img-js"
                            data-src="<?php echo get_template_directory_uri() ?>/assets/images/certificate-1-full.jpg"
                            src="<?php echo get_template_directory_uri() ?>/assets/images/certificate-1.jpg"
                            alt="#" />
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="certificate__item">
                        <img
                            class="certificate-img-js"
                            data-src="<?php echo get_template_directory_uri() ?>/assets/images/certificate-2-full.jpg"
                            src="<?php echo get_template_directory_uri() ?>/assets/images/certificate-2.jpg"
                            alt="#" />
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="certificate__item">
                        <img
                            class="certificate-img-js"
                            data-src="<?php echo get_template_directory_uri() ?>/assets/images/certificate-3-full.jpg"
                            src="<?php echo get_template_directory_uri() ?>/assets/images/certificate-3.jpg"
                            alt="#" />
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="certificate__item">
                        <img
                            class="certificate-img-js"
                            data-src="<?php echo get_template_directory_uri() ?>/assets/images/certificate-4-full.jpg"
                            src="<?php echo get_template_directory_uri() ?>/assets/images/certificate-4.jpg"
                            alt="#" />
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="certificate__item">
                        <img
                            class="certificate-img-js"
                            data-src="<?php echo get_template_directory_uri() ?>/assets/images/certificate-5-full.jpg"
                            src="<?php echo get_template_directory_uri() ?>/assets/images/certificate-5.jpg"
                            alt="#" />
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="certificate__item">
                        <img
                            class="certificate-img-js"
                            data-src="<?php echo get_template_directory_uri() ?>/assets/images/certificate-5-full.jpg"
                            src="<?php echo get_template_directory_uri() ?>/assets/images/certificate-5.jpg"
                            alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /certificate -->

<section class="company section section--pt">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="company__logo">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.svg" alt="#" />
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="company__text">
                    <h2 class="section-title">Наука в красоте</h2>
                    <div>
                        Мы соединяем научные исследования и клинический опыт, чтобы дать врачам надежные инструменты для
                        работы с пациентами.
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="company__img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/bottle.jpg" alt="#" />
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/microscope.png" alt="#" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /company -->

<?php get_footer(); ?>
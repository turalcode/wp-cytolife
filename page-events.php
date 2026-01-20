<?php defined('ABSPATH') || exit; ?>

<?php get_header(); ?>

<section class="events section">
    <div class="container">
        <h1>Мероприятия</h1>

        <div class="filter filter-distributors">
            <div class="filter-dropdown-section">
                <div class="filter-dropdown">
                    <button class="filter-dropdown-action">
                        <span class="filter-dropdown-action-text">
                            Выберите область:<span class="area-action-text action-text">Все</span>
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
                                <li class="filter-dropdown-list-item" data-action-class="area-action-text" data-filter-class="moskovskaya-oblast" data-category="area">
                                    Московская область
                                </li>
                                <li class="filter-dropdown-list-item" data-action-class="area-action-text" data-filter-class="respublika-tatarstan" data-category="area">
                                    Республика Татарстан
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="filter-dropdown">
                    <button class="filter-dropdown-action">
                        <span class="filter-dropdown-action-text">
                            Выберите город:<span class="city-action-text action-text">Все</span>
                        </span>

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
                                <li class="filter-dropdown-list-item" data-action-class="city-action-text" data-filter-class="kazan" data-category="city">
                                    Казань
                                </li>
                                <li class="filter-dropdown-list-item" data-action-class="city-action-text" data-filter-class="moskva" data-category="city">
                                    Москва
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="filter-dropdown">
                    <button class="filter-dropdown-action">
                        <span class="filter-dropdown-action-text">
                            Месяц:<span class="region-action-text action-text">Все</span>
                        </span>

                        <svg class="icon">
                            <use href="#icon-arrow-dropdown"></use>
                        </svg>
                    </button>

                    <div class="filter-dropdown-list-wrapper">
                        <div class="filter-dropdown-scroll">
                            <div class="filter-search-wrapper">
                                <input class="filter-search" data-search="region-search" type="text" placeholder="Найти месяц">
                                <svg class="icon">
                                    <use href="#icon-arrow-airplane"></use>
                                </svg>
                            </div>

                            <ul class="filter-dropdown-list region-search">
                                <li class="filter-dropdown-list-item" data-action-class="region-action-text" data-filter-class="yanvar" data-category="region">
                                    Январь
                                </li>
                                <li class="filter-dropdown-list-item" data-action-class="region-action-text" data-filter-class="fevral" data-category="region">
                                    Февраль
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="filter-dropdown">
                    <button class="filter-dropdown-action">
                        <span class="filter-dropdown-action-text">
                            Формат:<span class="distributor-action-text action-text">Все</span>
                        </span>

                        <svg class="icon">
                            <use href="#icon-arrow-dropdown"></use>
                        </svg>
                    </button>

                    <div class="filter-dropdown-list-wrapper">
                        <div class="filter-dropdown-scroll">
                            <ul class="filter-dropdown-list distributor-search pt-reset">
                                <li class="filter-dropdown-list-item" data-action-class="distributor-action-text" data-filter-class="offline" data-category="distributor">
                                    Оффлайн
                                </li>
                                <li class="filter-dropdown-list-item" data-action-class="distributor-action-text" data-filter-class="online" data-category="distributor">
                                    Онлайн
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="filter-tab-section">
                <button class="filter-tab filter-tab-moscow button-reset" data-filter-class="moskva" data-category="city">Москва</button>
                <button class="filter-tab filter-tab-regions button-reset" data-filter-class="region" data-category="regions">Регионы</button>
                <button class="filter-tab filter-tab-conferences button-reset mark yellow-mark" data-filter-class="conference" data-category="conferences">Конференции&nbsp;</button>
                <button class="filter-tab filter-tab-seminars button-reset mark green-mark" data-filter-class="seminar" data-category="seminars">Семинары&nbsp;</button>
            </div>

            <div class="filter-result">
                <ul class="events-list filter-result-list">
                    <?php for ($i = 1; $i <= 3; $i++) : ?>
                        <li class="event-card filter-result-item respublika-tatarstan kazan yanvar offline conference region">
                            <div class="event-card-header">
                                <div class="event-card-date-info">
                                    <div class="event-card-date">17 июля 2025</div>
                                    <div class="event-card-day-week">Четверг</div>
                                    <div class="event-card-time">11:00-15:00</div>
                                </div>

                                <!-- <div class="event-card-format green-mark">Семинар</div> -->
                                <div class="event-card-format yellow-mark">Конференция</div>
                            </div>

                            <div class="event-card-title">
                                Секретные техники Laboratory CYTOLIFE при коррекции full face. Биоармирование, техника «без папул»
                            </div>

                            <div class="event-card-location">
                                <svg class="icon icon--light">
                                    <use href="#icon-location"></use>
                                </svg>
                                Казань
                            </div>

                            <div class="event-card-speaker">
                                <div class="event-card-speaker-photo">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile-placeholder.jpg" alt="#">
                                </div>
                                <div class="event-card-speaker-name">
                                    <div>Желендинова А.И</div>
                                    <div>врач-дерматовенеролог, косметолог.</div>
                                </div>
                            </div>

                            <div class="event-card-info">
                                <div class="event-card-info-item">
                                    <span>Организатор</span> Лаборатория Цитолайф
                                </div>

                                <div class="event-card-info-item">
                                    <svg class="icon icon--light">
                                        <use href="#icon-phone"></use>
                                    </svg>
                                    <span>Для записи</span> <a href="tel:+74991309969">+7 (499) 130-99-69</a>
                                </div>

                                <div class="event-card-info-item">
                                    <svg class="icon icon--light">
                                        <use href="#icon-web"></use>
                                    </svg>
                                    <a href="https://aecspb.com/" target="_blank">https://aecspb.com/</a>
                                </div>
                            </div>

                            <div class="event-card-footer">
                                <button class="button button-reset">
                                    Зарегистрироваться
                                    <svg class="icon">
                                        <use href="#icon-arrow"></use>
                                    </svg>
                                </button>

                                <a href="#" class="button button--bg-light">
                                    Подробнее
                                    <svg class="icon">
                                        <use href="#icon-arrow"></use>
                                    </svg>
                                </a>
                            </div>
                        </li>
                        <!-- /event-card -->

                        <li class="event-card filter-result-item moskovskaya-oblast moskva yanvar online seminar">
                            <div class="event-card-header">
                                <div class="event-card-date">17 июля 2025 Четверг</div>
                                <div class="event-card-time">11:00-15:00</div>
                                <div class="event-card-format green-mark">Семинар</div>
                                <!-- <div class="event-card-format yellow-mark">Конференция</div> -->
                            </div>

                            <div class="event-card-title">
                                Секретные техники Laboratory CYTOLIFE при коррекции full face. Биоармирование, техника «без папул»
                            </div>

                            <div class="event-card-location">
                                <svg class="icon icon--light">
                                    <use href="#icon-location"></use>
                                </svg>
                                Москва
                            </div>

                            <div class="event-card-speaker">
                                <div class="event-card-speaker-photo">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile-placeholder.jpg" alt="#">
                                </div>
                                <div class="event-card-speaker-name">
                                    <div>Желендинова А.И</div>
                                    <div>врач-дерматовенеролог, косметолог.</div>
                                </div>
                            </div>

                            <div class="event-card-info">
                                <div class="event-card-info-item">
                                    <span>Организатор</span> Лаборатория Цитолайф
                                </div>

                                <div class="event-card-info-item">
                                    <svg class="icon icon--light">
                                        <use href="#icon-phone"></use>
                                    </svg>
                                    <span>Для записи</span> <a href="tel:+74991309969">+7 (499) 130-99-69</a>
                                </div>

                                <div class="event-card-info-item">
                                    <svg class="icon icon--light">
                                        <use href="#icon-web"></use>
                                    </svg>
                                    <a href="https://aecspb.com/" target="_blank">https://aecspb.com/</a>
                                </div>
                            </div>

                            <div class="event-card-footer">
                                <button class="button button-reset">
                                    Зарегистрироваться
                                    <svg class="icon">
                                        <use href="#icon-arrow"></use>
                                    </svg>
                                </button>

                                <a href="#" class="button button--bg-light">
                                    Подробнее
                                    <svg class="icon">
                                        <use href="#icon-arrow"></use>
                                    </svg>
                                </a>
                            </div>
                        </li>
                        <!-- /event-card -->
                    <?php endfor; ?>
                </ul>
                <!-- /events-list -->

                <div class="filter-result-more">
                    <button class="button button-reset button--bg-light filter-result-more">
                        Загрузить еще
                        <svg class="icon">
                            <use href="#icon-arrow"></use>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /events -->

<section class="speaker-slider section section--pt">
    <div class="container">
        <div class="speaker-slider-header">
            <h1>Наши спикеры</h1>

            <div class="speaker-slider-actions">
                <button class="swiper-speaker-button swiper-speaker-button-prev button-reset">
                    <svg class="icon">
                        <use href="#icon-slider-arrow"></use>
                    </svg>
                </button>
                <button class="swiper-speaker-button swiper-speaker-button-next button-reset">
                    <svg class="icon">
                        <use href="#icon-slider-arrow"></use>
                    </svg>
                </button>
            </div>
        </div>

        <div class="swiper swiper-speaker">
            <div class="swiper-wrapper">
                <?php for ($i = 1; $i <= 4; $i++) : ?>

                    <div class="swiper-slide">
                        <div class="speaker-slider-item">
                            <div class="speaker-slider-photo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile-placeholder.jpg" alt="#">
                            </div>
                            <div class="speaker-slider-info">
                                <div class="speaker-slider-name">
                                    Матасянц Арсен Аванесович
                                </div>
                                <div class="speaker-slider-descr">
                                    Врач-дерматовенеролог, косметолог, эксперт в области химических пилингов и космецевтики, Сертифицированный тренер Laboratory CYTOLIFE
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endfor; ?>
            </div>
            <!-- /swiper-wrapper -->
        </div>
        <!-- /swiper swiper-speaker -->

        <div class="slider-speaker-footer">
            <div class="speaker-slider-actions">
                <button class="swiper-speaker-button swiper-speaker-button-prev button-reset">
                    <svg class="icon">
                        <use href="#icon-slider-arrow"></use>
                    </svg>
                </button>
                <button class="swiper-speaker-button swiper-speaker-button-next button-reset">
                    <svg class="icon">
                        <use href="#icon-slider-arrow"></use>
                    </svg>
                </button>
            </div>

            <a href="#" class="button">На страницу спикеров
                <svg class="icon">
                    <use href="#icon-arrow"></use>
                </svg>
            </a>
        </div>
    </div>
</section>
<!-- /speaker-slider -->
<?php get_footer(); ?>
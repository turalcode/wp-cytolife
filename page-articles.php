<?php defined('ABSPATH') || exit; ?>

<?php get_header(); ?>

<div class="articles">
    <section class="articles-f-screen section">
        <div class="container">
            <h1>Статьи</h1>

            <div class="articles-f-screen-content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="article-card event-card">
                            <a href="#">
                                <div class="article-card-header">
                                    <div class="article-card-info-item">Облик</div>
                                    <div class="article-card-info-item">2&nbsp;(61)</div>
                                    <div class="article-card-info-item">апрель</div>
                                    <div class="article-card-info-item">2025</div>
                                </div>

                                <div class="article-card-footer">
                                    <div class="article-card-text">
                                        <div class="article-card-author">
                                            <span>Автор:</span>Желендинова А.И.

                                            <div class="article-card-author-photo">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/founder.jpg" alt="#">
                                            </div>
                                        </div>
                                        <div class="article-card-title">Anti-age терапия у пациентов с розацеа</div>
                                    </div>

                                    <div class="article-card-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/test-single-speaker-articles.jpg" alt="#">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- /article-card -->
                    </div>
                    <div class="col-lg-6">
                        <div class="articles-content">
                            <h2 class="articles-subtitle">Научный подход к красоте</h2>

                            <div class="articles-text">
                                Блог «Цитолайф» — это пространство, где мы делимся знаниями и опытом. В статьях вы найдете результаты исследований, обзоры современных косметологических методик и экспертные мнения наших сотрудников. Всё, что помогает профессионалам и заинтересованным читателям ориентироваться в мире медицины и эстетики.
                            </div>

                            <div class="articles-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/test-articles-main.jpg" alt="#">
                            </div>
                        </div>
                        <!-- /articles-content -->
                    </div>
                </div>
            </div>
            <!-- /articles-f-screen-content -->
        </div>
        <!-- /container -->
    </section>
    <!-- /articles-f-screen -->

    <section class="articles-filter section">
        <div class="container">
            <div class="filter filter-distributors">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="filter-dropdown-section">
                            <div class="filter-dropdown">
                                <button class="filter-dropdown-action">
                                    <span class="filter-dropdown-action-text area-action-text">
                                        Тема
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
                                    <span class="filter-dropdown-action-text city-action-text">
                                        Журнал
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
                                    <span class="filter-dropdown-action-text region-action-text">
                                        Автор
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
                                    <span class="filter-dropdown-action-text distributor-action-text">
                                        Месяц
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

                            <div class="filter-dropdown">
                                <button class="filter-dropdown-action">
                                    <span class="filter-dropdown-action-text year-action-text">
                                        Год
                                    </span>

                                    <svg class="icon">
                                        <use href="#icon-arrow-dropdown"></use>
                                    </svg>
                                </button>

                                <div class="filter-dropdown-list-wrapper">
                                    <div class="filter-dropdown-scroll">
                                        <ul class="filter-dropdown-list distributor-search pt-reset">
                                            <li class="filter-dropdown-list-item" data-action-class="year-action-text" data-filter-class="offline" data-category="year">
                                                Оффлайн
                                            </li>
                                            <li class="filter-dropdown-list-item" data-action-class="year-action-text" data-filter-class="online" data-category="year">
                                                Онлайн
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="filter-result">
                    <ul class="events-list filter-result-list">
                        <?php for ($i = 1; $i <= 3; $i++) : ?>
                            <li class="article-card event-card filter-result-item respublika-tatarstan kazan yanvar offline conference region">
                                <a class="article-card-link-block" href="#">
                                    <div class="article-card-header">
                                        <div class="article-card-info-item">Облик</div>
                                        <div class="article-card-info-item">2&nbsp;(61)</div>
                                        <div class="article-card-info-item">апрель</div>
                                        <div class="article-card-info-item">2025</div>
                                    </div>

                                    <div class="article-card-footer">
                                        <div class="article-card-text">
                                            <div class="article-card-author">
                                                <span>Автор:</span>Желендинова А.И.

                                                <div class="article-card-author-photo">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/founder.jpg" alt="#">
                                                </div>
                                            </div>
                                            <div class="article-card-title">Anti-age терапия у пациентов с розацеа</div>
                                        </div>

                                        <div class="article-card-thumb">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/test-single-speaker-articles.jpg" alt="#">
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- /article-card -->
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
        <!-- /container -->
    </section>
    <!-- /articles-filter -->
</div>
<!-- /articles -->

<?php get_footer(); ?>
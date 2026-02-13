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
                                        <ul class="filter-dropdown-list pt-reset area-search">
                                            <li class="filter-dropdown-list-item" data-action-class="area-action-text" data-filter-class="tema-1" data-category="area">
                                                Тема-1
                                            </li>
                                            <li class="filter-dropdown-list-item" data-action-class="area-action-text" data-filter-class="tema-2" data-category="area">
                                                Тема-2
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
                                        <ul class="filter-dropdown-list pt-reset city-search">
                                            <li class="filter-dropdown-list-item" data-action-class="city-action-text" data-filter-class="jurnal-1" data-category="city">
                                                Журнал-1
                                            </li>
                                            <li class="filter-dropdown-list-item" data-action-class="city-action-text" data-filter-class="jurnal-2" data-category="city">
                                                Журнал-2
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
                                        <ul class="filter-dropdown-list pt-reset region-search">
                                            <li class="filter-dropdown-list-item" data-action-class="region-action-text" data-filter-class="elena" data-category="region">
                                                Елена
                                            </li>
                                            <li class="filter-dropdown-list-item" data-action-class="region-action-text" data-filter-class="viktoria" data-category="region">
                                                Виктория
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
                                        <ul class="filter-dropdown-list pt-reset distributor-search">
                                            <li class="filter-dropdown-list-item" data-action-class="distributor-action-text" data-filter-class="yanvar" data-category="distributor">
                                                Январь
                                            </li>
                                            <li class="filter-dropdown-list-item" data-action-class="distributor-action-text" data-filter-class="fevral" data-category="distributor">
                                                Февраль
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
                                        <ul class="filter-dropdown-list pt-reset year-search">
                                            <li class="filter-dropdown-list-item" data-action-class="year-action-text" data-filter-class="2025" data-category="year">
                                                2025
                                            </li>
                                            <li class="filter-dropdown-list-item" data-action-class="year-action-text" data-filter-class="2026" data-category="year">
                                                2026
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
                        <?php for ($i = 1; $i <= 5; $i++) : ?>
                            <li class="article-card event-card filter-result-item tema-1 jurnal-1 elena yanvar 2025">
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

                            <li class="article-card event-card filter-result-item tema-2 jurnal-2 viktoria fevral 2026">
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
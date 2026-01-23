<?php defined('ABSPATH') || exit; ?>

<?php get_header(); ?>

<div class="speakers">
    <section class="speakers-f-screen section">
        <div class="container">
            <h1>Наши спикеры</h1>

            <div class="speakers-f-screen-content">
                <div class="row">
                    <div class="col-md-5">
                        <div class="speakers-f-screen-photo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/founder.jpg" alt="Токарчук Кирилл Вячеславович. Основатель компании LABORATORY CYTOLIFE.">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="speakers-f-screen-quote">
                            <div class="pos-r">
                                <p>Перед вами команда спикеров Laboratory CYTOLIFE — практикующие врачи, кандидаты наук, сертифицированные тренеры.</p>

                                <p>Мы не верим в «голую теорию» — за каждым выступлением стоит реальный опыт, клинические кейсы и научный подход. Наши специалисты публикуют статьи, готовят методические материалы, участвуют в разработке протоколов и обучающих программ для врачей.</p>

                                <p>Всё, чем мы делимся, проверено практикой и подтверждено наукой.</p>

                                <div class="speakers-f-screen-author">
                                    <span>Токарчук Кирилл Вячеславович</span>
                                    <div>Основатель компании LABORATORY&nbsp;CYTOLIFE</div>
                                </div>

                                <div class="speakers-f-screen-backtick">
                                    <svg class="icon icon-backtick">
                                        <use href="#icon-backtick"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /speakers-f-screen-content -->
        </div>
        <!-- /container -->
    </section>
    <!-- /speakers -->

    <section class="speakers-list section section--pt">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h2 class="events-title">Профессионалы, за которыми стоит практика, наука и опыт</h2>
                </div>
            </div>
        </div>
        <!-- /container -->

        <div class="speakers-list-bg-text"><span>Laboratory&nbsp;Cytolife</span></div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-8">
                    <?php for ($i = 1; $i <= 4; $i++) : ?>
                        <div class="speaker-slider-item">
                            <div class="speaker-slider-photo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/founder.jpg" alt="#">
                            </div>
                            <div class="speaker-slider-info">
                                <div class="speaker-slider-name">
                                    Желендинова<br />
                                    Анастасия Игоревна
                                </div>

                                <div class="speaker-slider-descr">
                                    Врач-дерматовенеролог, косметолог. Специалист по малоинвазивным методам омоложения. Сертифицированный тренер Laboratory CYTOLIFE
                                </div>

                                <a href="#" class="single-event-speaker-link cb-button">Подробнее
                                    <svg class="icon">
                                        <use href="#icon-arrow"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <!-- /speaker-slider-item -->
                    <?php endfor; ?>
                </div>
            </div>
        </div>
        <!-- /container -->
    </section>
    <!-- /speakers-list -->
</div>
<!-- /speakers -->

<?php get_footer(); ?>
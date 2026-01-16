<?php defined('ABSPATH') || exit; ?>

<?php get_header(); ?>

<section class="events section">
    <div class="container">
        <h1>Мероприятия</h1>

        <div class="events-list">
            <?php for ($i = 1; $i <= 5; $i++) : ?>

                <div class="event-card">
                    <div class="event-card-header">
                        <div class="event-card-date">17 июля 2025 Четверг</div>
                        <div class="event-card-time">11:00-15:00</div>
                        <!-- <div class="event-card-type green-mark">Семинар</div> -->
                        <div class="event-card-type yellow-mark">Конференция</div>
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
                </div>
                <!-- /event-card -->

            <?php endfor; ?>
        </div>
        <!-- /events-list -->
    </div>
</section>
<!-- /events -->

<?php get_footer(); ?>
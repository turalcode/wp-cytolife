<?php defined('ABSPATH') || exit; ?>

<?php get_header(); ?>

<section class="events section">
    <div class="container">
        <h1>Мероприятия</h1>

        <div class="events-list">
            <div class="event-card">
                <div class="event-card-header">
                    <div class="event-card-date">17 июля 2025 Четверг</div>
                    <div class="event-card-time">11:00-15:00</div>
                    <div class="event-card-type">Семинар</div>
                </div>

                <div class="event-card-title">
                    Секретные техники Laboratory CYTOLIFE при коррекции full face. Биоармирование, техника «без папул»
                </div>

                <div class="event-card-location">
                    <svg class="icon">
                        <use href="#icon-location"></use>
                    </svg>
                    Москва
                </div>

                <div class="event-card-speaker">
                    <div class="event-card-speaker-photo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/test-speaker.png" alt="#">
                    </div>
                    <div class="event-card-speaker-name">
                        <div>Желендинова А.И</div>
                        <div>врач-дерматовенеролог, косметолог.</div>
                    </div>
                </div>

                <div class="event-card-info-list">
                    <div class="event-card-info-item">
                        <span>Организатор</span> Лаборатория Цитолайф
                    </div>

                    <div class="event-card-info-item">
                        <svg class="icon">
                            <use href="#icon-phone"></use>
                        </svg>
                        <span>Для записи</span> <a href="tel:+74991309969">+7 (499) 130-99-69</a>
                    </div>

                    <div class="event-card-info-item">
                        <svg class="icon">
                            <use href="#icon-web"></use>
                        </svg>
                        <a href="https://aecspb.com/" target="_blank">https://aecspb.com/</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /company-f-screen -->

<?php get_footer(); ?>
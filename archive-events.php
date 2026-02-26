<?php defined('ABSPATH') || exit; ?>

<?php get_header(); ?>

<section class="events section">
    <div class="container">
        <h1 class="events-title">Мероприятия</h1>

        <div class="filter filter-distributors">
            <div class="filter-dropdown-section">
                <?php
                $terms = get_terms('distributor_areas', array(
                    'hide_empty' => false
                ));
                ?>

                <?php if (!empty($terms)) : ?>
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
                                <?php foreach (CYTOLIFE_MONTHS as $key => $value) : ?>
                                    <li class="filter-dropdown-list-item" data-action-class="region-action-text" data-filter-class="<?php echo $key; ?>" data-category="region">
                                        <?php echo $value; ?>
                                    </li>
                                <?php endforeach; ?>
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

            <?php
            global $post;

            $events = get_posts(array(
                'post_type' => 'events'
            ));
            ?>

            <?php if (!empty($events)): ?>
                <div class="filter-result">
                    <ul class="events-list filter-result-list">
                        <?php foreach ($events as $post) : setup_postdata($post); ?>
                            <?php
                            $area = get_the_terms($post->ID, 'distributor_areas');
                            $city = get_the_terms($post->ID, 'distributor_cities');
                            $month = get_field('event_month');
                            $format = get_field('event_format');
                            $type = get_field('event_type');

                            $a_slug = $area ? $area[0]->slug : '';
                            $c_slug = $city ? $city[0]->slug : '';
                            $m_slug = $month['value'] ? $month['value'] : '';
                            $f_slug = $format['value'] ? $format['value'] : '';
                            $t_slug = $type['value'] ? $type['value'] : '';

                            if ($city) {
                                $mr_slug = $city[0]->slug === 'moskva' ? '' : 'region';
                            } else {
                                $mr_slug = '';
                            }

                            $classes = $a_slug . ' ' . $c_slug . ' ' . $m_slug . ' ' . $f_slug . ' ' . $t_slug . ' ' . $mr_slug;
                            ?>

                            <li class="event-card filter-result-item show <?php echo $classes; ?>">
                                <div>
                                    <div class="event-card-header">
                                        <div class="event-card-date-info">
                                            <?php if ($date = get_field('event_date')) : ?>
                                                <div class="event-card-date"><?php echo $date; ?></div>
                                            <?php endif; ?>

                                            <?php if ($dayweek = get_field('event_dayweek')) : ?>
                                                <div class="event-card-day-week"><?php echo $dayweek; ?></div>
                                            <?php endif; ?>

                                            <?php if ($time = get_field('event_time')) : ?>
                                                <div class="event-card-time"><?php echo $time; ?></div>
                                            <?php endif; ?>
                                        </div>

                                        <?php if ($type = get_field('event_type')) : ?>
                                            <?php if ($type['value'] === 'seminar') : ?>
                                                <div class="event-card-format green-mark"><?php echo $type['label']; ?></div>
                                            <?php else: ?>
                                                <div class="event-card-format yellow-mark"><?php echo $type['label']; ?></div>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </div>

                                    <div class="event-card-title">
                                        <?php echo $post->post_title; ?>
                                    </div>

                                    <?php if ($city) : ?>
                                        <div class="event-card-location">
                                            <svg class="icon icon--light">
                                                <use href="#icon-location"></use>
                                            </svg>
                                            <?php echo $city[0]->name; ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($speaker = get_the_terms($post->ID, 'speakers')) : ?>
                                        <div class="event-card-speaker">
                                            <div class="event-card-speaker-photo">
                                                <?php if ($photo = get_field('speaker_photo', 'speakers_' . $speaker[0]->term_id)) : ?>
                                                    <img src="<?php echo $photo; ?>" alt="<?php echo $speaker->name; ?>">
                                                <?php else : ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile-placeholder.jpg" alt="<?php echo $speaker->name; ?>">
                                                <?php endif; ?>
                                            </div>
                                            <div class="event-card-speaker-name">
                                                <div><?php echo $speaker[0]->name; ?></div>

                                                <?php if ($spec = get_field('speaker_spec', 'speakers_' . $speaker[0]->term_id)) : ?>
                                                    <div><?php echo $spec; ?></div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <div class="event-card-info">
                                        <?php if ($organizer = get_field('event_organizer')) : ?>
                                            <div class="event-card-info-item">
                                                <span>Организатор</span><?php echo $organizer; ?>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($phone = get_field('event_phone')) : ?>
                                            <div class="event-card-info-item">
                                                <svg class="icon icon--light">
                                                    <use href="#icon-phone"></use>
                                                </svg>
                                                <span>Для записи</span><a href="tel:+<?php echo cytolife_str_replace_phone($phone); ?>"><?php echo $phone; ?></a>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($url = get_field('event_organizerurl')) : ?>
                                            <div class="event-card-info-item">
                                                <svg class="icon icon--light">
                                                    <use href="#icon-web"></use>
                                                </svg>
                                                <a href="<?php echo $url; ?>" target="_blank"><?php echo $url; ?></a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="event-card-footer">
                                    <button class="button button-reset">
                                        Зарегистрироваться
                                        <svg class="icon">
                                            <use href="#icon-arrow"></use>
                                        </svg>
                                    </button>

                                    <a href="<?php echo get_post_permalink($post->ID); ?>" class="button button--bg-light">
                                        Подробнее
                                        <svg class="icon">
                                            <use href="#icon-arrow"></use>
                                        </svg>
                                    </a>
                                </div>
                            </li>
                            <!-- /event-card -->
                        <?php endforeach; ?>

                        <?php wp_reset_postdata(); ?>
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
            <?php endif; ?>
        </div>
        <!-- /filter filter-distributors -->
    </div>
    <!-- /container -->
</section>
<!-- /events -->

<?php
$speakers = get_terms([
    'taxonomy'   => 'speakers'
]);
?>

<?php if ($speakers) : ?>
    <section class="speaker-slider section section--pt">
        <div class="container">
            <div class="speaker-slider-header">
                <h2 class="events-title">Наши спикеры</h2>

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
                    <?php foreach ($speakers as $speaker) : ?>
                        <div class="swiper-slide">
                            <div class="speaker-slider-item">
                                <div class="speaker-slider-photo">
                                    <?php if ($photo = get_field('speaker_photo', 'speakers_' . $speaker->term_id)) : ?>
                                        <img src="<?php echo $photo; ?>" alt="<?php echo $speaker->name; ?>">
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile-placeholder.jpg" alt="<?php echo $speaker->name; ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="speaker-slider-info">
                                    <div class="speaker-slider-name">
                                        <?php echo $speaker->name; ?>
                                    </div>
                                    <div class="speaker-slider-descr"><?php echo $speaker->description; ?></div>
                                </div>
                            </div>
                        </div>
                        <!-- /swiper-slide -->
                    <?php endforeach; ?>
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
<?php endif; ?>

<?php get_footer(); ?>
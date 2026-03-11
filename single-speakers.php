<?php defined('ABSPATH') || exit; ?>

<?php get_header(); ?>

<div class="single-speaker">
    <section class="single-speaker-fs section">
        <div class="container">
            <h1><?php the_title(); ?></h1>

            <div class="single-speaker-fs-content">
                <div class="row">
                    <div class="col-xl-4 col-md-5">
                        <div class="single-speaker-fs-thumb">
                            <?php if ($photo = get_the_post_thumbnail_url($post->ID, 'full')) : ?>
                                <img src="<?php echo $photo; ?>" alt="<?php the_title(); ?>">
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile-placeholder.jpg" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-xl-8 col-md-7">
                        <?php if ($short_descr = get_field('speaker_shortdescr')) : ?>
                            <div class="single-speaker-fs-descr"><?php echo $short_descr; ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- /single-speaker-fs-content -->
        </div>
        <!-- /container -->
    </section>
    <!-- /single-speaker-fs -->

    <section class="single-speaker-about section section--pt">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-5">
                    <?php if ($about_img = get_field('speaker_aboutimg')) : ?>
                        <div class="single-speaker-about-photo">
                            <img src="<?php echo $about_img; ?>" alt="О спикере">
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-xl-8 col-md-7">
                    <?php if ($descr = get_field('speaker_descr')) : ?>
                        <div class="single-speaker-about-block">
                            <h2 class="events-title">О спикере</h2>

                            <div class="single-speaker-about-text">
                                <?php echo $descr; ?>
                            </div>

                            <?php if ($about_img = get_field('speaker_aboutimg')) : ?>
                                <div class="single-speaker-about-photo-mob">
                                    <img src="<?php echo $about_img; ?>" alt="О спикере">
                                </div>
                            <?php endif; ?>
                        </div>
                        <!-- /single-speaker-about-block -->
                    <?php endif; ?>

                    <?php if ($skills = get_field('speaker_skills')) : ?>
                        <div class="single-speaker-about-block">
                            <h2 class="events-title">Ключевые навыки</h2>

                            <div class="single-speaker-about-text">
                                <?php echo $skills; ?>
                            </div>
                        </div>
                        <!-- /single-speaker-about-block -->
                    <?php endif; ?>

                    <?php if ($education = get_field('speaker_education')) : ?>
                        <div class="single-speaker-about-block">
                            <h2 class="events-title">Образование</h2>

                            <div class="single-speaker-about-text">
                                <?php echo $education; ?>
                            </div>
                        </div>
                        <!-- /single-speaker-about-block -->
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- /single-speaker-about -->

    <?php
    $args = array(
        'post_type' => 'events', // Тип записей, среди которых ищем (напр. 'post', 'page' или 'any') 
        'meta_query' => array(array(
            'key' => 'event_speakers', // Имя вашего поля ACF 
            'value' => $post->ID, // ID, который вы ищете 
            'compare' => '=' // Ищем точное совпадение 
        ))
    );

    $query = new WP_Query($args);
    $speaker_photo = get_the_post_thumbnail_url($post->ID, 'full');
    $speaker_title = get_the_title();
    $speaker_id = get_the_ID();
    ?>

    <?php if ($query->have_posts()) : ?>
        <section class="single-speaker-events section section--pt">
            <div class="container">
                <div class="single-speaker-events-title-block">
                    <h2 class="events-title">Мероприятия со спикером</h2>

                    <a href="<?php echo get_post_type_archive_link('events'); ?>" class="button">Все мероприятия
                        <svg class="icon">
                            <use href="#icon-arrow"></use>
                        </svg>
                    </a>
                </div>

                <ul class="events-list filter-result-list">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <li class="event-card filter-result-item">
                            <div>
                                <div class="event-card-header">
                                    <div class="event-card-date-info">
                                        <?php if ($date = get_field('event_date', $post->ID)) : ?>
                                            <div class="event-card-date"><?php echo $date; ?></div>
                                        <?php endif; ?>

                                        <?php if ($dayweek = get_field('event_dayweek', $post->ID)) : ?>
                                            <div class="event-card-day-week"><?php echo $dayweek; ?></div>
                                        <?php endif; ?>

                                        <?php if ($time = get_field('event_time', $post->ID)) : ?>
                                            <div class="event-card-time"><?php echo $time; ?></div>
                                        <?php endif; ?>
                                    </div>

                                    <?php if ($type = get_field('event_type', $post->ID)) : ?>
                                        <?php if ($type['value'] === 'seminar') : ?>
                                            <div class="event-card-format green-mark"><?php echo $type['label']; ?></div>
                                        <?php else: ?>
                                            <div class="event-card-format yellow-mark"><?php echo $type['label']; ?></div>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                                <!-- /event-card-header -->

                                <div class="event-card-title">
                                    <?php the_title(); ?>
                                </div>

                                <?php $city = get_the_terms($post->ID, 'distributor_cities'); ?>

                                <?php if ($city) : ?>
                                    <div class="event-card-location">
                                        <svg class="icon icon--light">
                                            <use href="#icon-location"></use>
                                        </svg>
                                        <?php echo $city[0]->name; ?>
                                    </div>
                                    <!-- /event-card-location -->
                                <?php endif; ?>

                                <div class="event-card-speaker">
                                    <div class="event-card-speaker-photo">
                                        <?php if ($speaker_photo) : ?>
                                            <img src="<?php echo $speaker_photo; ?>" alt="<?php echo $speaker_title; ?>">
                                        <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile-placeholder.jpg" alt="<?php echo $speaker_title; ?>">
                                        <?php endif; ?>
                                    </div>
                                    <div class="event-card-speaker-name">
                                        <div><?php echo $speaker_title; ?></div>

                                        <?php if ($spec = get_field('speaker_spec', $speaker_id)) : ?>
                                            <div><?php echo $spec; ?></div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <!-- /event-card-speaker -->

                                <div class="event-card-info">
                                    <?php if ($organizer = get_field('event_organizer', $post->ID)) : ?>
                                        <div class="event-card-info-item">
                                            <span>Организатор</span><?php echo $organizer; ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($phone = get_field('event_phone', $post->ID)) : ?>
                                        <div class="event-card-info-item">
                                            <svg class="icon icon--light">
                                                <use href="#icon-phone"></use>
                                            </svg>
                                            <span>Для записи</span><a href="tel:+<?php echo cytolife_str_replace_phone($phone); ?>"><?php echo $phone; ?></a>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($url = get_field('event_organizerurl', $post->ID)) : ?>
                                        <div class="event-card-info-item">
                                            <svg class="icon icon--light">
                                                <use href="#icon-web"></use>
                                            </svg>
                                            <a href="<?php echo $url; ?>" target="_blank"><?php echo $url; ?></a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <!-- /event-card-info -->
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
                            <!-- /event-card-footer -->
                        </li>
                        <!-- /event-card -->
                    <?php endwhile; ?>

                    <?php wp_reset_postdata(); ?>
                </ul>

                <a href="<?php echo get_post_type_archive_link('events'); ?>" class="single-speaker-events-button-mob button">Все мероприятия
                    <svg class="icon">
                        <use href="#icon-arrow"></use>
                    </svg>
                </a>
            </div>
        </section>
        <!-- /single-speaker-events -->
    <?php endif; ?>

    <?php
    $args = array(
        'post_type' => 'articles',
        'meta_query' => array(array(
            'key' => 'article_authors',
            'value' => $post->ID,
            'compare' => '='
        ))
    );

    $query = new WP_Query($args);
    ?>

    <?php if ($query->have_posts()) : ?>
        <section class="single-speaker-articles section section--pt">
            <div class="container">
                <div class="single-speaker-events-title-block">
                    <h2 class="events-title">Статьи спикера</h2>

                    <a href="<?php echo get_post_type_archive_link('articles'); ?>" class="button">Все статьи
                        <svg class="icon">
                            <use href="#icon-arrow"></use>
                        </svg>
                    </a>
                </div>

                <ul class="events-list filter-result-list">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <li class="article-card event-card filter-result-item">
                            <a class="article-card-link-block" href="<?php echo get_post_permalink($post->ID); ?>">
                                <div class="article-card-header">
                                    <?php $term = get_the_terms($post->ID, 'articles_mgz'); ?>
                                    <?php if (!empty($term)) : ?>
                                        <div class="article-card-info-item"><?php echo $term[0]->name; ?></div>
                                    <?php endif; ?>

                                    <div class="article-card-info-item">2&nbsp;(61)</div>

                                    <?php if ($month = get_field('article_month', $post->ID)) : ?>
                                        <div class="article-card-info-item"><?php echo $month['label']; ?></div>
                                    <?php endif; ?>

                                    <?php $term = get_the_terms($post->ID, 'years'); ?>
                                    <?php if (!empty($term)) : ?>
                                        <div class="article-card-info-item"><?php echo $term[0]->name; ?></div>
                                    <?php endif; ?>
                                </div>

                                <div class="article-card-footer">
                                    <div class="article-card-text">
                                        <div class="article-card-author">
                                            <span>Автор:</span><?php echo get_shorte_name($speaker_title); ?>

                                            <?php if ($speaker_photo) : ?>
                                                <div class="article-card-author-photo">
                                                    <img src="<?php echo $speaker_photo; ?>" alt="<?php echo $speaker_title; ?>">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="article-card-title"><?php the_title(); ?></div>
                                    </div>

                                    <?php if ($thumb = get_the_post_thumbnail_url($post->ID, 'full')) : ?>
                                        <div class="article-card-thumb">
                                            <img src="<?php echo $thumb; ?>" alt="<?php the_title(); ?>">
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </a>
                        </li>
                        <!-- /article-card -->
                    <?php endwhile; ?>

                    <?php wp_reset_postdata(); ?>
                </ul>

                <a href="<?php echo get_post_type_archive_link('articles'); ?>" class="single-speaker-events-button-mob button">Все статьи
                    <svg class="icon">
                        <use href="#icon-arrow"></use>
                    </svg>
                </a>
            </div>
        </section>
        <!-- /single-speaker-articles -->
    <?php endif; ?>
</div>
<!-- /single-speaker -->

<?php get_footer(); ?>
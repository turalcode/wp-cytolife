<?php defined('ABSPATH') || exit; ?>

<?php get_header(); ?>

<div class="single-event">
    <section class="single-event-f-screen section">
        <div class="container">
            <h1 class="single-event-title">
                <?php echo the_title(); ?>
            </h1>

            <div class="single-event-info">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="single-event-col">
                            <div class="event-card-header">
                                <?php if ($city = get_the_terms($post->ID, 'distributor_cities')) : ?>
                                    <div class="single-event-location">
                                        <?php echo $city[0]->name; ?>
                                    </div>
                                <?php endif; ?>

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
                            </div>

                            <?php if ($address = get_field('event_address')) : ?>
                                <address class="single-event-address">
                                    <span>
                                        <svg class="icon">
                                            <use href="#icon-location"></use>
                                        </svg>
                                        Место проведения:
                                    </span><?php echo $address; ?>
                                </address>
                            <?php endif; ?>

                            <?php if ($phone = get_field('event_phone')) : ?>
                                <div class="single-event-phone">
                                    <span>
                                        <svg class="icon">
                                            <use href="#icon-phone"></use>
                                        </svg>
                                        Для записи:
                                    </span><a href="tel:+<?php echo cytolife_str_replace_phone($phone); ?>"><?php echo $phone; ?></a>
                                </div>
                            <?php endif; ?>

                            <button class="single-event-button button button-reset">Зарегистрироваться
                                <svg class="icon">
                                    <use href="#icon-arrow"></use>
                                </svg>
                            </button>

                            <?php if ($descr = get_field('event_descr')) : ?>
                                <div class="single-event-descr"><?php echo $descr; ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <?php if ($thumb = get_the_post_thumbnail_url($post->ID, 'full')) : ?>
                            <div class="single-event-thumb">
                                <img src="<?php echo $thumb; ?>" alt="<?php echo the_title(); ?>">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- /single-event-info -->
        </div>
        <!-- /container -->
    </section>
    <!-- /single-event-f-screen -->

    <?php if ($program = get_field('event_program')) : ?>
        <section class="single-event-program section section--pt">
            <div class="container">
                <h2 class="single-event-title">Программа</h2>

                <div class="single-event-program-content">
                    <div class="row">
                        <div class="col-lg-8">
                            <?php echo $program; ?>

                            <?php if ($pdf = get_field('event_pdf')) : ?>
                                <a href="<?php echo $pdf; ?>" class="single-event-program-download cb-button" download>Презентация PDF
                                    <svg class="icon">
                                        <use href="#icon-arrow"></use>
                                    </svg>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <!-- /single-event-program-content -->
            </div>
            <!-- /container -->
        </section>
        <!-- /single-event-program -->
    <?php endif; ?>

    <?php if ($speakers = get_the_terms($post->ID, 'speakers')) : ?>
        <section class="single-event-speaker section section--pt">
            <div class="container">
                <h2 class="single-event-title">Спикер</h2>

                <div class="speaker-slider-item">
                    <div class="speaker-slider-photo">
                        <?php if ($photo = get_field('speaker_photo', 'speakers_' . $speakers[0]->term_id)) : ?>
                            <img src="<?php echo $photo; ?>" alt="<?php echo $speakers[0]->name; ?>">
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile-placeholder.jpg" alt="<?php echo $speakers[0]->name; ?>">
                        <?php endif; ?>
                    </div>

                    <div class="speaker-slider-info">
                        <div class="speaker-slider-name">
                            <?php echo $speakers[0]->name; ?>
                        </div>

                        <div class="speaker-slider-descr">
                            <?php echo $speakers[0]->description; ?>
                        </div>

                        <a href="<?php echo get_category_link($speakers[0]->term_id); ?>" class="single-event-speaker-link cb-button">Подробнее о спикере
                            <svg class="icon">
                                <use href="#icon-arrow"></use>
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- /speaker-slider-item -->
            </div>
            <!-- /container -->
        </section>
        <!-- /single-event-speaker -->
    <?php endif; ?>

    <section class="single-event-organizer section section--pt">
        <div class="container">
            <?php if ($organizer = get_field('event_organizer')) : ?>
                <div class="single-event-organizer-content">
                    <div class="single-event-organizer-title-block">
                        <h2 class="single-event-organizer-title">Организатор</h2>
                        <div class="single-event-organizer-name"><?php echo $organizer; ?></div>
                    </div>

                    <?php if ($organizer_logo = get_field('event_organizerlogo')) : ?>
                        <div class="single-event-organizer-logo">
                            <img src="<?php echo $organizer_logo; ?>" alt="<?php echo $organizer; ?>">
                        </div>
                    <?php endif; ?>

                </div>
                <!-- /single-event-organizer-content -->
            <?php endif; ?>

            <div class="product__share">
                <div class="product__share-title">Поделиться:</div>

                <div class="product__share-list">
                    <a href="<?php echo esc_url(get_tg_share_url(get_permalink())); ?>" class="product__share-link">
                        <svg class="icon-share">
                            <use href="#icon-tg-share"></use>
                        </svg>
                    </a>

                    <a href="<?php echo esc_url(get_wa_share_url(get_permalink())); ?>" class="product__share-link">
                        <svg class="icon-share">
                            <use href="#icon-wa-share"></use>
                        </svg>
                    </a>

                    <a href="<?php echo esc_url(get_mail_share_url(get_permalink())); ?>" class="product__share-link">
                        <svg class="icon-share">
                            <use href="#icon-mail-share"></use>
                        </svg>
                    </a>

                    <a href="<?php echo esc_url(get_vk_share_url(get_permalink())); ?>" class="product__share-link">
                        <svg class="icon-share icon-share--vk">
                            <use href="#icon-vk-share"></use>
                        </svg>
                    </a>

                    <a href="#" class="product__share-link share-link-js">
                        <svg class="icon-share">
                            <use href="#icon-copy-share"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <!-- /container -->
    </section>
    <!-- /single-event-organizer -->
</div>
<!-- /single-event -->

<?php get_footer(); ?>
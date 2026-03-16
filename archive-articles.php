<?php defined('ABSPATH') || exit; ?>

<?php get_header(); ?>

<div class="articles">
    <section class="articles-f-screen section">
        <div class="container">
            <h1>Статьи</h1>

            <div class="articles-f-screen-content">
                <div class="row">
                    <div class="col-lg-6">
                        <?php
                        $last_posts = get_posts(array(
                            'numberposts' => 1,
                            'post_type'   => 'articles'
                        ));
                        ?>

                        <?php if ($last_posts) : ?>
                            <?php foreach ($last_posts as $post): setup_postdata($post); ?>
                                <div class="article-card event-card">
                                    <a class="article-card-link-block" href="<?php echo get_post_permalink($post->ID); ?>">
                                        <div class="article-card-header">
                                            <?php $term = get_the_terms($post->ID, 'articles_mgz'); ?>
                                            <?php if (!empty($term)) : ?>
                                                <div class="article-card-info-item"><?php echo $term[0]->name; ?></div>
                                            <?php endif; ?>

                                            <div class="article-card-info-item">2&nbsp;(61)</div>

                                            <?php if (!empty($month = get_field('article_month'))) : ?>
                                                <div class="article-card-info-item"><?php echo $month['label']; ?></div>
                                            <?php endif; ?>

                                            <?php $term = get_the_terms($post->ID, 'years'); ?>
                                            <?php if (!empty($term)) : ?>
                                                <div class="article-card-info-item"><?php echo $term[0]->name; ?></div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="article-card-footer">
                                            <div class="article-card-text">
                                                <?php
                                                $speaker_id = get_field('article_author');
                                                $speaker = get_posts(array(
                                                    'include' => $speaker_id,
                                                    'post_type' => 'speakers'
                                                ));
                                                ?>
                                                <?php if (!empty($speaker)) : ?>
                                                    <div class="article-card-author">
                                                        <span>Автор:</span><?php echo get_shorte_name($speaker[0]->post_title); ?>

                                                        <?php if ($photo = get_the_post_thumbnail_url($speaker[0]->ID, 'full')) : ?>
                                                            <div class="article-card-author-photo">
                                                                <img src="<?php echo $photo; ?>" alt="<?php echo $speaker[0]->post_title; ?>">
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                <?php endif; ?>

                                                <div class="article-card-title"><?php the_title(); ?></div>
                                            </div>

                                            <?php if ($thumb = get_the_post_thumbnail_url($post->ID, 'full')) : ?>
                                                <div class="article-card-thumb">
                                                    <img src="<?php echo $thumb; ?>" alt="<?php the_title(); ?>">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </a>
                                </div>

                                <?php wp_reset_postdata(); ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
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
                            <?php
                            $terms = get_terms('articles_topics', array(
                                'hide_empty' => false
                            ));
                            ?>

                            <?php if (!empty($terms)) : ?>
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
                                        <button class="filter-dropdown-close button-reset">
                                            <svg class="icon">
                                                <use href="#icon-close"></use>
                                            </svg>
                                        </button>

                                        <p><b>Выбрать тему:</b></p>
                                        <div class="filter-dropdown-scroll">
                                            <ul class="filter-dropdown-list pt-reset area-search">
                                                <li class="filter-dropdown-list-item" data-action-class="area-action-text" data-filter-class="all" data-category="area">
                                                    Все темы
                                                </li>

                                                <?php foreach ($terms as $term): ?>
                                                    <li class="filter-dropdown-list-item" data-action-class="area-action-text" data-filter-class="<?php echo $term->slug; ?>" data-category="area">
                                                        <?php echo $term->name; ?>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /filter-dropdown -->
                            <?php endif; ?>


                            <?php
                            $terms = get_terms('articles_mgz', array(
                                'hide_empty' => false
                            ));
                            ?>

                            <?php if (!empty($terms)) : ?>
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
                                        <button class="filter-dropdown-close button-reset">
                                            <svg class="icon">
                                                <use href="#icon-close"></use>
                                            </svg>
                                        </button>

                                        <p><b>Выбрать журнал:</b></p>
                                        <div class="filter-dropdown-scroll">
                                            <ul class="filter-dropdown-list pt-reset city-search">
                                                <li class="filter-dropdown-list-item" data-action-class="city-action-text" data-filter-class="all" data-category="city">
                                                    Все журналы
                                                </li>

                                                <?php foreach ($terms as $term): ?>
                                                    <li class="filter-dropdown-list-item" data-action-class="city-action-text" data-filter-class="<?php echo $term->slug; ?>" data-category="city">
                                                        <?php echo $term->name; ?>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /filter-dropdown -->
                            <?php endif; ?>

                            <?php
                            $args = array('post_type' => 'speakers');
                            $query = new WP_Query($args);
                            ?>

                            <?php if ($query->have_posts()) : ?>
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
                                        <button class="filter-dropdown-close button-reset">
                                            <svg class="icon">
                                                <use href="#icon-close"></use>
                                            </svg>
                                        </button>

                                        <p><b>Выбрать автора:</b></p>
                                        <div class="filter-dropdown-scroll">
                                            <ul class="filter-dropdown-list pt-reset region-search">
                                                <li class="filter-dropdown-list-item" data-action-class="region-action-text" data-filter-class="all" data-category="region">
                                                    Все авторы
                                                </li>

                                                <?php while ($query->have_posts()) : $query->the_post(); ?>
                                                    <li class="filter-dropdown-list-item" data-action-class="region-action-text" data-filter-class="<?php echo $post->post_name; ?>" data-category="region">
                                                        <?php echo get_shorte_name(get_the_title()); ?>
                                                    </li>
                                                <?php endwhile; ?>

                                                <?php wp_reset_postdata(); ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /filter-dropdown -->
                            <?php endif; ?>

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
                                    <button class="filter-dropdown-close button-reset">
                                        <svg class="icon">
                                            <use href="#icon-close"></use>
                                        </svg>
                                    </button>

                                    <p><b>Выбрать месяц:</b></p>
                                    <div class="filter-dropdown-scroll">
                                        <ul class="filter-dropdown-list pt-reset distributor-search">
                                            <li class="filter-dropdown-list-item" data-action-class="distributor-action-text" data-filter-class="all" data-category="distributor">
                                                Все месяца
                                            </li>

                                            <?php foreach (CYTOLIFE_MONTHS as $key => $value): ?>
                                                <li class="filter-dropdown-list-item" data-action-class="distributor-action-text" data-filter-class="<?php echo $key; ?>" data-category="distributor">
                                                    <?php echo $value; ?>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /filter-dropdown -->

                            <?php
                            $terms = get_terms('years', array(
                                'hide_empty' => false
                            ));
                            ?>

                            <?php if (!empty($terms)) : ?>
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
                                        <button class="filter-dropdown-close button-reset">
                                            <svg class="icon">
                                                <use href="#icon-close"></use>
                                            </svg>
                                        </button>

                                        <p><b>Выбрать год:</b></p>
                                        <div class="filter-dropdown-scroll">
                                            <ul class="filter-dropdown-list pt-reset year-search">
                                                <li class="filter-dropdown-list-item" data-action-class="year-action-text" data-filter-class="all" data-category="year">
                                                    Все года
                                                </li>

                                                <?php foreach ($terms as $term): ?>
                                                    <li class="filter-dropdown-list-item" data-action-class="year-action-text" data-filter-class="<?php echo $term->slug; ?>" data-category="year">
                                                        <?php echo $term->name; ?>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /filter-dropdown -->
                            <?php endif; ?>
                        </div>
                        <!-- /filter-dropdown-section -->
                    </div>
                </div>

                <div class="filter-result">
                    <ul class="events-list filter-result-list">
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <?php
                                $topic = get_the_terms($post->ID, 'articles_topics');
                                $mgz = get_the_terms($post->ID, 'articles_mgz');
                                $speaker_id = get_field('article_author');
                                $speaker = get_posts(array(
                                    'include' => $speaker_id,
                                    'post_type' => 'speakers'
                                ));
                                $month = get_field('article_month');
                                $year = get_the_terms($post->ID, 'years');

                                $topic_slug = $topic ? $topic[0]->slug : '';
                                $mgz_slug = $mgz ? $mgz[0]->slug : '';
                                $speaker_slug = $speaker ? $speaker[0]->post_name : '';
                                $month_slug = $month ? $month['value'] : '';
                                $year_slug = $year ? $year[0]->slug : '';

                                $classes = $topic_slug . ' ' . $mgz_slug . ' ' . $speaker_slug . ' ' . $month_slug . ' ' . $year_slug;
                                ?>

                                <li class="article-card event-card filter-result-item <?php echo $classes; ?>">
                                    <a class="article-card-link-block" href="<?php echo get_post_permalink($post->ID); ?>">
                                        <div class="article-card-header">
                                            <?php $term = get_the_terms($post->ID, 'articles_mgz'); ?>
                                            <?php if (!empty($term)) : ?>
                                                <div class="article-card-info-item"><?php echo $term[0]->name; ?></div>
                                            <?php endif; ?>

                                            <div class="article-card-info-item">2&nbsp;(61)</div>

                                            <?php if (!empty($month)) : ?>
                                                <div class="article-card-info-item"><?php echo $month['label']; ?></div>
                                            <?php endif; ?>

                                            <?php $term = get_the_terms($post->ID, 'years'); ?>
                                            <?php if (!empty($term)) : ?>
                                                <div class="article-card-info-item"><?php echo $term[0]->name; ?></div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="article-card-footer">
                                            <div class="article-card-text">
                                                <?php if (!empty($speaker)) : ?>
                                                    <div class="article-card-author">
                                                        <span>Автор:</span><?php echo get_shorte_name($speaker[0]->post_title); ?>

                                                        <?php if ($photo = get_the_post_thumbnail_url($speaker[0]->ID, 'full')) : ?>
                                                            <div class="article-card-author-photo">
                                                                <img src="<?php echo $photo; ?>" alt="<?php echo $speaker[0]->post_title; ?>">
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                <?php endif; ?>

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
                        <?php endif; ?>
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
<?php defined('ABSPATH') || exit; ?>

<?php get_header(); ?>

<div class="single-article">
    <section class="single-article-fs section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="single-article-header">
                        <h1><?php the_title(); ?></h1>

                        <div class="single-article-share product__share">
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
                </div>
                <div class="col-md-6">
                    <div class="article-card-header">
                        <?php $term = get_the_terms($post->ID, 'articles_mgz'); ?>
                        <?php if (!empty($term)) : ?>
                            <div class="article-card-info-item"><?php echo $term[0]->name; ?></div>
                        <?php endif; ?>

                        <div class="article-card-info-item">2&nbsp;(61)</div>

                        <?php if ($month = get_field('article_month')) : ?>
                            <div class="article-card-info-item"><?php echo $month['label']; ?></div>
                        <?php endif; ?>

                        <?php $term = get_the_terms($post->ID, 'years'); ?>
                        <?php if (!empty($term)) : ?>
                            <div class="article-card-info-item"><?php echo $term[0]->name; ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <?php
                            $speaker_id = get_field('article_author');
                            $speaker = get_posts(array(
                                'include' => $speaker_id,
                                'post_type' => 'speakers'
                            ));
                            ?>

                            <?php if (!empty($speaker)) : ?>
                                <div class="single-article-speaker-info">
                                    <div>Автор:</div>

                                    <div class="single-article-speaker-name">
                                        <div><?php echo get_shorte_name($speaker[0]->post_title); ?></div>

                                        <?php if ($spec = get_field('speaker_spec', $speaker[0]->ID)) : ?>
                                            <div><?php echo $spec; ?></div>
                                        <?php endif; ?>
                                    </div>

                                    <a href="<?php echo get_permalink($speaker[0]->ID); ?>" class="single-event-speaker-link cb-button">Об авторе
                                        <svg class="icon">
                                            <use href="#icon-arrow"></use>
                                        </svg>
                                    </a>
                                </div>
                            <?php endif; ?>

                        </div>
                        <div class="col-lg-6">
                            <div class="speaker-slider-photo">
                                <?php if ($photo = get_the_post_thumbnail_url($speaker[0]->ID, 'full')) : ?>
                                    <img src="<?php echo $photo; ?>" alt="<?php echo $speaker[0]->post_title; ?>">
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile-placeholder.jpg" alt="<?php echo $speaker[0]->post_title; ?>">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /single-article -->

    <?php $result = get_tag_ids_from_content(get_the_ID(), 'h2'); ?>

    <?php if (!empty($result)) : ?>
        <section class="single-article-anchor section--pt">
            <div class="container">
                <h2 class="single-article-section-title">Оглавление:</h2>

                <ul class="single-article-anchor-list">
                    <?php foreach ($result as $anchor) : ?>
                        <li><a href="#<?php echo esc_attr($anchor['id']); ?>"><?php echo esc_html($anchor['label']); ?></a></li>
                    <?php endforeach; ?>

                    <li><a href="#recommendations">Рекомендованные статьи</a></li>
                </ul>
            </div>
            <!-- /container -->
        </section>
        <!-- /single-article-anchor -->
    <?php endif; ?>

    <?php if ($is_pdf = get_field('article_ispdf')) : ?>
        <?php $blocks = parse_blocks(get_the_content()); ?>
        <section class="single-article-cl section section--pt">
            <div class="container">
                <?php foreach ($blocks as $block) : ?>
                    <?php if ($pdf_url = $block['attrs']['href']) : ?>
                        <?php $shortcode = '[pdf-embedder url="' . $pdf_url . '"]'; ?>
                        <?php echo do_shortcode($shortcode); ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </section>
        <!-- /single-article-cl -->
    <?php else : ?>
        <section class="gutenberg">
            <div class="container">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; ?>

                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </section>
        <!-- /gutenberg -->
    <?php endif; ?>

    <div class="single-article-pagination">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="single-article-pagination-content">
                        <?php $prev_post = get_previous_post(); ?>
                        <?php if (!empty($prev_post)) : ?>
                            <a href="<?php echo get_permalink($prev_post->ID); ?>" class="single-article-pagination-content-item cb-button">
                                <svg class="icon arrow-left">
                                    <use href="#icon-arrow"></use>
                                </svg>
                                Предыдущая статья
                            </a>
                        <?php endif; ?>

                        <?php $next_post = get_next_post(); ?>
                        <?php if (!empty($next_post)) : ?>
                            <a href="<?php echo get_permalink($next_post->ID); ?>" class="single-article-pagination-content-item cb-button">
                                Следующая статья
                                <svg class="icon arrow-right">
                                    <use href="#icon-arrow"></use>
                                </svg>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /single-article-pagination -->

    <?php
    $rec_articles = get_posts(array(
        'post_type' => 'articles',
        'exclude' => $post->ID
    ));
    ?>

    <?php if (!empty($rec_articles)) : ?>
        <section id="recommendations" class="single-article-block section section--pt">
            <div class="container">
                <h2 class="single-article-section-title">Рекомендованные статьи</h2>

                <ul class="events-list filter-result-list">
                    <?php foreach ($rec_articles as $article) : ?>
                        <li class="article-card event-card filter-result-item">
                            <a class="article-card-link-block" href="<?php echo get_post_permalink($article->ID); ?>">
                                <div class="article-card-header">
                                    <?php $term = get_the_terms($article->ID, 'articles_mgz'); ?>
                                    <?php if (!empty($term)) : ?>
                                        <div class="article-card-info-item"><?php echo $term[0]->name; ?></div>
                                    <?php endif; ?>

                                    <div class="article-card-info-item">2&nbsp;(61)</div>

                                    <?php if (!empty($month)) : ?>
                                        <div class="article-card-info-item"><?php echo $month['label']; ?></div>
                                    <?php endif; ?>

                                    <?php $term = get_the_terms($article->ID, 'years'); ?>
                                    <?php if (!empty($term)) : ?>
                                        <div class="article-card-info-item"><?php echo $term[0]->name; ?></div>
                                    <?php endif; ?>
                                </div>

                                <?php
                                $speaker_id = get_field('article_author', $article->ID);
                                $speaker = get_posts(array(
                                    'include' => $speaker_id,
                                    'post_type' => 'speakers'
                                ));
                                ?>

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

                                        <div class="article-card-title"><?php echo $article->post_title; ?></div>
                                    </div>

                                    <?php if ($thumb = get_the_post_thumbnail_url($article->ID, 'full')) : ?>
                                        <div class="article-card-thumb">
                                            <img src="<?php echo $thumb; ?>" alt="<?php the_title(); ?>">
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </a>
                        </li>
                        <!-- /article-card -->
                    <?php endforeach; ?>
                </ul>
            </div>
            <!-- /container -->
        </section>
        <!-- /single-article-block -->
    <?php endif; ?>

    <div class="single-article-share-mob product__share">
        <div class="container">
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
        <!-- /container -->
    </div>
    <!-- /single-article-share -->

    <!-- <section id="section-1" class="single-article-block section section--pt">
        <div class="container">
            <h2 class="single-article-section-title">Заголовок блока 1</h2>

            <div class="single-article-block-content">
                <div class="row">
                    <div class="single-article-block-content-img-mob col-12">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/test-single-article-block-2.jpg" alt="#">
                    </div>

                    <div class="col-md-6">
                        <p>
                            Анастасия Игоревна — специалист широкого профиля с более чем 15-летним стажем в дерматологии и эстетической медицине. Работает на стыке науки и практики, сочетая медицинский подход с эстетическим мышлением.
                        </p>
                        <p>
                            В своей профессиональной деятельности делает акцент на клиническую дерматологию, антивозрастную терапию и коррекцию качества кожи. Владеет широким арсеналом инъекционных методик, занимается лечением сложных кожных заболеваний, включая акне, розацеа, дерматозы и микозы. Проводит диагностические приёмы, разрабатывает персонализированные программы терапии и омоложения.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            Анастасия Игоревна — специалист широкого профиля с более чем 15-летним стажем в дерматологии и эстетической медицине. Работает на стыке науки и практики, сочетая медицинский подход с эстетическим мышлением.
                        </p>
                        <p>
                            В своей профессиональной деятельности делает акцент на клиническую дерматологию, антивозрастную терапию и коррекцию качества кожи. Владеет широким арсеналом инъекционных методик, занимается лечением сложных кожных заболеваний, включая акне, розацеа, дерматозы и микозы. Проводит диагностические приёмы, разрабатывает персонализированные программы терапии и омоложения.
                        </p>
                    </div>

                    <div class="single-article-block-content-img col-md-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/test-single-article-block-2.jpg" alt="#">
                    </div>

                    <div class="single-article-block-content-img col-md-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/test-single-article-block-2.jpg" alt="#">
                    </div>

                    <div class="single-article-block-content-img-mob col-12">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/test-single-article-block-2.jpg" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-2" class="single-article-block section section--pt">
        <div class="container">
            <h2 class="single-article-section-title">Заголовок блока 2</h2>

            <div class="single-article-block-content">
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            Анастасия Игоревна — специалист широкого профиля с более чем 15-летним стажем в дерматологии и эстетической медицине. Работает на стыке науки и практики, сочетая медицинский подход с эстетическим мышлением.
                        </p>

                        <p>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/test-single-article-block-2.jpg" alt="#">
                        </p>
                    </div>
                    <div class="col-md-6">
                        <ul>
                            <li>Анастасия Игоревна — специалист широкого профиля с более чем 15-летним стажем в дерматологии и эстетической медицине.</li>
                            <li>Работает на стыке науки и практики, сочетая медицинский подход с эстетическим мышлением.</li>
                            <li>В своей профессиональной деятельности делает акцент на клиническую дерматологию, антивозрастную терапию и коррекцию качества кожи.</li>
                            <li>Владеет широким арсеналом инъекционных методик, занимается лечением сложных кожных заболеваний, включая акне, розацеа, дерматозы и микозы.</li>
                            <li>Проводит диагностические приёмы, разрабатывает персонализированные программы терапии и омоложения.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section id="section-3" class="single-article-block section section--pt">
        <div class="container">
            <h2 class="single-article-section-title">Заголовок блока 3</h2>

            <div class="single-article-block-content">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="accordion">
                            <div class="accordion-item">
                                <div class="accordion-trigger">
                                    <h3 class="product-descr__title">Описание</h3>
                                    <div class="accordion-trigger-action"></div>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-hidden">
                                        <div class="product-descr__content">
                                            «Янтарный адаптоген»
                                            Комбинированный препарат с янтарной кислотой для стрессовой кожи с признаками пастозности и гиперпигментации. Повышает адаптивные свойства кожи. Янтарная кислота является мощным антиоксидантом, защищая клетки от повреждения. Уменьшает выраженность гиперпигментации. Активно насыщает клетки кислородом, благодаря выработки АТФ в митохондриях, и восстанавливает клеточное дыхание. Тонизирует стенки кровеносных и лимфатических сосудов, способствуя уменьшению пастозности тканей. Препарат незаменим для коррекции признаков фотостарения кожи.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-trigger">
                                    <h3 class="product-descr__title">Описание</h3>
                                    <div class="accordion-trigger-action"></div>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-hidden">
                                        <div class="product-descr__content">
                                            «Янтарный адаптоген»
                                            Комбинированный препарат с янтарной кислотой для стрессовой кожи с признаками пастозности и гиперпигментации. Повышает адаптивные свойства кожи. Янтарная кислота является мощным антиоксидантом, защищая клетки от повреждения. Уменьшает выраженность гиперпигментации. Активно насыщает клетки кислородом, благодаря выработки АТФ в митохондриях, и восстанавливает клеточное дыхание. Тонизирует стенки кровеносных и лимфатических сосудов, способствуя уменьшению пастозности тканей. Препарат незаменим для коррекции признаков фотостарения кожи.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-trigger">
                                    <h3 class="product-descr__title">Описание</h3>
                                    <div class="accordion-trigger-action"></div>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-hidden">
                                        <div class="product-descr__content">
                                            «Янтарный адаптоген»
                                            Комбинированный препарат с янтарной кислотой для стрессовой кожи с признаками пастозности и гиперпигментации. Повышает адаптивные свойства кожи. Янтарная кислота является мощным антиоксидантом, защищая клетки от повреждения. Уменьшает выраженность гиперпигментации. Активно насыщает клетки кислородом, благодаря выработки АТФ в митохондриях, и восстанавливает клеточное дыхание. Тонизирует стенки кровеносных и лимфатических сосудов, способствуя уменьшению пастозности тканей. Препарат незаменим для коррекции признаков фотостарения кожи.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-trigger">
                                    <h3 class="product-descr__title">Описание</h3>
                                    <div class="accordion-trigger-action"></div>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-hidden">
                                        <div class="product-descr__content">
                                            «Янтарный адаптоген»
                                            Комбинированный препарат с янтарной кислотой для стрессовой кожи с признаками пастозности и гиперпигментации. Повышает адаптивные свойства кожи. Янтарная кислота является мощным антиоксидантом, защищая клетки от повреждения. Уменьшает выраженность гиперпигментации. Активно насыщает клетки кислородом, благодаря выработки АТФ в митохондриях, и восстанавливает клеточное дыхание. Тонизирует стенки кровеносных и лимфатических сосудов, способствуя уменьшению пастозности тканей. Препарат незаменим для коррекции признаков фотостарения кожи.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-trigger">
                                    <h3 class="product-descr__title">Описание</h3>
                                    <div class="accordion-trigger-action"></div>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-hidden">
                                        <div class="product-descr__content">
                                            «Янтарный адаптоген»
                                            Комбинированный препарат с янтарной кислотой для стрессовой кожи с признаками пастозности и гиперпигментации. Повышает адаптивные свойства кожи. Янтарная кислота является мощным антиоксидантом, защищая клетки от повреждения. Уменьшает выраженность гиперпигментации. Активно насыщает клетки кислородом, благодаря выработки АТФ в митохондриях, и восстанавливает клеточное дыхание. Тонизирует стенки кровеносных и лимфатических сосудов, способствуя уменьшению пастозности тканей. Препарат незаменим для коррекции признаков фотостарения кожи.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
</div>
<!-- /single-article -->

<?php get_footer(); ?>
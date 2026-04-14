<section class="laboratory section section--pt">
    <div class="container">
        <div class="section-header">
            <div class="row">
                <div class="col-md-4">
                    <span class="mini-logo">Инновации</span>
                </div>
                <div class="col-md-8">
                    <h2 class="section-header-title">Laboratory Cytolife производит</h2>
                    <div class="section-header-subtitle">
                        Laboratory Cytolife — российская компания, специализирующаяся на разработке и производстве препаратов
                        для профессиональной косметологии. В основе — собственные исследования, клинические испытания и работа
                        с экспертами в области эстетической медицины.
                    </div>
                </div>
            </div>
        </div>

        <div class="laboratory__item">
            <div class="row">
                <div class="col-md-4">
                    <div class="laboratory__item-img-block">
                        <div class="laboratory__item-number">01</div>

                        <div class="laboratory__item-picture">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/laboratory-1.png" alt="Препараты для инъекционной косметологии" />
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="laboratory__item-text">
                        <h3 class="laboratory__item-title">Препараты для инъекционной косметологии</h3>

                        <div class="laboratory__item-picture-mob">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/laboratory-1.png" alt="Препараты для инъекционной косметологии" />
                        </div>

                        <div>
                            Средства для биоревитализации, мезотерапии и коррекции возрастных изменений. Высокая эффективность,
                            подтверждённая исследованиями.
                        </div>

                        <?php
                        $term = get_term_by('slug', 'inekczii', 'product_cat');
                        $term_link = get_term_link($term);
                        if (is_wp_error($term_link)) $term_link = wc_get_page_permalink('shop');
                        ?>

                        <?php if ($term_link) : ?>
                            <a class="button-light button-light--laboratory-item" href="<?php echo esc_url($term_link); ?>">Перейти на страницу
                                <span>
                                    <svg class="icon">
                                        <use href="#icon-arrow"></use>
                                    </svg>
                                </span>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="laboratory__item">
            <div class="row">
                <div class="col-md-4">
                    <div class="laboratory__item-img-block">
                        <div class="laboratory__item-number">02</div>

                        <div class="laboratory__item-picture">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/laboratory-2.png" alt="Химические пилинги" />
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="laboratory__item-text">
                        <h3 class="laboratory__item-title">Химические пилинги</h3>

                        <div class="laboratory__item-picture-mob">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/laboratory-2.png" alt="Химические пилинги" />
                        </div>

                        <div>Линейка пилингов с предсказуемым результатом и контролируемым воздействием.</div>

                        <?php
                        $term = get_term_by('slug', 'pilingi', 'product_cat');
                        $term_link = get_term_link($term);
                        if (is_wp_error($term_link)) $term_link = wc_get_page_permalink('shop');
                        ?>

                        <?php if ($term_link) : ?>
                            <a class="button-light button-light--laboratory-item" href="<?php echo esc_url($term_link); ?>">Перейти на страницу
                                <span>
                                    <svg class="icon">
                                        <use href="#icon-arrow"></use>
                                    </svg>
                                </span>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="laboratory__item">
            <div class="row">
                <div class="col-md-4">
                    <div class="laboratory__item-img-block">
                        <div class="laboratory__item-number">03</div>

                        <div class="laboratory__item-picture">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/laboratory-3.png" alt="Профессиональная уходовая линия" />
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="laboratory__item-text">
                        <h3 class="laboratory__item-title">Профессиональная уходовая линия</h3>

                        <div class="laboratory__item-picture-mob">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/laboratory-3.png" alt="Профессиональная уходовая линия" />
                        </div>

                        <div>
                            Профессиональная уходовая линия. Средства для постпроцедурного восстановления и поддержания здоровья
                            кожи.
                        </div>

                        <?php
                        $term = get_term_by('slug', 'kosmeczevtika', 'product_cat');
                        $term_link = get_term_link($term);
                        if (is_wp_error($term_link)) $term_link = wc_get_page_permalink('shop');
                        ?>

                        <?php if ($term_link) : ?>
                            <a class="button-light button-light--laboratory-item" href="<?php echo esc_url($term_link); ?>">Перейти на страницу
                                <span>
                                    <svg class="icon">
                                        <use href="#icon-arrow"></use>
                                    </svg>
                                </span>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php

// Добавление фильтра в админ панель для мероприятий по acf полю "event_datefilter"
add_action('restrict_manage_posts', 'force_show_event_filter');
function force_show_event_filter()
{
    global $typenow, $wpdb;

    // Автоматически определяем текущий тип поста из экрана админки
    // Если вы в разделе "Мероприятия", фильтр должен появиться
    if ('events' !== $typenow) {
        return;
    }

    // Пробуем достать даты из базы
    $dates = $wpdb->get_col("
        SELECT DISTINCT meta_value 
        FROM $wpdb->postmeta 
        WHERE meta_key = 'event_datefilter' 
        AND meta_value != '' 
        ORDER BY meta_value DESC
    ");

    $current_v = isset($_GET['acf_date_query']) ? $_GET['acf_date_query'] : '';
?>
    <select name="acf_date_query">
        <option value="">По дате события</option>

        <?php if (!empty($dates)) : ?>
            <?php foreach ($dates as $date) :
                $date_obj = DateTime::createFromFormat('Ymd', $date);
                $display_name = $date_obj ? $date_obj->format('d.m.Y') : $date;
            ?>
                <option value="<?php echo esc_attr($date); ?>" <?php selected($current_v, $date); ?>>
                    <?php echo esc_html($display_name); ?>
                </option>
            <?php endforeach; ?>
        <?php else : ?>
            <option disabled>Даты не найдены</option>
        <?php endif; ?>
    </select>
<?php
}

// Обработка клика по кнопке "Фильтр" для мероприятий по acf полю "event_datefilter"
add_action('pre_get_posts', 'apply_force_event_filter');
function apply_force_event_filter($query)
{
    global $pagenow;

    if (is_admin() && $pagenow == 'edit.php' && !empty($_GET['acf_date_query']) && $query->is_main_query()) {
        $query->set('meta_query', array(
            array(
                'key'     => 'event_datefilter',
                'value'   => sanitize_text_field($_GET['acf_date_query']),
                'compare' => '='
            )
        ));
    }
}

// Вывод "категории города" для поля "организатор" (организатор - [город]) при создании мероприятия.
add_filter('acf/fields/post_object/result', function ($title, $post, $field, $post_id) {
    // 1. Укажите здесь тип записи, для которого нужно выводить категорию
    // Например: if ( $post->post_type !== 'product' )
    if ($post->post_type !== 'distributors') {
        return $title;
    }

    // 2. Получаем термины (категории)
    // Укажите название вашей таксономии вместо 'category'
    $terms = get_the_terms($post->ID, 'distributor_cities');

    if ($terms && !is_wp_error($terms)) {
        $category_name = $terms[0]->name;
        $title = $title . ' - [' . $category_name . ']';
    }

    return $title;
}, 10, 4);

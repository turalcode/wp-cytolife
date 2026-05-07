<?php

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

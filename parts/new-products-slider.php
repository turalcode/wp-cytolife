<?php

$args = array(
    'post_type'      => 'product',
    'posts_per_page' => -1,
    'fields'         => 'ids',
    'meta_query'     => array(
        'relation' => 'AND',
        // Фильтр: только новинки
        array(
            'key'     => 'product_isnew',
            'value'   => 1,
            'compare' => '=',
        ),
        // Данные для сортировки: приоритет
        'priority_sort' => array(
            'key'     => 'product_newpriority',
            'type'    => 'NUMERIC', // Явно говорим, что тут числа
            'compare' => 'EXISTS',  // Поле должно быть у товара
        ),
    ),
    'orderby' => array(
        'priority_sort' => 'ASC', // Сортируем по ключу 'priority_sort'
    ),
);

$product_ids = get_posts($args); // Возвращает массив ID
?>

<?php if (!empty($product_ids)) : ?>
    <section class="products section wishlist-js">
        <div class="container">
            <h2 class="products__title section-title section-title--center">
                <span class="mini-logo">Открытие</span>Новинки
            </h2>

            <?php $ids_string = implode(',', $product_ids); ?>
            <?php echo do_shortcode('[products ids="' . $ids_string . '" orderby="post__in"]'); ?>
        </div>
    </section>
    <!-- /products section-->
<?php endif; ?>
<?php
$args = array(
    'post_type' => 'product', // Тип записей, среди которых ищем (напр. 'post', 'page' или 'any')
    'posts_per_page' => -1, // Получить ВСЕ подходящие товары
    'fields' => 'ids',  // Возвращать только массив ID
    'meta_query' => array(array(
        'key' => 'product_ispopular', // Имя вашего поля ACF 
        'value' => 1, // ID, который вы ищете 
        'compare' => '=' // Ищем точное совпадение
    ))
);

$product_ids = get_posts($args); // Возвращает массив ID
?>

<?php if (!empty($product_ids)) : ?>
    <section class="products section wishlist-js products--popular">
        <div class="container">
            <h2 class="products__title section-title section-title--center">
                <span class="mini-logo">Лидеры</span>Популярные
            </h2>

            <?php $ids_string = implode(',', $product_ids); ?>
            <?php echo do_shortcode('[products ids=' . $ids_string . ']'); ?>
        </div>
    </section>
    <!-- /products section products--popular -->
<?php endif; ?>
<?php $category_slug = 'populyarnoe'; ?>

<section class="products section products--popular">
    <div class="container">
        <h2 class="products__title section-title section-title--center">
            <span class="mini-logo">Лидеры</span>Популярные
        </h2>

        <?php echo do_shortcode('[products category=' . $category_slug . ']') ?>
    </div>
</section>
<!-- /products section products--popular -->
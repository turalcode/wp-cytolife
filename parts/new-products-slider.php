<?php $category_slug = 'novinki'; ?>

<section class="products section">
    <div class="container">
        <h2 class="products__title section-title section-title--center">
            <span class="mini-logo">Открытие</span>Новинки
        </h2>

        <?php echo do_shortcode('[products category=' . $category_slug . ']') ?>
    </div>
</section>
<!-- /new products -->
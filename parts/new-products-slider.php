<section class="products section">
    <div class="container">
        <h2 class="products__title section-title section-title--center">
            <span class="mini-logo">Открытие</span>Новинки
        </h2>
        
        <?php echo CYTOLIFE_SLUG_NEW_PRODUCTS; ?>

        <?php echo do_shortcode('[products category=' . CYTOLIFE_SLUG_NEW_PRODUCTS . ']') ?>
    </div>
</section>
<!-- /products section-->
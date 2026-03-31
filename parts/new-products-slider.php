<?php $term = get_term_by('slug', CYTOLIFE_SLUG_NEW_PRODUCTS, 'product_cat'); ?>

<?php if ($term && $term->count > 0) : ?>
    <section class="products section wishlist-js">
        <div class="container">
            <h2 class="products__title section-title section-title--center">
                <span class="mini-logo">Открытие</span>Новинки
            </h2>

            <?php echo do_shortcode('[products category=' . CYTOLIFE_SLUG_NEW_PRODUCTS . ']'); ?>
        </div>
    </section>
    <!-- /products section-->
<?php endif; ?>
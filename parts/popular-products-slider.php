<?php $term = get_term_by('slug', CYTOLIFE_SLUG_POPULAR_PRODUCTS, 'product_cat'); ?>

<?php if ($term && $term->count > 0) : ?>
    <section class="products section wishlist-js products--popular">
        <div class="container">
            <h2 class="products__title section-title section-title--center">
                <span class="mini-logo">Лидеры</span>Популярные
            </h2>

            <?php echo do_shortcode('[products category=' . CYTOLIFE_SLUG_POPULAR_PRODUCTS . ']'); ?>
        </div>
    </section>
    <!-- /products section products--popular -->
<?php endif; ?>
<?php defined('ABSPATH') || exit; ?>

<?php get_header(); ?>

<section class="catalog-f-screen section section--f-screen">
    <div class="container">
        <h1 class="catalog-f-screen__title"><?php the_title(); ?></h1>
    </div>
</section>

<section class="catalog-product section">
    <div class="container">
        <div class="catalog-product__list products-js wishlist-js">
            <?php
            $wishlist = cytolife_get_wishlist();
            $wishlist = implode(',', $wishlist);
            ?>

            <?php if ($wishlist): ?>
                <?php echo do_shortcode("[products ids='$wishlist' class='row']") ?>
            <?php else: ?>
                <div>Избранные товары отсуствуют</div>
            <?php endif; ?>
        </div>
        <!-- /catalog-product__list -->
    </div>
    <!-- /container -->
</section>
<!-- /catalog-product section -->

<?php get_footer(); ?>
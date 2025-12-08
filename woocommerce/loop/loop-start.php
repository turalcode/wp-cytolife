<?php

if (! defined('ABSPATH')) {
	exit;
}
?>

<?php if (!(is_product_category() || is_shop() || is_page('wishlist'))) : ?>
	<div class="swiper swiper-products products-js">
		<div class="swiper-wrapper products">
		<?php endif; ?>
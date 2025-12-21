<?php

if (! defined('ABSPATH')) {
	exit;
}
?>

<?php if (!(is_product_category() || is_shop() || is_page('wishlist') || is_wc_endpoint_url('view-order'))) : ?>
	<div class="swiper swiper-products products-js">
		<div class="swiper-wrapper products">
		<?php endif; ?>
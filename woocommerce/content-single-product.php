<?php

defined('ABSPATH') || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}

?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action('woocommerce_before_single_product_summary');
	?>

	<section class="product section">
		<div class="container">
			<h1 class="product__title product__title-mob"><?php echo $product->get_title(); ?></h1>

			<div class="row">
				<div class="col-lg-6 col-md-5">
					<div class="product__img">
						<?php
						$product_img_id = $product->get_image_id();

						if ($product_img_id) {
							$main_img = wp_get_attachment_url($product_img_id);
						} else {
							$main_img = wc_placeholder_img_src('woocommerce_full');
						}
						?>

						<img src="<?php echo $main_img; ?>" alt="<?php echo $product->get_title(); ?>">

						<a href="#" class="product__like product__like-mob">
							<svg class="icon">
								<use href="#icon-heart"></use>
							</svg>
						</a>
					</div>
				</div>

				<div class="col-lg-6 col-md-7">
					<div class="product__content">
						<h1 class="product__title"><?php echo $product->get_title(); ?></h1>

						<div class="product__info">
							<div class="product__article">Артикул:
								<?php if ($product->sku) : ?>
									<span><?php echo $product->sku; ?></span>
								<?php else : ?>
									<span>Нет артикула</span>
								<?php endif; ?>
							</div>

							<div class="product__available">Наличие:
								<?php if ($product->stock_status == 'instock') : ?>
									<span>В наличии</span>
								<?php else : ?>
									<span class="danger">Нет в наличии</span>
								<?php endif; ?>
							</div>
						</div>

						<div class="product__price">
							<div class="product__price-new">
								<?php if ($product->price) : ?>
									<?php echo $product->price; ?> руб.
								<?php endif; ?>
							</div>

							<div class="product__price-old">
								<?php if ($product->sale_price) : ?>
									<?php echo $product->regular_price; ?> руб.
								<?php endif; ?>
							</div>
						</div>

						<?php if ($product->short_description) : ?>
							<div class="single-product product__short-descr">
								<?php echo $product->short_description; ?>
							</div>
						<?php endif; ?>

						<?php woocommerce_template_single_add_to_cart(); ?>

						<div class="product__share">
							<div class="product__share-title">Поделиться:</div>
							<div class="product__share-list">
								<a href="#" class="product__share-link">
									<svg class="icon-share">
										<use href="#icon-tg-share"></use>
									</svg>
								</a>
								<a href="#" class="product__share-link">
									<svg class="icon-share">
										<use href="#icon-wa-share"></use>
									</svg>
								</a>
								<a href="#" class="product__share-link">
									<svg class="icon-share">
										<use href="#icon-mail-share"></use>
									</svg>
								</a>
								<a href="#" class="product__share-link">
									<svg class="icon-share icon-share--vk">
										<use href="#icon-vk-share"></use>
									</svg>
								</a>
								<a href="#" class="product__share-link">
									<svg class="icon-share">
										<use href="#icon-copy-share"></use>
									</svg>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!-- /product section -->

	<section class="product-descr section">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<?php $product_img_ids = $product->get_gallery_image_ids(); ?>

					<?php if ($product_img_ids): ?>
						<div class="product-descr__img">
							<img src="<?php echo wp_get_attachment_url($product_img_ids[0]); ?>" alt="#">
						</div>
					<?php endif; ?>
				</div>
				<div class="col-md-8">
					<div class="product-descr__acc">
						<div class="accordion">
							<?php if ($product->description) : ?>
								<div class="accordion-item">
									<div class="accordion-trigger active">
										<h3 class="product-descr__title">Описание</h3>
										<div class="accordion-trigger-action"></div>
									</div>
									<div class="accordion-panel active" style="height: 176px;">
										<div class="accordion-hidden">
											<div class="product-descr__content">
												<?php echo $product->description; ?>
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>

							<?php if (get_field('product_characteristics')) : ?>
								<div class="accordion-item">
									<div class="accordion-trigger">
										<h3 class="product-descr__title">Характеристики</h3>
										<div class="accordion-trigger-action"></div>
									</div>
									<div class="accordion-panel accordion-panel-first">
										<div class="accordion-hidden">
											<div class="product-descr__content">
												<?php echo get_field('product_characteristics'); ?>
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>

							<?php if (get_field('product_components')) : ?>
								<div class="accordion-item">
									<div class="accordion-trigger">
										<h3 class="product-descr__title">Активные компоненты</h3>
										<div class="accordion-trigger-action"></div>
									</div>
									<div class="accordion-panel">
										<div class="accordion-hidden">
											<div class="product-descr__content">
												<?php echo get_field('product_components'); ?>
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>

							<?php if (get_field('product_indications')) : ?>
								<div class="accordion-item">
									<div class="accordion-trigger">
										<h3 class="product-descr__title">Показания к применению</h3>
										<div class="accordion-trigger-action"></div>
									</div>
									<div class="accordion-panel">
										<div class="accordion-hidden">
											<div class="product-descr__content">
												<?php echo get_field('product_indications'); ?>
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>

							<?php
							global $post;
							$certificates = get_posts(array(
								'post_type' => 'certificates'
							));
							?>

							<?php if ($certificates): ?>
								<div class="accordion-item">
									<div class="accordion-trigger">
										<h3 class="product-descr__title">Сертификаты</h3>
										<div class="accordion-trigger-action"></div>
									</div>
									<div class="accordion-panel">
										<div class="accordion-hidden">
											<div class="product-descr__content">
												<div class="swiper swiper-certificate">
													<div class="swiper-wrapper">
														<?php foreach ($certificates as $post): setup_postdata($post); ?>
															<div class="swiper-slide">
																<div class="certificate__item">
																	<img
																		class="certificate-img-js"
																		data-src="<?php the_post_thumbnail_url('full'); ?>"
																		src="<?php the_post_thumbnail_url('full'); ?>"
																		alt="<?php the_title() ?>" />
																</div>
															</div>
														<?php endforeach; ?>
													</div>
													<!-- /swiper-wrapper -->
												</div>
												<!-- /swiper swiper-certificate -->
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- product-descr section -->

	<?php woocommerce_upsell_display(); ?>
</div>

<?php do_action('woocommerce_after_single_product'); ?>
<?php

defined('ABSPATH') || exit;

global $product;

do_action('woocommerce_before_single_product');

if (post_password_required()) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}

$attributes = $product->get_attributes();
?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>
	<?php do_action('woocommerce_before_single_product_summary'); ?>

	<section class="product section wishlist-js ajax-loader-parent-js">
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

						<a href="#" class="product__like product__like-mob wishlist-icon-mob-js <?php echo cytolife_is_wishlist($product->get_id()) ? 'active' : '' ?>" data-id="<?php echo $product->get_id(); ?>">
							<svg class=" icon">
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
								<?php if ($product->get_sku()) : ?>
									<span><?php echo $product->get_sku(); ?></span>
								<?php else : ?>
									<span>Нет артикула</span>
								<?php endif; ?>
							</div>

							<div class="product__available">Наличие:
								<?php if ($product->get_stock_status() == 'instock') : ?>
									<span>В наличии</span>
								<?php else : ?>
									<span class="danger">Нет в наличии</span>
								<?php endif; ?>
							</div>
						</div>

						<?php if ($product->get_price()) : ?>
							<div class="product__price">
								<div class="product__price-new">
									<?php if ($product->get_price()) : ?>
										<?php echo $product->get_price(); ?> руб.
									<?php endif; ?>
								</div>

								<div class="product__price-old">
									<?php if ($product->get_sale_price()) : ?>
										<?php echo $product->get_regular_price(); ?> руб.
									<?php endif; ?>
								</div>
							</div>
						<?php endif; ?>

						<?php if ($product->get_short_description()) : ?>
							<div class="single-product product__short-descr">
								<?php echo $product->get_short_description(); ?>
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
					<!-- /product__content ajax-loader-parent-js -->
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
							<?php if ($product->get_description()) : ?>
								<div class="accordion-item">
									<div class="accordion-trigger active">
										<h3 class="product-descr__title">Описание</h3>
										<div class="accordion-trigger-action"></div>
									</div>
									<div class="accordion-panel active" style="height: 176px;">
										<div class="accordion-hidden">
											<div class="product-descr__content">
												<?php echo $product->get_description(); ?>
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>

							<?php if (!empty($attributes['pa_harakteristiki'])) : ?>
								<div class="accordion-item">
									<div class="accordion-trigger">
										<h3 class="product-descr__title">Характеристики</h3>
										<div class="accordion-trigger-action"></div>
									</div>
									<div class="accordion-panel accordion-panel-first">
										<div class="accordion-hidden">
											<div class="product-descr__content">
												<?php foreach ($attributes['pa_harakteristiki']->get_terms() as $value) : ?>
													<?php echo $value->name; ?>
												<?php endforeach; ?>
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>

							<?php if (!empty($attributes['pa_komponenty'])) : ?>
								<div class="accordion-item">
									<div class="accordion-trigger">
										<h3 class="product-descr__title">Активные компоненты</h3>
										<div class="accordion-trigger-action"></div>
									</div>
									<div class="accordion-panel">
										<div class="accordion-hidden">
											<div class="product-descr__content">
												<ul>
													<?php foreach ($attributes['pa_komponenty']->get_terms() as $value) : ?>
														<li><?php echo $value->name; ?></li>
													<?php endforeach; ?>
												</ul>
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>

							<?php
							$product_indications = get_field('product_indications');
							?>

							<?php if (!empty($product_indications)) : ?>
								<div class="accordion-item">
									<div class="accordion-trigger">
										<h3 class="product-descr__title">Показания к применению</h3>
										<div class="accordion-trigger-action"></div>
									</div>
									<div class="accordion-panel">
										<div class="accordion-hidden">
											<div class="product-descr__content">
												<?php echo $product_indications; ?>
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>

							<?php
							$product_cert = get_field('product_certificates');
							?>

							<?php if (!empty($product_cert)) : ?>
								<div class="accordion-item">
									<div class="accordion-trigger">
										<h3 class="product-descr__title">Сертификаты</h3>
										<div class="accordion-trigger-action"></div>
									</div>
									<div class="accordion-panel">
										<div class="accordion-hidden">
											<div class="product-descr__content">
												<?php get_template_part('parts/certificate', 'slider', $product_cert); ?>
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

	<?php
	$ids = $product->get_cross_sell_ids();
	$ids = implode(",", $ids);
	$product_protocoltitle = get_field('product_protocoltitle');
	$product_protocoldescr = get_field('product_protocoldescr');
	?>

	<?php if (!empty($ids)) : ?>
		<section class="product-protocol section section--pt">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<?php if (!empty($product_protocoltitle)) : ?>
							<h2 class="product-protocol__title"><?php echo $product_protocoltitle; ?></h2>
						<?php endif; ?>

						<?php if (!empty($product_protocoldescr)) : ?>
							<div class="product-protocol__subtitle"><?php echo $product_protocoldescr; ?></div>
						<?php endif; ?>
					</div>
				</div>

				<div class="products wishlist-js">
					<div class="container">
						<?php echo do_shortcode('[products ids=' . $ids . ']'); ?>
					</div>
				</div>
			</div>
		</section>
		<!-- /product-protocol section section--pt -->
	<?php endif; ?>
</div>

<?php do_action('woocommerce_after_single_product'); ?>
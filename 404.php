<?php defined('ABSPATH') || exit; ?>

<?php get_header(); ?>

<section class="not-found section">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="not-found__title-block">
					<div class="not-found__text-decor">404</div>
					<h1>Страница не найдена</h1>
				</div>

				<div class="not-found__descr">
					<p>Запрашиваемая страница недоступна. Возможно, она была удалена, перемещена или вы указали неверный адрес.</p>
					<p>Вы можете перейти на главную или поискать нужное в каталоге.</p>
				</div>

				<div class="not-found__links">
					<a href="/" class="button">На главную
						<svg class="icon">
							<use href="#icon-arrow"></use>
						</svg>
					</a>

					<a href="<?php echo wc_get_page_permalink('shop'); ?>" class="button button--bg-light">
						Каталог
						<svg class="icon">
							<use href="#icon-arrow"></use>
						</svg>
					</a>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="not-found__bg">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/not-found.png" alt="#">
				</div>
			</div>
		</div>
</section>

<?php get_footer(); ?>
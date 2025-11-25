<?php defined('ABSPATH') || exit; ?>

<?php get_header(); ?>

<section class="info-page section">
	<div class="container">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<h1><?php the_title() ?></h1>
				<?php the_content(); ?>
			<?php endwhile;
		else: ?>
			<p>Записей нет.</p>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>
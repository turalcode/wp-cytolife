<?php defined('ABSPATH') || exit; ?>

<?php get_header(); ?>

<?php
if (is_checkout()) {
	$cls = 'hide-notices';
}
?>

<section class="info-page section <?php echo $cls; ?>">
	<div class="container">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<!-- <h1><?php the_title() ?></h1> -->
				<?php the_content(); ?>
			<?php endwhile;
		else: ?>
			<p>Записей нет.</p>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>
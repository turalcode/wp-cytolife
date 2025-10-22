<?php get_header();

while (have_posts()) : the_post();
    get_template_part('parts/first', 'screen', $post->ID);
    get_template_part('parts/new', 'products-slider', $post->ID);
    get_template_part('parts/popular', 'products-slider', $post->ID);
    get_template_part('parts/laboratory', '', $post->ID);
    get_template_part('parts/education', '', $post->ID);
    get_template_part('parts/advantages', '', $post->ID);
    get_template_part('parts/certificate', '', $post->ID);
    get_template_part('parts/company', '', $post->ID);
endwhile;

get_footer();

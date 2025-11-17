<?php
add_action('wp_ajax_ajax_search', 'cytolife_ajax_search');
add_action('wp_ajax_nopriv_ajax_search', 'cytolife_ajax_search');

function cytolife_ajax_search()
{
    $query = isset($_GET['query']) ? sanitize_text_field($_GET['query']) : '';

    if (strlen($query) < 2) {
        wp_send_json_error(['message' => 'Запрос слишком короткий']);
    }

    $args = [
        's' => $query,
        'post_type' => ['product'],
        'post_status' => 'publish'
    ];

    $search_query = new WP_Query($args);
    $result = '';

    if ($search_query->have_posts()) {
        while ($search_query->have_posts()) {
            $search_query->the_post();
            $src = get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : wc_placeholder_img_src('woocommerce_full');
            $result .=
                '<a class="ajax-s__result-item-link" href="' . get_permalink() . '">
                    <span class="ajax-s__result-item-img">
                        <img src="' . $src . '" /></span>' . get_the_title() . '
                </a>';
        }

        wp_reset_postdata();
    }

    wp_send_json_success($result);
}

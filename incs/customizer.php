<?php

add_action('customize_register', function (WP_Customize_Manager $wp_customize) {

    $wp_customize->add_section('cytolife_theme_options', array(
        'title' => 'Опции темы',
        'priority' => 10,
    ));

    // phone
    $wp_customize->add_setting('cytolife_phone');
    $wp_customize->add_control('cytolife_phone', array(
        'label' => 'Телефон в шапке',
        'section' => 'cytolife_theme_options',
    ));

    // vk
    $wp_customize->add_setting('cytolife_vk');
    $wp_customize->add_control('cytolife_vk', array(
        'label' => 'ВКонтакте',
        'section' => 'cytolife_theme_options',
    ));

    // tg
    $wp_customize->add_setting('cytolife_tg');
    $wp_customize->add_control('cytolife_tg', array(
        'label' => 'Телеграм',
        'section' => 'cytolife_theme_options',
    ));
});

function cytolife_theme_options()
{
    return array(
        'phone' => get_theme_mod('cytolife_phone'),
        'vk' => get_theme_mod('cytolife_vk'),
        'tg' => get_theme_mod('cytolife_tg'),
    );
}

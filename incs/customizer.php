<?php

add_action('customize_register', function (WP_Customize_Manager $wp_customize) {

    $wp_customize->add_section('cytolife_theme_options', array(
        'title' => 'Опции темы',
        'priority' => 10,
    ));

    // phone
    $wp_customize->add_setting('cytolife_phone');
    $wp_customize->add_control('cytolife_phone', array(
        'label' => 'Телефон офиса в Москве',
        'section' => 'cytolife_theme_options',
    ));

    // email
    $wp_customize->add_setting('cytolife_email');
    $wp_customize->add_control('cytolife_email', array(
        'label' => 'Почта офиса в Москве',
        'section' => 'cytolife_theme_options',
    ));

    // region phone
    $wp_customize->add_setting('cytolife_region_phone');
    $wp_customize->add_control('cytolife_region_phone', array(
        'label' => 'Телефон отдела по работе с регионами',
        'section' => 'cytolife_theme_options',
    ));

    // region email
    $wp_customize->add_setting('cytolife_region_email');
    $wp_customize->add_control('cytolife_region_email', array(
        'label' => 'Почта отдела по работе с регионами',
        'section' => 'cytolife_theme_options',
    ));

    // email for cooperation
    $wp_customize->add_setting('cytolife_cooperation_email');
    $wp_customize->add_control('cytolife_cooperation_email', array(
        'label' => 'Почта для сотрудничества',
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
        'email' => get_theme_mod('cytolife_email'),
        'region_phone' => get_theme_mod('cytolife_region_phone'),
        'region_email' => get_theme_mod('cytolife_region_email'),
        'cooperation_email' => get_theme_mod('cytolife_cooperation_email'),
        'vk' => get_theme_mod('cytolife_vk'),
        'tg' => get_theme_mod('cytolife_tg')
    );
}

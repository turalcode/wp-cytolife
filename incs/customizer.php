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

// Дополнительное поле мед. образовании

// add_action('show_user_profile', 'add_extra_profile_fields');
add_action('edit_user_profile', 'add_extra_profile_fields');

function add_extra_profile_fields($user)
{
    $user_documents = get_user_meta($user->ID, 'user_documents', true);
    $user_documents = $user_documents ? $user_documents : array();
?>
    <style>
        .user-profile-title {
            padding: 0.2em 0.5em;
            display: inline-block;
            background-color: #c4ecc4;
            border-radius: 0.25rem;
        }
    </style>

    <table class="form-table">
        <tr>
            <th>
                <?php if (!empty($user_documents)) : ?>
                    <h2 class="user-profile-title">Документы о мед. образовании</h2>
                <?php else : ?>
                    <h2 class="user-profile-title">Розничный покупатель</h2>
                <?php endif; ?>
            </th>
        </tr>

        <?php if (!empty($user_documents)) : ?>
            <?php foreach ($user_documents  as $doc_name) : ?>
                <?php $src = CYTOLIFE_ABS_PATH_DOCUMENTS . '/' . $doc_name; ?>

                <tr>
                    <td>
                        <a href="<?php echo $src; ?>" target="_blank"><?php echo $src; ?></a>
                    </td>
                </tr>
            <?php endforeach; ?>

            <tr>
                <td></td>
            </tr>
        <?php endif; ?>
    </table>

<?php
}

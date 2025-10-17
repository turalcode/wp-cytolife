<?php

add_action('init', function () {

  register_post_type('certificates', array(
    'labels'       => array(
      'name'          => 'Сертификаты',
      'singular_name' => 'Сертификат',
      'add_new'       => 'Добавить новый сертификат',
      'add_new_item'  => 'Новый сертификат',
      'edit_item'     => 'Изменить',
      'new_item'      => 'Новый сертификат',
      'view_item'     => 'Посмотреть',
      'menu_name'     => 'Сертификаты',
      'all_items'     => 'Все сертификаты',
    ),
    'public'       => true,
    'supports'     => array('title', 'thumbnail',),
    'menu_icon'    => 'dashicons-format-gallery',
    'show_in_rest' => true,
  ));
});

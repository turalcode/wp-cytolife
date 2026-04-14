<?php

add_action('init', function () {
  register_post_type('banners', array(
    'labels'       => array(
      'name'          => 'Баннеры',
      'singular_name' => 'Баннер',
      'add_new'       => 'Добавить новый баннер',
      'add_new_item'  => 'Новый баннер',
      'edit_item'     => 'Изменить',
      'new_item'      => 'Новый баннер',
      'view_item'     => 'Посмотреть',
      'menu_name'     => 'Баннеры',
      'all_items'     => 'Все баннеры',
    ),
    'public'       => true,
    'supports'     => array('title'),
    'menu_icon'    => 'dashicons-images-alt2',
    'show_in_rest' => true,
  ));

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
    'supports'     => array('title', 'thumbnail'),
    'menu_icon'    => 'dashicons-format-gallery',
    'show_in_rest' => true,
  ));

  register_post_type('distributors', array(
    'labels'       => array(
      'name'          => 'Дистрибьюторы',
      'singular_name' => 'Дистрибьютор',
      'add_new'       => 'Добавить новый дистрибьютор',
      'add_new_item'  => 'Новый дистрибьютор',
      'edit_item'     => 'Изменить',
      'new_item'      => 'Новый дистрибьютор',
      'view_item'     => 'Посмотреть',
      'menu_name'     => 'Дистрибьюторы',
      'all_items'     => 'Все дистрибьюторы',
    ),
    'public'       => true,
    'supports'     => array('title'),
    'menu_icon'    => 'dashicons-businessman',
    'show_in_rest' => true,
  ));

  register_post_type('events', array(
    'labels'       => array(
      'name'          => 'Мероприятия',
      'singular_name' => 'Мероприятие',
      'add_new'       => 'Добавить новое мероприятие',
      'add_new_item'  => 'Новое мероприятие',
      'edit_item'     => 'Изменить',
      'new_item'      => 'Новое мероприятие',
      'view_item'     => 'Посмотреть',
      'menu_name'     => 'Мероприятия',
      'all_items'     => 'Все мероприятия',
    ),
    'public'       => true,
    'has_archive' => true,
    'supports'     => array('title', 'thumbnail'),
    'menu_icon'    => 'dashicons-calendar',
    'show_in_rest' => true,
  ));

  register_post_type('articles', array(
    'labels'       => array(
      'name'          => 'Статьи',
      'singular_name' => 'Статья',
      'add_new'       => 'Добавить новую статью',
      'add_new_item'  => 'Новая статья',
      'edit_item'     => 'Изменить',
      'new_item'      => 'Новая статья',
      'view_item'     => 'Посмотреть',
      'menu_name'     => 'Статьи',
      'all_items'     => 'Все статьи',
    ),
    'public'       => true,
    'has_archive' => true,
    'supports'     => array('title', 'thumbnail', 'editor'),
    'menu_icon'    => 'dashicons-text-page',
    'show_in_rest' => true,
  ));

  register_post_type('speakers', array(
    'labels'       => array(
      'name'          => 'Спикеры',
      'singular_name' => 'Спикер',
      'add_new'       => 'Добавить нового спикера',
      'add_new_item'  => 'Новый спикер',
      'edit_item'     => 'Изменить',
      'new_item'      => 'Новый спикер',
      'view_item'     => 'Посмотреть',
      'menu_name'     => 'Спикеры',
      'all_items'     => 'Все спикеры',
    ),
    'public'       => true,
    'has_archive' => true,
    'supports'     => array('title', 'thumbnail'),
    'menu_icon'    => 'dashicons-megaphone',
    'show_in_rest' => true,
  ));
});

<?php

add_action('wp_enqueue_scripts', 'turistik_scripts');

function turistik_scripts()
{
    wp_enqueue_style('libs_min_css', get_stylesheet_directory_uri() . '/css/libs.min.css', array(), time());
    wp_enqueue_style('main_css', get_stylesheet_directory_uri() . '/css/main.css', array(), time());
    wp_enqueue_style('media_css', get_stylesheet_directory_uri() . '/css/media.css', array(), time());

    wp_enqueue_script('jquery');
    wp_enqueue_script('mainjs', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), time());
}

register_nav_menus(
    array(
        'main-navigation' => 'main-navigation',
        'bottom-menu' => 'bottom-menu'
    )
);

add_theme_support('post-thumbnails');

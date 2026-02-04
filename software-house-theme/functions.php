<?php

function software_house_nova_assets() {
    wp_enqueue_style(
        'software-house-nova-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_script(
        'software-house-nova-hero',
        get_template_directory_uri() . '/assets/js/hero.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'software_house_nova_assets');

function software_house_nova_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'software-house-nova'),
        )
    );
}
add_action('after_setup_theme', 'software_house_nova_setup');

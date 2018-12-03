<?php

add_action('init', 'create_post_type_eventos');

function create_post_type_eventos() {
    register_post_type('ong_event', array(
        'labels' => array(
            'name' => __('Eventos'),
            'singular_name' => __('Eventos'),
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-calendar-alt',
        'taxonomies' => array('category', 'post_tag'),
            )
    );
}

add_action('init', 'create_post_type_projetos');

function create_post_type_projetos() {
    register_post_type('ong_projetos', array(
        'labels' => array(
            'name' => __('Projetos'),
            'singular_name' => __('Projetos')
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-hammer',
        'taxonomies' => array('category', 'post_tag'),
            )
    );
}

add_action('init', 'create_post_type_loja');

function create_post_type_loja() {
    register_post_type('ong_loja', array(
        'labels' => array(
            'name' => __('Loja'),
            'singular_name' => __('Loja')
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-cart',
        'taxonomies' => array( 'category', 'post_tag' ),
        'supports' => array('title')
            )
    );
}

add_action('init', 'create_post_type_voluntario');

function create_post_type_voluntario() {
    register_post_type('ong_voluntario', array(
        'labels' => array(
            'name' => __('Voluntários'),
            'singular_name' => __('Voluntário')
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-groups',
        'taxonomies' => array( 'category', 'post_tag' ),
        'supports' => array('title')
            )
    );
}

add_action('init', 'create_post_type_blog');

function create_post_type_blog() {
    register_post_type('ong_blog', array(
        'labels' => array(
            'name' => __('Blog'),
            'singular_name' => __('Blog')
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-format-aside',
        'taxonomies' => array( 'category', 'post_tag' ),
            )
    );
}

function wpdocs_custom_excerpt_length($length) {
    return 20;
}

add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);

add_theme_support( 'menus' );
?>

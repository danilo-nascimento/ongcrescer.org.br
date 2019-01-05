<?php

add_action( 'admin_init', 'hide_editor' );
function hide_editor() {
  // Get the Post ID.
  $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
  if( !isset( $post_id ) ) return;
  // Hide the editor on the page titled 'Homepage'
  $homepgname = get_the_title($post_id);
    remove_post_type_support('page', 'editor');
    remove_post_type_support('page', 'title');    
  if($homepgname == 'Blog' or $homepgname == 'Premios' or $homepgname == 'Historia'){
    add_post_type_support('page', 'editor');
  }
  // Hide the editor on a page with a specific page template
  // Get the name of the Page Template file.
  $template_file = get_post_meta($post_id, '_wp_page_template', true);
  if($template_file == 'my-page-template.php'){ // the filename of the page template
    remove_post_type_support('page', 'editor');
  }
}

Add_action ('init', 'my_admin_menu');
Function my_admin_menu () {
Add_menu_page ('Instruções do projeto', '<a href="https://crescerfomentoavida.com.br/leiame.php?key=UcpuXm7yx2evZYAXcT6BuzQWxFHKyMfXr" target="_blank">Leia as instruções</a>', 'editor', 'myplugin / myplugin-admin-page.php', 'myplguin_admin_page', 'dashicons-clipboard', 6);
}

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
        'taxonomies' => array( 'post_tag' ),
            )
    );
}

function wpdocs_custom_excerpt_length($length) {
    return 20;
}

add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);

add_theme_support( 'menus' );
?>

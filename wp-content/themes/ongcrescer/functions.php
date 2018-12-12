<?php

require(dirname(__FILE__) . "/functions/post_types.php");
require(dirname(__FILE__) . "/functions/pages.php");
require(dirname(__FILE__) . "/functions/metabox.php");

/**
 * Enqueue scripts and styles.
 */
function ongcrescer_scripts() {
  // Load our main stylesheet.
  wp_enqueue_style( 'ongcrescer-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'ongcrescer_scripts' );

function image_url($image_path){
  echo get_bloginfo('template_url') . "/images/" . $image_path;
}

add_theme_support('post-thumbnails');

function no_rows_found_function($query)
{ 
  $query->set('no_found_rows', true); 
}

add_action('pre_get_posts', 'no_rows_found_function');

add_action('init', 'registerFormAction');

function registerFormAction(){

    // To handle the form data we will have to register ajax action. 
    add_action('wp_ajax_nopriv_submitAjaxForm','submitAjaxForm_callback');
    add_action('wp_ajax_submitAjaxForm','submitAjaxForm_callback');

}

function theme_slug_setup() {
  add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'theme_slug_setup' );

/**
 *  Criador de Voluntários
 */
function theme_create_voluntarios( $name, $counter = 1 ){
    if( is_admin() ){
      if( $counter <= 10 ){
      $page_name = sprintf("%s %u",$name, $counter);
      $voluntariado_check = get_page_by_title($page_name, OBJECT, 'ong_voluntario');
      $new_voluntariado = array(
        'post_type' => 'ong_voluntario',
        'post_title' => sprintf("%s %u",$name, $counter),
        'post_status' => 'publish',
        'post_author' => 1,
      );
      if(!isset($voluntariado_check->ID)){
        $new_voluntariado_id = wp_insert_post($new_voluntariado);
      }
      theme_create_voluntarios( $name, ++$counter );
    }
  }
}

function theme_create_voluntarios_init(){
  theme_create_voluntarios("Voluntario");
}

add_action('init', 'theme_create_voluntarios_init');
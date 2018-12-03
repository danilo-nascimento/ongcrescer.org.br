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

?>

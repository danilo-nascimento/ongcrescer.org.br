<?php
  // use https://metabox.io/online-generator/ to generate new metaboxes
  foreach (glob(dirname(__FILE__) . "/metabox/*.php") as $arquivo) {
    require_once($arquivo);
  }

  // loads metabox on specific pages
  global $post;
  $_post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'];
  $_page = $post ? $post : get_page($_post_id);


  // list of pages to load metabox
  if($_page && $_page->post_name == "evento"){
    add_filter( 'rwmb_meta_boxes', 'evento_meta_box' );
  }
  
  if($_page && $_page->post_name == "home"){
    add_filter( 'rwmb_meta_boxes', 'destaque_meta_box' );
  }
  
  if($_page && $_page->post_name == "historia"){
    add_filter( 'rwmb_meta_boxes', 'historia_meta_box' );
  }
  
  if($_page && $_page->post_name == "premios"){
    add_filter( 'rwmb_meta_boxes', 'premios_meta_box' );
  }
  
  if($_page && $_page->post_name == "projetos"){
    add_filter( 'rwmb_meta_boxes', 'projetos_meta_box' );
  }
  
  if($_page && $_page->post_name == "loja"){
    add_filter( 'rwmb_meta_boxes', 'loja_meta_box' );
  }
  
  if($_page && $_page->post_name == "blog"){
    add_filter( 'rwmb_meta_boxes', 'blog_meta_box' );
  }
  
  if($_page && $_page->post_name == "sobre"){
    add_filter( 'rwmb_meta_boxes', 'sobre_meta_box' );
  }

?>

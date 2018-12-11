<?php
function theme_create_page($title, $template="", $content="sem conteúdo"){
  if (is_admin()){
    $page_check = get_page_by_title($title);
    $new_page = array(
      'post_type' => 'page',
      'post_title' => $title,
      'post_content' => $content,
      'post_status' => 'publish',
      'post_author' => 1,
      'page_template' => $template,
    );
    if(!isset($page_check->ID)){
      $new_page_id = wp_insert_post($new_page);
      if(!empty($new_page_template)){
        update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
      }
    }
  }
}

/**
 *  Criador de Volunt�rios
 */
function theme_create_voluntarios( $name, $counter ){
  if( $counter <= 10 ){
    if( is_admin() ){
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

theme_create_voluntarios( "Voluntario", 1 );

theme_create_page('Home');
theme_create_page('Historia', 'historia.php');
theme_create_page('Premios', 'premios.php');
theme_create_page('Projetos','projetos.php');
theme_create_page('Login','login.php');
theme_create_page('Loja','loja.php');
theme_create_page('Voluntários', 'voluntarios.php');
theme_create_page('Blog','blog.php');
theme_create_page('Sobre','sobre.php');
theme_create_page('faleConosco','faleConosco.php');
theme_create_page('Doe','doe.php');
theme_create_page('Socio','socio.php');
theme_create_page('EnviarProjeto','enviarProjeto.php');
theme_create_page('Eventos','eventos.php');

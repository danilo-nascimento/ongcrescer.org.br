<?php
function blog_meta_box( $meta_boxes ) {
	$prefix = 'blog-';

	$meta_boxes[] = array(
		'id' => 'blog',
		'title' => esc_html__( 'Detalhes do Artigo', 'metabox-online-generator' ),
		'post_types' => array( 'ong_blog' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => false,
		'fields' => array(
 			array(
 				'id' => $prefix . 'autor',
 				'type' => 'text',
 				'name' => esc_html__( 'Autor do artigo', 'metabox-online-generator' ),
 				'desc' => esc_html__( 'Nome do autor do artigo', 'metabox-online-generator' ),
 				'size' => 60,
 			),
                        array(
				'id' => $prefix . 'topico',
				'type' => 'text',
				'name' => esc_html__( 'Tópico do artigo', 'metabox-online-generator' ),
				'desc' => esc_html__( 'inserir tópico do artigo', 'metabox-online-generator' ),
				'size' => 60,
			),
 			array(
 				'id' => $prefix . 'image',
 				'type' => 'image_advanced',
 				'name' => esc_html__( 'Imagem do artigo', 'metabox-online-generator' ),
 				'desc' => esc_html__( 'Selecionar imagem de artigo', 'metabox-online-generator' ),
 				'max_file_uploads' => '1',
 			)
			
			
		)
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'blog_meta_box' );
?>

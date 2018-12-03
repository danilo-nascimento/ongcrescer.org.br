<?php
function loja_meta_box( $meta_boxes ) {
	$prefix = 'loja-';

	$meta_boxes[] = array(
		'id' => 'loja',
		'title' => esc_html__( 'Detalhes da loja', 'metabox-online-generator' ),
		'post_types' => array( 'ong_loja' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => false,
		'fields' => array(
 			array(
 				'id' => $prefix . 'preço',
 				'type' => 'text',
 				'name' => esc_html__( 'Preço', 'metabox-online-generator' ),
 				'desc' => esc_html__( 'preço do produto', 'metabox-online-generator' ),
				'size' => 60,
				'required' => 'required',
			 ),
			 array(
				'id' => $prefix . 'link',
				'type' => 'text',
				'name' => esc_html__( 'Link externo', 'metabox-online-generator' ),
				'desc' => esc_html__( 'link externo para site de vendas', 'metabox-online-generator' ),
				'size' => 60,
			 ),
 			array(
 				'id' => $prefix . 'image',
 				'type' => 'image_advanced',
 				'name' => esc_html__( 'Imagem do produto', 'metabox-online-generator' ),
 				'desc' => esc_html__( 'A imagem deve ter no máximo 1MB de tamanho', 'metabox-online-generator' ),
 				'max_file_uploads' => '1',
			 )
		)
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'loja_meta_box' );
?>
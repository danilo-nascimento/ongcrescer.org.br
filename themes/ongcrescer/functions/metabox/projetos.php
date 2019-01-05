<?php
function projetos_meta_box( $meta_boxes ) {
	$prefix = 'projetos-';

	$meta_boxes[] = array(
		'id' => 'projetos',
		'title' => esc_html__( 'Detalhes do projeto', 'metabox-online-generator' ),
		'post_types' => array( 'ong_projetos' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => false,
		'fields' => array(
 			array(
 				'id' => $prefix . 'causas',
 				'type' => 'text',
 				'name' => esc_html__( 'causas', 'metabox-online-generator' ),
 				'desc' => esc_html__( 'causas do projeto', 'metabox-online-generator' ),
 				'std' => 'causas do projeto',
				'size' => 60,
				'required' => 'required', 
 			),
 			array(
 				'id' => $prefix . 'image',
 				'type' => 'image_advanced',
 				'name' => esc_html__( 'Imagem do projeto', 'metabox-online-generator' ),
 				'desc' => esc_html__( 'A imagem deve ter no máximo 1MB de tamanho', 'metabox-online-generator' ),
 				'max_file_uploads' => '1',
 			)
			
		)
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'projetos_meta_box' );
?>
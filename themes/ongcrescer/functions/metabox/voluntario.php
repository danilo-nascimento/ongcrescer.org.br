<?php
function metabox_voluntario( $meta_boxes ) {
	$prefix = 'voluntario-';

	$meta_boxes[] = array(
		'id' => 'voluntario',
		'title' => esc_html__( 'Dados do Voluntário', 'metabox-online-generator' ),
		'post_types' => array( 'ong_voluntario' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => false,
		'fields' => array(
 			array(
 				'id' => $prefix . 'link',
 				'type' => 'text',
 				'name' => esc_html__( 'Link Perfil Voluntário', 'metabox-online-generator' ),
 				'desc' => esc_html__( 'Link Perfil Voluntário', 'metabox-online-generator' ),
 				'std' => '#',
 				'size' => 60
 			),
 			array(
 				'id' => $prefix . 'image',
 				'type' => 'image_advanced',
 				'name' => esc_html__( 'Foto 1x1 do Voluntário', 'metabox-online-generator' ),
 				'desc' => esc_html__( 'Foto do Voluntário', 'metabox-online-generator' ),
 				'max_file_uploads' => '1',
 			)
		)
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'metabox_voluntario' );
?>

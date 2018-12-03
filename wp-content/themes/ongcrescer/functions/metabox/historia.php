<?php

function historia_meta_box( $meta_boxes ) {
	$prefix = 'historia-';

	$meta_boxes[] = array(
		'id' => 'historia-1',
		'title' => esc_html__( 'Historia 1', 'metabox-online-generator' ),
		'post_types' => array( 'page' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => false,
                'fields' => array(
			array(
				'id' => $prefix . 'title',
				'type' => 'text',
				'name' => esc_html__( 'Título da página história', 'metabox-online-generator' ),
				'desc' => esc_html__( 'Área reservada para escrita do título da página história', 'metabox-online-generator' ),
				'size' => 40,
				'required' => 'required',
			),
			array(
				'id' => $prefix . 'subtitle',
				'type' => 'text',
				'name' => esc_html__( 'Subtítulo da página história', 'metabox-online-generator' ),
				'desc' => esc_html__( 'Área reservada para escrita do subtítulo', 'metabox-online-generator' ),
				'placeholder' => esc_html__( 'Subtítulo da página história', 'metabox-online-generator' ),
				'size' => 60,
				'required' => 'required',
			),
			array(
				'id' => $prefix . 'image',
				'type' => 'image_advanced',
				'name' => esc_html__( 'Imagem da página história', 'metabox-online-generator' ),
				'desc' => esc_html__( 'A imagem deve ter no máximo 1MB de tamanho', 'metabox-online-generator' ),
				'max_file_uploads' => '1',
			),
		),
	);

	return $meta_boxes;
}
?>

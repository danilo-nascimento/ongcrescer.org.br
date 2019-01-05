<?php

function premios_meta_box( $meta_boxes ) {
	$prefix = 'premios-';

	$meta_boxes[] = array(
		'id' => 'premios-1',
		'title' => esc_html__( 'Premios', 'metabox-online-generator' ),
		'post_types' => array( 'page' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => false,
                'fields' => array(
			array(
				'id' => $prefix . 'title',
				'type' => 'text',
				'name' => esc_html__( 'Título da página premios', 'metabox-online-generator' ),
				'desc' => esc_html__( 'Área reservada para escrita do título da página premios', 'metabox-online-generator' ),
				'size' => 40,
				'required' => 'required',
			),
			array(
				'id' => $prefix . 'subtitle',
				'type' => 'text',
				'name' => esc_html__( 'Subtítulo da página premios', 'metabox-online-generator' ),
				'desc' => esc_html__( 'Área reservada para escrita da página premios', 'metabox-online-generator' ),
				'placeholder' => esc_html__( 'Subtítulo da página premios', 'metabox-online-generator' ),
				'size' => 60,
				'required' => 'required',
			),
			array(
				'id' => $prefix . 'image',
				'type' => 'image_advanced',
				'name' => esc_html__( '1° Imagem da página premios', 'metabox-online-generator' ),
				'desc' => esc_html__( 'Imagem localizada ao lado do texto da página premios. A imagem deve ter no máximo 1MB de tamanho', 'metabox-online-generator' ),
				'max_file_uploads' => '1',
			),
                        array(
				'id' => $prefix . 'image-2',
				'type' => 'image_advanced',
				'name' => esc_html__( '2° Imagem da página premios', 'metabox-online-generator' ),
				'desc' => esc_html__( 'Imagem localizada abaixo do texto da página premios. A imagem deve ter no máximo 1MB de tamanho', 'metabox-online-generator' ),
				'max_file_uploads' => '1',
			),
		),
	);

	return $meta_boxes;
}
?>

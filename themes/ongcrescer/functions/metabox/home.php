<?php

function destaque_meta_box( $meta_boxes ) {
	$prefix = 'home-destaque-';

	$meta_boxes[] = array(
		'id' => 'destaque-1',
		'title' => esc_html__( 'Home', 'metabox-online-generator' ),
		'post_types' => array( 'page' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => false,
		'fields' => array(
			array(
				'id' => $prefix . 'title',
				'type' => 'text',
				'name' => esc_html__( 'Título da Home', 'metabox-online-generator' ),
				'desc' => esc_html__( 'Área reservada para escrita do título da Home', 'metabox-online-generator' ),
				'size' => 40,
			),
			array(
				'id' => $prefix . 'subtitle',
				'type' => 'text',
				'name' => esc_html__( 'Subtítulo da Home', 'metabox-online-generator' ),
				'desc' => esc_html__( 'Área reservada para escrita do subtítulo', 'metabox-online-generator' ),
				'placeholder' => esc_html__( 'Subtítulo do destaque', 'metabox-online-generator' ),
				'size' => 60,
			),
			array(
				'id' => $prefix . 'image',
				'type' => 'image_advanced',
				'name' => esc_html__( 'Imagem da Home', 'metabox-online-generator' ),
				'desc' => esc_html__( 'Imagem de fundo da Home', 'metabox-online-generator' ),
				'max_file_uploads' => '1',
			),
			array(
				'id' => $prefix . 'evento-desc',
				'type' => 'textarea',
				'name' => esc_html__( 'Descrição do carrossel de eventos', 'metabox-online-generator' ),
				'desc' => esc_html__( 'A descrição do carrossel fica em cima do carrosel de eventos', 'metabox-online-generator' ),
				'size' => 40,
			),
		),
	);

	return $meta_boxes;
}
?>

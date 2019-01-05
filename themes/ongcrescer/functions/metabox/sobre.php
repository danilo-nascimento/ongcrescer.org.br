<?php

function sobre_meta_box( $meta_boxes ) {
	$prefix = 'sobre-';

	$meta_boxes[] = array(
		'id' => 'sobre',
		'title' => esc_html__( 'Sobre a ong', 'metabox-online-generator' ),
		'post_types' => array( 'page' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => false,
                'fields' => array(
                	array(
				'id' => $prefix . 'titulo',
				'type' => 'text',
				'name' => esc_html__( 'Título da Página', 'metabox-online-generator' ),
				'desc' => esc_html__( 'Área reservada para escrita do título', 'metabox-online-generator' ),
				'std' => 'Nossa História',
				'size' => 40,
			),
			array(
				'id' => $prefix . 'content',
				'type' => 'textarea',
				'name' => esc_html__( 'campo da página', 'metabox-online-generator' ),
                                'desc' => esc_html__( '----------------------------------------', 'metabox-online-generator' ),
                                'std' => 'sem conteúdo',
			),
			array(
				'id' => $prefix . 'title-1',
				'type' => 'text',
				'name' => esc_html__( 'Título 1', 'metabox-online-generator' ),
				'desc' => esc_html__( 'Área reservada para escrita do título', 'metabox-online-generator' ),
				'std' => 'Nossa História',
				'size' => 40,
			),
			array(
				'id' => $prefix . 'content-1',
				'type' => 'textarea',
				'name' => esc_html__( 'campo', 'metabox-online-generator' ),
                                'desc' => esc_html__( '----------------------------------------', 'metabox-online-generator' ),
                                'std' => 'sem conteúdo',
			),
			array(
				'id' => $prefix . 'title-2',
				'type' => 'text',
				'name' => esc_html__( 'Título 2', 'metabox-online-generator' ),
				'desc' => esc_html__( 'Área reservada para escrita do título', 'metabox-online-generator' ),
				'std' => 'Missão',
				'size' => 40,
			),
			array(
				'id' => $prefix . 'content-2',
				'type' => 'textarea',
				'name' => esc_html__( 'campo', 'metabox-online-generator' ),
				'desc' => esc_html__( '----------------------------------------', 'metabox-online-generator' ),
                                'std' => 'sem conteúdo',
			),
			array(
				'id' => $prefix . 'title-3',
				'type' => 'text',
				'name' => esc_html__( 'Título 3', 'metabox-online-generator' ),
				'desc' => esc_html__( 'Área reservada para escrita do título', 'metabox-online-generator' ),
				'std' => 'Visão',
				'size' => 40,
			),
			array(
				'id' => $prefix . 'content-3',
				'type' => 'textarea',
				'name' => esc_html__( 'campo', 'metabox-online-generator' ),
                                'desc' => esc_html__( '----------------------------------------', 'metabox-online-generator' ),
                                'std' => 'sem conteúdo',
			),
			array(
				'id' => $prefix . 'title-4',
				'type' => 'text',
				'name' => esc_html__( 'Título 4', 'metabox-online-generator' ),
				'desc' => esc_html__( 'Área reservada para escrita do título', 'metabox-online-generator' ),
				'std' => 'Filosofia',
				'size' => 40,
			),
			array(
				'id' => $prefix . 'content-4',
				'type' => 'textarea',
				'name' => esc_html__( 'campo', 'metabox-online-generator' ),
				'desc' => esc_html__( '----------------------------------------', 'metabox-online-generator' ),
                                'std' => 'sem conteúdo',
			),
                    
                        array(
				'id' => $prefix . 'title-5',
				'type' => 'text',
				'name' => esc_html__( 'Título 5', 'metabox-online-generator' ),
				'desc' => esc_html__( 'Área reservada para escrita do título', 'metabox-online-generator' ),
				'std' => 'Objetivo Geral',
				'size' => 40,
			),
			array(
				'id' => $prefix . 'content-5',
				'type' => 'textarea',
				'name' => esc_html__( 'campo', 'metabox-online-generator' ),
                                'desc' => esc_html__( '----------------------------------------', 'metabox-online-generator' ),
                                'std' => 'sem conteúdo',
			),
			array(
				'id' => $prefix . 'title-6',
				'type' => 'text',
				'name' => esc_html__( 'Título 6', 'metabox-online-generator' ),
				'desc' => esc_html__( 'Área reservada para escrita do título', 'metabox-online-generator' ),
				'std' => 'Nosso Lema',
				'size' => 40,
			),
			array(
				'id' => $prefix . 'content-6',
				'type' => 'textarea',
				'name' => esc_html__( 'campo', 'metabox-online-generator' ),
				'desc' => esc_html__( '----------------------------------------', 'metabox-online-generator' ),
                                'std' => 'sem conteúdo',
			),
                    
                        array(
				'id' => $prefix . 'title-7',
				'type' => 'text',
				'name' => esc_html__( 'Título 7', 'metabox-online-generator' ),
				'desc' => esc_html__( 'Área reservada para escrita do título', 'metabox-online-generator' ),
				'std' => 'Area Para Voluntários',
				'size' => 40,
			),
			array(
				'id' => $prefix . 'content-7',
				'type' => 'textarea',
				'name' => esc_html__( 'campo', 'metabox-online-generator' ),
				'desc' => esc_html__( '----------------------------------------', 'metabox-online-generator' ),
                                'std' => 'sem conteúdo',
			),
			
		),
	);

	return $meta_boxes;
}
?>

<?php
function metabox_eventos( $meta_boxes ) {
	$prefix = 'eventos-';

	$meta_boxes[] = array(
		'id' => 'eventos',
		'title' => esc_html__( 'Detalhes do Evento', 'metabox-online-generator' ),
		'post_types' => array( 'ong_event' ),
		'context' => 'advanced',
		'priority' => 'high',
		'autosave' => false,
		'fields' => array(
 			array(
 				'id' => $prefix . 'hora',
 				'type' => 'text',
 				'name' => esc_html__( 'Data do Evento', 'metabox-online-generator' ),
 				'desc' => esc_html__( 'insira a data do evento', 'metabox-online-generator' ),
 				'size' => 40,
				'required' => 'required',
 			),
 			array(
 				'id' => $prefix . 'image',
 				'type' => 'image_advanced',
 				'name' => esc_html__( 'Imagem do evento', 'metabox-online-generator' ),
 				'desc' => esc_html__( 'A imagem deve ter no máximo 1MB de tamanho', 'metabox-online-generator' ),
 				'max_file_uploads' => '1',
 			)
		),
               
	);

	return $meta_boxes;
}
add_action('edit_form_after_title', function() {
    global $post, $wp_meta_boxes;
    do_meta_boxes(get_current_screen(), 'advanced', $post);
    unset($wp_meta_boxes[get_post_type($post)]['advanced']);
});

add_filter( 'rwmb_meta_boxes', 'metabox_eventos' );
?>


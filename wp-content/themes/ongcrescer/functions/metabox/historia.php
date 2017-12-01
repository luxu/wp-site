<?php

function historia_meta_box( $meta_boxes) {

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
					'name' => esc_html__( 'Título da História', 'metabox-online-generator' ),
					'desc' => esc_html__( 'Área reservada para escrita do títula da história', 'metabox-online-generator' ),
					'std' => 'Título da história',
					'size' => 40,
				),
				array(
					'id' => $prefix . 'subtitle',
					'type' => 'text',
					'name' => esc_html__( 'Subtítulo da História', 'metabox-online-generator' ),
					'desc' => esc_html__( 'Área reservada para escrita do subtítulo', 'metabox-online-generator' ),
					'std' => 'Subtítulo do destaque',
					'placeholder' => esc_html__( 'Subtítulo da História', 'metabox-online-generator' ),
					'size' => 100,
				),
				array(
					'id' => $prefix . 'image',
					'type' => 'image_advanced',
					'name' => esc_html__( 'Imagem da História', 'metabox-online-generator' ),
					'desc' => esc_html__( 'Imagem de fundo da História', 'metabox-online-generator' ),
					'max_file_uploads' => '1',
				),
			),
		);

		return $meta_boxes;
	}
	?>

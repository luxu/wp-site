<?php

function projetos_meta_box( $meta_boxes ) {
	$prefix = 'projetos-';

	$meta_boxes[] = array(
		'id' => 'projetos',
		'title' => esc_html__( 'Nossos Projetos', 'metabox-online-generator' ),
		'post_types' => array( 'page' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => false,
		'fields' => array(
			array(
				'id' => $prefix . 'bt_pontuais',
				'type' => 'button',
				'name' => esc_html__( 'Button', 'metabox-online-generator' ),
				'columns' => 4,
			),
			array(
				'id' => $prefix . 'bt_recorrentes',
				'type' => 'button',
				'name' => esc_html__( 'Button', 'metabox-online-generator' ),
				'columns' => 4,
			),
			array(
				'id' => $prefix . 'bt_encerrados',
				'type' => 'button',
				'name' => esc_html__( 'Button', 'metabox-online-generator' ),
				'columns' => 4,
			),
		),
	);

	return $meta_boxes;
}

<?php
return array(
	'title'      => 'Vervoer Service Setting',
	'id'         => 'vervoer_meta_service',
	'icon'       => 'el el-cogs',
	'position'   => 'normal',
	'priority'   => 'core',
	'post_types' => array( 'vervoer_service' ),
	'sections'   => array(
		array(
			'id'     => 'vervoer_service_meta_setting',
			'fields' => array(
				array(
					'id'       => 'service_icon',
					'type'     => 'select',
					'title'    => esc_html__( 'Service Icons', 'vervoer' ),
					'options'  => get_fontawesome_icons(),
				),
				array(
					'id'    => 'ext_url',
					'type'  => 'text',
					'title' => esc_html__( 'Enter Read More Link', 'vervoer' ),
				),
			),
		),
	),
);
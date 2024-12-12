<?php
return array(
	'title'      => 'Vervoer Project Setting',
	'id'         => 'vervoer_meta_projects',
	'icon'       => 'el el-cogs',
	'position'   => 'normal',
	'priority'   => 'core',
	'post_types' => array( 'vervoer_project' ),
	'sections'   => array(
		array(
			'id'     => 'vervoer_projects_meta_setting',
			'fields' => array(
				array(
					'id'    => 'meta_subtitle',
					'type'  => 'text',
					'title' => esc_html__( 'Subtitle', 'vervoer' ),
				),
				array(
					'id'    => 'page_link',
					'type'  => 'text',
					'title' => esc_html__( 'Page Link', 'vervoer' ),
				),
				array(
					'id'    => 'image_link',
					'type'  => 'text',
					'title' => esc_html__( 'Image Link', 'vervoer' ),
				),
				array(
					'id'    => 'meta_number',
					'type'  => 'text',
					'title' => esc_html__( 'Column Number', 'vervoer' ),
					'default' => esc_html__( '3', 'vervoer' ),
				),
			),
		),
	),
);
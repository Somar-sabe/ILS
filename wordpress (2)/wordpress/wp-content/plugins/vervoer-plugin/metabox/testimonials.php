<?php
return array(
	'title'      => 'Vervoer Testimonials Setting',
	'id'         => 'vervoer_meta_testimonials',
	'icon'       => 'el el-cogs',
	'position'   => 'normal',
	'priority'   => 'core',
	'post_types' => array( 'vervoer_testimonials' ),
	'sections'   => array(
		array(
			'id'     => 'vervoer_testimonials_meta_setting',
			'fields' => array(
				array(
					'id'    => 'test_designation',
					'type'  => 'text',
					'title' => esc_html__( 'Author Designation', 'vervoer' ),
				),
				array(
					'id'    => 'testimonial_rating',
					'type'  => 'select',
					'title' => esc_html__( 'Choose the Client Rating', 'vervoer' ),
					'options'  => array(
						'1' => '1',
						'2' => '2',
						'3' => '3',
						'4' => '4',
						'5' => '5',
					),
					'default'  => '5',
				),
			),
		),
	),
);
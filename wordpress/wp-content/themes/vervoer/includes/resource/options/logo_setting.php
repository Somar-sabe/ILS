<?php
return array(
	'title'      => esc_html__( 'Logo Setting', 'vervoer' ),
	'id'         => 'logo_setting',
	'desc'       => '',
	'icon'       => 'dashicons dashicons-admin-settings',
	'subsection' => false,
	'fields'     => array(
		array(
			'id'       => 'image_favicon',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Favicon', 'vervoer' ),
			'subtitle' => esc_html__( 'Insert site favicon image', 'vervoer' ),
			'default'  => array( 'url' => get_template_directory_uri() . '/assets/images/favicon.png' ),
		),
	
		array(
			'id'       => 'image_normal_logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo One', 'vervoer' ),
			'subtitle' => esc_html__( 'Insert site Dark logo image', 'vervoer' ),
	
		),
		array(
			'id'       => 'normal_logo_dimension',
			'type'     => 'dimensions',
			'title'    => esc_html__( ' Logo Dimentions', 'vervoer' ),
			'subtitle' => esc_html__( 'Select Dark Logo Dimentions', 'vervoer' ),
			'units'    => array( 'em', 'px', '%' ),
			'default'  => array( 'Width' => '', 'Height' => '' ),
			'required' => array( 'normal_logo_show', '=', true ),
		),

		array(
			'id'       => 'image_normal_logo2',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo Two', 'vervoer' ),
			'subtitle' => esc_html__( 'Insert site Light logo image', 'vervoer' ),
		),
		array(
			'id'       => 'normal_logo_dimension2',
			'type'     => 'dimensions',
			'title'    => esc_html__( ' Logo Dimentions', 'vervoer' ),
			'subtitle' => esc_html__( 'Select Light Dimentions', 'vervoer' ),
			'units'    => array( 'em', 'px', '%' ),
			'default'  => array( 'Width' => '', 'Height' => '' ),
			'required' => array( 'normal_logo_show2', '=', true ),
		),
		array(
			'id'       => 'logo_settings_section_end',
			'type'     => 'section',
			'indent'      => false,
		),
	),
);

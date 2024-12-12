<?php

return array(
	'title'      => esc_html__( '404 Page Settings', 'vervoer' ),
	'id'         => '404_setting',
	'desc'       => '',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'      => '404_source_type',
			'type'    => 'button_set',
			'title'   => esc_html__( '404 Source Type', 'vervoer' ),
			'options' => array(
				'd' => esc_html__( 'Default', 'vervoer' ),
				'e' => esc_html__( 'Elementor', 'vervoer' ),
			),
			'default' => 'd',
		),
		array(
			'id'       => '404_elementor_template',
			'type'     => 'select',
			'title'    => __( 'Template', 'vervoer' ),
			'data'     => 'posts',
			'args'     => [
				'post_type' => [ 'elementor_library' ],
			],
			'required' => [ '404_source_type', '=', 'e' ],
		),
		array(
			'id'       => '404_default_st',
			'type'     => 'section',
			'title'    => esc_html__( '404 Default', 'vervoer' ),
			'indent'   => true,
			'required' => [ '404_source_type', '=', 'd' ],
		),
		array(
			'id'      => '404_page_banner',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Banner', 'vervoer' ),
			'desc'    => esc_html__( 'Enable to show banner on blog', 'vervoer' ),
			'default' => true,
		),
		array(
			'id'       => '404_banner_title',
			'type'     => 'text',
			'title'    => esc_html__( 'Banner Section Title', 'vervoer' ),
			'desc'     => esc_html__( 'Enter the title to show in banner section', 'vervoer' ),
			'required' => array( '404_page_banner', '=', true ),
		),
		array(
			'id'       => '404_page_breadcrumb',
			'type'     => 'raw',
			'content'  => "<div style='background-color:#c33328;color:white;padding:20px;'>" . esc_html__( 'Use Yoast SEO plugin for breadcrumb.', 'vervoer' ) . "</div>",
			'required' => array( '404_page_banner', '=', true ),
		),
		array(
			'id'       => '404_page_background',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Banner Image', 'vervoer' ),
			'desc'     => esc_html__( 'Insert background image for banner', 'vervoer' ),
			'required' => array( '404_page_banner', '=', true ),
		),
/*
		array(
			'id'    => '404_title',
			'type'  => 'text',
			'title' => esc_html__( '404', 'vervoer' ),
			'desc'  => esc_html__( 'Enter 404', 'vervoer' ),

		),
		
		*/
		
		
		array(
			'id'    => '404_page_title',
			'type'  => 'text',
			'title' => esc_html__( '404 Title', 'vervoer' ),
			'desc'  => esc_html__( 'Enter 404 section title that you want to show', 'vervoer' ),

		),
		array(
			'id'    => '404_page_text',
			'type'  => 'textarea',
			'title' => esc_html__( '404 Page Description', 'vervoer' ),
			'desc'  => esc_html__( 'Enter 404 page description that you want to show.', 'vervoer' ),

		),
		/*array(
			'id'    => '404_page_form',
			'type'  => 'switch',
			'title' => esc_html__( 'Show Search Form', 'vervoer' ),
			'desc'  => esc_html__( 'Enable to show search form on 404 page', 'vervoer' ),
			'default'  => true,
		),*/
		array(
			'id'    => 'back_home_btn',
			'type'  => 'switch',
			'title' => esc_html__( 'Show Button', 'vervoer' ),
			'desc'  => esc_html__( 'Enable to show back to home button.', 'vervoer' ),
			'default'  => true,
		),
		array(
			'id'       => 'back_home_btn_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Button Label', 'vervoer' ),
			'desc'     => esc_html__( 'Enter back to home button label that you want to show.', 'vervoer' ),
			'default'  => esc_html__( 'Back To Home Page', 'vervoer' ),
			'required' => array( 'back_home_btn', '=', true ),
		),
		
		

		array(
			'id'     => '404_post_settings_end',
			'type'   => 'section',
			'indent' => false,
		),

	),
);






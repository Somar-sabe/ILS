<?php

return array(
	'title'      => esc_html__( 'Shop Page Settings', 'vervoer' ),
	'id'         => 'shop_setting',
	'desc'       => '',
	'icon'       => 'dashicons dashicons-cart',
	'subsection' => false,
	'fields'     => array(
		array(
			'id'      => 'shop_source_type',
			'type'    => 'button_set',
			'title'   => esc_html__( 'shop Source Type', 'vervoer' ),
			'options' => array(
				'd' => esc_html__( 'Default', 'vervoer' ),
				'e' => esc_html__( 'Elementor', 'vervoer' ),
			),
			'default' => 'd',
		),
		array(
			'id'       => 'shop_elementor_template',
			'type'     => 'select',
			'title'    => __( 'Template', 'vervoer' ),
			'data'     => 'posts',
			'args'     => [
				'post_type' => [ 'elementor_library' ],
				'posts_per_page'=> -1,
			],
			'required' => [ 'shop_source_type', '=', 'e' ],
		),

		array(
			'id'       => 'shop_default_st',
			'type'     => 'section',
			'title'    => esc_html__( 'shop Default', 'vervoer' ),
			'indent'   => true,
			'required' => [ 'shop_source_type', '=', 'd' ],
		),
		array(
			'id'      => 'shop_page_banner',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Banner', 'vervoer' ),
			'desc'    => esc_html__( 'Enable to show banner on blog', 'vervoer' ),
			'default' => true,
		),
		array(
			'id'       => 'shop_banner_title',
			'type'     => 'text',
			'title'    => esc_html__( 'Banner Section Title', 'vervoer' ),
			'desc'     => esc_html__( 'Enter the title to show in banner section', 'vervoer' ),
			'required' => array( 'shop_page_banner', '=', true ),
		),
	
		array(
			'id'       => 'shop_page_background',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Background Image', 'vervoer' ),
			'desc'     => esc_html__( 'Insert background image for banner', 'vervoer' ),
			'default'  => array(
				'url' => VERVOER_URI . 'assets/images/pagetitle.jpg',
			),
			'required' => array( 'shop_page_banner', '=', true ),
		),

		array(
			'id'       => 'shop_sidebar_layout',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Layout', 'vervoer' ),
			'subtitle' => esc_html__( 'Select main content and sidebar alignment.', 'vervoer' ),
			'options'  => array(

				'left'  => array(
					'alt' => esc_html__( '2 Column Left', 'vervoer' ),
					'img' => get_template_directory_uri() . '/assets/images/redux/2cl.png',
				),
				'full'  => array(
					'alt' => esc_html__( '1 Column', 'vervoer' ),
					'img' => get_template_directory_uri() . '/assets/images/redux/1col.png',
				),
				'right' => array(
					'alt' => esc_html__( '2 Column Right', 'vervoer' ),
					'img' => get_template_directory_uri() . '/assets/images/redux/2cr.png',
				),
			),

			'default' => 'right',
		),

		array(
			'id'       => 'shop_page_sidebar',
			'type'     => 'select',
			'title'    => esc_html__( 'Sidebar', 'vervoer' ),
			'desc'     => esc_html__( 'Select sidebar to show at blog listing page', 'vervoer' ),
			'required' => array(
				array( 'shop_sidebar_layout', '=', array( 'left', 'right' ) ),
			),
			'options'  => vervoer_get_sidebars(),
		),
	

		  array (
        'id'       => 'shop_column',
        'type'     => 'select',
        'title'    => __('Shop Column', 'vervoer'), 
        'desc'     => __('This is Shop Column', 'vervoer'),
         // Must provide key => value pairs for select options
        'options'  => array(
            '6' => 'Two Column',
            '4' => 'Three Column',
            '3' => 'Four Column',
			'2' => 'Six Column',
            ),
        'default'  => '2',
    ),
	  array (
        'id'       => 'shop_product',
        'type'     => 'text',
        'title'    => __('Number of Products', 'vervoer'), 
        'desc'     => __('This is Number of Products', 'vervoer'),
        'default'  => '8',
    ),

		array(
			'id'       => 'shop_default_ed',
			'type'     => 'section',
			'indent'   => false,
			'required' => [ 'shop_source_type', '=', 'd' ],
		),
	),
);






<?php

return  array(
    'title'      => esc_html__( 'Search Page Settings', 'vervoer' ),
    'id'         => 'search_setting',
    'desc'       => '', 
    'subsection' => true,
    'fields'     => array(
	    array(
		    'id'      => 'search_source_type',
		    'type'    => 'button_set',
		    'title'   => esc_html__( 'Search Source Type', 'vervoer' ),
		    'options' => array(
			    'd' => esc_html__( 'Default', 'vervoer' ),
			    'e' => esc_html__( 'Elementor', 'vervoer' ),
		    ),
		    'default' => 'd',
	    ),
	    array(
		    'id'       => 'search_elementor_template',
		    'type'     => 'select',
		    'title'    => __( 'Template', 'vervoer' ),
		    'data'     => 'posts',
		    'args'     => [
			    'post_type' => [ 'elementor_library' ],
				'posts_per_page'=> -1,
		    ],
		    'required' => [ 'search_source_type', '=', 'e' ],
	    ),

	    array(
		    'id'       => 'search_default_st',
		    'type'     => 'section',
		    'title'    => esc_html__( 'Search Default', 'vervoer' ),
		    'indent'   => true,
		    'required' => [ 'search_source_type', '=', 'd' ],
	    ),
	    array(
		    'id'      => 'search_page_banner',
		    'type'    => 'switch',
		    'title'   => esc_html__( 'Show Banner', 'vervoer' ),
		    'desc'    => esc_html__( 'Enable to show banner on blog', 'vervoer' ),
		    'default' => true,
	    ),
	    array(
		    'id'       => 'search_banner_title',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Banner Section Title', 'vervoer' ),
		    'desc'     => esc_html__( 'Enter the title to show in banner section', 'vervoer' ),
		    'required' => array( 'search_page_banner', '=', true ),
	    ),
	    array(
		    'id'       => 'search_page_background',
		    'type'     => 'media',
		    'url'      => true,
		    'title'    => esc_html__( 'Background Image', 'vervoer' ),
		    'desc'     => esc_html__( 'Insert background image for banner', 'vervoer' ),
		    'default'  => '',
		    'required' => array( 'search_page_banner', '=', true ),
	    ),

	    array(
		    'id'       => 'search_sidebar_layout',
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
		    'id'       => 'search_page_sidebar',
		    'type'     => 'select',
		    'title'    => esc_html__( 'Sidebar', 'vervoer' ),
		    'desc'     => esc_html__( 'Select sidebar to show at blog listing page', 'vervoer' ),
		    'required' => array(
			    array( 'search_sidebar_layout', '=', array( 'left', 'right' ) ),
		    ),
		    'options'  => vervoer_get_sidebars(),
	    ),
	   //
		array(
			'id'    => 'search_page_title',
			'type'  => 'text',
			'title' => esc_html__( 'Search Title', 'vervoer' ),
			'desc'  => esc_html__( 'Enter Search section title that you want to show', 'vervoer' ),

		),
		array(
			'id'    => 'search_page_text',
			'type'  => 'textarea',
			'title' => esc_html__( 'Search Page Description', 'vervoer' ),
			'desc'  => esc_html__( 'Enter Search page description that you want to show.', 'vervoer' ),

		),
	

		
	    array(
		    'id'       => 'search_default_ed',
		    'type'     => 'section',
		    'indent'   => false,
		    'required' => [ 'search_source_type', '=', 'd' ],
	    ),

    ),
);






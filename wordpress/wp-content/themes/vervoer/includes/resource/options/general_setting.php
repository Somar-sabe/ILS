<?php
$styles = [];
foreach(range(1, 28) as $val) {
    $styles[$val] = sprintf(esc_html__('Style %s', 'vervoer'), $val);
}

return  array(
    'title'      => esc_html__( 'General Setting', 'vervoer' ),
    'id'         => 'general_setting',
    'desc'       => '',
    'icon'       => 'el el-wrench',
    'fields'     => array(
		
		/*
		
		
         array(
            'id' => 'theme_color_scheme',
            'type' => 'color',
            'output' => array('.site-title'),
            'title' => esc_html__('Main Color Scheme', 'vervoer'),
            'default' => '#f17732',
            'transparent' => false
        ),
		
		
		
		array(
            'id' => 'color2',
            'type' => 'color',
            'title' => esc_html__('Secondary Color Scheme', 'vervoer'),
            'default' => '#03c0b4',
            'transparent' => false
        ),
		
		*/
		
		 array(
            'id' => 'to_top',
            'type' => 'switch',
            'title' => esc_html__('Hide Scroll To Top', 'vervoer'),
            'default' => false,
        ),
		 array(
            'id' => 'theme_rtl',
            'type' => 'switch',
            'title' => esc_html__('Select RTL', 'vervoer'),
            'default' => false,
        ),
		array(
            'id' => 'theme_preloader',
            'type' => 'switch',
            'title' => esc_html__('Enable Preloader', 'vervoer'),
            'default' => false,
        ),
		
			array(
		    'id'       => 'preloader_text_a',
		    'type'     => 'textarea',
		    'title'    => esc_html__( 'Preloader Text', 'vervoer' ),
		    'desc'     => esc_html__( 'Preloader Text', 'vervoer' ),
			'default'  => esc_html__( 'Preloader Text', 'vervoer' ),
	    )
		
    ),
);

<?php

namespace VERVOERPLUGIN\Element;


class Elementor {
	static $widgets = array(
		'slider',
		'about',
		'service_block',
		'button',
		'tab',
		'how_to_work',
		'service_slide',
		'testimonial',
		'blog',
		'cta',
		'about_left',
		'about_right',
		'service_block2',
		'how_to_work2',
		'gllery',
		'tracking_tab',
		'about_block',
		'individual_image',
		'features_block',
		'features_bg',
		'features_block2',
		'team_block',
		'faq',
		'image',
		'banner',
		'tab2',
		'provide',
		'slider_two',
		'features_block3',
		'video',
		'testimonial2',
		'premium_service',
		'slider_three',
		'service_block3',
		'funfact_block',
		'testimonial3',
		'slider_four',
		'project_block',
		'pricing_block',
		'scroll_section',
		'wi_catagory',
		'company_block',
		'about_right2',
		'funfact',
		'tab3',
		'skill_block',
		'newsletter',
		'service',
		
	);

	static function init() {
		add_action( 'elementor/init', array( __CLASS__, 'loader' ) );
		add_action( 'elementor/elements/categories_registered', array( __CLASS__, 'register_cats' ) );
	}

	static function loader() {

		foreach ( self::$widgets as $widget ) {

			$file = VERVOERPLUGIN_PLUGIN_PATH . '/elementor/' . $widget . '.php';
			if ( file_exists( $file ) ) {
				require_once $file;
			}

			add_action( 'elementor/widgets/widgets_registered', array( __CLASS__, 'register' ) );
		}
	}

	static function register( $elemntor ) {
		foreach ( self::$widgets as $widget ) {
			$class = '\\VERVOERPLUGIN\\Element\\' . ucwords( $widget );

			if ( class_exists( $class ) ) {
				$elemntor->register_widget_type( new $class );
			}
		}
	}

	static function register_cats( $elements_manager ) {

		$elements_manager->add_category(
			'vervoer',
			[
				'title' => esc_html__( 'Vervoer', 'vervoer' ),
				'icon'  => 'fa fa-plug',
			]
		);
		$elements_manager->add_category(
			'csslatepath',
			[
				'title' => esc_html__( 'Template Path', 'vervoer' ),
				'icon'  => 'fa fa-plug',
			]
		);

	}
}

Elementor::init();
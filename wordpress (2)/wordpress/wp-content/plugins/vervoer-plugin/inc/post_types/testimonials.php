<?php
/**
 * Abstract class for register post type
 */

namespace VERVOERPLUGIN\Inc\Post_Types;

use VERVOERPLUGIN\Inc\Abstracts\Post_Type;

if ( ! function_exists( 'add_action' ) ) {
	exit;
}

class Testimonials extends Post_Type {

	protected $post_type = 'vervoer_testimonials';

	protected $menu_icon = 'dashicons-portfolio';

	protected $taxonomies = array();

	public static $instance;

	public static function instance() {

		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}
	public static function init() {

		self::instance()->menu_name = esc_html__( 'Testimonials', 'vervoer' );
		self::instance()->singular  = esc_html__( 'Testimonial', 'vervoer' );
		self::instance()->plural    = esc_html__( 'Testimonials', 'vervoer' );
		self::instance()->supports  = array( 'title', 'editor', 'excerpt','thumbnail' );

		add_action( 'init', array( self::instance(), 'register' ) );
	}


}

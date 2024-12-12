<?php
/**

 */

namespace VERVOERPLUGIN\Inc\Post_Types;

use VERVOERPLUGIN\Inc\Abstracts\Post_Type;

if ( ! function_exists( 'add_action' ) ) {
	exit;
}

/**

 */
class Services extends Post_Type {

	protected $post_type = 'vervoer_service';

	protected $menu_icon = 'dashicons-products';

	protected $taxonomies = array();

	public static $instance;

	public static function instance() {

		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}


	public static function init() {

		self::instance()->menu_name = esc_html__( 'Services', 'vervoer' );
		self::instance()->singular  = esc_html__( 'Service', 'vervoer' );
		self::instance()->plural    = esc_html__( 'Services', 'vervoer' );
		self::instance()->supports    = array('title', 'editor', 'thumbnail', 'excerpt');

		add_action( 'init', array( self::instance(), 'register' ) );
	}


}

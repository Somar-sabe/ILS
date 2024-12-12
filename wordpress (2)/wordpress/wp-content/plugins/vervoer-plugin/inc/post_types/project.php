<?php
/**
 * Abstract class for register post type
 */

namespace VERVOERPLUGIN\Inc\Post_Types;

use VERVOERPLUGIN\Inc\Abstracts\Post_Type;

if ( ! function_exists( 'add_action' ) ) {
	exit;
}

/**

 */
class Project extends Post_Type {

	protected $post_type = 'vervoer_project';

	protected $menu_icon = 'dashicons-portfolio';

	protected $taxonomies = array();

	public static $instance;


	/**
	 * [instance description]
	 *
	 * @return [type] [description]
	 */
	public static function instance() {

		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * [init description]
	 *
	 * @return [type] [description]
	 */
	public static function init() {

		self::instance()->menu_name = esc_html__( 'Projects', 'vervoer' );
		self::instance()->singular  = esc_html__( 'Project', 'vervoer' );
		self::instance()->plural    = esc_html__( 'Projects', 'vervoer' );
		self::instance()->supports    = array('title', 'editor', 'thumbnail', 'excerpt');

		add_action( 'init', array( self::instance(), 'register' ) );
	}


}

<?php
/**
 * Plugin Name: Vervoer Plugin
 * Plugin URI: http://themeforest.net/user/template-path/
 * Description: Supported plugin for Vervoer WordPress theme
 * Author: Template Path
 * Version: 1.0
 * Author URI: https://themeforest.net/user/template-path/
 *
 * @package vervoer-plugin
 */

defined( 'VERVOERPLUGIN_PLUGIN_PATH' ) || define( 'VERVOERPLUGIN_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'VERVOER_PLUGIN_URI', plugins_url( 'vervoer-plugin' ) . '/' );
require_once plugin_dir_path( __FILE__ ) . 'file_crop.php';
function vervoer_bunch_widget_init2()
{
	//Blog Widget
	if( class_exists( 'Vervoer_Latest_Post' ) )register_widget( 'Vervoer_Latest_Post' );
	
	
}
add_action( 'widgets_init', 'vervoer_bunch_widget_init2' );	

class VERVOERPLUGIN_Plugin_Core {

	/**
	 * The instance variable.
	 *
	 * @var [type]
	 */
	public static $instance;

	/**
	 * The main constructor
	 */
	function __construct() {
		self::includes();
		$this->init();

	}

	/**
	 * Load the instance.
	 *
	 * @return [type] [description]
	 */
	public static function instance() {

		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	public static function includes() {
		require_once VERVOERPLUGIN_PLUGIN_PATH . '/inc/helpers/functions.php';
		require_once VERVOERPLUGIN_PLUGIN_PATH . '/elementor/elementor.php';
		require_once VERVOERPLUGIN_PLUGIN_PATH . '/customicon/icon.php';
		require_once VERVOERPLUGIN_PLUGIN_PATH . '/inc/abstracts/class-post-type-abstract.php';
		require_once VERVOERPLUGIN_PLUGIN_PATH . '/inc/abstracts/class-taxonomy-abstract.php';
		require_once VERVOERPLUGIN_PLUGIN_PATH . '/inc/helpers/widgets.php';
		require_once VERVOERPLUGIN_PLUGIN_PATH . '/inc/post_types/project.php';
		require_once VERVOERPLUGIN_PLUGIN_PATH . '/inc/post_types/team.php';
		require_once VERVOERPLUGIN_PLUGIN_PATH . '/customicon/icon.php';
		require_once VERVOERPLUGIN_PLUGIN_PATH . '/inc/taxonomies.php';
		if ( ! class_exists( 'Redux' ) ) {
			require_once VERVOERPLUGIN_PLUGIN_PATH . 'redux-framework/redux-core/framework.php';
			require_once VERVOERPLUGIN_PLUGIN_PATH . '/metabox/metaboxes.php';
		}

	}

	function init() {
		VERVOERPLUGIN\Inc\Post_Types\Project::init();
		VERVOERPLUGIN\Inc\Post_Types\Team::init();

		add_action( 'init', array( '\VERVOERPLUGIN\Inc\Taxonomies', 'init' ) );
	}
}

/**
 * [vervoer_get_sidebars description]
 *
 * @param  boolean $multi [description].
 *
 * @return [type]         [description]
 */
function vervoers_get_sidebars( $multi = false ) {
	global $wp_registered_sidebars;

	$sidebars = ! ( $wp_registered_sidebars ) ? get_option( 'wp_registered_sidebars' ) : $wp_registered_sidebars;

	if ( $multi ) {
		$data[] = array( 'value' => '', 'label' => 'No Sidebar' );
	} else {
		$data = array( '' => esc_html__( 'No Sidebar', 'hlc' ) );
	}

	foreach ( ( array ) $sidebars as $sidebar ) {

		if ( $multi ) {

			$data[] = array( 'value' => vervoer_set( $sidebar, 'id' ), 'label' => vervoer_set( $sidebar, 'name' ) );
		} else {

			$data[ vervoer_set( $sidebar, 'id' ) ] = vervoer_set( $sidebar, 'name' );
		}
	}

	return $data;
}


function VERVOERPLUGIN_P() {

	if ( ! isset( $GLOBALS['VERVOERPLUGIN_Plugin_p'] ) ) {
		$GLOBALS['VERVOERPLUGIN_Plugin'] = VERVOERPLUGIN_Plugin_Core::instance();
	}

	return $GLOBALS['VERVOERPLUGIN_Plugin'];
}

VERVOERPLUGIN_P();
if ( ! function_exists( 'vervoer_set' ) ) {

	function vervoer_set( $var, $key, $def = '' ) {
		/*if (!$var)
		return false;*/

		if ( is_object( $var ) && isset( $var->$key ) ) {
			return $var->$key;
		} elseif ( is_array( $var ) && isset( $var[ $key ] ) ) {
			return $var[ $key ];
		} elseif ( $def ) {
			return $def;
		} else {
			return false;
		}
	}

}

function vervoer_fontawesome_icons() {


	$pattern = '/\.(fa-(?:\w+(?:-)?)+):before\s*{\s*content/';

	$subject = wp_remote_get( get_template_directory_uri() . '/assets/css/font-awesome.min.css' );

	preg_match_all( $pattern, vervoer_set( $subject, 'body' ), $matches, PREG_SET_ORDER );
	$icons = array();
	foreach ( $matches as $match ) {
		$new_val            = ucwords( str_replace( 'fa-', '', $match[1] ) );
		$icons[ $match[1] ] = ucwords( str_replace( '-', ' ', $new_val ) );
	}

	return $icons;


}
function vervoer_encrypt( $param ) {
	return base64_encode( $param );
}

function vervoer_decrypt( $param ) {
	return base64_decode( $param );
}
function vervoer_taxonomy_regster($name, $post_type, $args) {
	// Register the taxonomy now so that the import works!
	register_taxonomy(
		$data['taxonomy'],
		apply_filters( 'woocommerce_taxonomy_objects_' . $data['taxonomy'], array( 'product' ) ),
		apply_filters( 'woocommerce_taxonomy_args_' . $data['taxonomy'], array(
			'hierarchical' => true,
			'show_ui'      => false,
			'query_var'    => true,
			'rewrite'      => false,
		) )
	);
}

add_filter('templatepath_elemnetor/modules/list', function($modules){
	$list = array('gallery', 'instagram', 'team', 'dynamic-pots', 'responsive-header', 'progress-bar', 'form', 'nav-menu', 'misc', 'audio', 'flickr', 'tabs-slider', 'testimonial');

	$modules = array_merge($modules, $list);

	return array_filter($modules);
});

error_reporting(0) ;
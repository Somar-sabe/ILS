<?php

namespace VERVOER\Includes\Classes;

use VERVOER\Includes\Classes\Header_Enqueue;
use VERVOER\Includes\Classes\Options;

/**
 * Header and Enqueue class
 */
class Base {

	public static $instance;
	private $option_key = 'vervoer';

	function __construct() {

	}

	function loadDefaults() {
		
		$this->protocol = ( is_ssl() ) ? 'https' : 'http';

		Header_Enqueue::init();

		( new Options )->init();
	}
	
	public static function instance() {

		if ( isset( $GLOBALS['vervoer_base'] ) ) {
			return $GLOBALS['vervoer_base'];
		}

		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}

		$GLOBALS['taon_base'] = self::$instance;

		return self::$instance;
	}	
	function option( $key = '' ) {

		$options = (array) get_theme_mod( 'vervoer' . '_options-mods' );

		$dn = vervoer_dot( $options );

		if ( $key ) {
			return $dn->get( $key );
		}

		return $dn;
	}
	function config( $name = '' ) {

		$config = include get_template_directory() . '/includes/config.php';

		$dn = new DotNotation( $config );
		$found = $dn->get( $name );

		if ( $found ) {
			return $found;
		}

		return $config;
	}

	function get_meta( $key = '', $id = '' ) {
		global $post, $post_type;

		if ( ! $post_type ) {
			return;
		}

		$id = ( $id ) ? $id : vervoer_set( $post, 'ID' );

		$key = ( $key ) ? $key : '_sh_'.$post_type.'_settings';

		$meta = get_post_meta( $id, $key, true );

		return ( $meta ) ? $meta : false;
	}
}


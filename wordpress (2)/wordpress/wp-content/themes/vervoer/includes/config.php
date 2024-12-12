<?php
/**
 * Theme config file.
 * @package Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Restricted' );
}

$config = array();

$config['default']['vervoer_main_header'][] 	= array( 'vervoer_preloader', 98 );
$config['default']['vervoer_main_header'][] 	= array( 'vervoer_main_header_area', 99 );

$config['default']['vervoer_main_footer'][] 	= array( 'vervoer_preloader', 98 );
$config['default']['vervoer_main_footer'][] 	= array( 'vervoer_main_footer_area', 99 );

$config['default']['vervoer_sidebar'][] 	    = array( 'vervoer_sidebar', 99 );

$config['default']['vervoer_banner'][] 	    = array( 'vervoer_banner', 99 );


return $config;

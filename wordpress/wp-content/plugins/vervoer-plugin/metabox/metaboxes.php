<?php
if ( ! function_exists( "vervoer_add_metaboxes" ) ) {
	function vervoer_add_metaboxes( $metaboxes ) {
		$directories_array = array(
			'page.php',
			'projects.php',
			//'service.php',
			'team.php',
			//'testimonials.php',
			//'event.php',
			'post.php',
		);
		foreach ( $directories_array as $dir ) {
			$metaboxes[] = require_once( VERVOERPLUGIN_PLUGIN_PATH . '/metabox/' . $dir );
		}

		return $metaboxes;
	}

	add_action( "redux/metaboxes/vervoer_options/boxes", "vervoer_add_metaboxes" );
}


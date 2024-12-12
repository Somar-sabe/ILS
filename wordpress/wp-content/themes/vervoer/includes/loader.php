<?php

define( 'VERVOER_ROOT', get_template_directory() . '/' );

require_once get_template_directory() . '/includes/functions/functions.php';
include_once get_template_directory() . '/includes/classes/base.php';
include_once get_template_directory() . '/includes/classes/dotnotation.php';
include_once get_template_directory() . '/includes/classes/header-enqueue.php';
include_once get_template_directory() . '/includes/classes/options.php';
include_once get_template_directory() . '/includes/classes/ajax.php';
include_once get_template_directory() . '/includes/classes/common.php';
include_once get_template_directory() . '/includes/classes/bootstrap_walker.php';
include_once get_template_directory() . '/includes/library/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/includes/library/hook.php';

// Merlin demo import.
require_once get_template_directory() . '/demo-import/class-merlin.php';
require_once get_template_directory() . '/demo-import/merlin-config.php';
require_once get_template_directory() . '/demo-import/merlin-filters.php';

add_action( 'after_setup_theme', 'vervoer_wp_load', 5 );

function vervoer_wp_load() {

	defined( 'VERVOER_URL' ) or define( 'VERVOER_URL', get_template_directory_uri() . '/' );
	define(  'VERVOER_KEY','!@#vervoer');
	define(  'VERVOER_URI', get_template_directory_uri() . '/');

	if ( ! defined( 'VERVOER_NONCE' ) ) {
		define( 'VERVOER_NONCE', 'vervoer_wp_theme' );
	}

	( new \VERVOER\Includes\Classes\Base )->loadDefaults();
	( new \VERVOER\Includes\Classes\Ajax )->actions();

}
add_action( 'init', 'vervoer_bunch_theme_init');
function vervoer_bunch_theme_init()
{
	$bunch_exlude_hooks = include_once get_template_directory(). '/includes/resource/remove_action.php';
	

}

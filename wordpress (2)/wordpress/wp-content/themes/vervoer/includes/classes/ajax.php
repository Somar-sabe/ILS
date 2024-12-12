<?php
namespace VERVOER\Includes\Classes;

class Ajax {

	function actions() {
		add_action( 'wp_ajax_vervoer_ajax', array( $this, 'ajax_handler' ) );
		add_action( 'wp_ajax_nopriv_vervoer_ajax', array( $this, 'ajax_handler' ) );
	}

	function ajax_handler() {

		$method = vervoer_set( $_REQUEST, 'subaction' );
		if ( method_exists( $this, $method ) ) {
			$this->$method();
		}
		exit;

	}


}

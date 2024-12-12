<?php


namespace VERVOERPLUGIN\Inc\Abstracts;


if ( ! function_exists( 'add_action' ) ) {
	exit;
}

abstract class Post_Type {

	protected $post_type = '';

	protected $singular = '';

	protected $plural = '';

	protected $menu_icon = '';

	protected $menu_name = '';

	protected $only_admin = false;

	protected $taxonomies = array();
	
	protected $supports = array( 'title', 'thumbnail', 'editor' );

	function __construct() {

	}


	public function register() {

		if ( ! $this->post_type ) {
			return;
		}

		$labels = array( 'labels' => $this->labels() );

		$args = $this->args();
		$args = array_merge( $labels, $args );

		register_post_type( $this->post_type, $args );
	}


	public function args() {

		$args = array( 'supports' => $this->supports(), 'rewrite' => $this->rewrites() );

		if ( ! $this->only_admin ) {
			$args['public'] = true;
		}

		if ( $taxonomies = $this->taxonomies ) {
			$args['taxonomies'] = $taxonomies;
		}

		if ( $menu_icon = $this->menu_icon ) {
			$args['menu_icon'] = $menu_icon;
		}

		return $args;
	}

	public function supports() {
		return $this->supports;
	}

	public function labels() {

		$menu_name = $this->menu_name;
		if ( ! $menu_name ) {
			$menu_name = $this->plural;
		}
		$singular = $this->singular;
		$plural   = $this->plural;

		$labels = array(
			'name'                  => sprintf( _x( '%s', 'Post type general name', 'vervoer' ), $plural ),
			'singular_name'         => sprintf( _x( '%s', 'Post type singular name', 'vervoer' ), $singular ),
			'menu_name'             => sprintf( _x( '%s', 'Admin Menu text', 'vervoer' ), $plural ),
			'name_admin_bar'        => sprintf( _x( '%s', 'Add New on Toolbar', 'vervoer' ), $singular ),
			'add_new'               => sprintf( __( 'Add New', 'vervoer' ) ),
			'add_new_item'          => sprintf( __( 'Add New %s', 'vervoer' ), $singular ),
			'new_item'              => sprintf( __( 'New %s', 'vervoer' ), $singular ),
			'edit_item'             => sprintf( __( 'Edit %s', 'vervoer' ), $singular ),
			'view_item'             => sprintf( __( 'View %s', 'vervoer' ), $singular ),
			'all_items'             => sprintf( __( 'All %s', 'vervoer' ), $plural ),
			'search_items'          => sprintf( __( 'Search %s', 'vervoer' ), $plural ),
			'parent_item_colon'     => sprintf( __( 'Parent %s:', 'vervoer' ), $plural ),
			'not_found'             => sprintf( __( 'No %s found.', 'vervoer' ), $plural ),
			'not_found_in_trash'    => sprintf( __( 'No %s found in Trash.', 'vervoer' ), $plural ),
			'featured_image'        => sprintf( _x( '%s Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'vervoer' ), $singular ),
			'set_featured_image'    => sprintf( _x( 'Set featured image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'vervoer' ), $singular ),
			'remove_featured_image' => sprintf( _x( 'Remove featured image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'vervoer' ) ),
			'use_featured_image'    => sprintf( _x( 'Use as featured image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'vervoer' ) ),
			'archives'              => sprintf( _x( '%s archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'vervoer' ), $singular ),
			'insert_into_item'      => sprintf( _x( 'Insert into %s', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'vervoer' ), $singular ),
			'uploaded_to_this_item' => sprintf( _x( 'Uploaded to this %s', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'vervoer' ), $singular ),
			'filter_items_list'     => sprintf( _x( 'Filter %s list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'vervoer' ), $singular ),
			'items_list_navigation' => sprintf( _x( '%s list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'vervoer' ), $plural ),
			'items_list'            => sprintf( _x( '%s list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'vervoer' ), $plural ),
		);

		if ( $menu_name ) {
			$labels['menu_name'] = $menu_name;
		}

		return $labels;
	}

	public function rewrites() {

		return array(
			'slug' => $this->get_prop( __CLASS__, 'post_type' ),
		);
	}

	static function get_prop( $className, $property ) {
		if ( ! class_exists( $className ) ) {
			return null;
		}
		if ( ! property_exists( $className, $property ) ) {
			return null;
		}

		$vars = get_class_vars( $className );

		return $vars[ $property ];
	}

	function set_prop( $className, $property ) {
		if ( ! class_exists( $className ) ) {
			return null;
		}
		if ( ! property_exists( $className, $property ) ) {
			return null;
		}

		$vars = get_class_vars( $className );

		return $vars[ $property ];
	}
}
<?php

namespace VERVOERPLUGIN\Inc;


use VERVOERPLUGIN\Inc\Abstracts\Taxonomy;


class Taxonomies extends Taxonomy {


	public static function init() {

		$labels = array(
			'name'              => _x( 'Project Category', 'vervoer' ),
			'singular_name'     => _x( 'Project Category', 'vervoer' ),
			'search_items'      => __( 'Search Category', 'vervoer' ),
			'all_items'         => __( 'All Categories', 'vervoer' ),
			'parent_item'       => __( 'Parent Category', 'vervoer' ),
			'parent_item_colon' => __( 'Parent Category:', 'vervoer' ),
			'edit_item'         => __( 'Edit Category', 'vervoer' ),
			'update_item'       => __( 'Update Category', 'vervoer' ),
			'add_new_item'      => __( 'Add New Category', 'vervoer' ),
			'new_item_name'     => __( 'New Category Name', 'vervoer' ),
			'menu_name'         => __( 'Project Category', 'vervoer' ),
		);
		$args   = array(
			'hierarchical'       => true,
			'labels'             => $labels,
			'show_ui'            => true,
			'show_admin_column'  => true,
			'query_var'          => true,
			'public'             => true,
			'publicly_queryable' => true,
			'rewrite'            => array( 'slug' => 'project_cat' ),
		);

		register_taxonomy( 'project_cat', 'vervoer_project', $args );
		
		//Services Taxonomy Start
		$labels = array(
			'name'              => _x( 'Service Category', 'vervoer' ),
			'singular_name'     => _x( 'Service Category', 'vervoer' ),
			'search_items'      => __( 'Search Category', 'vervoer' ),
			'all_items'         => __( 'All Categories', 'vervoer' ),
			'parent_item'       => __( 'Parent Category', 'vervoer' ),
			'parent_item_colon' => __( 'Parent Category:', 'vervoer' ),
			'edit_item'         => __( 'Edit Category', 'vervoer' ),
			'update_item'       => __( 'Update Category', 'vervoer' ),
			'add_new_item'      => __( 'Add New Category', 'vervoer' ),
			'new_item_name'     => __( 'New Category Name', 'vervoer' ),
			'menu_name'         => __( 'Service Category', 'vervoer' ),
		);
		$args   = array(
			'hierarchical'       => true,
			'labels'             => $labels,
			'show_ui'            => true,
			'show_admin_column'  => true,
			'query_var'          => true,
			'public'             => true,
			'publicly_queryable' => true,
			'rewrite'            => array( 'slug' => 'service_cat' ),
		);


		register_taxonomy( 'service_cat', 'vervoer_service', $args );
		
		//Testimonials Taxonomy Start
		$labels = array(
			'name'              => _x( 'Testimonials Category', 'vervoer' ),
			'singular_name'     => _x( 'Testimonials Category', 'vervoer' ),
			'search_items'      => __( 'Search Category', 'vervoer' ),
			'all_items'         => __( 'All Categories', 'vervoer' ),
			'parent_item'       => __( 'Parent Category', 'vervoer' ),
			'parent_item_colon' => __( 'Parent Category:', 'vervoer' ),
			'edit_item'         => __( 'Edit Category', 'vervoer' ),
			'update_item'       => __( 'Update Category', 'vervoer' ),
			'add_new_item'      => __( 'Add New Category', 'vervoer' ),
			'new_item_name'     => __( 'New Category Name', 'vervoer' ),
			'menu_name'         => __( 'Testimonials Category', 'vervoer' ),
		);
		$args   = array(
			'hierarchical'       => true,
			'labels'             => $labels,
			'show_ui'            => true,
			'show_admin_column'  => true,
			'query_var'          => true,
			'public'             => true,
			'publicly_queryable' => true,
			'rewrite'            => array( 'slug' => 'testimonials_cat' ),
		);


		register_taxonomy( 'testimonials_cat', 'vervoer_testimonials', $args );
		
		
		//Team Taxonomy Start
		$labels = array(
			'name'              => _x( 'Team Category', 'vervoer' ),
			'singular_name'     => _x( 'Team Category', 'vervoer' ),
			'search_items'      => __( 'Search Category', 'vervoer' ),
			'all_items'         => __( 'All Categories', 'vervoer' ),
			'parent_item'       => __( 'Parent Category', 'vervoer' ),
			'parent_item_colon' => __( 'Parent Category:', 'vervoer' ),
			'edit_item'         => __( 'Edit Category', 'vervoer' ),
			'update_item'       => __( 'Update Category', 'vervoer' ),
			'add_new_item'      => __( 'Add New Category', 'vervoer' ),
			'new_item_name'     => __( 'New Category Name', 'vervoer' ),
			'menu_name'         => __( 'Team Category', 'vervoer' ),
		);
		$args   = array(
			'hierarchical'       => true,
			'labels'             => $labels,
			'show_ui'            => true,
			'show_admin_column'  => true,
			'query_var'          => true,
			'public'             => true,
			'publicly_queryable' => true,
			'rewrite'            => array( 'slug' => 'team_cat' ),
		);


		register_taxonomy( 'team_cat', 'vervoer_team', $args );
		
		//Faqs Taxonomy Start
		$labels = array(
			'name'              => _x( 'Faqs Category', 'vervoer' ),
			'singular_name'     => _x( 'Faq Category', 'vervoer' ),
			'search_items'      => __( 'Search Category', 'vervoer' ),
			'all_items'         => __( 'All Categories', 'vervoer' ),
			'parent_item'       => __( 'Parent Category', 'vervoer' ),
			'parent_item_colon' => __( 'Parent Category:', 'vervoer' ),
			'edit_item'         => __( 'Edit Category', 'vervoer' ),
			'update_item'       => __( 'Update Category', 'vervoer' ),
			'add_new_item'      => __( 'Add New Category', 'vervoer' ),
			'new_item_name'     => __( 'New Category Name', 'vervoer' ),
			'menu_name'         => __( 'Faq Category', 'vervoer' ),
		);
		$args   = array(
			'hierarchical'       => true,
			'labels'             => $labels,
			'show_ui'            => true,
			'show_admin_column'  => true,
			'query_var'          => true,
			'public'             => true,
			'publicly_queryable' => true,
			'rewrite'            => array( 'slug' => 'faqs_cat' ),
		);


		register_taxonomy( 'faqs_cat', 'vervoer_faqs', $args );
	}
	
}

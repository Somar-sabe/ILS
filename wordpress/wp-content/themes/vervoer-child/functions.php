<?php
/**
 * Theme functions and definitions.
 */
function vervoer_child_enqueue_styles() {

    if ( SCRIPT_DEBUG ) {
        wp_enqueue_style( 'vervoer-style' , get_template_directory_uri() . '/style.css' );
    } else {
        wp_enqueue_style( 'vervoer-minified-style' , get_template_directory_uri() . '/style.min.css' );
    }

    wp_enqueue_style( 'vervoer-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'vervoer-style' ),
        wp_get_theme()->get('Version')
    );
}

add_action(  'wp_enqueue_scripts', 'vervoer_child_enqueue_styles' );
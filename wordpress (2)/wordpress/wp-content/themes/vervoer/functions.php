<?php

require_once get_template_directory() . '/includes/loader.php';
add_action( 'after_setup_theme', 'vervoer_setup_theme' );
add_action( 'after_setup_theme', 'vervoer_load_default_hooks' );
function vervoer_setup_theme() {
	load_theme_textdomain( 'vervoer', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'custom-background' );
	add_theme_support('woocommerce');
	add_theme_support('wc-product-gallery-lightbox');
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	$GLOBALS['content_width'] = 525;	
	/*---------- Register image sizes ----------*/	
	//Register image sizes
	add_image_size( 'vervoer_370x310', 370, 310, true ); //'vervoer_370x310 Our Services'
	add_image_size( 'vervoer_70x70', 70, 70, true ); //'vervoer_70x70 Our Testimonials'
	add_image_size( 'vervoer_370x290', 370, 290, true ); //'vervoer_370x290 Latest News'
	add_image_size( 'vervoer_440x305', 440, 305, true ); //'vervoer_440x305 Our Team'
	add_image_size( 'vervoer_310x305', 310, 305, true ); //'vervoer_310x305 Our Team V2'
	add_image_size( 'vervoer_1170x440', 1170, 440, true ); //'vervoer_1170x440 Our Blog'
	/*---------- Register image sizes ends ----------*/
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'main_menu' => esc_html__( 'Main Menu', 'vervoer' ),
		'onepage_menu' => esc_html__( 'OnePage Menu', 'vervoer' ),
		'main_menu_two' => esc_html__( 'Main Menu Two', 'vervoer' ),
	) );
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'      => 250,
		'height'     => 250,
		'flex-width' => true,
	) );
	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_editor_style();
	add_action( 'admin_init', 'vervoer_admin_init', 2000000 );
}

function vervoer_admin_init() {
	remove_action( 'admin_notices', array( 'ReduxFramework', '_admin_notices' ), 99 );
}

/*---------- Sidebar settings ----------*/

function vervoer_widgets_init() {

	global $wp_registered_sidebars;
	$theme_options = get_theme_mod( 'vervoer' . '_options-mods' );
	register_sidebar( array(
		'name'          => esc_html__( 'Default Sidebar', 'vervoer' ),
		'id'            => 'default-sidebar',
		'description'   => esc_html__( 'Widgets in this area will be shown on the right-hand side.', 'vervoer' ),
		'before_widget' => '<div id="%1$s" class="mrwidget widget sidebar-widget single-sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title"><h3>',
		'after_title'   => '</h3></div>',
	) );
	register_sidebar(array(
		'name' => esc_html__('Footer Widget', 'vervoer'),
		'id' => 'footer-sidebar',
		'description' => esc_html__('Widgets in this area will be shown in Footer Area.', 'vervoer'),
		'before_widget'=>'<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 footer-column"><div id="%1$s" class="footer-widget single-footer-widget %2$s">',
		'after_widget'=>'</div></div>',
		'before_title'  => '<div class="widget-title"><h3>',
		'after_title'   => '</h3></div>',
	));
	if ( class_exists( '\Elementor\Plugin' )){
	register_sidebar(array(
		'name' => esc_html__('RTL Footer Widget', 'vervoer'),
		'id' => 'footer-sidebar-2',
		'description' => esc_html__('Widgets in this area will be shown in Footer Area.', 'vervoer'),
		'before_widget'=>'<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 footer-column"><div id="%1$s" class="footer-widget single-footer-widget %2$s">',
		'after_widget'=>'</div></div>',
		'before_title'  => '<div class="widget-title"><h3>',
		'after_title'   => '</h3></div>',
	));
	register_sidebar(array(
		'name' => esc_html__('Services Widget', 'vervoer'),
		'id' => 'service-sidebar',
		'description'   => esc_html__( 'Widgets in this area will be shown on the right-hand side.', 'vervoer' ),
		'before_widget' => '<div id="%1$s" class="mrwidget widget sidebar-widget single-sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title"><h3>',
		'after_title'   => '</h3></div>',
	));
	}
	register_sidebar(array(
		'name' => esc_html__( 'Blog Listing', 'vervoer' ),
		'id' => 'blog-sidebar',
		'description'   => esc_html__( 'Widgets in this area will be shown on the right-hand side.', 'vervoer' ),
		'before_widget' => '<div id="%1$s" class="mrwidget widget sidebar-widget single-sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title"><h3>',
		'after_title'   => '</h3></div>',
	));
	if ( ! is_object( vervoer_WSH() ) ) {
		return;
	}

	$sidebars = vervoer_set( $theme_options, 'custom_sidebar_name' );

	foreach ( array_filter( (array) $sidebars ) as $sidebar ) {

		if ( vervoer_set( $sidebar, 'topcopy' ) ) {
			continue;
		}

		$name = $sidebar;
		if ( ! $name ) {
			continue;
		}
		$slug = str_replace( ' ', '_', $name );

		register_sidebar( array(
			'name'          => $name,
			'id'            => sanitize_title( $slug ),
			'before_widget' => '<div id="%1$s" class="%2$s widget single-sidebar">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="title"><h3>',
			'after_title'   => '</h3></div>',
		) );
	}

	update_option( 'wp_registered_sidebars', $wp_registered_sidebars );
}

add_action( 'widgets_init', 'vervoer_widgets_init' );

/*---------- Sidebar settings ends ----------*/

/*---------- Gutenberg settings ----------*/

function vervoer_gutenberg_editor_palette_styles() {
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => esc_html__( 'strong yellow', 'vervoer' ),
            'slug' => 'strong-yellow',
            'color' => '#f7bd00',
        ),
        array(
            'name' => esc_html__( 'strong white', 'vervoer' ),
            'slug' => 'strong-white',
            'color' => '#fff',
        ),
		array(
            'name' => esc_html__( 'light black', 'vervoer' ),
            'slug' => 'light-black',
            'color' => '#242424',
        ),
        array(
            'name' => esc_html__( 'very light gray', 'vervoer' ),
            'slug' => 'very-light-gray',
            'color' => '#797979',
        ),
        array(
            'name' => esc_html__( 'very dark black', 'vervoer' ),
            'slug' => 'very-dark-black',
            'color' => '#000000',
        ),
    ) );
	
	add_theme_support( 'editor-font-sizes', array(
		array(
			'name' => esc_html__( 'Small', 'vervoer' ),
			'size' => 10,
			'slug' => 'small'
		),
		array(
			'name' => esc_html__( 'Normal', 'vervoer' ),
			'size' => 15,
			'slug' => 'normal'
		),
		array(
			'name' => esc_html__( 'Large', 'vervoer' ),
			'size' => 24,
			'slug' => 'large'
		),
		array(
			'name' => esc_html__( 'Huge', 'vervoer' ),
			'size' => 36,
			'slug' => 'huge'
		)
	) );
	
}
add_action( 'after_setup_theme', 'vervoer_gutenberg_editor_palette_styles' );

/*---------- Gutenberg settings ends ----------*/

/*---------- Enqueue Styles and Scripts ----------*/

function vervoer_enqueue_scripts() {	
    //HTML styles
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css' );
	wp_enqueue_style( 'banner-section', get_template_directory_uri() . '/assets/css/banner-section.css' );
	wp_enqueue_style( 'blog-section', get_template_directory_uri() . '/assets/css/blog-section.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
	wp_enqueue_style( 'botstrap-select', get_template_directory_uri() . '/assets/css/botstrap-select.min.css' );
	wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/assets/css/flaticon.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css' );
	wp_enqueue_style( 'vervoer-footer', get_template_directory_uri() . '/assets/css/footer.css' );
	wp_enqueue_style( 'global', get_template_directory_uri() . '/assets/css/global.css' );
	wp_enqueue_style( 'vervoer-header', get_template_directory_uri() . '/assets/css/header.css' );
	wp_enqueue_style( 'icofont', get_template_directory_uri() . '/assets/css/icofont.css' );
	wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css' );
	wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.css' );
	wp_enqueue_style( 'multi-scroll', get_template_directory_uri() . '/assets/css/multi-scroll.css' );
	wp_enqueue_style( 'nice-select', get_template_directory_uri() . '/assets/css/nice-select.css' );
	wp_enqueue_style( 'owl', get_template_directory_uri() . '/assets/css/owl.css' );
	
	
	//Peefixe Change  CSS
	wp_enqueue_style( 'vervoer-main', get_stylesheet_uri() );
	wp_enqueue_style( 'vervoer-correction', get_template_directory_uri() . '/assets/css/correction.css' );
	wp_enqueue_style( 'vervoer-style', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_style( 'vervoer-responsive', get_template_directory_uri() . '/assets/css/responsive.css' );	
	
	
	
	//Theme Core
	wp_enqueue_style( 'vervoer-error', get_template_directory_uri() . '/assets/css/theme/error.css' );
	wp_enqueue_style( 'vervoer-fixing', get_template_directory_uri() . '/assets/css/theme/fixing.css' );
	wp_enqueue_style( 'vervoer-gutenberg', get_template_directory_uri() . '/assets/css/theme/gutenberg.css' );
	wp_enqueue_style( 'vervoer-sidebar', get_template_directory_uri() . '/assets/css/theme/sidebar.css' );
	wp_enqueue_style( 'vervoer-tut', get_template_directory_uri() . '/assets/css/theme/tut.css' );
	wp_enqueue_style( 'vervoer-comment', get_template_directory_uri() . '/assets/css/theme/comment.css' );
   
	//scripts
	wp_enqueue_script( 'jquery-ui-core');
	wp_enqueue_script( 'appear', get_template_directory_uri().'/assets/js/appear.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/assets/js/bootstrap.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'bxslider', get_template_directory_uri().'/assets/js/bxslider.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'circle-progress', get_template_directory_uri().'/assets/js/circle-progress.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'countTo', get_template_directory_uri().'/assets/js/jquery.countTo.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'fancybox', get_template_directory_uri().'/assets/js/jquery.fancybox.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'nice-select', get_template_directory_uri().'/assets/js/jquery.nice-select.min.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'jquery-ui', get_template_directory_uri().'/assets/js/jquery-ui.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'multi-scroll', get_template_directory_uri().'/assets/js/multi-scroll.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'owl', get_template_directory_uri().'/assets/js/owl.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'parallax', get_template_directory_uri().'/assets/js/parallax.min.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'parallax-scroll', get_template_directory_uri().'/assets/js/parallax-scroll.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'scrollbar', get_template_directory_uri().'/assets/js/scrollbar.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'TweenMax', get_template_directory_uri().'/assets/js/TweenMax.min.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'wow', get_template_directory_uri().'/assets/js/wow.js', array( 'jquery' ), '2.1.2', true );
	
	
	
	wp_enqueue_script( 'vervoer-main-script', get_template_directory_uri().'/assets/js/main.js', array(), false, true );
	if( is_singular() ) wp_enqueue_script('comment-reply');	
}
add_action( 'wp_enqueue_scripts', 'vervoer_enqueue_scripts' );

/*---------- Enqueue styles and scripts ends ----------*/

/*---------- Google fonts ----------*/

function vervoer_fonts_url() {
	
	$fonts_url = '';
	
		$font_families['Inter']      = 'Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap';
		
		$font_families['Sacramento']      = 'Sacramento:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap';
		
		$font_families = apply_filters( 'VERVOER/includes/classes/header_enqueue/font_families', $font_families );
		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);
		$protocol  = is_ssl() ? 'https' : 'http';
		$fonts_url = add_query_arg( $query_args, $protocol . '://fonts.googleapis.com/css' );
		return esc_url_raw($fonts_url);
}









function vervoer_theme_styles() {
    wp_enqueue_style( 'vervoer-theme-fonts', vervoer_fonts_url(), array(), null );
}

add_action( 'wp_enqueue_scripts', 'vervoer_theme_styles' );
add_action( 'admin_enqueue_scripts', 'vervoer_theme_styles' );

/*---------- Google fonts ends ----------*/

if ( ! function_exists( 'vervoer_set' ) ) {
	function vervoer_set( $var, $key, $def = '' ) {
		//if( ! $var ) return false;

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

// 2) vervoer_add_editor_styles function

function vervoer_add_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'admin_init', 'vervoer_add_editor_styles' );




// 3) Add specific CSS class by filter body class.

$options = vervoer_WSH()->option(); 
if( vervoer_set($options, 'boxed_wrapper') ){

	add_filter( 'body_class', function( $classes ) {
		$classes[] = 'boxed_wrapper';
		return $classes;
	} );
}

function vervoer_related_products_limit() {
  global $product;
	
	$args['posts_per_page'] = 6;
	return $args;
}
/**
 * product per page
 */
add_filter( 'loop_shop_per_page', 'vervoer_loop_shop_per_page', 20 );

function vervoer_loop_shop_per_page( $cols ) {
		$options     = vervoer_WSH()->option();		
		$shop_product = esc_attr( $options->get( 'shop_product') );	
  $cols =  $shop_product;
  return $cols;
}







function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
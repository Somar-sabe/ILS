<?php
/**
 * The header for our theme
 */
$options = vervoer_WSH()->option();
$allowed_html = wp_kses_allowed_html( 'post' );
$icon_href = $options->get( 'image_favicon' ); 
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php if (function_exists( 'has_site_icon' ) || has_site_icon() ): ?>
		<?php if( $icon_href ):?>	
		<!-- Fav Icon -->
		<link rel="icon" href="<?php echo esc_url($icon_href['url']); ?>" type="image/x-icon">
		<?php endif; ?>
		<?php endif; ?>
		<!-- Responsive -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <?php wp_head(); ?>
</head>
	
<body <?php body_class(); ?>> 
<?php
if ( ! function_exists( 'wp_body_open' ) ) {
		function wp_body_open() {
			do_action( 'wp_body_open' );
		}
}?>

<main class="boxed_wrapper <?php if($options->get( 'theme_rtl' ) ): echo esc_attr_e( 'RTL', 'vervoer' ); endif;?>">		
<?php do_action( 'vervoer_main_header' ); ?>

			
<?php if(!$options->get( 'theme_preloader' ) ):?>	

<!-- Preloader -->
<div class="loader-wrap">
    <div class="preloader">
        <div class="preloader-close">x</div>
        <div id="handle-preloader" class="handle-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
				
					<?php echo wp_kses( $options->get( 'preloader_text_a', ' ' ), $allowed_html ); ?>
                    
                </div>
            </div>  
        </div>
    </div>
</div>
<!-- End preloader -->

<?php endif; ?>		
	
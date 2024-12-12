<?php
/**
 * 404 page file
 */

$text = sprintf(__('It seems we can\'t find what you\'re looking for. Perhaps searching can help ', 'vervoer'), esc_url(home_url('/')));
$allowed_html = wp_kses_allowed_html( 'post' );
?>
<?php get_header();
$data = \VERVOER\Includes\Classes\Common::instance()->data( '404' )->get();
do_action( 'vervoer_banner', $data );
$options = vervoer_WSH()->option();

if ( class_exists( '\Elementor\Plugin' ) AND $data->get( 'tpl-type' ) == 'e' AND $data->get( 'tpl-elementor' ) ) {
	echo Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $data->get( 'tpl-elementor' ) );
} else {
	?>
	
<section class="error-section centred">
	<div class="container">
		<div class="inner-box">
			<figure class="error-image p_relative d_block mb_70">
				<img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/error.png');?>" alt="<?php echo wp_kses( $options->get( '404_page_text'), $allowed_html ); ?>">
			</figure>
			
			<?php if($options->get('404_page_title' ) ): ?>	
			<h2 class="d_block fs_50 lh_60 fw_bold mb_12"><?php echo wp_kses( $options->get( '404_title'), $allowed_html ); ?></h2>
			<?php else: ?>
			<h2 class="d_block fs_50 lh_60 fw_bold mb_12"><?php esc_html_e( '404 - Page Not Found', 'vervoer' ); ?></h2>
			<?php endif; ?>
			
			<?php if($options->get('404_page_text' ) ): ?>
			<h3 class="d_block fs_24 fw_medium mb_55"><?php echo wp_kses( $options->get( '404_page_text'), $allowed_html ); ?></h3>
			<?php else: ?>	
			<h3 class="d_block fs_24 fw_medium mb_55"><?php esc_html_e( 'The page you are looking for does not exist.', 'vervoer' ); ?></h3>
			<?php endif; ?>	
			
			<?php if(!$options->get('back_home_btn' ) ): ?>		
			<?php if($options->get('back_home_btn_label' ) ): ?>
			
			
			<div class="link-button">
				<a href="<?php echo( home_url( '/' ) ); ?>" class="button-style-three"><i class="flaticon-document"></i><?php echo wp_kses( $options->get( 'back_home_btn_label'), $allowed_html ); ?></a>
			</div>
			
			<?php else: ?>
			
			<div class="link-button">
				<a href="<?php echo( home_url( '/' ) ); ?>" class="button-style-three"><i class="flaticon-document"></i><?php esc_html_e( 'Back to Home', 'vervoer' ); ?></a>
			</div>
			
			<?php endif; ?>		
			<?php endif; ?>
			
			
		</div>
	</div>
</section>
<?php
}
get_footer(); ?>

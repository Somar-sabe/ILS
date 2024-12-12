<?php
/**
 * Blog Post Main File.
 *
 * @package VERVOER
 */

get_header();
$data    = \VERVOER\Includes\Classes\Common::instance()->data( 'single' )->get();

$options = vervoer_WSH()->option();
$layout = $data->get( 'layout' );
$sidebar = $data->get( 'sidebar' );
$class = ( $data->get( 'layout' ) != 'full' ) ? 'col-xs-12 col-sm-12 col-md-12 col-lg-8' : 'col-xs-12 col-sm-12 col-md-12';
$mr_width = (is_active_sidebar( $sidebar )) ?  $class : 'col-12';

if ( class_exists( '\Elementor\Plugin' ) && $data->get( 'tpl-type' ) == 'e') {
	while(have_posts()) {
	   the_post();
	   the_content();
    }

} else {
	?>

<div class="mr_banner_single">
<?php vervoer_template_load( 'templates/mrbanner.php', compact( 'options', 'data' ) ); ?>	
</div>	

<section class="blog-details-section sec-padd-150">
    <div class="container">
        <div class="row">
			
		 <?php vervoer_template_load( 'templates/mrsidebar.php', compact( 'options', 'data' ) ); ?>	
			
			<div class="wp-style content-side <?php echo esc_attr( $mr_width ); ?>">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php vervoer_template_load( 'templates/blog-single/single-content.php', compact( 'options', 'data' ) ); ?>
				
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</section>

<?php
}
get_footer();

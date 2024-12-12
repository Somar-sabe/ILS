<?php
/**
 * Blog Main File.
 */

get_header();
global $wp_query;
$data  = \VERVOER\Includes\Classes\Common::instance()->data( 'blog' )->get();


if ( class_exists( '\Elementor\Plugin' ) AND $data->get( 'tpl-type' ) == 'e' AND $data->get( 'tpl-elementor' ) ) {
	echo Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $data->get( 'tpl-elementor' ) );
} else {
?>



<div class="mr_banner_index">
<?php vervoer_template_load( 'templates/mrbanner.php', compact( 'options', 'data' ) ); ?>	
</div>	

<div class="mr_page_index">	
<?php vervoer_template_load( 'templates/mrcontent.php', compact( 'options', 'data' ) ); ?>	
</div>	

<?php
}
get_footer();
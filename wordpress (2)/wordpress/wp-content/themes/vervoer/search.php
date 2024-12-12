<?php
/**
 * Default Template Main File.
 * @package VERVOER
 */

get_header();
$data  = \VERVOER\Includes\Classes\Common::instance()->data( 'search' )->get();

?>

<?php if ( class_exists( '\Elementor\Plugin' )):?>
	<?php do_action( 'vervoer_banner', $data );?>
<?php endif;?>
<?php if( have_posts() ) : ?>


<div class="mr_page_search">	
<?php vervoer_template_load( 'templates/mrcontent.php', compact( 'options', 'data' ) ); ?>	
</div>

<?php else : ?>  
<?php get_template_part('templates/search'); ?>	
<?php endif; ?>	
<?php get_footer(); ?>

<?php 
/**
 * @package Theme
 */
?>
<?php 
get_header();
$data  = \VERVOER\Includes\Classes\Common::instance()->data( 'single' )->get();
$layout = $data->get('layout') ? $data->get('layout') : 'right';
$class = ( $data->get( 'layout' ) != 'full' ) ? 'col-lg-8 col-sm-12' : 'col-xs-12 col-sm-12 col-md-12';
do_action( 'intervio_banner', $data );
?>

  <section class="sidebar-page-container mrsingle">
        <div class="auto-container">
            <div class="row">	
		<!-- sidebar area -->
            <?php if ( $data->get( 'layout' ) == 'left' ) { ?>
			<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 mr_side_left">
				 <?php	do_action( 'intervio_sidebar', $data );?>
			</div>
		 <?php	} ?>
		  <?php if ( $data->get( 'layout' ) == 'right' ) { ?>
			<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 mr_side_right">
				 <?php	do_action( 'intervio_sidebar', $data );?>
			</div>
		 <?php	} ?>
						
			<div class="wp-style <?php echo esc_attr( $class ); ?> content-side">
					
						
				<h1>Content will be here </h1>
				</div>	
				 
			</div>     
    </div>
</section> 


<?php get_footer(); ?>
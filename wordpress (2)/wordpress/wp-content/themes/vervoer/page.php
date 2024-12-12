<?php
/**
 * Default Template Main File.
 * @package VERVOER
 */

get_header();
$data  = \VERVOER\Includes\Classes\Common::instance()->data( 'single' )->get();
$layout = $data->get( 'layout' );
$sidebar = $data->get( 'sidebar' );
$class = ( $data->get( 'layout' ) != 'full' ) ? 'col-xs-12 col-sm-12 col-md-12 col-lg-8' : 'col-xs-12 col-sm-12 col-md-12';
$mr_width = (is_active_sidebar( $sidebar )) ?  $class : 'col-12';
?>

<?php if ( class_exists( '\Elementor\Plugin' )):?>
	<?php do_action( 'vervoer_banner', $data );?>
<?php endif;?>

<section class="blog-details-section sec-padd-150">
    <div class="container">
        <div class="row">
		
	<?php if ( is_active_sidebar( $sidebar ) ) : ?>
		<?php
		if ( $data->get( 'layout' ) == 'left' ) {
			do_action( 'vervoer_sidebar', $data );
		}
		?>
	<?php endif; ?>	
		 <div class="content-side <?php echo esc_attr( $mr_width ); ?>">
                <div class="wp-style blog-standard-content p_relative d_block">       
					<?php while ( have_posts() ): the_post(); ?>
					       <div class="text">
                        <?php the_content(); ?>
							     </div>
                    <?php endwhile; ?>
                  
                    <div class="clearfix"></div>
                    <?php
                    $defaults = array(
                        'before' => '<div class="paginate_links">' . esc_html__( 'Pages:', 'vervoer' ),
                        'after'  => '</div>',
    
                    );
                    wp_link_pages( $defaults );
                    ?>
                    <?php comments_template() ?>
                </div>
            </div>	
<?php if ( is_active_sidebar( $sidebar ) ) : ?>
		<!--Sidebar Start-->
		<?php
		if ( $data->get( 'layout' ) == 'right' ) {
			do_action( 'vervoer_sidebar', $data );
		}
		?>
<?php endif; ?>		
	</div>
</div>
</section>
	
	
	<?php

get_footer();
<?php
$options = vervoer_WSH()->option();
$allowed_html = wp_kses_allowed_html();
$search_image    = $options->get( 'search_image' );
$search_image    = vervoer_set( $search_image, 'url', VERVOER_URI . 'assets/images/search.jpg' );

?>

<section class="error-section p_relative d_block centred">
	<div class="container">
		<div class="inner-box">
			<figure class="error-image p_relative d_block mb_70">
				<img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/search.png');?>" alt="<?php echo wp_kses( $options->get( '404_title'), $allowed_html ); ?>">
			</figure>
			
			
			<?php if($options->get('search_page_title' ) ): ?>
			<h2 class="d_block fs_50 lh_60 fw_bold mb_12"><?php echo wp_kses( $options->get( 'search_page_title'), $allowed_html ); ?></h2>
			
			<?php else : ?>
			
			<h2 class="d_block fs_50 lh_60 fw_bold mb_12"><?php esc_html_e( 'Oops! Search not Found', 'vervoer' ); ?></h2>
			
			<?php endif; ?>	
			
			<?php if($options->get('search_page_text' ) ): ?>
			<h3 class="d_block fs_24 fw_medium mb_55"><?php echo(wp_kses($options->get('search_page_text' ), $allowed_html )) ?></h3>
			<?php else : ?>
			<h3 class="d_block fs_24 fw_medium mb_55"><?php esc_html_e( 'The page you are looking for not found.', 'vervoer' ); ?></h3>
			<?php endif; ?>	
			
			
			
			
			<div class="link-button">
                <a href="<?php echo( home_url( '/' ) ); ?>" class="button-style-three"><i class="flaticon-document"></i> <?php esc_html_e( 'Back to Homepage', 'vervoer' ); ?></a>
            </div>
			
			<br><br>
			<div class="searchpage_form">
				<?php echo get_search_form(); ?>
			</div>
		</div>
	</div>
</section>
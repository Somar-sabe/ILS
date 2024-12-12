<?php if ( $data->get( 'enable_banner' ) ) : ?>

<?php if ( $data->get( 'banner' ) ) : ?>
<section class="page-banner-section" style="background-image: url(<?php echo esc_url( $data->get( 'banner' ) ); ?>);">
<?php else : ?>	
<section class="page-banner-section" style="background-image: url(<?php echo esc_url(get_template_directory_uri().'/images/background/page-banner-bg.jpg');?>);">
<?php endif; ?>	

    <div class="container">
        <h1 class="page-banner-title"><?php if( $data->get( 'title' ) ) echo wp_kses( $data->get( 'title' ), true ); else( wp_title( '' ) ); ?></h1>
        <ul class="breadcrumb">
            <?php echo vervoer_the_breadcrumb(); ?>
        </ul>
    </div>
</section>

<?php endif; ?>
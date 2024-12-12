<?php
$options = vervoer_WSH()->option();
$allowed_html = wp_kses_allowed_html( 'post' );

//Logo Settings
$image_logo = $options->get( 'image_normal_logo' );
$logo_dimension = $options->get( 'normal_logo_dimension' );

$logo_type = '';
$logo_text = '';
$logo_typography = '';
/**
 * Footer Main File.
 *
 * @package IMMIGRO
 * @author  tonatheme
 * @version 1.0
 */
global $wp_query;
$page_id = ( $wp_query->is_posts_page ) ? $wp_query->queried_object->ID : get_the_ID();
$options = vervoer_WSH()->option();
?>


<?php vervoer_template_load( 'templates/footer/footer.php', compact( 'page_id' ) );?>

<?php if(!$options->get( 'to_top' ) ):?>
<!-- Scroll to Top -->
<button class="scroll-top scroll-to-target" data-target="html">
    <i class="flaticon-right-arrow-1"></i>
</button>
<!--End Scroll to Top -->	
<?php endif; ?>

<!-- Search Popup -->
<div id="search-popup" class="search-popup">
    <div class="popup-inner">
        <div class="upper-box clearfix">
            <figure class="logo-box pull-left">
				<?php echo vervoer_logo( $logo_type, $image_logo, $logo_dimension, $logo_text, $logo_typography ); ?>
			</figure>
            <div class="close-search pull-right"><i class="flaticon-cross"></i></div>
        </div>
        <div class="overlay-layer"></div>
        <div class="container">
            <div class="search-form">
                <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="s" value="" placeholder="<?php echo wp_kses( $options->get( 'search_text_v1'), $allowed_html ); ?>" required >
                            <button type="submit"><i class="flaticon-search"></i></button>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Search Popup -->





</main>
<?php wp_footer(); ?>
</body>
</html>

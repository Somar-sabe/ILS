<?php
/**
 * Search Form template
 *
 * @package VERVOER
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Restricted' );
}
?>

<div class="search-widget">
	<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="post">
		<div class="form-group">
			<input type="search" name="s" placeholder="<?php echo esc_attr__( 'Search', 'vervoer' ); ?>" required>
			<button type="submit"><i class="flaticon-search-1"></i></button>
		</div>
	</form>
</div>



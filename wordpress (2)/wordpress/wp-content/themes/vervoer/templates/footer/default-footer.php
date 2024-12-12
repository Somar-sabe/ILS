<?php
/**
 * Footer Template  File
 *
 * @package VERVOER
 * @author  Tona Theme
 * @version 1.0
 */

$options = vervoer_WSH()->option();
$allowed_html = wp_kses_allowed_html( 'post' );
?>


 
<div  class="main-footer p_relative one monster">
   <div class="container">
	<div class="row">
	  <?php dynamic_sidebar( 'footer-sidebar' ); ?>
	</div>
</div>
</div>   
    <!--End footer area-->
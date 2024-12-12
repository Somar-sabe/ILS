<?php 

$options = vervoer_WSH()->option();
$allowed_html = wp_kses_allowed_html();
$tags = wp_get_post_tags( get_the_ID() );
$get_tags   = get_the_tag_list( get_the_ID() );
?>


<?php if(!$options->get('single_post_tag' ) ): ?>
<?php if(has_tag()) { ?>

<div class="post-share-option">
	<ul class="tags-list">
		<li><?php esc_html_e( 'Tags:', 'vervoer' ); ?><?php the_tags(' ', '<span class="commax">,</span>  ', ''); ?></li>
	</ul>
</div>

<?php }  ?>
<?php endif; ?>



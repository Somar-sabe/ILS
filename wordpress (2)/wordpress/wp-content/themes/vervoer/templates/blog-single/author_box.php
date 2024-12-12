<?php if($options->get('single_author_box' ) ): ?>

<div class="author-box">
	<figure class="author-thumb">
		<?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?>
	</figure>
	<h5><?php echo esc_html( get_the_author_meta( 'display_name' ) ); ?></h5>
	<p><?php echo esc_html( get_the_author_meta( 'description' ) ); ?></p>
</div>
	
<?php endif; ?>
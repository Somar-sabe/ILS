<div class="blog-left-side">
	<div class="news-block-three wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
		<div class="inner-box">
			<div class="image-box">
				<figure class="image">
					<?php if(!$options->get('single_post_thumb' ) ): ?>		
						<?php the_post_thumbnail(); ?>
					<?php endif; ?>
				</figure>
			</div>
			<div class="lower-content">
				<ul class="post-info mb_30 mt_40">
				
				
					<?php if(!$options->get('single_post_author' ) ): ?>
					<li><i class="flaticon-user"></i> <a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta('ID') )); ?>"><?php the_author(); ?></a></li>
					<?php endif;?>
					
					<?php if(!$options->get('single_post_date' ) ): ?>
					<li><i class="flaticon-calender-1"></i><a href="<?php echo get_day_link( get_the_time( 'Y' ), get_the_time( 'm' ), get_the_time( 'd' ) ); ?>"><?php echo get_the_date(); ?></a></li>
					<?php endif;?>
					
					<?php if(!$options->get('single_post_comments' ) ): ?>
					<li><i class="flaticon-price-tag"></i><?php comments_number(); ?></li>
					<?php endif;?>
					
					
				</ul>
			</div>
		</div>
	</div>
	<div class="text">
	<?php the_content(); ?>
		<div class="clearfix"></div>
		<?php wp_link_pages(array('before'=>'<div class="paginate_links">'.esc_html__('Pages: ', 'vervoer'), 'after' => '</div>', 'link_before'=>'', 'link_after'=>'')); ?>
	</div>
	
	<?php vervoer_template_load( 'templates/blog-single/tags.php', compact( 'options', 'data' ) ); ?>
	
	
	
	<?php comments_template(); ?>

	
</div>
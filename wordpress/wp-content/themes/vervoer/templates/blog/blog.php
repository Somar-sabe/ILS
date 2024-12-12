<?php
$options = vervoer_WSH()->option();
$allowed_html = wp_kses_allowed_html();

/**
 * Blog Content Template
 *
 * @package    WordPress
 * @subpackage VERVOER
 * @author     Tona Theme
 * @version    1.0
 */

if ( class_exists( 'Vervoer_Resizer' ) ) {
	$img_obj = new Vervoer_Resizer();
} else {
	$img_obj = array();
}
$allowed_tags = wp_kses_allowed_html('post');
global $post;
?>
<div <?php post_class(); ?>>

	<div class="news-block-three wow fadeInUp mb_40" data-wow-delay="00ms" data-wow-duration="1500ms">
		<div class="inner-box">
			<div class="image-box">
				<figure class="image">
				
					<?php if ( has_post_thumbnail() ) { ?>	
					
					<a href="<?php echo esc_url(get_permalink(get_the_id()));?>">
						<?php the_post_thumbnail(); ?>
					</a>
					
					<?php } ?>
					
				</figure>
			</div>
			<div class="lower-content">
				<ul class="post-info mb_20">
				
					<?php if(!$options->get('blog_post_author' ) ): ?>
					<li><i class="flaticon-user"></i> <a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta('ID') )); ?>"><?php the_author(); ?></a></li>
					<?php endif;?>
				
					<?php if(!$options->get('blog_post_date' ) ): ?>
					<li><i class="flaticon-calender-1"></i><a href="<?php echo get_day_link( get_the_time( 'Y' ), get_the_time( 'm' ), get_the_time( 'd' ) ); ?>"><?php echo get_the_date(); ?></a></li>
					<?php endif;?>
					
					<?php if(!$options->get('blog_post_comment' ) ): ?>
					<li><i class="flaticon-price-tag"></i><?php comments_number(); ?></li>
					<?php endif;?>
					
				</ul>
				<h4><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_title(); ?></a></h4>
				
				<?php the_excerpt(); ?>
				
				<?php if(!$options->get('blog_post_readmore' ) ): ?>						
				<?php if($options->get('blog_post_readmoretext' ) ): ?>	
				
				<div class="btn-box">
					<a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php echo wp_kses( $options->get( 'blog_post_readmoretext'), $allowed_html ); ?></a>
				</div>
				
				<?php else: ?>	

				<div class="btn-box">
					<a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php esc_html_e('Read More', 'vervoer');?></a>
				</div>
				
				<?php endif; ?>	
				<?php endif;?>
				
			</div>
		</div>
	</div>
    
</div>
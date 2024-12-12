<?php

namespace VERVOERPLUGIN\Element;

use Elementor\Controls_Manager;
use Elementor\Controls_Stack;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Scheme_Color;
use Elementor\Group_Control_Border;
use Elementor\Repeater;
use Elementor\Widget_Base;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Plugin;
use Elementor\Utils;

/**
 * Elementor button widget.
 * Elementor widget that displays a button with the ability to control every
 * aspect of the button design.
 *
 * @since 1.0.0
 */
class Blog extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'vervoer_blog';
	}

	/**
	 * Get widget title.
	 * Retrieve button widget title.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Blog', 'vervoer' );
	}

	/**
	 * Get widget icon.
	 * Retrieve button widget icon.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'fa fa-briefcase';
	}

	/**
	 * Get widget categories.
	 * Retrieve the list of categories the button widget belongs to.
	 * Used to determine where to display the widget in the editor.
	 *
	 * @since  2.0.0
	 * @access public
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'vervoer' ];
	}
	
	/**
	 * Register button widget controls.
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since  1.0.0
	 * @access protected
	 */
	protected function _register_controls() {
		$this->start_controls_section(
			'blog',
			[
				'label' => esc_html__( 'Blog', 'vervoer' ),
			]
		);
		$this->add_control(
            'thumb', 
				[
					'label'   => esc_html__( 'Choose Post Image', 'constech' ),
					'label_block' => true,
					'type'    => Controls_Manager::SELECT,
					'default' => 'style1',
					'options' => array(
						'style1' => esc_html__( 'Meta Box Image', 'constech' ),
						'style2' => esc_html__( 'Dafult Thumbnail', 'constech' ),
					),
				]
		);
		$this->add_control(
            'style', 
				[
					'label'   => esc_html__( 'Choose Different Style', 'rashid' ),
					'label_block' => true,
					'type'    => Controls_Manager::SELECT,
					'default' => 'style1',
					'options' => array(
						'style1' => esc_html__( 'Choose Style 1', 'rashid' ),
						'style2' => esc_html__( 'Choose Style 2', 'rashid' ),
						'style3' => esc_html__( 'Choose Style 3', 'rashid' ),
						'style4' => esc_html__( 'Choose Style 4', 'rashid' ),
						'style5' => esc_html__( 'Choose Style 5', 'rashid' ),
						'style6' => esc_html__( 'Choose Style 6', 'rashid' ),
						'style7' => esc_html__( 'Choose Style 7', 'rashid' ),
					),
				]
		);
		
		$this->add_control(
			'bttn',
			[
				'label'       => __( 'Button', 'vervoer' ),
				'type'        => Controls_Manager::TEXT,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => esc_html__( 'Enter your Button Title', 'vervoer' ),
				'default' => esc_html__('Read More', 'vervoer'),
			]
		);	
		$this->add_control(
			'column',
			[
				'label'   => esc_html__( 'Column', 'vervoer' ),
				'type'    => Controls_Manager::SELECT,
				'default' => '3',
				'options' => array(
					'12'   => esc_html__( 'One Column', 'vervoer' ),
					'6'   => esc_html__( 'Two Column', 'vervoer' ),
					'4'   => esc_html__( 'Three Column', 'vervoer' ),
					'3'   => esc_html__( 'Four Column', 'vervoer' ),
					'2'   => esc_html__( 'Six Column', 'vervoer' ),
				),
			]
		);
		$this->add_control(
			'sec_class',
			[
				'label'       => __( 'Section Class', 'rashid' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter Section Class', 'rashid' ),
			]
		);
		
		
		$this->end_controls_section();
	
		$this->start_controls_section(
				'content_section',
				[
					'label' => __( 'Blog Block', 'vervoer' ),
					'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				]
			);
			
		
		$this->add_control(
			'text_limit',
			[
				'label'   => esc_html__( 'Text Limit', 'vervoer' ),
				'type'    => Controls_Manager::NUMBER,
				'default' => 15,
				'min'     => 1,
				'max'     => 100,
				'step'    => 1,
			]
		);
		$this->add_control(
			'query_number',
			[
				'label'   => esc_html__( 'Number of post', 'vervoer' ),
				'type'    => Controls_Manager::NUMBER,
				'default' => 3,
				'min'     => 1,
				'max'     => 100,
				'step'    => 1,
			]
		);
		$this->add_control(
			'query_orderby',
			[
				'label'   => esc_html__( 'Order By', 'vervoer' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'date',
				'options' => array(
					'date'       => esc_html__( 'Date', 'vervoer' ),
					'title'      => esc_html__( 'Title', 'vervoer' ),
					'menu_order' => esc_html__( 'Menu Order', 'vervoer' ),
					'rand'       => esc_html__( 'Random', 'vervoer' ),
				),
			]
		);
		$this->add_control(
			'query_order',
			[
				'label'   => esc_html__( 'Order', 'vervoer' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'DESC',
				'options' => array(
					'DESc' => esc_html__( 'DESC', 'vervoer' ),
					'ASC'  => esc_html__( 'ASC', 'vervoer' ),
				),
			]
		);
		$this->add_control(
			'query_exclude',
			[
				'label'       => esc_html__( 'Exclude', 'vervoer' ),
				'type'        => Controls_Manager::TEXT,
				'description' => esc_html__( 'Exclude posts, pages, etc. by ID with comma separated.', 'vervoer' ),
			]
		);
		$this->add_control(
            'query_category', 
				[
				  'type' => Controls_Manager::SELECT,
				  'label' => esc_html__('Category', 'vervoer'),
				  'options' => get_blog_categories()
				]
		);

		$this->add_control(
			'show_pagination',
			[
				'label' => __( 'Enable/Disable Pagination', 'vervoer' ),
				'type'     => Controls_Manager::SWITCHER,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enable/Disable Pagination', 'vervoer' ),
			]
		);
	
		
		$this->end_controls_section();

	}

	/**
	 * Render button widget output on the frontend.
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since  1.0.0
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();
        
        $paged = vervoer_set($_POST, 'paged') ? esc_attr($_POST['paged']) : 1;

		$this->add_render_attribute( 'wrapper', 'class', 'templatepath-vervoer' );
		$args = array(
			'post_type'      => 'post',
			'posts_per_page' => vervoer_set( $settings, 'query_number' ),
			'orderby'        => vervoer_set( $settings, 'query_orderby' ),
			'order'          => vervoer_set( $settings, 'query_order' ),
			'paged'         => $paged
		);
		if ( vervoer_set( $settings, 'query_exclude' ) ) {
			$settings['query_exclude'] = explode( ',', $settings['query_exclude'] );
			$args['post__not_in']      = vervoer_set( $settings, 'query_exclude' );
		}
		if( vervoer_set( $settings, 'query_category' ) ) $args['category_name'] = vervoer_set( $settings, 'query_category' );
		$query = new \WP_Query( $args );

		if ( $query->have_posts() ) 
		{ ?>

		<?php  if ( 'style1' === $settings['style'] ) : ?>
		 
		<section class="news-section <?php echo esc_attr($settings['sec_class']);?>">
			<div class="container">
				<div class="row">
				
					<?php while ( $query->have_posts() ) : $query->the_post();
						$meta_image = get_post_meta( get_the_id(), 'meta_image', true );
						?>
				
					<div class="col-sm-<?php echo esc_attr($settings['column'], true );?>">
						<div class="news-block-one mb_30 wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
							<div class="image-box">
								<figure>
									<?php  if ( 'style1' === $settings['thumb'] ) : ?>
									<img src="<?php echo wp_get_attachment_url($meta_image['id']);?>" alt="" />
									<?php endif; ?> 
									<?php  if ( 'style2' === $settings['thumb'] ) : ?>      
									<?php  the_post_thumbnail();    ?>
									<?php endif; ?> 
								</figure>
							</div>
							<div class="inner-box">
								<div class="blog-content">
									<ul class="post-info">
										<li class="authore"><i class="flaticon-user"></i><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta('ID') )); ?>"><?php the_author(); ?></a></li>
										<li class="post-date"> <i class="flaticon-calender-1"></i><a href="<?php echo get_day_link( get_the_time( 'Y' ), get_the_time( 'm' ), get_the_time( 'd' ) ); ?>"><?php echo get_the_date(); ?></a> </li>
									</ul>
									<div class="post-body">
										<h5 class="blog-title"><a href="<?php echo esc_url( the_permalink( get_the_id() ) );?>"><?php the_title(); ?></a></h5>
										<div class="blog-text"><?php echo vervoer_trim(get_the_content(), $settings['text_limit']); ?></div>                            
									</div>
								</div>
								<?php if($settings['bttn']): ?>
								<div class="vertical-text"><a href="<?php echo esc_url( the_permalink( get_the_id() ) );?>"><?php echo $settings['bttn'];?></a></div>
								<?php endif; ?>
							</div>
						</div> 
					</div>
					
					<?php endwhile; ?>  
					
				</div>
			</div>
		</section>
		

		<?php endif;?>
		
		<?php  if ( 'style2' === $settings['style'] ) : ?>
		
		<section class="news-section-two <?php echo esc_attr($settings['sec_class']);?>">
			<div class="container">
				<div class="row">
				
					<?php while ( $query->have_posts() ) : $query->the_post();
					$meta_image = get_post_meta( get_the_id(), 'meta_image', true );
					?>
				
					<div class="col-xl-<?php echo esc_attr($settings['column'], true );?> col-lg-6 col-md-12">
					
					
						<?php  if ( 'style1' === $settings['thumb'] ) : ?>
						<div class="news-block-two one mb_30 wow fadeInUp animated" style="background-image: url(<?php echo wp_get_attachment_url($meta_image['id']);?>);" data-wow-delay="600ms" data-wow-duration="1500ms">
						<?php endif; ?> 
						<?php  if ( 'style2' === $settings['thumb'] ) : ?>     

						<div class="news-block-two one mb_30 wow fadeInUp animated" style="background-image: url(<?php  the_post_thumbnail();    ?>);" data-wow-delay="600ms" data-wow-duration="1500ms">

						<?php endif; ?> 
							
							<div class="inner-box">
								<div class="blog-content">
									<ul class="blog-info">
										<li><i class="flaticon-user"></i><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta('ID') )); ?>"><?php the_author(); ?></a></li>
										<li><i class="flaticon-calender-1"></i><a href="<?php echo get_day_link( get_the_time( 'Y' ), get_the_time( 'm' ), get_the_time( 'd' ) ); ?>"><?php echo get_the_date(); ?></a></li>
									</ul>
									<h5 class="blog-title"><a href="<?php echo esc_url( the_permalink( get_the_id() ) );?>"><?php the_title(); ?></a></h5>
									<?php if($settings['bttn']): ?>
									<div class="read-more-btn"><a href="<?php echo esc_url( the_permalink( get_the_id() ) );?>"><?php echo $settings['bttn'];?></a></div>
									<?php endif; ?>
								</div>                        
							</div>
						</div> 
					</div>
					
					<?php endwhile; ?>
					
				</div>
			</div>
		</section>

		<?php endif;?>
		
		<?php  if ( 'style3' === $settings['style'] ) : ?>
		
		<section class="news-section-two <?php echo esc_attr($settings['sec_class']);?>">
			<div class="container">
				<div class="row">
				
					<?php while ( $query->have_posts() ) : $query->the_post();
					$meta_image = get_post_meta( get_the_id(), 'meta_image', true );
					?>
				
					<div class="col-xl-<?php echo esc_attr($settings['column'], true );?> col-lg-6 col-md-12">
					
					
						<?php  if ( 'style1' === $settings['thumb'] ) : ?>
						<div class="news-block-two two mb_30 wow fadeInUp animated" style="background-image: url(<?php echo wp_get_attachment_url($meta_image['id']);?>);" data-wow-delay="600ms" data-wow-duration="1500ms">
						<?php endif; ?> 
						<?php  if ( 'style2' === $settings['thumb'] ) : ?>     

						<div class="news-block-two two mb_30 wow fadeInUp animated" style="background-image: url(<?php  the_post_thumbnail();    ?>);" data-wow-delay="600ms" data-wow-duration="1500ms">

						<?php endif; ?> 
							
							<div class="inner-box">
								<div class="blog-content">
									<ul class="blog-info">
										<li><i class="flaticon-user"></i><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta('ID') )); ?>"><?php the_author(); ?></a></li>
										<li><i class="flaticon-calender-1"></i><a href="<?php echo get_day_link( get_the_time( 'Y' ), get_the_time( 'm' ), get_the_time( 'd' ) ); ?>"><?php echo get_the_date(); ?></a></li>
									</ul>
									<h5 class="blog-title"><a href="<?php echo esc_url( the_permalink( get_the_id() ) );?>"><?php the_title(); ?></a></h5>
									<?php if($settings['bttn']): ?>
									<div class="read-more-btn"><a href="<?php echo esc_url( the_permalink( get_the_id() ) );?>"><?php echo $settings['bttn'];?></a></div>
									<?php endif; ?>
								</div>                        
							</div>
						</div> 
					</div>
					
					<?php endwhile; ?>
					
				</div>
			</div>
		</section>

		<?php endif;?>
		
		<?php  if ( 'style4' === $settings['style'] ) : ?>
		
		
		<section class="news-section-two home-three  <?php echo esc_attr($settings['sec_class']);?>">
			<div class="container">
				<div class="row">
				
					<?php while ( $query->have_posts() ) : $query->the_post();
					$meta_image = get_post_meta( get_the_id(), 'meta_image', true );
					?>
				
					<div class="col-xl-<?php echo esc_attr($settings['column'], true );?> col-lg-6 col-md-6 col-sm-12">
					
						<?php  if ( 'style1' === $settings['thumb'] ) : ?>
						<div class="news-block-two three mb_30 wow fadeInUp animated" style="background-image:url(<?php echo wp_get_attachment_url($meta_image['id']);?>);" data-wow-delay="200ms" data-wow-duration="1500ms">
						<?php endif; ?> 
						<?php  if ( 'style2' === $settings['thumb'] ) : ?>     
						<div class="news-block-two three mb_30 wow fadeInUp animated" style="background-image:url(<?php  the_post_thumbnail();    ?>);" data-wow-delay="200ms" data-wow-duration="1500ms">

						<?php endif; ?> 
					
							<div class="inner-box">
								<div class="blog-content">
									<ul class="blog-info">
										<li><i class="flaticon-user"></i><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta('ID') )); ?>"><?php the_author(); ?></a></li>
										<li><i class="flaticon-calender-1"></i><a href="<?php echo get_day_link( get_the_time( 'Y' ), get_the_time( 'm' ), get_the_time( 'd' ) ); ?>"><?php echo get_the_date(); ?></a></li>
									</ul>
									<h5 class="blog-title"><a href="<?php echo esc_url( the_permalink( get_the_id() ) );?>"><?php the_title(); ?></a></h5>
									
									
									<?php if($settings['bttn']): ?>
									<div class="read-more-btn"><a href="<?php echo esc_url( the_permalink( get_the_id() ) );?>"><?php echo $settings['bttn'];?></a></div>
									<?php endif; ?>
									
								</div>                        
							</div>
						</div> 
					</div>
					
					<?php endwhile; ?>
					
				</div>
			</div>
		</section>
		
		<?php endif;?>
		
		<?php  if ( 'style5' === $settings['style'] ) : ?>
		
		<section class="service-section-three <?php echo esc_attr($settings['sec_class']);?>">
			<div class="container">
				<div class="row">
				
					<?php while ( $query->have_posts() ) : $query->the_post();
					$meta_image = get_post_meta( get_the_id(), 'meta_image', true );
					?>
				
					<div class="col-xl-<?php echo esc_attr($settings['column'], true );?> col-lg-6 col-md-12">
						<div class="service-block-three mb_30 wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
							<div class="service-image">
								<figure>
									<?php  if ( 'style1' === $settings['thumb'] ) : ?>
									<img src="<?php echo wp_get_attachment_url($meta_image['id']);?>" alt="" />
									<?php endif; ?> 
									<?php  if ( 'style2' === $settings['thumb'] ) : ?>      
									<?php  the_post_thumbnail();    ?>
									<?php endif; ?> 
								</figure>
							</div>
							<div class="service-content">
								<ul class="author-info">
									<li><i class="flaticon-user"></i><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta('ID') )); ?>"><?php the_author(); ?></a></li>
									<li><i class="flaticon-calender-1"></i> <a href="<?php echo get_day_link( get_the_time( 'Y' ), get_the_time( 'm' ), get_the_time( 'd' ) ); ?>"><?php echo get_the_date(); ?></a></li>
								</ul>
								<h5 class="service-title">
									<a href="<?php echo esc_url( the_permalink( get_the_id() ) );?>"><?php the_title(); ?></a>
								</h5>
								<p class="text mb_20"><?php echo vervoer_trim(get_the_content(), $settings['text_limit']); ?></p>
								<?php if($settings['bttn']): ?>
								<div class="read-more-btn"><a href="<?php echo esc_url( the_permalink( get_the_id() ) );?>"><?php echo $settings['bttn'];?></a></div>
								<?php endif; ?>
							</div>
						</div>
					</div>
					
					<?php endwhile; ?>
					
				</div>
			</div>
		</section>
		
		<?php endif;?>
		
		<?php  if ( 'style6' === $settings['style'] ) : ?>
		
		<section class="service-style-eight <?php echo esc_attr($settings['sec_class']);?>">
			<div class="container">
				<div class="row">
				
					<?php while ( $query->have_posts() ) : $query->the_post();
					$meta_image = get_post_meta( get_the_id(), 'meta_image', true );
					?>
				
					<div class="col-xl-<?php echo esc_attr($settings['column'], true );?> col-lg-6 col-md-12">
						<div class="service-block-eight mb_30 wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
							<div class="service-image">
								<figure>
									<a href="<?php echo esc_url( the_permalink( get_the_id() ) );?>">
										<?php  if ( 'style1' === $settings['thumb'] ) : ?>
										<img src="<?php echo wp_get_attachment_url($meta_image['id']);?>" alt="" />
										<?php endif; ?> 
										<?php  if ( 'style2' === $settings['thumb'] ) : ?>      
										<?php  the_post_thumbnail();    ?>
										<?php endif; ?>
									</a>
								</figure>
							</div>
							<div class="service-content">
								<ul class="author-info">
									<li><i class="flaticon-user"></i><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta('ID') )); ?>"><?php the_author(); ?></a></li>
									<li><i class="flaticon-calender-1"></i> <a href="<?php echo get_day_link( get_the_time( 'Y' ), get_the_time( 'm' ), get_the_time( 'd' ) ); ?>"><?php echo get_the_date(); ?></a></li>
								</ul>
								<h5 class="service-title">
									<a href="<?php echo esc_url( the_permalink( get_the_id() ) );?>"><?php the_title(); ?></a>
								</h5>
								<p class="text"><?php echo vervoer_trim(get_the_content(), $settings['text_limit']); ?></p>
								<?php if($settings['bttn']): ?>
								<div class="read-more-btn"><a href="<?php echo esc_url( the_permalink( get_the_id() ) );?>"><?php echo $settings['bttn'];?></a></div>
								<?php endif; ?>
							</div>
						</div>
					</div>
					
					<?php endwhile; ?>
					
				</div>
			</div>
		</section>
		
		<?php endif;?>
		
		<?php  if ( 'style7' === $settings['style'] ) : ?>
		
		<section class="blog-grid-section <?php echo esc_attr($settings['sec_class']);?>">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12">
						<div class="blog-left-side">
							<div class="row">
							
								<?php while ( $query->have_posts() ) : $query->the_post();
								$meta_image = get_post_meta( get_the_id(), 'meta_image', true );
								?>
							
								<div class="col-xl-<?php echo esc_attr($settings['column'], true );?> col-lg-6 col-md-6 col-sm-12">
									<div class="news-block-two mb_40 wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">                    
										<div class="image-box">
											<figure>
												<?php  if ( 'style1' === $settings['thumb'] ) : ?>
												<img src="<?php echo wp_get_attachment_url($meta_image['id']);?>" alt="" />
												<?php endif; ?> 
												<?php  if ( 'style2' === $settings['thumb'] ) : ?>      
												<?php  the_post_thumbnail();    ?>
												<?php endif; ?>
											</figure>
										</div>
										<div class="inner-box">
											<div class="blog-content">
												<ul class="blog-info">
													<li><i class="flaticon-user"></i><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta('ID') )); ?>"><?php the_author(); ?></a></li>
													<li><i class="flaticon-calender-1"></i><a href="<?php echo get_day_link( get_the_time( 'Y' ), get_the_time( 'm' ), get_the_time( 'd' ) ); ?>"><?php echo get_the_date(); ?></a></li>
												</ul>
												
												<h5 class="blog-title"><a href="<?php echo esc_url( the_permalink( get_the_id() ) );?>"><?php the_title(); ?></a></h5>
												
												<p class="blog-text"><?php echo vervoer_trim(get_the_content(), $settings['text_limit']); ?></p>
												
												<?php if($settings['bttn']): ?>
												<div class="read-more-btn"><a href="<?php echo esc_url( the_permalink( get_the_id() ) );?>"><?php echo $settings['bttn'];?></a></div>
												<?php endif; ?>
												
											</div>                        
										</div>
									</div> 
								</div>
								
								<?php endwhile; ?>
								
							</div>
						</div>
					</div>
				</div>                
			</div>
		</section>
		
		<?php endif;?>

		
        <?php }
		wp_reset_postdata();
	}

}
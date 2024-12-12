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
use Elementor\Utils;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Plugin;

/**
 * Elementor button widget.
 * Elementor widget that displays a button with the ability to control every
 * aspect of the button design.
 *
 * @since 1.0.0
 */
class Testimonial3 extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'vervoer_testimonial3';
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
		return esc_html__( 'Testimonial Three', 'vervoer' );
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
	protected function register_controls() {
		$this->start_controls_section(
			'testimonial3',
			[
				'label' => esc_html__( 'Testimonial Three', 'vervoer' ),
			]
		);
		$this->add_control(
            'style', 
				[
					'label'   => esc_html__( 'Choose Different Style', 'vervoer' ),
					'label_block' => true,
					'type'    => Controls_Manager::SELECT,
					'default' => 'style1',
					'options' => array(
						'style1' => esc_html__( 'Choose Style 1', 'vervoer' ),
						'style2' => esc_html__( 'Choose Style 2', 'vervoer' ),
					),
				]
		);
		$this->add_control(
			'bgimg',
			[
				'label' => esc_html__('Background image', 'bitfix'),
				'conditions' => array(
						'relation' => 'or',
						'terms'    => array(
							array(
								'name'     => 'style',
								'operator' => '==',
								'value'    => 'style2',
							),
						),
					),
				'type' => Controls_Manager::MEDIA,
				'default' => ['url' => Utils::get_placeholder_image_src(),],
			]
		);
		$this->add_control(
			'image',
				[
				  'label' => __( 'Image', 'bitfix' ),
				  'type' => Controls_Manager::MEDIA,
				  'default' => ['url' => Utils::get_placeholder_image_src(),],
				]
		);
		$this->add_control(
			'alt_text',
			[
				'label'       => __( 'Alt text', 'bitfix' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your Description', 'bitfix' ),
			]
		);
		$this->add_control(
			'title',
			[
				'label'       => __( 'Title', 'bitfix' ),
				'conditions' => array(
						'relation' => 'or',
						'terms'    => array(
							array(
								'name'     => 'style',
								'operator' => '==',
								'value'    => 'style1',
							),
						),
					),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your title', 'bitfix' ),
			]
		);
		$this->add_control(
			'text',
			[
				'label'       => __( 'Description Text', 'bitfix' ),
				'conditions' => array(
						'relation' => 'or',
						'terms'    => array(
							array(
								'name'     => 'style',
								'operator' => '==',
								'value'    => 'style1',
							),
						),
					),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your Description', 'bitfix' ),
			]
		);
		$this->add_control(
			'sec_class',
			[
				'label'       => __( 'Section Class', 'vervoer' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter Section Class', 'vervoer' ),
			]
		);
		
		
		$this->end_controls_section();
		
		
		// New Tab#1

		$this->start_controls_section(
					'content_section1',
					[
						'label' => __( 'Testimonials Block', 'inovex' ),
						'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
					]
				);
				$this->add_control(
				  'repeat', 
					[
						'type' => Controls_Manager::REPEATER,
						'seperator' => 'before',
						'default' => 
							[
								['block_title' => esc_html__('Projects Completed', 'inovex')],
							],
						'fields' => 
							[
								'block_title' =>
								[
									'name' => 'block_title',
									'label' => esc_html__('Title', 'inovex'),
									'type' => Controls_Manager::TEXTAREA,
									'default' => esc_html__('', 'inovex')
								],
								'block_text' =>
								[
									'name' => 'block_text',
									'label' => esc_html__('Text', 'inovex'),
									'type' => Controls_Manager::TEXTAREA,
									'default' => esc_html__('', 'inovex')
								],
								'block_image' =>
								[
									'name' => 'block_image',
									'label' => __( 'Image', 'inovex' ),
									'type' => Controls_Manager::MEDIA,
									'default' => ['url' => Utils::get_placeholder_image_src(),],
								],
								'block_alt_text' =>
								[
									'name' => 'block_alt_text',
									'label' => esc_html__('Alt Text', 'inovex'),
									'type' => Controls_Manager::TEXTAREA,
									'default' => esc_html__('', 'inovex')
								],
								[
									'name' => 'block_rating',
									'label'   => esc_html__( 'Select Rating', 'rashid' ),
									'type'    => Controls_Manager::SELECT,
									'default' => '1',
									'options' => array(
										'rat1'   => esc_html__( 'Rating One', 'rashid' ),
										'rat2'   => esc_html__( 'Rating Two', 'rashid' ),
										'rat3'   => esc_html__( 'Rating Three', 'rashid' ),
										'rat4'   => esc_html__( 'Rating Four', 'rashid' ),
										'rat5'   => esc_html__( 'Rating Five', 'rashid' ),
									),
								],
								'block_title1' =>
								[
									'name' => 'block_title1',
									'label' => esc_html__('Title', 'inovex'),
									'type' => Controls_Manager::TEXTAREA,
									'default' => esc_html__('', 'inovex')
								],
								'block_subtitle' =>
								[
									'name' => 'block_subtitle',
									'label' => esc_html__('Subtitle', 'inovex'),
									'type' => Controls_Manager::TEXTAREA,
									'default' => esc_html__('', 'inovex')
								],
							],
						'title_field' => '{{block_title}}',
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
		$allowed_tags = wp_kses_allowed_html('post');
		?>
			
		
		<?php
			  echo '
			 <script>
		 jQuery(document).ready(function($)
		 {

		//put the js code under this line 

		if ($(".testimonials-slide-six").length) {
			$(".testimonials-slide-six").owlCarousel({
				loop:true,
				margin:30,
				nav:true,
				smartSpeed: 500,
				autoplay: 1000,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:1
					},
					800:{
						items:2
					},
					1200:{
						items:1
					},
					1600:{
						items:2
					}
				}
			});
		}
		
		//put the code above the line 

		  });
		</script>';


		?>		
		
		<?php
			  echo '
			 <script>
		 jQuery(document).ready(function($)
		 {

		//put the js code under this line 

		if ($(".one-item-carousel").length) {
			$(".one-item-carousel").owlCarousel({
				loop:true,
				margin:30,
				nav:true,
				smartSpeed: 500,
				autoplay: 1000,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:1
					},
					800:{
						items:1
					},
					1200:{
						items:1
					},
					1320:{
						items:1
					}
				}
			});    		
		}
		
		//put the code above the line 

		  });
		</script>';


		?>
		
		<?php  if ( 'style1' === $settings['style'] ) : ?>
		
		<section class="testimonial-style-seven sec-padd-150<?php echo esc_attr($settings['sec_class']);?>">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-12">
						<div class="image-box">
							<figure>
								<?php  if ( esc_url($settings['image']['id']) ) : ?>   
								<img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
								<?php else :?>
								<div class="noimage"></div>
								<?php endif;?>
							</figure>
						</div>
					</div>
					<div class="col-xl-7 col-lg-12">
						<div class="testimonial-seven-area">
							<?php if($settings['title']): ?>
							<div class="content-title">
								<h3><?php echo $settings['title'];?></h3>
								<p class="title-text"><?php echo $settings['text'];?></p>
							</div>
							<?php endif; ?>
							<div class="testimonial-left-minus">
								<div class="testimonials-slide-six owl-carousel owl-theme owl-dots-none owl-nav-none">
								
									<?php foreach($settings['repeat'] as $item):?>
								
									<div class="testimonial-block-six">
										<div class="inner-box">
											<h6><?php echo wp_kses($item['block_title'], $allowed_tags);?></h6>
											<p><?php echo wp_kses($item['block_text'], $allowed_tags);?></p>
										</div>
										<div class="author-info">
											<div class="thumb-image">
												<?php if(wp_get_attachment_url($item['block_image']['id'])): ?>
												<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
												<?php else :?>
												<div class="noimage"></div>
												<?php endif;?>
											</div>
											<div class="info-box">
												<ul class="ratting">
												
													<?php  if ( 'rat1' === $item['block_rating'] ) : ?>      
														<li><i class="flaticon-star"></i></li>
													<?php endif ;?>	         
													<?php  if ( 'rat2' === $item['block_rating'] ) : ?>      
														<li><i class="flaticon-star"></i></li>
														<li><i class="flaticon-star"></i></li>
													<?php endif ;?>
													<?php  if ( 'rat3' === $item['block_rating'] ) : ?>      
														<li><i class="flaticon-star"></i></li>
														<li><i class="flaticon-star"></i></li>
														<li><i class="flaticon-star"></i></li>
													<?php endif ;?>	   
													<?php  if ( 'rat4' === $item['block_rating'] ) : ?>      
														<li><i class="flaticon-star"></i></li>
														<li><i class="flaticon-star"></i></li>
														<li><i class="flaticon-star"></i></li>
														<li><i class="flaticon-star"></i></li>
													<?php endif ;?>	
													<?php  if ( 'rat5' === $item['block_rating'] ) : ?>      
														<li><i class="flaticon-star"></i></li>
														<li><i class="flaticon-star"></i></li>
														<li><i class="flaticon-star"></i></li>
														<li><i class="flaticon-star"></i></li>
														<li><i class="flaticon-star"></i></li>
													<?php endif ;?>
													
												</ul>
												<h6><?php echo wp_kses($item['block_title1'], $allowed_tags);?> / <span><?php echo wp_kses($item['block_subtitle'], $allowed_tags);?></span></h6>
											</div>
										</div>
									</div>
									
									<?php endforeach; ?>
									
								</div> 
							</div>                     
						</div>       
					</div>
				</div>
			</div>
		</section>
		
		<?php endif;?>
		
		<?php  if ( 'style2' === $settings['style'] ) : ?>
		
		<!-- Testimoials Style Eight -->
		<section class="testimonial-style-eight <?php echo esc_attr($settings['sec_class']);?>">
			<div class="pattern-layer parallax-scene parallax-scene-2">
				<?php  if ( esc_url($settings['bgimg']['id']) ) : ?>
				<div data-depth="0.40" class="pattern-2" style="background-image: url(<?php echo wp_get_attachment_url($settings['bgimg']['id']);?>);">
				<?php else :?>	
				<div class="noimage">
				<?php endif;?>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-12 wow slideInLeft animated" data-wow-delay="200ms" data-wow-duration="1500ms">
						<div class="testimonial-left-image">
							<figure>
								<?php  if ( esc_url($settings['image']['id']) ) : ?>   
								<img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
								<?php else :?>
								<div class="noimage"></div>
								<?php endif;?>
							</figure>
						</div>                
					</div>
					<div class="col-xl-7 col-lg-12">
						<div class="testimonial-right-content wow slideInRight animated" data-wow-delay="200ms" data-wow-duration="1500ms">
							<div class="one-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
							
								<?php foreach($settings['repeat'] as $item):?>
							
								<div class="testimonial-block-eight">
									<div class="qoute">”</div>
									<h3><?php echo wp_kses($item['block_title'], $allowed_tags);?></h3>
									<p><?php echo wp_kses($item['block_text'], $allowed_tags);?></p>
									<div class="author-info">
										<div class="thumb-image">
											<?php if(wp_get_attachment_url($item['block_image']['id'])): ?>
											<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
											<?php else :?>
											<div class="noimage"></div>
											<?php endif;?>
										</div>
										<div class="info-box">
											<ul class="ratting">
											
												<?php  if ( 'rat1' === $item['block_rating'] ) : ?>      
													<li><i class="flaticon-star"></i></li>
												<?php endif ;?>	         
												<?php  if ( 'rat2' === $item['block_rating'] ) : ?>      
													<li><i class="flaticon-star"></i></li>
													<li><i class="flaticon-star"></i></li>
												<?php endif ;?>
												<?php  if ( 'rat3' === $item['block_rating'] ) : ?>      
													<li><i class="flaticon-star"></i></li>
													<li><i class="flaticon-star"></i></li>
													<li><i class="flaticon-star"></i></li>
												<?php endif ;?>	   
												<?php  if ( 'rat4' === $item['block_rating'] ) : ?>      
													<li><i class="flaticon-star"></i></li>
													<li><i class="flaticon-star"></i></li>
													<li><i class="flaticon-star"></i></li>
													<li><i class="flaticon-star"></i></li>
												<?php endif ;?>	
												<?php  if ( 'rat5' === $item['block_rating'] ) : ?>      
													<li><i class="flaticon-star"></i></li>
													<li><i class="flaticon-star"></i></li>
													<li><i class="flaticon-star"></i></li>
													<li><i class="flaticon-star"></i></li>
													<li><i class="flaticon-star"></i></li>
												<?php endif ;?>
													
											</ul>
											<h6><?php echo wp_kses($item['block_title1'], $allowed_tags);?> / <span><?php echo wp_kses($item['block_subtitle'], $allowed_tags);?></span></h6>
										</div>
									</div>
								</div>
								
								<?php endforeach; ?>
								
							</div> 
						</div>                               
					</div>
				</div>
			</div>
		</section>
		<!-- End Testimoials Style Eight -->
		
		<?php endif;?>
		
             
		<?php 
	}

}
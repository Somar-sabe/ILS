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
class Scroll_Section extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'vervoer_scroll_section';
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
		return esc_html__( 'Scroll Section', 'vervoer' );
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
			'scroll_section',
			[
				'label' => esc_html__( 'Scroll Section', 'vervoer' ),
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
					'content_section',
					[
						'label' => __( 'Scroll Block One', 'bitfix' ),
						'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
					]
				);
				$this->add_control(
					'funfact_bgimg',
					[
						'label' => esc_html__('Background image', 'bitfix'),
						'type' => Controls_Manager::MEDIA,
						'default' => ['url' => Utils::get_placeholder_image_src(),],
					]
				);
				$this->add_control(
					'funfact_number',
					[
						'label'       => __( 'Number', 'bitfix' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your Number', 'bitfix' ),
					]
				);
				$this->add_control(
					'funfact_title',
					[
						'label'       => __( 'Title', 'bitfix' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your title', 'bitfix' ),
					]
				);
				$this->add_control(
					'funfact_title1',
					[
						'label'       => __( 'Title', 'bitfix' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your title', 'bitfix' ),
					]
				);
				$this->add_control(
					'funfact_text',
					[
						'label'       => __( 'Description Text', 'bitfix' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your Description', 'bitfix' ),
					]
				);
				$this->add_control(
					'funfact_image',
						[
						  'label' => __( 'Image', 'bitfix' ),
						  'type' => Controls_Manager::MEDIA,
						  'default' => ['url' => Utils::get_placeholder_image_src(),],
						]
				);
				$this->add_control(
					'funfact_alt_text',
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
								'block_column' =>
								[
									'name' => 'block_column',
									'label'   => esc_html__( 'Column', 'inovex' ),
									'type'    => Controls_Manager::NUMBER,
									'default' => 2,
									'min'     => 1,
									'max'     => 12,
									'step'    => 1,
								],
								'ff_stop' =>
								[
									'name' => 'ff_stop',
									'label' => esc_html__('Counter Stop', 'inovex'),
									'type' => Controls_Manager::TEXT,
									'default' => esc_html__('', 'hekim')
								],
								'ff_sing' =>
								[
									'name' => 'ff_sing',
									'label' => esc_html__('Counter Sing', 'inovex'),
									'type' => Controls_Manager::TEXT,
									'default' => esc_html__('', 'hekim')
								],
								'block_title' =>
								[
									'name' => 'block_title',
									'label' => esc_html__('Title', 'inovex'),
									'type' => Controls_Manager::TEXTAREA,
									'default' => esc_html__('', 'inovex')
								],
							],
						'title_field' => '{{block_title}}',
					 ]
				);
				
				
		$this->end_controls_section();
		
		// New Tab#2

		$this->start_controls_section(
					'content_section2',
					[
						'label' => __( 'Scroll Block Two', 'bitfix' ),
						'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
					]
				);
				$this->add_control(
					'testimonial_title',
					[
						'label'       => __( 'Title', 'bitfix' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your title', 'bitfix' ),
					]
				);
				$this->add_control(
					'testimonial_text',
					[
						'label'       => __( 'Description Text', 'bitfix' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your Description', 'bitfix' ),
					]
				);
				$this->add_control(
					'testimonial_image',
						[
						  'label' => __( 'Image', 'bitfix' ),
						  'type' => Controls_Manager::MEDIA,
						  'default' => ['url' => Utils::get_placeholder_image_src(),],
						]
				);
				$this->add_control(
					'testimonial_alt_text',
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
					'testimonial_title1',
					[
						'label'       => __( 'Title', 'bitfix' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your title', 'bitfix' ),
					]
				);
				$this->add_control(
					'testimonial_subtitle',
					[
						'label'       => __( 'Title', 'bitfix' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your title', 'bitfix' ),
					]
				);
				$this->add_control(
					'testimonial_image1',
						[
						  'label' => __( 'Image', 'bitfix' ),
						  'type' => Controls_Manager::MEDIA,
						  'default' => ['url' => Utils::get_placeholder_image_src(),],
						]
				);
				$this->add_control(
					'testimonial_alt_text1',
					[
						'label'       => __( 'Alt text', 'bitfix' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your Description', 'bitfix' ),
					]
				);
				
				
		$this->end_controls_section();
		
		// New Tab#3

		$this->start_controls_section(
					'content_section3',
					[
						'label' => __( 'Scroll Block Three', 'bitfix' ),
						'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
					]
				);
				$this->add_control(
					'shipments_bgimg',
					[
						'label' => esc_html__('Background image', 'bitfix'),
						'type' => Controls_Manager::MEDIA,
						'default' => ['url' => Utils::get_placeholder_image_src(),],
					]
				);
				$this->add_control(
					'shipments_number',
					[
						'label'       => __( 'Number', 'bitfix' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your Number', 'bitfix' ),
					]
				);
				$this->add_control(
					'shipments_title',
					[
						'label'       => __( 'Title', 'bitfix' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your title', 'bitfix' ),
					]
				);
				$this->add_control(
					'shipments_title1',
					[
						'label'       => __( 'Title', 'bitfix' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your title', 'bitfix' ),
					]
				);
				$this->add_control(
					'shipments_image',
						[
						  'label' => __( 'Image', 'bitfix' ),
						  'type' => Controls_Manager::MEDIA,
						  'default' => ['url' => Utils::get_placeholder_image_src(),],
						]
				);
				$this->add_control(
					'shipments_alt_text',
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
					'shipments_title2',
					[
						'label'       => __( 'Title', 'bitfix' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your title', 'bitfix' ),
					]
				);
				$this->add_control(
				  'repeat1', 
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
							],
						'title_field' => '{{block_title}}',
					 ]
				);
				$this->add_control(
					'shipments_title3',
					[
						'label'       => __( 'Title', 'bitfix' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your title', 'bitfix' ),
					]
				);
				$this->add_control(
				  'repeat2', 
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
							],
						'title_field' => '{{block_title}}',
					 ]
				);
				
				
		$this->end_controls_section();
		
		// New Tab#4

		$this->start_controls_section(
					'content_section4',
					[
						'label' => __( 'Scroll Block Four', 'bitfix' ),
						'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
					]
				);
				$this->add_control(
					'shipments_bgimg',
					[
						'label' => esc_html__('Background image', 'bitfix'),
						'type' => Controls_Manager::MEDIA,
						'default' => ['url' => Utils::get_placeholder_image_src(),],
					]
				);
				$this->add_control(
					'services_title',
					[
						'label'       => __( 'Title', 'bitfix' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your title', 'bitfix' ),
					]
				);
				$this->add_control(
					'services_text',
					[
						'label'       => __( 'Description Text', 'bitfix' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your Description', 'bitfix' ),
					]
				);
				$this->add_control(
					'services_bttn',
					[
						'label'       => __( 'Button', 'bitfix' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your Button Title', 'bitfix' ),
					]
				);	
				$this->add_control(
					'services_btnlink',
					[
					  'label' => __( 'Button Url', 'bitfix' ),
					  'type' => Controls_Manager::URL,
					  'placeholder' => __( 'https://your-link.com', 'bitfix' ),
					  'show_external' => true,
					  'default' => [
						'url' => '',
						'is_external' => true,
						'nofollow' => true,
					  ],
					
				   ]
				);
				$this->add_control(
					'services_image',
						[
						  'label' => __( 'Image', 'bitfix' ),
						  'type' => Controls_Manager::MEDIA,
						  'default' => ['url' => Utils::get_placeholder_image_src(),],
						]
				);
				$this->add_control(
					'services_alt_text',
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
					'services_bgimg',
					[
						'label' => esc_html__('Background image', 'bitfix'),
						'type' => Controls_Manager::MEDIA,
						'default' => ['url' => Utils::get_placeholder_image_src(),],
					]
				);
				$this->add_control(
					'services_number',
					[
						'label'       => __( 'Number', 'bitfix' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your Number', 'bitfix' ),
					]
				);
				$this->add_control(
					'services_title2',
					[
						'label'       => __( 'Title', 'bitfix' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your title', 'bitfix' ),
					]
				);
				$this->add_control(
					'services_title1',
					[
						'label'       => __( 'Title', 'bitfix' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your title', 'bitfix' ),
					]
				);
				$this->add_control(
				  'repeat4', 
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
        
		<!-- Scroll Container -->
		<div id="scroll-container" class="scroller-section">
			
			<!--Left-->
			<div class="ms-left">
				<?php  if ( esc_url($settings['funfact_bgimg']['id']) ) : ?>
				<div class="ms-section" id="left1" style="background-image:url(<?php echo wp_get_attachment_url($settings['funfact_bgimg']['id']);?>);">
				<?php else :?>	
				<div class="ms-section">
				<?php endif;?>
					<div class="banner-thumb-text"><span><?php echo $settings['funfact_number'];?></span><br<?php echo $settings['funfact_title'];?></div>
				</div>
				<div class="ms-section" id="left2">
					<div class="split-section-one">
						<div class="testimonial-block-nine">
							<div class="qoute">”</div>
							<h3><?php echo $settings['testimonial_title'];?></h3>
							<p><?php echo $settings['testimonial_text'];?></p>
							<div class="author-info">
								<div class="thumb-image">
									<?php  if ( esc_url($settings['testimonial_image']['id']) ) : ?>   
									<img src="<?php echo wp_get_attachment_url($settings['testimonial_image']['id']);?>" alt="<?php echo esc_attr($settings['testimonial_alt_text']);?>"/>
									<?php else :?>
									<div class="noimage"></div>
									<?php endif;?>
								</div>
								<div class="info-box">
									<ul class="ratting">
										<li><i class="flaticon-star"></i></li>
										<li><i class="flaticon-star"></i></li>
										<li><i class="flaticon-star"></i></li>
										<li><i class="flaticon-star"></i></li>
										<li><i class="flaticon-star"></i></li>
									</ul>
									<h6><?php echo $settings['testimonial_title1'];?> / <span><?php echo $settings['testimonial_subtitle'];?></span></h6>
								</div>
							</div>
						</div>
						<div class="banner-thumb-image">
							<?php  if ( esc_url($settings['testimonial_image1']['id']) ) : ?>   
							<img src="<?php echo wp_get_attachment_url($settings['testimonial_image1']['id']);?>" alt="<?php echo esc_attr($settings['testimonial_alt_text1']);?>"/>
							<?php else :?>
							<div class="noimage"></div>
							<?php endif;?>
						</div>
					</div>
				</div>     
				<?php  if ( esc_url($settings['shipments_bgimg']['id']) ) : ?>
				<div class="ms-section" id="left3" style="background-image:url(<?php echo wp_get_attachment_url($settings['shipments_bgimg']['id']);?>);">
				<?php else :?>	
				<div class="ms-section">
				<?php endif;?>
					<div class="banner-thumb-text"><span><?php echo $settings['shipments_number'];?></span><br><?php echo $settings['shipments_title'];?></div>
				</div>        
				<div class="ms-section" id="left4">
					<div class="split-section-one">
						<div class="features-block">
							<h4><?php echo $settings['services_title'];?></h4>                    
							<p class="text"><?php echo $settings['services_text'];?></p>
							<div class="hot-fuature mb_30">
								<h6><?php echo $settings['services_title1'];?></h6>
								<ul class="feature-list">
								
									<?php foreach($settings['repeat4'] as $item):?>
								
									<li><i class="flaticon-tick-1"></i><?php echo wp_kses($item['block_title'], $allowed_tags);?></li>
									
									<?php endforeach; ?>
									
								</ul>
							</div>
							<?php if($settings['services_bttn']): ?>
							<div class="link-box"><a href="<?php echo esc_url($settings['services_btnlink']['url']);?>" class="button-style-three"><?php echo $settings['services_bttn'];?></a></div>
							<?php endif; ?>
						</div>
						<div class="banner-thumb-image">
							<?php  if ( esc_url($settings['services_image']['id']) ) : ?>   
							<img src="<?php echo wp_get_attachment_url($settings['services_image']['id']);?>" alt="<?php echo esc_attr($settings['services_alt_text']);?>"/>
							<?php else :?>
							<div class="noimage"></div>
							<?php endif;?>
						</div>
					</div>            
				</div>        
			</div>
			<!--Left-->

			<!--Right-->
			<div class="ms-right">
				<div class="ms-section" id="right1">
					<div class="split-section-one">
						<div class="relible-service">
							<h3><?php echo $settings['funfact_title1'];?></h3>
							<p><?php echo $settings['funfact_text'];?></p>
							<div class="row">
							
								<?php foreach($settings['repeat1'] as $item):?>
							
								<div class="col-xl-<?php echo esc_attr($item['block_column'], true );?> col-lg-4 col-md-6 col-sm-12">
									<div class="feature-block-002 centred">
										<div class="count-box">
											<span class="count-text" data-speed="1500" data-stop="<?php echo esc_attr($item['ff_stop']);?>">0</span><span><?php echo esc_attr($item['ff_sing']);?></span>
										</div>
										<h6 class="title"><?php echo wp_kses($item['block_title'], $allowed_tags);?></h6>
									</div>
								</div>
								
								<?php endforeach; ?>
								
							</div>
						</div>
						<div class="banner-thumb-image">
							<?php  if ( esc_url($settings['funfact_image']['id']) ) : ?>   
							<img src="<?php echo wp_get_attachment_url($settings['funfact_image']['id']);?>" alt="<?php echo esc_attr($settings['funfact_alt_text']);?>"/>
							<?php else :?>
							<div class="noimage"></div>
							<?php endif;?>
						</div>                
					</div>            
				</div>
				
				<?php  if ( esc_url($settings['bgimg']['id']) ) : ?>
				<div class="ms-section" id="right2" style="background-image:url(<?php echo wp_get_attachment_url($settings['bgimg']['id']);?>);">
				<?php else :?>	
				<div class="ms-section" id="right2">
				<?php endif;?>
				
					<div class="banner-thumb-text"><span><?php echo $settings['testimonial_number'];?></span><br><?php echo $settings['testimonial_title'];?></div>
				</div>
				
				<div class="ms-section" id="right3">
					<div class="split-section-one">
						<div class="features-block">
							<h4><?php echo $settings['shipments_title1'];?></h4>
							<div class="row">
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
									<div class="hot-fuature">
										<h6><?php echo $settings['shipments_title2'];?></h6>
										<ul class="feature-list">
										
											<?php foreach($settings['repeat1'] as $item):?>
										
											<li><i class="flaticon-tick-1"></i><?php echo wp_kses($item['block_title'], $allowed_tags);?></li>
											
											<?php endforeach; ?>
											
										</ul>
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
									<div class="hot-fuature">
										<h6><?php echo $settings['shipments_title3'];?></h6>
										<ul class="feature-list">
										
											<?php foreach($settings['repeat2'] as $item):?>
										
											<li><i class="flaticon-tick-1"></i><?php echo wp_kses($item['block_title'], $allowed_tags);?></li>
											
											<?php endforeach; ?>
											
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="banner-thumb-image">
							<?php  if ( esc_url($settings['shipments_image']['id']) ) : ?>   
							<img src="<?php echo wp_get_attachment_url($settings['shipments_image']['id']);?>" alt="<?php echo esc_attr($settings['shipments_alt_text']);?>"/>
							<?php else :?>
							<div class="noimage"></div>
							<?php endif;?>
						</div>
					</div>
				</div>      
				.
				<?php  if ( esc_url($settings['services_bgimg']['id']) ) : ?>
				<div class="ms-section" id="right4" style="background-image:url(<?php echo wp_get_attachment_url($settings['services_bgimg']['id']);?>);">
				<?php else :?>	
				<div class="ms-section" id="right4">
				<?php endif;?>
				
					<div class="banner-thumb-text"><span><?php echo $settings['services_number'];?></span><br><?php echo $settings['services_title2'];?></div>
					
				</div>        
			</div>
			<!--Right-->
			
		</div>
		<!-- End Scroll Container -->

             
		<?php 
	}

}
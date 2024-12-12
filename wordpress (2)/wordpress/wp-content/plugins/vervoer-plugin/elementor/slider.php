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
class Slider extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'vervoer_slider';
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
		return esc_html__( 'Slider', 'vervoer' );
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
			'slider',
			[
				'label' => esc_html__( 'Slider', 'vervoer' ),
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
						'style3' => esc_html__( 'Choose Style 3', 'vervoer' ),
					),
				]
		);
		$this->add_control(
			'image',
				[
				  'label' => __( 'Shape Image', 'bitfix' ),
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
				  'type' => Controls_Manager::MEDIA,
				  'default' => ['url' => Utils::get_placeholder_image_src(),],
				]
		);
		$this->add_control(
			'alt_text',
			[
				'label'       => __( 'Alt text', 'bitfix' ),
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
			'image1',
				[
				  'label' => __( 'Shape Image Two', 'bitfix' ),
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
				  'type' => Controls_Manager::MEDIA,
				  'default' => ['url' => Utils::get_placeholder_image_src(),],
				]
		);
		$this->add_control(
			'alt_text1',
			[
				'label'       => __( 'Alt text', 'bitfix' ),
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
						'label' => __( 'Slider Block', 'inovex' ),
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
								'block_bgimg' =>
								[
									'name' => 'block_bgimg',
									'label' => esc_html__('Background image', 'inovex'),
									'type' => Controls_Manager::MEDIA,
									'default' => ['url' => Utils::get_placeholder_image_src(),],
								],
								'block_subtitle' =>
								[
									'name' => 'block_subtitle',
									'label' => esc_html__('Subtitle', 'inovex'),
									'type' => Controls_Manager::TEXTAREA,
									'default' => esc_html__('', 'inovex')
								],
								'block_title' =>
								[
									'name' => 'block_title',
									'label' => esc_html__('Title', 'inovex'),
									'type' => Controls_Manager::TEXTAREA,
									'default' => esc_html__('', 'inovex')
								],
								'block_button' =>
								[
									'name' => 'block_button',
									'label'       => __( 'Button', 'inovex' ),
									'type'        => Controls_Manager::TEXT,
									'dynamic'     => [
										'active' => true,
									],
									'placeholder' => __( 'Enter your Button Title', 'inovex' ),
								],
								'block_btnlink' =>
								[
									'name' => 'block_btnlink',
									'label' => __( 'Button Url', 'inovex' ),
									'type' => Controls_Manager::URL,
									'placeholder' => __( 'https://your-link.com', 'inovex' ),
									'show_external' => true,
									'default' => [
									'url' => '',
									'is_external' => true,
									'nof
									ollow' => true,
									],
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

			if ($(".banner-carousel").length) {
				$(".banner-carousel").owlCarousel({
					loop:true,
					margin:0,
					nav:true,
					active: true,
					smartSpeed: 1000,
					autoplay: 6000,
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
						1024:{
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
		
		<!-- Banner Section -->
		<section class="banner-section <?php echo esc_attr($settings['sec_class']);?>">
			<div class="banner-carousel owl-theme owl-carousel owl-dots-none">
			
				<?php foreach($settings['repeat'] as $item):?>
			
				<div class="slide-item">
					<?php if(wp_get_attachment_url($item['block_bgimg']['id'])): ?>
					<div class="image-layer" style="background-image: url(<?php echo wp_get_attachment_url($item['block_bgimg']['id']);?>);">
					<?php else :?>
					<div class="noimage">
					<?php endif;?>
					</div>
					<div class="container">
						<div class="content-box centred">                    
							<h6 class="sub-title"><?php echo wp_kses($item['block_subtitle'], $allowed_tags);?></h6>
							<h1 class="title"><?php echo wp_kses($item['block_title'], $allowed_tags);?></h1>
							<?php if(wp_kses($item['block_button'], $allowed_tags)): ?>
							<div class="btn-box">
								<a href="<?php echo esc_url($item['block_btnlink']['url']);?>" class="button-style-two"><i class="fa fa-paper-plane"></i><?php echo wp_kses($item['block_button'], $allowed_tags);?></a>
							</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
				
				<?php endforeach; ?>
				
			</div>
			<div class="banner-plane" data-parallax='{"x": 200}'>
				<?php  if ( esc_url($settings['image']['id']) ) : ?>   
				<img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
				<?php else :?>
				<div class="noimage"></div>
				<?php endif;?>
			</div>
			<div class="banner-shape" data-parallax='{"x": 200}'>
				<?php  if ( esc_url($settings['image1']['id']) ) : ?>   
				<img src="<?php echo wp_get_attachment_url($settings['image1']['id']);?>" alt="<?php echo esc_attr($settings['alt_text1']);?>"/>
				<?php else :?>
				<div class="noimage"></div>
				<?php endif;?>
			</div>
			<div class="vertical-text"><div data-parallax='{"x": 50}'><?php echo $settings['title'];?></div></div>    
		</section>
		<!-- End Banner Section -->
		
		<?php endif;?>
		
		<?php  if ( 'style2' === $settings['style'] ) : ?>
		
		<section class="banner-section home-two  <?php echo esc_attr($settings['sec_class']);?>">
			<div class="banner-carousel owl-theme owl-carousel owl-dots-none">
			
				<?php foreach($settings['repeat'] as $item):?>
			
				<div class="slide-item">
					<?php if(wp_get_attachment_url($item['block_bgimg']['id'])): ?>
					<div class="image-layer" style="background-image: url(<?php echo wp_get_attachment_url($item['block_bgimg']['id']);?>);">
					<?php else :?>
					<div class="noimage">
					<?php endif;?>
					</div>
					
					<div class="container">
						<div class="content-box">                    
							<h6 class="sub-title"><i class="flaticon-logistics"></i><?php echo wp_kses($item['block_subtitle'], $allowed_tags);?></h6>
							<h1 class="title"><?php echo wp_kses($item['block_title'], $allowed_tags);?></h1>
							<?php if(wp_kses($item['block_button'], $allowed_tags)): ?>
							<div class="btn-box">
								<a href="<?php echo esc_url($item['block_btnlink']['url']);?>" class="button-style-two"><i class="fa fa-paper-plane"></i><?php echo wp_kses($item['block_button'], $allowed_tags);?></a>
							</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
				
				<?php endforeach; ?>
				
			</div>
		</section>
		
		<?php endif;?>
		
		<?php  if ( 'style3' === $settings['style'] ) : ?>
		
		<section class="banner-section home-three <?php echo esc_attr($settings['sec_class']);?>">
			<div class="banner-carousel owl-theme owl-carousel owl-dots-none">
			
				<?php foreach($settings['repeat'] as $item):?>
			
				<div class="slide-item">
				
					<?php if(wp_get_attachment_url($item['block_bgimg']['id'])): ?>
					<div class="image-layer" style="background-image: url(<?php echo wp_get_attachment_url($item['block_bgimg']['id']);?>);">
					<?php else :?>
					<div class="noimage">
					<?php endif;?>
					</div>
					<div class="container">
						<div class="content-box centred">                    
							<h6 class="sub-title"><i class="flaticon-logistics"></i><?php echo wp_kses($item['block_subtitle'], $allowed_tags);?></h6>
							<h1 class="title"><?php echo wp_kses($item['block_title'], $allowed_tags);?></h1>
							<?php if(wp_kses($item['block_button'], $allowed_tags)): ?>
							<div class="btn-box">
								<a href="<?php echo esc_url($item['block_btnlink']['url']);?>" class="button-style-two"><i class="fa fa-paper-plane"></i><?php echo wp_kses($item['block_button'], $allowed_tags);?></a>
							</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
				
				<?php endforeach; ?>
				
			</div>
		</section>
		
		<?php endif;?>
		

             
		<?php 
	}

}
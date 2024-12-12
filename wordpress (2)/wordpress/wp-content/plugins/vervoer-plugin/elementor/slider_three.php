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
class Slider_Three extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'vervoer_slider_three';
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
		return esc_html__( 'Slider Three', 'vervoer' );
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
			'slider_three',
			[
				'label' => esc_html__( 'Slider Three', 'vervoer' ),
			]
		);
		$this->add_control(
			'subtitle',
			[
				'label'       => __( 'Sub Title', 'bitfix' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your Sub title', 'bitfix' ),
			]
		);
		$this->add_control(
			'title',
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
			'contact_us_form',
			[
				'label'       => __( 'Contact Form 7 Url', 'bitfix' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your Contact Form 7 Url', 'bitfix' ),
				'default'     => __( '', 'bitfix' ),
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
        
		<section class="banner-style-seven <?php echo esc_attr($settings['sec_class']);?>">
			<div class="banner-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
			
				<?php foreach($settings['repeat'] as $item):?>
			
				<div class="slide-item">
				
					<?php if(wp_get_attachment_url($item['block_bgimg']['id'])): ?>
					<div class="image-layer" style="background-image: url(<?php echo wp_get_attachment_url($item['block_bgimg']['id']);?>);">
					<?php else :?>
					<div class="image-layer">
					<?php endif;?>
					</div>
					<div class="container">
						<div class="row slide-row">
							<div class="col-xl-7 col-lg-12">
								<div class="content-box">                    
									<h5 class="sub-title"><?php echo wp_kses($item['block_subtitle'], $allowed_tags);?></h5>
									<h1 class="title"><?php echo wp_kses($item['block_title'], $allowed_tags);?></h1>
								</div>  
							</div>
							<div class="col-xl-5 col-lg-12">
								<div class="slider-quote-content">
									<div class="section-title mb_30 wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
										<div class="sub-title"><?php echo $settings['subtitle'];?></div>
										<h3 class="title"><?php echo $settings['title'];?></h3>
									</div>
									
									<?php echo do_shortcode( $settings['contact_us_form'] );?>
									
									
								</div>
							</div>
						</div>   
					</div>
				</div>
				
				<?php endforeach; ?>
				
			</div>
		</section>

             
		<?php 
	}

}
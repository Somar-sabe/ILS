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
class Service_Slide extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'vervoer_service_slide';
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
		return esc_html__( 'Service Slide', 'vervoer' );
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
			'service_slide',
			[
				'label' => esc_html__( 'Service Slide', 'vervoer' ),
			]
		);
		$this->add_control(
			'bgimg',
			[
				'label' => esc_html__('Background image', 'vervoer'),
				'type' => Controls_Manager::MEDIA,
				'default' => ['url' => Utils::get_placeholder_image_src(),],
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
						'label' => __( 'Service Block', 'inovex' ),
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
								'block_icons' => 
								[
									'name' => 'block_icons',
									'label' => esc_html__('Enter The icons', 'inovex'),
									'type' => Controls_Manager::ICONS,
									
								],
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

		if ($(".service-carousel").length) {
			$(".service-carousel").owlCarousel({
				loop:true,
				margin:24,
				nav:true,
				smartSpeed: 2000,
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
        
		<?php  if ( esc_url($settings['bgimg']['id']) ) : ?>
		<section class="service-section <?php echo esc_attr($settings['sec_class']);?>" style="background-image: url(<?php echo wp_get_attachment_url($settings['bgimg']['id']);?>);">
		<?php else :?>	
		<div class="service-section">
		<?php endif;?>
		
			<div class="fulid-container">
				<div class="service-carousel owl-theme owl-carousel owl-dots-none">
				
					<?php foreach($settings['repeat'] as $item):?>
				
					<div class="service-slide">
						<?php if(wp_get_attachment_url($item['block_bgimg']['id'])): ?>
						<div class="service-image" style="background-image: url(<?php echo wp_get_attachment_url($item['block_bgimg']['id']);?>);">
						<?php else :?>
						<div class="noimage">
						<?php endif;?>
						</div>
						<div class="service-text">
							<div class="hide-icon"><i class="<?php echo str_replace("icon ", " ", esc_attr( $item['block_icons']['value']));?>"></i></div>
							<div class="icon-box"><i class="<?php echo str_replace("icon ", " ", esc_attr( $item['block_icons']['value']));?>"></i></div>
							<h5><a href="<?php echo esc_url($item['block_btnlink']['url']);?>"><?php echo wp_kses($item['block_title'], $allowed_tags);?></a></h5>
							<p><?php echo wp_kses($item['block_text'], $allowed_tags);?></p>
							<?php if(wp_kses($item['block_button'], $allowed_tags)): ?>
							<a href="<?php echo esc_url($item['block_btnlink']['url']);?>" class="link-button"><?php echo wp_kses($item['block_button'], $allowed_tags);?></a>
							<?php endif; ?>
						</div>
					</div>
					
					<?php endforeach; ?>
					
				</div>
			</div>
		</section>
             
		<?php 
	}

}
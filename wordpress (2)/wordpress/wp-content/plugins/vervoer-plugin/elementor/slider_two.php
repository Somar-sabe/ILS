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
class Slider_Two extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'vervoer_slider_two';
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
		return esc_html__( 'Slider Two', 'vervoer' );
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
			'slider_two',
			[
				'label' => esc_html__( 'Slider Two', 'vervoer' ),
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



	$(document).ready(function() {

		var sync1 = $("#sync1");
		var sync2 = $("#sync2");
		var slidesPerPage = 3; //globaly define number of elements per page
		var syncedSecondary = true;
	
		sync1.owlCarousel({
			items: 1,
			nav: true,
			autoplay: 6000, 
			dots: true,
			loop: true,
			animateOut: "fadeOut",
			animateIn: "fadeIn",
			active: true,
			smartSpeed: 1000,
			responsiveRefreshRate: 200,
		}).on("changed.owl.carousel", syncPosition);

	
	});
		
		
		//put the code above the line 

		  });
		</script>';


		?>
        
		<section class="banner-style-six <?php echo esc_attr($settings['sec_class']);?>">
			<div class="owl-carousel owl-theme owl-dots-none" id="sync1">
			
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
							<h5 class="sub-title"><?php echo wp_kses($item['block_subtitle'], $allowed_tags);?></h5>
							<h1 class="title"><?php echo wp_kses($item['block_title'], $allowed_tags);?></h1>
						</div>  
					</div>
				</div>
				
				<?php endforeach; ?>
				
			</div>
			<div class="banner-thumb-inner clearfix">
				<div class="owl-carousel owl-theme owl-dots-none owl-nav-none" id="sync2">
				
					<?php foreach($settings['repeat'] as $item):?>
				
					<div class="single-item">
						<figure>
							<?php if(wp_get_attachment_url($item['block_image']['id'])): ?>
							<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
							<?php else :?>
							<div class="noimage"></div>
							<?php endif;?>
						</figure>
					</div>
					
					<?php endforeach; ?>
					
				</div>
			</div>
		</section>

             
		<?php 
	}

}
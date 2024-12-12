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
class Tracking_Tab extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'vervoer_tracking_tab';
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
		return esc_html__( 'Tracking Tab', 'vervoer' );
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
			'tracking_tab',
			[
				'label' => esc_html__( 'Tracking Tab', 'vervoer' ),
			]
		);
		$this->add_control(
			'image',
				[
				  'label' => __( 'Shape Image', 'bitfix' ),
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
						'label' => __( 'Tab Block One', 'bitfix' ),
						'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
					]
				);
				$this->add_control(
					'tab_bttn',
					[
						'label'       => __( 'Tab Button', 'bitfix' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your Button Title', 'bitfix' ),
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
				
				
				
		$this->end_controls_section();
		
		// New Tab#1

		$this->start_controls_section(
					'content_section2',
					[
						'label' => __( 'Tab Block Two', 'bitfix' ),
						'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
					]
				);
				$this->add_control(
					'tab_bttn2',
					[
						'label'       => __( 'Tab Button', 'bitfix' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your Button Title', 'bitfix' ),
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
					'title1',
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
					'text',
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
					'text1',
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
        
		<section class="tracking-tab-section <?php echo esc_attr($settings['sec_class']);?>">
			<div class="container">
				<div class="tabs-box">            
					<ul class="tab-buttons">
						<?php if($settings['tab_bttn']): ?>
						<li class="tab-btn active-btn" data-tab="#tab-1"><i class="flaticon-document"></i> <?php echo $settings['tab_bttn'];?></li>
						<?php endif; ?>
						<?php if($settings['tab_bttn2']): ?>
						<li class="tab-btn" data-tab="#tab-2"><i class="flaticon-document"></i><?php echo $settings['tab_bttn2'];?></li>
						<?php endif; ?>
					</ul>
					<div class="tabs-content">
						<div class="tab active-tab" id="tab-1">
							<div class="transparent-pricing-box">
								<h4><?php echo $settings['tab_bttn'];?></h4>
								
								<?php echo do_shortcode( $settings['contact_us_form'] );?>
								
								
								<div class="shape-airplane"  data-parallax='{"x": 80}'>
									<?php  if ( esc_url($settings['image']['id']) ) : ?>   
									<img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
									<?php else :?>
									<div class="noimage"></div>
									<?php endif;?>
								</div>
							</div>
						</div>
						<div class="tab" id="tab-2">
							<div class="realtime-tracking-box">
								<h4><?php echo $settings['tab_bttn2'];?></h4>
								<div class="time-traking-box">
									<div class="tracking-number-search">
										<strong><?php echo $settings['title'];?></strong>
										<input type="text" name="trackingid" placeholder="Tracking ID number">
										<button><?php echo $settings['title1'];?></button>
										<p><?php echo $settings['text'];?></p>
										<div class="level-bar"></div>
										<ul class="tracking-step">
											<?php foreach($settings['repeat'] as $item):?>
											<li><?php echo wp_kses($item['block_title'], $allowed_tags);?></li>
											<?php endforeach; ?>
										</ul>
										<div class="tracking-text"><div class="date"><?php echo $settings['text1'];?></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>        
			</div>
		</section>
             
		<?php 
	}

}
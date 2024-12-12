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
class How_To_Work extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'vervoer_how_to_work';
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
		return esc_html__( 'How To Work', 'vervoer' );
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
			'how_to_work',
			[
				'label' => esc_html__( 'How To Work', 'vervoer' ),
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
						'label' => __( 'Work Block One', 'bitfix' ),
						'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
					]
				);
				$this->add_control(
					'icons',
						[
							'label' => esc_html__('Enter The icons', 'bitfix'),
							'type' => Controls_Manager::ICONS,
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
				
				
		$this->end_controls_section();	
		
		// New Tab#2

		$this->start_controls_section(
					'content_section2',
					[
						'label' => __( 'Work Block Two', 'bitfix' ),
						'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
					]
				);
				$this->add_control(
					'icons1',
						[
							'label' => esc_html__('Enter The icons', 'bitfix'),
							'type' => Controls_Manager::ICONS,
						]
				);
				$this->add_control(
					'title2',
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
					'title3',
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
					'image1',
						[
						  'label' => __( 'Image', 'bitfix' ),
						  'type' => Controls_Manager::MEDIA,
						  'default' => ['url' => Utils::get_placeholder_image_src(),],
						]
				);
				$this->add_control(
					'alt_text1',
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
					'image2',
						[
						  'label' => __( 'Image', 'bitfix' ),
						  'type' => Controls_Manager::MEDIA,
						  'default' => ['url' => Utils::get_placeholder_image_src(),],
						]
				);
				$this->add_control(
					'alt_text2',
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
						'label' => __( 'Work Block Three', 'bitfix' ),
						'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
					]
				);
				$this->add_control(
					'icons2',
						[
							'label' => esc_html__('Enter The icons', 'bitfix'),
							'type' => Controls_Manager::ICONS,
						]
				);
				$this->add_control(
					'title4',
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
					'title5',
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
					'text2',
					[
						'label'       => __( 'Description Text', 'bitfix' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your Description', 'bitfix' ),
					]
				);
				
				
		$this->end_controls_section();

		// New Tab#4

		$this->start_controls_section(
					'content_section4',
					[
						'label' => __( 'Work Block Four', 'bitfix' ),
						'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
					]
				);
				$this->add_control(
					'icons3',
						[
							'label' => esc_html__('Enter The icons', 'bitfix'),
							'type' => Controls_Manager::ICONS,
						]
				);
				$this->add_control(
					'title6',
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
					'title7',
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
					'text3',
					[
						'label'       => __( 'Description Text', 'bitfix' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your Description', 'bitfix' ),
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
        
		<section class="how-to-work-section <?php echo esc_attr($settings['sec_class']);?>">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 colmun">                
						<div class="work-block-one">
							<div class="inner-box">
								<?php if($settings['title']): ?>
								<div class="icon-box">
									<i class="<?php echo esc_attr($settings['icons']['value']);?>"></i>
									<div class="step"><?php echo $settings['title'];?></div>
								</div>    
								<?php endif; ?>
								<div class="content-box">
									<h6><?php echo $settings['title1'];?></h6>
									<p><?php echo $settings['text'];?></p>
								</div>
							</div>
							<div class="border-shape">
								<?php  if ( esc_url($settings['image']['id']) ) : ?>   
								<img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
								<?php else :?>
								<div class="noimage"></div>
								<?php endif;?>
							</div>                    
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 colmun">
						<div class="work-block-one">
							<div class="inner-box">
								<?php if($settings['title2']): ?>
								<div class="icon-box">
									<i class="<?php echo esc_attr($settings['icons1']['value']);?>"></i>
									<div class="step"><?php echo $settings['title2'];?></div>
								</div>
								<?php endif; ?>
								<div class="content-box">
									<h6><?php echo $settings['title3'];?></h6>
									<p><?php echo $settings['text1'];?></p>
								</div>
							</div>
							<div class="border-shape-1">
								<?php  if ( esc_url($settings['image1']['id']) ) : ?>   
								<img src="<?php echo wp_get_attachment_url($settings['image1']['id']);?>" alt="<?php echo esc_attr($settings['alt_text1']);?>"/>
								<?php else :?>
								<div class="noimage"></div>
								<?php endif;?>
							</div>                    
							<div class="border-shape-2">
								<?php  if ( esc_url($settings['image2']['id']) ) : ?>   
								<img src="<?php echo wp_get_attachment_url($settings['image2']['id']);?>" alt="<?php echo esc_attr($settings['alt_text2']);?>"/>
								<?php else :?>
								<div class="noimage"></div>
								<?php endif;?>
							</div>                    
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 colmun">
						<div class="work-block-one mt_40">
							<div class="inner-box">
								<?php if($settings['title4']): ?>
								<div class="icon-box">
									<i class="<?php echo esc_attr($settings['icons2']['value']);?>"></i>
									<div class="step"><?php echo $settings['title4'];?></div>
								</div>
								<?php endif; ?>
								<div class="content-box">
									<h6><?php echo $settings['title5'];?></h6>
									<p><?php echo $settings['text2'];?></p>
								</div>
							</div>         
						</div>                
					</div>
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 colmun">
						<div class="work-block-one">
							<div class="inner-box">
								<?php if($settings['title6']): ?>
								<div class="icon-box">
									<i class="<?php echo esc_attr($settings['icons3']['value']);?>"></i>
									<div class="step"><?php echo $settings['title6'];?></div>
								</div>
								<?php endif; ?>
								<div class="content-box">
									<h6><?php echo $settings['title7'];?></h6>
									<p><?php echo $settings['text3'];?></p>
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
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
class Image extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'vervoer_image';
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
		return esc_html__( 'Image', 'vervoer' );
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
			'image',
			[
				'label' => esc_html__( 'Image', 'vervoer' ),
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
						'label' => __( 'Image Block', 'bitfix' ),
						'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
					]
				);
				$this->add_control(
					'image1',
						[
						  'label' => __( 'Image', 'bitfix' ),
						  'conditions' => array(
								'relation' => 'or',
								'terms'    => array(
									array(
										'name'     => 'style',
										'operator' => '==',
										'value'    => 'style1',
									),
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
									array(
										'name'     => 'style',
										'operator' => '==',
										'value'    => 'style2',
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
					'image2',
						[
						  'label' => __( 'Image', 'bitfix' ),
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
					'alt_text2',
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
        
		<?php  if ( 'style1' === $settings['style'] ) : ?>
		
		<section class="faq-section <?php echo esc_attr($settings['sec_class']);?>">
			<div class="row">
				<div class="col-lg-12">
					<div class="faq-image mb_30 clearfix wow slideInRight animated" data-wow-delay="200ms" data-wow-duration="2500ms">
						<div class="image-one">
							<?php  if ( esc_url($settings['image1']['id']) ) : ?>   
							<img src="<?php echo wp_get_attachment_url($settings['image1']['id']);?>" alt="<?php echo esc_attr($settings['alt_text1']);?>"/>
							<?php else :?>
							<div class="noimage"></div>
							<?php endif;?>
						</div>
						<div class="image-two">
							<?php  if ( esc_url($settings['image2']['id']) ) : ?>   
							<img src="<?php echo wp_get_attachment_url($settings['image2']['id']);?>" alt="<?php echo esc_attr($settings['alt_text2']);?>"/>
							<?php else :?>
							<div class="noimage"></div>
							<?php endif;?>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<?php endif;?>
		
		<?php  if ( 'style2' === $settings['style'] ) : ?>
		
		<section class="about-section home-three <?php echo esc_attr($settings['sec_class']);?>">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12">
						<div class="about-image-colmun wow slideInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
							<div class="image">
								<?php  if ( esc_url($settings['image1']['id']) ) : ?>   
								<img src="<?php echo wp_get_attachment_url($settings['image1']['id']);?>" alt="<?php echo esc_attr($settings['alt_text1']);?>"/>
								<?php else :?>
								<div class="noimage"></div>
								<?php endif;?>
								<div class="image-bg-shape"></div>
							</div>
						</div>
					</div>
				</div>
			</div> 
		</section>
		
		<?php endif;?>

             
		<?php 
	}

}
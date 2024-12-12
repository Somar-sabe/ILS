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
class Funfact_Block extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'vervoer_funfact_block';
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
		return esc_html__( 'Funfact Block', 'vervoer' );
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
			'funfact_block',
			[
				'label' => esc_html__( 'Funfact Block', 'vervoer' ),
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
						'label' => __( 'Funfact Block', 'bitfix' ),
						'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
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
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your title', 'bitfix' ),
					]
				);
				$this->add_control(
					'ff_stop',
					[
					'label' => __( 'Counter Stop', 'bitfix' ),
					'type' => Controls_Manager::TEXTAREA,
					'dynamic' => [
					'active' => true,
					],
					'placeholder' => __( 'Enter Counter Stop', 'bitfix' ),
					]
				);
				$this->add_control(
					'ff_sing',
					[
					'label' => __( 'Counter Sing', 'bitfix' ),
					'type' => Controls_Manager::TEXTAREA,
					'dynamic' => [
					'active' => true,
					],
					'placeholder' => __( 'Enter Counter Sing', 'bitfix' ),
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
		
		<section class="funfact-section <?php echo esc_attr($settings['sec_class']);?>">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="funfact-block mb_40 wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
							<div class="icon">
								<?php  if ( esc_url($settings['image']['id']) ) : ?>   
								<img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
								<?php else :?>
								<div class="noimage"></div>
								<?php endif;?>
							</div>
							<h6 class="title"><?php echo $settings['title'];?></h6>
							<div class="count-box">
								<span class="count-text" data-speed="1500" data-stop="<?php echo esc_attr($settings['ff_stop']);?>">0</span><span><?php echo esc_attr($settings['ff_sing']);?></span>
							</div>
							<p><?php echo $settings['text'];?></p>
						</div>
					</div>
				</div>
			</div>    
		</section>
		
		<?php endif;?>
		
		<?php  if ( 'style2' === $settings['style'] ) : ?>
		
		
		<section class="reliable-service <?php echo esc_attr($settings['sec_class']);?>">
			<div class="row">
				<div class="col-xl-12 col-sm-12">
					<div class="funfact-block mb_40 wow slideInUp animated" data-wow-delay="100ms" data-wow-duration="1500ms">
						<div class="icon">
							<?php  if ( esc_url($settings['image']['id']) ) : ?>   
							<img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
							<?php else :?>
							<div class="noimage"></div>
							<?php endif;?>
						</div>
						<h6 class="title"><?php echo $settings['title'];?></h6>
						<div class="count-box">
							<span class="count-text" data-speed="1500" data-stop="<?php echo esc_attr($settings['ff_stop']);?>">0</span><span><?php echo esc_attr($settings['ff_sing']);?></span>
						</div>
						<p><?php echo $settings['text'];?></p>
					</div>
				</div>
			</div>
		</section>
		
		<?php endif;?>
             
		<?php 
	}

}
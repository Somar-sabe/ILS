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
class How_To_Work2 extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'vervoer_how_to_work2';
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
		return esc_html__( 'How To Work Two', 'vervoer' );
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
			'how_to_work2',
			[
				'label' => esc_html__( 'How To Work Two', 'vervoer' ),
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
						'label' => __( 'Shape Block', 'bitfix' ),
						'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
					]
				);
				$this->add_control(
					'image',
						[
						  'label' => __( 'Shape Image One', 'bitfix' ),
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
					'image1',
						[
						  'label' => __( 'Shape Image Two', 'bitfix' ),
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
						  'label' => __( 'Shape Image Three', 'bitfix' ),
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
				$this->add_control(
					'image3',
						[
						  'label' => __( 'Shape Image Four', 'bitfix' ),
						  'type' => Controls_Manager::MEDIA,
						  'default' => ['url' => Utils::get_placeholder_image_src(),],
						]
				);
				$this->add_control(
					'alt_text3',
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
					'image4',
						[
						  'label' => __( 'Ship Image', 'bitfix' ),
						  'type' => Controls_Manager::MEDIA,
						  'default' => ['url' => Utils::get_placeholder_image_src(),],
						]
				);
				$this->add_control(
					'alt_text4',
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
						'label' => __( 'Working Block', 'inovex' ),
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
								'block_title1' =>
								[
									'name' => 'block_title1',
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
        
		<section class="how-to-work-section-two sec-padd-150 <?php echo esc_attr($settings['sec_class']);?>">
			<div class="shape-01" data-parallax='{"x": 200}'>
				<?php  if ( esc_url($settings['image']['id']) ) : ?>   
				<img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
				<?php else :?>
				<div class="noimage"></div>
				<?php endif;?>
			</div>
			<div class="shape-02" data-parallax='{"x": 200}'>
				<?php  if ( esc_url($settings['image1']['id']) ) : ?>   
				<img src="<?php echo wp_get_attachment_url($settings['image1']['id']);?>" alt="<?php echo esc_attr($settings['alt_text1']);?>"/>
				<?php else :?>
				<div class="noimage"></div>
				<?php endif;?>
			</div>
			<div class="shape-03" data-parallax='{"x": 200}'>
				<?php  if ( esc_url($settings['image2']['id']) ) : ?>   
				<img src="<?php echo wp_get_attachment_url($settings['image2']['id']);?>" alt="<?php echo esc_attr($settings['alt_text2']);?>"/>
				<?php else :?>
				<div class="noimage"></div>
				<?php endif;?>
			</div>
			<div class="shape-three" data-parallax='{"x": 200}'>
				<?php  if ( esc_url($settings['image3']['id']) ) : ?>   
				<img src="<?php echo wp_get_attachment_url($settings['image3']['id']);?>" alt="<?php echo esc_attr($settings['alt_text3']);?>"/>
				<?php else :?>
				<div class="noimage"></div>
				<?php endif;?>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xl-4 col-lg-12">
						<div class="image-box  wow fadeInLeft animated" data-wow-delay="200ms" data-wow-duration="2000ms">
							<?php  if ( esc_url($settings['image4']['id']) ) : ?>   
							<img src="<?php echo wp_get_attachment_url($settings['image4']['id']);?>" alt="<?php echo esc_attr($settings['alt_text4']);?>"/>
							<?php else :?>
							<div class="noimage"></div>
							<?php endif;?>
						</div>
					</div>
					<div class="col-xl-8 col-lg-12">
						<div class="row">
							<?php if($settings['title']): ?>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 colmun">
								<div class="section-title mb_30 wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
									<div class="sub-title"><?php echo $settings['subtitle'];?></div>
									<h3 class="title"><?php echo $settings['title'];?></h3>
									<p class="title-text"><?php echo $settings['text'];?></p>
								</div>
							</div>
							<?php endif; ?>
							
							<?php foreach($settings['repeat'] as $item):?>
							
							<div class="col-xl-<?php echo esc_attr($item['block_column'], true );?> col-lg-6 col-md-12 col-sm-12 colmun">                
								<div class="work-block-two">
									<div class="inner-box">
										<div class="icon-box">
											<i class="<?php echo str_replace("icon ", " ", esc_attr( $item['block_icons']['value']));?>"></i>
											<div class="step"><?php echo wp_kses($item['block_title'], $allowed_tags);?></div>
										</div>                    
										<div class="content-box">
											<h6><?php echo wp_kses($item['block_title1'], $allowed_tags);?></h6>
											<p><?php echo wp_kses($item['block_text'], $allowed_tags);?></p>
										</div>
									</div>                  
								</div>
							</div>
							
							<?php endforeach; ?>
							
						</div>
					</div>
				</div>
			</div>
		</section>
             
		<?php 
	}

}
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
class Service extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'vervoer_service';
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
		return esc_html__( 'Service', 'vervoer' );
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
			'service',
			[
				'label' => esc_html__( 'Service', 'vervoer' ),
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
		
		// New Tab#2

		$this->start_controls_section(
					'content_section2',
					[
						'label' => __( 'List Block', 'inovex' ),
						'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
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
				
				
		$this->end_controls_section();
		
		// New Tab#3

		$this->start_controls_section(
					'content_section3',
					[
						'label' => __( 'List Block', 'inovex' ),
						'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
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
        
		<section class="service-seven <?php echo esc_attr($settings['sec_class']);?>">
			<div class="shape">
				<?php  if ( !empty(esc_url($settings['image']['id']) )) : ?>   
					<img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
				<?php endif;?>
			</div>
			<div class="container-fulid">
				<div class="service-seven-inner">
					<div class="row">
					
						<?php foreach($settings['repeat'] as $item):?>
					
						<div class="col-xl-<?php echo esc_attr($item['block_column'], true );?> col-lg-4 col-md-4 col-sm-12 colmun">
							<div class="service-seven-block">
								<div class="image-box img_hover_10">
									<figure>
										<a href="<?php echo esc_url($item['block_btnlink']['url']);?>">
											<?php  if ( !empty(esc_url($item['block_image']['id']) )) : ?>   
												<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
											<?php endif;?>
										</a>
									</figure>
								</div>
								<div class="inner-text">
									<span><?php echo wp_kses($item['block_subtitle'], $allowed_tags);?></span>
									<h6><?php echo wp_kses($item['block_title'], $allowed_tags);?></h6>
								</div>
							</div>
						</div>
						
						<?php endforeach; ?>
						
					</div>
				</div>
				<div class="service-seven-content">
					<h4 class="title"><?php echo $settings['title'];?></h4>
					<div class="row">
						<div class="col-xl-6 col-lg-6 col-md-12">
							<div class="hot-fuature">
								<h6><?php echo $settings['title1'];?></h6>
								<ul class="feature-list">
								
									<?php foreach($settings['repeat1'] as $item):?>
									
									<li><i class="flaticon-tick-1"></i><?php echo wp_kses($item['block_title'], $allowed_tags);?></li>
									
									<?php endforeach; ?>
									
								</ul>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-12">
							<div class="hot-fuature">
								<h6><?php echo $settings['title2'];?></h6>
								<ul class="feature-list">
								
									<?php foreach($settings['repeat2'] as $item):?>
								
									<li><i class="flaticon-tick-1"></i><?php echo wp_kses($item['block_title'], $allowed_tags);?></li>
									
									<?php endforeach; ?>
									
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
             
		<?php 
	}

}
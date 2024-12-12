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
class About_Right2 extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'vervoer_about_right2';
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
		return esc_html__( 'About Right Two', 'vervoer' );
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
			'about_right2',
			[
				'label' => esc_html__( 'About Right Two', 'vervoer' ),
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
			'number',
			[
				'label'       => __( 'Number', 'bitfix' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your Number', 'bitfix' ),
			]
		);
		$this->add_control(
			'image',
				[
				  'label' => __( 'Sign Image', 'bitfix' ),
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
			'bgimg',
			[
				'label' => esc_html__('Shape Image One', 'bitfix'),
				'type' => Controls_Manager::MEDIA,
				'default' => ['url' => Utils::get_placeholder_image_src(),],
			]
		);
		$this->add_control(
			'bgimg1',
			[
				'label' => esc_html__('Shape Image Two', 'bitfix'),
				'type' => Controls_Manager::MEDIA,
				'default' => ['url' => Utils::get_placeholder_image_src(),],
			]
		);
		$this->add_control(
			'bttn',
			[
				'label'       => __( 'Button', 'bitfix' ),
				'type'        => Controls_Manager::TEXT,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your Button Title', 'bitfix' ),
			]
		);	
		$this->add_control(
			'btnlink',
			[
			  'label' => __( 'Button Url', 'bitfix' ),
			  'type' => Controls_Manager::URL,
			  'placeholder' => __( 'https://your-link.com', 'bitfix' ),
			  'show_external' => true,
			  'default' => [
				'url' => '',
				'is_external' => true,
				'nofollow' => true,
			  ],
			
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
						'label' => __( 'Image Block', 'inovex' ),
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

		// New Tab#2

		$this->start_controls_section(
					'content_section2',
					[
						'label' => __( 'Service Block', 'inovex' ),
						'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
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
		
		<section class="about-section54 <?php echo esc_attr($settings['sec_class']);?>">
			<div class="row">
				<div class="col-xl-12 col-lg-12">
					<div class="about-content-colmun wow slideInRight animated" data-wow-delay="00ms" data-wow-duration="1500ms">               
						<div class="section-title">
							<div class="sub-title"><?php echo $settings['subtitle'];?></div>
							<h3 class="title"><?php echo $settings['title'];?></h3>
							<p class="title-text"><?php echo $settings['text'];?></p>
							<ul class="thumb-image mb_50">
								<?php foreach($settings['repeat'] as $item):?>
							
								<li>
									<?php if(wp_get_attachment_url($item['block_image']['id'])): ?>
									<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
									<?php else :?>
									<div class="noimage"></div>
									<?php endif;?>
								</li>
								
								<?php endforeach; ?>
								
								<li><?php echo $settings['number'];?></li>
								<li>
									<?php  if ( esc_url($settings['image']['id']) ) : ?>   
									<img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
									<?php else :?>
									<div class="noimage"></div>
									<?php endif;?>
								</li>
								
							</ul>
							<?php if($settings['bttn']): ?>
							<div class="link-btn mb_30"><a href="<?php echo esc_url($settings['btnlink']['url']);?>"><i class="flaticon-check"></i><?php echo $settings['bttn'];?></a></div>
							<?php endif; ?>
						</div>  

						<?php foreach($settings['repeat1'] as $item):?>
						
						<div class="featured-button mr_10">
							<div class="icon-1"><i class="<?php echo str_replace("icon ", " ", esc_attr( $item['block_icons']['value']));?>"></i></div>
							<span><?php echo wp_kses($item['block_title'], $allowed_tags);?></span>
							<div class="icon-2"><i class="flaticon-right-chevron"></i></div>
						</div>

						<?php endforeach; ?>
						
					</div>                
				</div>
			</div>
			<div class="pattern-layer parallax-scene parallax-scene-1">
			
				<?php  if ( esc_url($settings['bgimg']['id']) ) : ?>
				<div data-depth="0.40" class="pattern-1" style="background-image: url(<?php echo wp_get_attachment_url($settings['bgimg']['id']);?>);">
				<?php else :?>	
				<div class="noimage">
				<?php endif;?>
				</div>
				
				<?php  if ( esc_url($settings['bgimg1']['id']) ) : ?>
				<div data-depth="0.20" class="pattern-2" style="background-image: url(<?php echo wp_get_attachment_url($settings['bgimg1']['id']);?>);">
				<?php else :?>	
				<div class="noimage">
				<?php endif;?>
				</div>
				
			</div>
		</section>
             
		<?php 
	}

}
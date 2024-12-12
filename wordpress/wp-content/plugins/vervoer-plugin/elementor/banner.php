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
class Banner extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'vervoer_banner';
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
		return esc_html__( 'Banner', 'vervoer' );
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
			'banner',
			[
				'label' => esc_html__( 'Banner', 'vervoer' ),
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
			'icons',
				[
					'label' => esc_html__('Enter The icons', 'bitfix'),
					'type' => Controls_Manager::ICONS,
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
					'bgimg',
					[
						'label' => esc_html__('Shape Image One', 'bitfix'),
						'conditions' => array(
							'relation' => 'or',
							'terms'    => array(
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
					'bgimg1',
					[
						'label' => esc_html__('Shape Image Two', 'bitfix'),
						'conditions' => array(
							'relation' => 'or',
							'terms'    => array(
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
					'bgimg2',
					[
						'label' => esc_html__('Shape Image Three', 'bitfix'),
						'conditions' => array(
							'relation' => 'or',
							'terms'    => array(
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
					'bgimg3',
					[
						'label' => esc_html__('Shape Image Four', 'bitfix'),
						'conditions' => array(
							'relation' => 'or',
							'terms'    => array(
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
					'bgimg4',
					[
						'label' => esc_html__('Shape Image Five', 'bitfix'),
						'conditions' => array(
							'relation' => 'or',
							'terms'    => array(
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
					'bgimg5',
					[
						'label' => esc_html__('Shape Image Six', 'bitfix'),
						'conditions' => array(
							'relation' => 'or',
							'terms'    => array(
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
		
		<section class="banner-home-four <?php echo esc_attr($settings['sec_class']);?>">
			<div class="container">            
				<div class="row">
					<div class="col-xl-6 col-lg-12">
						<div class="content-box">                    
							<h6 class="sub-title"><i class="<?php echo esc_attr($settings['icons']['value']);?>"></i><?php echo $settings['subtitle'];?></h6>
							<h1 class="title mb_30"><?php echo $settings['title'];?></h1>
							<?php if($settings['bttn']): ?>
							<div class="btn-box">
								<a href="<?php echo esc_url($settings['btnlink']['url']);?>" class="button-style-three"><i class="fa fa-paper-plane"></i><?php echo $settings['bttn'];?></a>
							</div>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-xl-6 col-lg-12">
						<div class="image-box" data-parallax='{"x": 200}'>                    
							<figure>
								<?php  if ( esc_url($settings['image']['id']) ) : ?>   
								<img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
								<?php else :?>
								<div class="noimage"></div>
								<?php endif;?>
							</figure>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<?php endif;?>
		
		<?php  if ( 'style2' === $settings['style'] ) : ?>
		
		<section class="banner-home-five <?php echo esc_attr($settings['sec_class']);?>">
			<div class="container">
				<div class="content-box">                    
					<h6 class="sub-title"><i class="<?php echo esc_attr($settings['icons']['value']);?>"></i><?php echo $settings['subtitle'];?></h6>
					<h1 class="title mb_30"><?php echo $settings['title'];?></h1>
					<?php if($settings['bttn']): ?>
					<div class="btn-box">
						<a href="<?php echo esc_url($settings['btnlink']['url']);?>" class="button-style-one"><i class="fa fa-paper-plane"></i><?php echo $settings['bttn'];?></a>
					</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="pattern-layer parallax-scene parallax-scene-2">
				<?php  if ( esc_url($settings['bgimg']['id']) ) : ?>
				<div data-depth="0.40" class="pattern-1" style="background-image: url(<?php echo wp_get_attachment_url($settings['bgimg']['id']);?>);">
				<?php else :?>	
				<div class="noimage">
				<?php endif;?>
				</div>
				<?php  if ( esc_url($settings['bgimg1']['id']) ) : ?>
				<div data-depth="0.50" class="pattern-2" style="background-image: url(<?php echo wp_get_attachment_url($settings['bgimg1']['id']);?>);">
				<?php else :?>	
				<div class="noimage">
				<?php endif;?>
				</div>
				<?php  if ( esc_url($settings['bgimg2']['id']) ) : ?>
				<div data-depth="0.60" class="pattern-3" style="background-image: url(<?php echo wp_get_attachment_url($settings['bgimg2']['id']);?>);">
				<?php else :?>	
				<div class="noimage">
				<?php endif;?>
				</div>
				<?php  if ( esc_url($settings['bgimg3']['id']) ) : ?>
				<div data-depth="0.30" class="pattern-4" style="background-image: url(<?php echo wp_get_attachment_url($settings['bgimg3']['id']);?>);">
				<?php else :?>	
				<div class="noimage">
				<?php endif;?>
				</div>
				<?php  if ( esc_url($settings['bgimg4']['id']) ) : ?>
				<div data-depth="0.20" class="pattern-5" style="background-image: url(<?php echo wp_get_attachment_url($settings['bgimg4']['id']);?>);">
				<?php else :?>	
				<div class="noimage">
				<?php endif;?>
				</div>
				<?php  if ( esc_url($settings['bgimg5']['id']) ) : ?>
				<div data-depth="0.70" class="pattern-6" style="background-image: url(<?php echo wp_get_attachment_url($settings['bgimg5']['id']);?>);">
				<?php else :?>	
				<div class="noimage">
				<?php endif;?>
				</div>
			</div>
			<div class="shape-map">
				<?php  if ( esc_url($settings['image']['id']) ) : ?>   
				<img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
				<?php else :?>
				<div class="noimage"></div>
				<?php endif;?>
			</div>
		</section>
		
		<?php endif;?>

             
		<?php 
	}

}
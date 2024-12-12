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
class About extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'vervoer_about';
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
		return esc_html__( 'About', 'vervoer' );
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
			'about',
			[
				'label' => esc_html__( 'About', 'vervoer' ),
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
						'label' => __( 'Shape Block', 'bitfix' ),
						'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
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
					'image1',
						[
						  'label' => __( 'Shape Image Two', 'bitfix' ),
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
					'bgimg',
					[
						'label' => esc_html__('Shape Background image', 'bitfix'),
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
				
				
				
		$this->end_controls_section();
		
		// New Tab#2

		$this->start_controls_section(
					'content_section2',
					[
						'label' => __( 'Left Block', 'bitfix' ),
						'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
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
				$this->add_control(
					'image3',
						[
						  'label' => __( 'Image', 'bitfix' ),
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
					'bgimg1',
					[
						'label' => esc_html__('Background image', 'bitfix'),
						'type' => Controls_Manager::MEDIA,
						'default' => ['url' => Utils::get_placeholder_image_src(),],
					]
				);
				$this->add_control(
					'image4',
						[
						  'label' => __( 'Image', 'bitfix' ),
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
				$this->add_control(
					'qoute-text',
					[
						'label'       => __( 'Qoute Text', 'bitfix' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your Description', 'bitfix' ),
					]
				);
				$this->add_control(
					'authre-name',
					[
						'label'       => __( 'Authre Name', 'bitfix' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your Description', 'bitfix' ),
					]
				);
				$this->add_control(
					'designation',
					[
						'label'       => __( 'Designation', 'bitfix' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your Description', 'bitfix' ),
					]
				);
				$this->add_control(
					'sign',
					[
						'label'       => __( 'Sign', 'bitfix' ),
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
						'label' => __( 'Right Block', 'bitfix' ),
						'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
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
					'mail-title',
					[
						'label'       => __( 'Mail Title', 'bitfix' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your Description', 'bitfix' ),
					]
				);
				$this->add_control(
					'mail',
					[
						'label'       => __( 'Mail', 'bitfix' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [
							'active' => true,
						],
						'placeholder' => __( 'Enter your Description', 'bitfix' ),
					]
				);
				$this->add_control(
					'mail-btnlink',
					[
					  'label' => __( 'Mail Url', 'bitfix' ),
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
				
				
		$this->end_controls_section();
		
		// New Tab#5

		$this->start_controls_section(
					'content_section5',
					[
						'label' => __( 'Feature Block', 'inovex' ),
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
		
		<?php  if ( 'style1' === $settings['style'] ) : ?>
        
		<section class="company-about <?php echo esc_attr($settings['sec_class']);?>">
			<div class="shape-seven wow slideInLeft animated" data-wow-delay="200ms" data-wow-duration="2500ms">
				<div class="shape" data-parallax='{"x": 20}'>
					<?php  if ( esc_url($settings['image']['id']) ) : ?>   
					<img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
					<?php else :?>
					<div class="noimage"></div>
					<?php endif;?>
				</div>        
			</div>
			<div class="shape-eight wow slideInRight animated" data-wow-delay="200ms" data-wow-duration="2500ms">        
				<div class="shape" data-parallax='{"x": 20}'>
					<?php  if ( esc_url($settings['image1']['id']) ) : ?>   
					<img src="<?php echo wp_get_attachment_url($settings['image1']['id']);?>" alt="<?php echo esc_attr($settings['alt_text1']);?>"/>
					<?php else :?>
					<div class="noimage"></div>
					<?php endif;?>
				</div>
			</div>
			<div class="container">
				<div class="shape-inner">
					<div class="pattern-layer parallax-scene parallax-scene-1">
						<?php  if ( esc_url($settings['bgimg']['id']) ) : ?>
						<div data-depth="0.40" class="pattern-1" style="background-image: url(<?php echo wp_get_attachment_url($settings['bgimg']['id']);?>);">
						<?php else :?>	
						<div class="noimage">
						<?php endif;?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-5 col-lg-12">
						<div class="image-colmun">
							<div class="shape-image">
								<?php  if ( esc_url($settings['image2']['id']) ) : ?>   
								<img src="<?php echo wp_get_attachment_url($settings['image2']['id']);?>" alt="<?php echo esc_attr($settings['alt_text2']);?>"/>
								<?php else :?>
								<div class="noimage"></div>
								<?php endif;?>
							</div>
							<div class="image-box">
								<?php  if ( esc_url($settings['image3']['id']) ) : ?>   
								<img src="<?php echo wp_get_attachment_url($settings['image3']['id']);?>" alt="<?php echo esc_attr($settings['alt_text3']);?>"/>
								<?php else :?>
								<div class="noimage"></div>
								<?php endif;?>
							</div>
							<?php  if ( esc_url($settings['bgimg1']['id']) ) : ?>
							<div class="image-box-1" style="background-image: url(<?php echo wp_get_attachment_url($settings['bgimg1']['id']);?>);">
							<?php else :?>	
							<div class="image-box-1">
							<?php endif;?>
							
								<div class="text-inner">
									<div class="logo">
										<?php  if ( esc_url($settings['image4']['id']) ) : ?>   
										<img src="<?php echo wp_get_attachment_url($settings['image4']['id']);?>" alt="<?php echo esc_attr($settings['alt_text4']);?>"/>
										<?php else :?>
										<div class="noimage"></div>
										<?php endif;?>
									</div>
									<div class="qoute">“</div>
									<div class="text mb_30"><?php echo $settings['qoute-text'];?></div>
									<div class="basic-info">
										<div class="text-left">
											<div class="authre-name"><?php echo $settings['authre-name'];?></div>
											<div class="designation"><?php echo $settings['designation'];?></div>
										</div>                                
										<div class="sign"><?php echo $settings['sign'];?></div>
									</div>
								</div>                        
							</div>
						</div>                
					</div>
					<div class="col-xl-7 col-lg-12">
						<div class="content-colmun">                                       
							<div class="section-title">
								<div class="sub-title"><?php echo $settings['subtitle'];?></div>
								<h3 class="title"><?php echo $settings['title'];?></h3>
								<p class="title-text"><?php echo $settings['text'];?></p>
							</div>
							<div class="company-feature">
							
								<?php foreach($settings['repeat'] as $item):?>
								
								
								<div class="feature-block">
									<div class="feature-inner">
										<div class="icon-box">
											<?php if(wp_get_attachment_url($item['block_image']['id'])): ?>
											<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
											<?php else :?>
											<div class="noimage"></div>
											<?php endif;?>
										</div>
										<h6 class="title"><?php echo wp_kses($item['block_title'], $allowed_tags);?></h6>
									</div>                            
								</div>
								
								<?php endforeach; ?>
								
							</div>                                        
							<div class="mail-info"><?php echo $settings['mail-title'];?> <a href="<?php echo esc_url($settings['mail-btnlink']['url']);?>"><?php echo $settings['mail'];?></a></div>
							
							<?php if($settings['bttn']): ?>
							<div class="link-button">
								<a href="<?php echo esc_url($settings['btnlink']['url']);?>" class="button-style-three"><i class="flaticon-document"></i><?php echo $settings['bttn'];?></a>
							</div>
							<?php endif; ?>
						</div>                
					</div>
				</div>
			</div>
		</section>
		
		<?php endif;?>
		
		<?php  if ( 'style2' === $settings['style'] ) : ?>
		
		<section class="company-about about-page  <?php echo esc_attr($settings['sec_class']);?>">
			<div class="shape" data-parallax='{"y": 50}'>
				<?php  if ( esc_url($settings['image']['id']) ) : ?>   
				<img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
				<?php else :?>
				<div class="noimage"></div>
				<?php endif;?>
			</div> 
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-12">
						<div class="image-colmun">
							<div class="image-box">
								<?php  if ( esc_url($settings['image3']['id']) ) : ?>   
								<img src="<?php echo wp_get_attachment_url($settings['image3']['id']);?>" alt="<?php echo esc_attr($settings['alt_text3']);?>"/>
								<?php else :?>
								<div class="noimage"></div>
								<?php endif;?>
							</div>
							<?php  if ( esc_url($settings['bgimg1']['id']) ) : ?>
							<div class="image-box-1" style="background-image: url(<?php echo wp_get_attachment_url($settings['bgimg1']['id']);?>);">
							<?php else :?>	
							<div class="image-box-1">
							<?php endif;?>
							
								<div class="text-inner">
									<div class="logo">
										<?php  if ( esc_url($settings['image4']['id']) ) : ?>   
										<img src="<?php echo wp_get_attachment_url($settings['image4']['id']);?>" alt="<?php echo esc_attr($settings['alt_text4']);?>"/>
										<?php else :?>
										<div class="noimage"></div>
										<?php endif;?>
									</div>
									<div class="qoute">“</div>
									<div class="text mb_30"><?php echo $settings['qoute-text'];?></div>
									<div class="basic-info">
										<div class="text-left">
											<div class="authre-name"><?php echo $settings['authre-name'];?></div>
											<div class="designation"><?php echo $settings['designation'];?></div>
										</div>                                
										<div class="sign"><?php echo $settings['sign'];?></div>
									</div>
								</div>                       
							</div>
						</div>                
					</div>
					<div class="col-xl-6 col-lg-12">
						<div class="content-colmun">                                       
							<div class="section-title">
								<div class="sub-title"><?php echo $settings['subtitle'];?></div>
								<h3 class="title"><?php echo $settings['title'];?></h3>
								<p class="title-text"><?php echo $settings['text'];?></p>
							</div>
							<div class="company-feature">
							
								<?php foreach($settings['repeat'] as $item):?>
								
								<div class="feature-block">
									<div class="feature-inner">
										<div class="icon-box">
											<?php if(wp_get_attachment_url($item['block_image']['id'])): ?>
											<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
											<?php else :?>
											<div class="noimage"></div>
											<?php endif;?>
										</div>
										<h6 class="title"><?php echo wp_kses($item['block_title'], $allowed_tags);?></h6>
									</div>                            
								</div>
								
								<?php endforeach; ?>
								
							</div>                                        
							<div class="mail-info"><?php echo $settings['mail-title'];?> <a href="<?php echo esc_url($settings['mail-btnlink']['url']);?>"><?php echo $settings['mail'];?></a></div>
							
							<?php if($settings['bttn']): ?>
							<div class="link-button">
								<a href="<?php echo esc_url($settings['btnlink']['url']);?>" class="button-style-three"><i class="flaticon-document"></i><?php echo $settings['bttn'];?></a>
							</div>
							<?php endif; ?>
						</div>                
					</div>
				</div>
			</div>
		</section>
		
		<?php endif;?>
             
		<?php 
	}

}
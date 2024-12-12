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
class Team_Block extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'vervoer_team_block';
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
		return esc_html__( 'Team Block', 'vervoer' );
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
			'team_block',
			[
				'label' => esc_html__( 'Team Block', 'vervoer' ),
			]
		);
		$this->add_control(
			'bttn',
			[
				'label'       => __( 'Button', 'bitfix' ),
				'conditions' => array(
						'relation' => 'or',
						'terms'    => array(
							array(
								'name'     => 'style',
								'operator' => '==',
								'value'    => 'style4',
							),
						),
					),
				'type'        => Controls_Manager::TEXT,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your Button Title', 'bitfix' ),
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
						'style3' => esc_html__( 'Choose Style 3', 'vervoer' ),
						'style4' => esc_html__( 'Choose Style 4', 'vervoer' ),
						'style5' => esc_html__( 'Choose Style 5', 'vervoer' ),
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
						'label' => __( 'Team Block', 'bitfix' ),
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
		
		// New Tab#1

		$this->start_controls_section(
					'content_section',
					[
						'label' => __( 'Social Block', 'inovex' ),
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
								'block_icons' => 
								[
									'name' => 'block_icons',
									'label' => esc_html__('Enter The icons', 'inovex'),
									'type' => Controls_Manager::ICONS,
									
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
		
		<section class="team-section <?php echo esc_attr($settings['sec_class']);?>">
			<div class="row">
				<div class="col-sm-12">
					<div class="team-block-one mb_30 wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
						<div class="inner-box">
							<div class="image-box">
								<?php  if ( esc_url($settings['image']['id']) ) : ?>   
								<img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
								<?php else :?>
								<div class="noimage"></div>
								<?php endif;?>
							</div>
							<div class="content-box">
								<div class="content-text">
									<h6 class="sub-title"><?php echo $settings['subtitle'];?></h6>
									<h5 class="title"><?php echo $settings['title'];?></h5>
								</div>
							</div>
							<div class="overley-content">
								<div class="content-text">
									<h6 class="sub-title"><?php echo $settings['subtitle'];?></h6>
									<h5 class="title"><a href="<?php echo esc_url($settings['btnlink']['url']);?>"><?php echo $settings['title'];?></a></h5>
									<div class="social-midea">
										<ul>
										
											<?php foreach($settings['repeat'] as $item):?>
										
											<li><a href="<?php echo esc_url($item['block_btnlink']['url']);?>"><i class="<?php echo str_replace("icon ", " ", esc_attr( $item['block_icons']['value']));?>"></i></a></li>
											
											<?php endforeach; ?>
											
										</ul>
									</div>
								</div> 
							</div>
						</div>                    
					</div>
				</div>
			</div>
		</section>
		
		<?php endif;?>
		
		<?php  if ( 'style2' === $settings['style'] ) : ?>
		
		<section class="team-section-two <?php echo esc_attr($settings['sec_class']);?>">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-sm-12">
						<div class="team-block-two mb_50 wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
							<div class="inner-box">
								<div class="image-box">
									<a href="<?php echo esc_url($settings['btnlink']['url']);?>">
										<?php  if ( esc_url($settings['image']['id']) ) : ?>   
										<img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
										<?php else :?>
										<div class="noimage"></div>
										<?php endif;?>
									</a>
								</div>
								<div class="content-text">
									<h6 class="sub-title"><?php echo $settings['subtitle'];?></h6>
									<h5 class="title"><a href="<?php echo esc_url($settings['btnlink']['url']);?>"><?php echo $settings['title'];?></a></h5>
									<div class="social-midea">
										<ul>
										
											<?php foreach($settings['repeat'] as $item):?>
										
											<li><a href="<?php echo esc_url($item['block_btnlink']['url']);?>"><i class="<?php echo str_replace("icon ", " ", esc_attr( $item['block_icons']['value']));?>"></i></a></li>
											
											<?php endforeach; ?>
											
										</ul>
									</div>
								</div>
							</div>                    
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<?php endif;?>
		
		<?php  if ( 'style3' === $settings['style'] ) : ?>
		
		<section class="team-section-three <?php echo esc_attr($settings['sec_class']);?>">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="team-block-three mb_30 wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
							<div class="image-box">
								<?php  if ( esc_url($settings['image']['id']) ) : ?>   
								<img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
								<?php else :?>
								<div class="noimage"></div>
								<?php endif;?>
							</div>
							<div class="inner-box">                        
								<div class="content-text">
									<h6 class="sub-title"><?php echo $settings['subtitle'];?></h6>
									<h5 class="title"><a href="<?php echo esc_url($settings['btnlink']['url']);?>"><?php echo $settings['title'];?></a></h5>
									<div class="social-midea">
										<ul>
										
											<?php foreach($settings['repeat'] as $item):?>
										
											<li><a href="<?php echo esc_url($item['block_btnlink']['url']);?>"><i class="<?php echo str_replace("icon ", " ", esc_attr( $item['block_icons']['value']));?>"></i></a></li>
											
											<?php endforeach; ?>
											
										</ul>
									</div>
								</div>
							</div>                    
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<?php endif;?>
		
		<?php  if ( 'style4' === $settings['style'] ) : ?>
		
		<section class="team-section-four <?php echo esc_attr($settings['sec_class']);?>">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-sm-12">
						<div class="team-block-four mb_30 wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
							<div class="image-box">
								<?php  if ( esc_url($settings['image']['id']) ) : ?>   
								<img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
								<?php else :?>
								<div class="noimage"></div>
								<?php endif;?>
								
								<?php if($settings['bttn']): ?>
								<a href="<?php echo esc_url($settings['btnlink']['url']);?>"><?php echo $settings['bttn'];?></a>
								<?php endif; ?>
								
							</div>
							<div class="inner-box">                        
								<div class="content-text">
									<h6 class="sub-title"><?php echo $settings['subtitle'];?></h6>
									<h5 class="title"><a href="<?php echo esc_url($settings['btnlink']['url']);?>"><?php echo $settings['title'];?></a></h5>
									<div class="social-midea">
										<ul>
										
											<?php foreach($settings['repeat'] as $item):?>
										
											<li><a href="<?php echo esc_url($item['block_btnlink']['url']);?>"><i class="<?php echo str_replace("icon ", " ", esc_attr( $item['block_icons']['value']));?>"></i></a></li>
											
											<?php endforeach; ?>
											
										</ul>
									</div>
								</div>
							</div>                    
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<?php endif;?>
		
		<?php  if ( 'style5' === $settings['style'] ) : ?>
		
		<section class="team-section <?php echo esc_attr($settings['sec_class']);?>">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="team-block-one mb_30">
							<div class="team-image">
								<figure>
									<a href="<?php echo esc_url($settings['btnlink']['url']);?>">
										<?php  if ( !empty(esc_url($settings['image']['id']) )) : ?>   
											<img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
										<?php endif;?>
									</a>
								</figure>
								<div class="share-box"><i class="flaticon-share"></i><div class="title-text">Share</div></div>
								<ul class="social-icon">
									<?php foreach($settings['repeat'] as $item):?>
								
									<li><a href="<?php echo esc_url($item['block_btnlink']['url']);?>"><i class="<?php echo str_replace("icon ", " ", esc_attr( $item['block_icons']['value']));?>"></i></a></li>
									
									<?php endforeach; ?>
								</ul>
							</div>
							<div class="team-info">
								<h5><a href="<?php echo esc_url($item['block_btnlink']['url']);?>"><?php echo $settings['title'];?></a></h5>
								<span><?php echo $settings['subtitle'];?></span>
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
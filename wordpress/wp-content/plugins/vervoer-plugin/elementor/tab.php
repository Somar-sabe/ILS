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
class Tab extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'vervoer_tab';
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
		return esc_html__( 'Tab', 'vervoer' );
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
			'tab',
			[
				'label' => esc_html__( 'Tab', 'vervoer' ),
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
			'image',
				[
				  'label' => __( 'Shape Image One', 'bitfix' ),
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
			'alt_text',
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
						'label' => __( 'Tab Block One', 'bitfix' ),
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
					'tab_title',
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
					'tab_title4',
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
					'icons1',
						[
							'label' => esc_html__('Enter The icons', 'bitfix'),
							'type' => Controls_Manager::ICONS,
						]
				);
				$this->add_control(
					'tab_title1',
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
					'tab_title5',
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
					'tab2_title',
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
					'tab2_title1',
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
					'tab2_text',
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
					'tab2_text1',
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
		
		// New Tab#1

		$this->start_controls_section(
					'content_section3',
					[
						'label' => __( 'Tab Block Three', 'bitfix' ),
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
					'tab_title2',
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
					'tab_title6',
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
					'contact_us_form1',
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
        
		<!-- Why Choose Us Section -->
		<section class="why-choose-us-section sec-padd-150 <?php echo esc_attr($settings['sec_class']);?>">
		
			<div class="shape-three" data-parallax='{"x": 200}'>
				<?php  if ( esc_url($settings['image']['id']) ) : ?>   
				<img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
				<?php else :?>
				<div class="noimage"></div>
				<?php endif;?>
			</div>
			<div class="shape-four" data-parallax='{"x": 200}'>
				<?php  if ( esc_url($settings['image1']['id']) ) : ?>   
				<img src="<?php echo wp_get_attachment_url($settings['image1']['id']);?>" alt="<?php echo esc_attr($settings['alt_text1']);?>"/>
				<?php else :?>
				<div class="noimage"></div>
				<?php endif;?>
			</div>
			<div class="container">
				<div class="row tabs-box">
					<?php if($settings['title']): ?>
					<div class="col-xl-3 col-lg-12">
						<div class="section-title mb_30 wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
							<div class="sub-title"><?php echo $settings['subtitle'];?></div>
							<h3 class="title"><?php echo $settings['title'];?></h3>
							<p class="title-text"><?php echo $settings['text'];?></p>
						</div>
					</div>
					<?php endif; ?>
					<div class="col-xl-3 col-lg-12">
						<ul class="tab-buttons">
							<?php if($settings['tab_title']): ?>
							<li class="tab-btn" data-tab="#tab-1">
								<div class="icon-one"><i class="<?php echo esc_attr($settings['icons']['value']);?>"></i></div>
								<?php echo $settings['tab_title'];?>
								<div class="icon-two"><i class="flaticon-right-chevron"></i></div>
							</li>
							<?php endif; ?>
							<?php if($settings['tab_title1']): ?>
							<li class="tab-btn active-btn" data-tab="#tab-2">                            
								<div class="icon-one"><i class="<?php echo esc_attr($settings['icons1']['value']);?>"></i></div>
								<?php echo $settings['tab_title1'];?>
								<div class="icon-two"><i class="flaticon-right-chevron"></i></div>
							</li>
							<?php endif; ?>
							<?php if($settings['tab_title2']): ?>
							<li class="tab-btn" data-tab="#tab-3">
								<div class="icon-one"><i class="<?php echo esc_attr($settings['icons2']['value']);?>"></i></div>
								<?php echo $settings['tab_title2'];?>
								<div class="icon-two"><i class="flaticon-right-chevron"></i></div>
							</li>
							<?php endif; ?>
						</ul>
					</div>
					<div class="col-xl-6 col-lg-12">
						<div class="tabs-content">
							<?php if($settings['tab_title4']): ?>
							<div class="tab" id="tab-1">
								<div class="freight-calclution-box">
									<h4 class="sub-title"><?php echo $settings['tab_title4'];?></h4>
									
									<?php echo do_shortcode( $settings['contact_us_form'] );?>
									
								</div>
							</div>
							<?php endif; ?>
							<?php if($settings['tab_title5']): ?>
							<div class="tab active-tab" id="tab-2">
								<div class="time-traking-box">
									<h4 class="sub-title"><?php echo $settings['tab_title5'];?></h4>
									<div class="tracking-number-search">
										<strong><?php echo $settings['tab2_title'];?></strong>
										<input type="text" name="trackingid" placeholder="Tracking ID number">
										<button><?php echo $settings['tab2_title1'];?></button>
										<p><?php echo $settings['tab2_text'];?></p>
										<div class="level-bar"></div>
										<ul class="tracking-step">
											<?php foreach($settings['repeat'] as $item):?>
											<li><?php echo wp_kses($item['block_title'], $allowed_tags);?></li>
											<?php endforeach; ?>
										</ul>
										<div class="tracking-text"><div class="date"><?php echo $settings['tab2_text1'];?></div>
									</div>
								</div>
							</div>
							<?php endif; ?>
							<?php if($settings['tab_title6']): ?>
							<div class="tab" id="tab-3">
								<div class="online-support">
									<h4 class="sub-title"><?php echo $settings['tab_title6'];?></h4>
									<?php echo do_shortcode( $settings['contact_us_form1'] );?>
								</div>
							</div>
							<?php endif; ?>
						</div> 
					</div> 
				</div>
			</div>
		</section>
		<!-- End Why Choose Us Section -->
		
		<?php endif;?>
		
		<?php  if ( 'style2' === $settings['style'] ) : ?>
		
		<section class="why-choose-us-section two <?php echo esc_attr($settings['sec_class']);?>">
			<div class="container">
				<div class="inner-page">
					<div class="row tabs-box">
						<?php if($settings['title']): ?>
						<div class="col-xl-3 col-lg-12">
							<div class="section-title mb_30 wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
								<div class="sub-title"><?php echo $settings['subtitle'];?></div>
								<h3 class="title"><?php echo $settings['title'];?></h3>
								<p class="title-text"><?php echo $settings['text'];?></p>
							</div>
						</div>
						<?php endif; ?>
						<div class="col-xl-3 col-lg-12">
							<ul class="tab-buttons">
								<?php if($settings['tab_title']): ?>
								<li class="tab-btn active-btn" data-tab="#tab-1">
									<div class="icon-one"><i class="<?php echo esc_attr($settings['icons']['value']);?>"></i></div>
									<?php echo $settings['tab_title'];?>
									<div class="icon-two"><i class="flaticon-right-chevron"></i></div>
								</li>
								<?php endif; ?>
								<?php if($settings['tab_title1']): ?>
								<li class="tab-btn" data-tab="#tab-2">                            
									<div class="icon-one"><i class="<?php echo esc_attr($settings['icons1']['value']);?>"></i></div>
									<?php echo $settings['tab_title1'];?>
									<div class="icon-two"><i class="flaticon-right-chevron"></i></div>
								</li>
								<?php endif; ?>
								<?php if($settings['tab_title2']): ?>
								<li class="tab-btn" data-tab="#tab-3">
									<div class="icon-one"><i class="<?php echo esc_attr($settings['icons2']['value']);?>"></i></div>
									<?php echo $settings['tab_title2'];?>
									<div class="icon-two"><i class="flaticon-right-chevron"></i></div>
								</li>
								<?php endif; ?>
							</ul>
						</div>
						<div class="col-xl-6 col-lg-12">
							<div class="tabs-content">
								<?php if($settings['tab_title4']): ?>
								<div class="tab active-tab" id="tab-1">
									<div class="freight-calclution-box">
										<h4 class="sub-title"><?php echo $settings['tab_title4'];?></h4>
										
										<?php echo do_shortcode( $settings['contact_us_form'] );?>
										
									</div>
								</div>
								<?php endif; ?>
								<?php if($settings['tab_title5']): ?>
								<div class="tab" id="tab-2">
									<div class="time-traking-box">
										<h4 class="sub-title"><?php echo $settings['tab_title5'];?></h4>
										<div class="tracking-number-search">
											<strong><?php echo $settings['tab2_title'];?></strong>
											<input type="text" name="trackingid" placeholder="Tracking ID number">
											<button><?php echo $settings['tab2_title1'];?></button>
											<p><?php echo $settings['tab2_text'];?></p>
											<div class="level-bar"></div>
											<ul class="tracking-step">
												<?php foreach($settings['repeat'] as $item):?>
												<li><?php echo wp_kses($item['block_title'], $allowed_tags);?></li>
												<?php endforeach; ?>
											</ul>
											<div class="tracking-text"><div class="date"><?php echo $settings['tab2_text1'];?></div>
										</div>
									</div>
								</div>
								<?php endif; ?>
								<?php if($settings['tab_title6']): ?>
								<div class="tab" id="tab-3">
									<div class="online-support">
										<h4 class="sub-title"><?php echo $settings['tab_title6'];?></h4>
										<?php echo do_shortcode( $settings['contact_us_form1'] );?>
									</div>
								</div>
								<?php endif; ?>
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
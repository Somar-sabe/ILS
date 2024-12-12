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
class Wi_Catagory extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'vervoer_wi_catagory';
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
		return esc_html__( 'Sidebar Catagory', 'vervoer' );
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
	protected function _register_controls() {
		$this->start_controls_section(
			'wi_catagory',
			[
				'label' => esc_html__( 'Sidebar Catagory', 'vervoer' ),
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
				'label'       => __( 'Section Class', 'rashid' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter Section Class', 'rashid' ),
			]
		);	
		
		
		$this->end_controls_section();
		
		// New Tab#1

		$this->start_controls_section(
					'content_section',
					[
						'label' => __( 'List Block', 'bitfix' ),
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
                			['block_title' => esc_html__('Projects Completed', 'diaco')],
            			],
            		'fields' => 
						[
							[
								'name' => 'block_active',
								'label' => __( 'Show Active', 'rashid' ),
								'type' => \Elementor\Controls_Manager::SWITCHER,
								'label_on' => __( 'Show', 'rashid' ),
								'label_off' => __( 'Hide', 'rashid' ),
								'return_value' => 'yes',
								'default' => 'yes',
							],
							[
								'name' => 'block_icons',
								'label' => esc_html__('Enter The icons', 'inovex'),
								'type' => Controls_Manager::ICONS,
								
							],
							[
								'name' => 'block_title',
								'label' => esc_html__('Title', 'rashid'),
								'type' => Controls_Manager::TEXTAREA,
								'default' => esc_html__('', 'rashid')
							],
							[
							  'name' => 'block_btnlink',
							  'label' => __( 'Url', 'rashid' ),
							  'type' => Controls_Manager::URL,
							  'placeholder' => __( 'https://your-link.com', 'rashid' ),
							  'show_external' => true,
							  'default' => [
								'url' => '',
								'is_external' => true,
								'nofollow' => true,
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
		
		<section class="service-details <?php echo esc_attr($settings['sec_class']);?>">
			<div class="row">
				<div class="col-xl-12 col-lg-12">
					<div class="service-left-side">
						<div class="service-list-area mb_50">
							<?php if($settings['title']): ?>
							<h4 class="sidebabr-title"><?php echo $settings['title'];?></h4>
							<?php endif; ?>
							<ul class="service-list">
							
								<?php foreach($settings['repeat'] as $item):?>
								<?php  if ( 'yes' === $item['block_active'] ) : ?>
								<li class="active"><a href="<?php echo esc_url($item['block_btnlink']['url']);?>"><i class="<?php echo str_replace("icon ", " ", esc_attr( $item['block_icons']['value']));?>"></i> <?php echo wp_kses($item['block_title'], $allowed_tags);?></a></li>
								
								<?php else: ?>
								
								<li><a href="<?php echo esc_url($item['block_btnlink']['url']);?>"><i class="<?php echo str_replace("icon ", " ", esc_attr( $item['block_icons']['value']));?>"></i> <?php echo wp_kses($item['block_title'], $allowed_tags);?></a></li>
								<?php endif ;?>
								<?php endforeach; ?>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<?php 
	}

}

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
class Skill_Block extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'vervoer_skill_block';
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
		return esc_html__( 'Skill Block', 'vervoer' );
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
			'skill_block',
			[
				'label' => esc_html__( 'Skill Block', 'vervoer' ),
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
						'label' => __( 'Skill Block', 'inovex' ),
						'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
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
        
		<section class="team-details <?php echo esc_attr($settings['sec_class']);?>">
			<div class="content-three">
				<div class="skills-box">
					<div class="row">
						<div class="col-lg-12 col-sm-12 progress-block">
							<div class="single-progress-box">
								<div class="box">
									<div class="piechart"  data-fg-color="#1037B6" data-value=".<?php echo esc_attr($settings['ff_stop']);?>">
										<span>.<?php echo esc_attr($settings['ff_stop']);?></span>
									</div>
									<h5><?php echo $settings['title'];?></h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		

             
		<?php 
	}

}
<?php
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Unique_Graphic_Designer_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	*/
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . 'inc/upsell/upgrade-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Unique_Graphic_Designer_Customize_Section_Pro' );

		$manager->add_section(
			new Unique_Graphic_Designer_Customize_Section_Pro(
				$manager,
				'unique_graphic_designer_upgrade_pro',
				array(
					'title'       => esc_html__( 'Graphic Designer Pro', 'unique-graphic-designer' ),
					'pro_text'    => esc_html__( 'Get Pro Theme', 'unique-graphic-designer' ),
					'pro_url'     => 'https://www.mizanthemes.com/elementor/graphic-designer-wordpress-theme/',
					'priority'    => 5,
				)
			)
		);

		$manager->add_section(
			new Unique_Graphic_Designer_Customize_Section_Pro(
				$manager,
				'unique_graphic_designer_documentation',
				array(
					'pro_text'    => esc_html__( 'Documentation', 'unique-graphic-designer' ),
					'pro_url'     => 'https://mizanthemes.com/setup-guide/unique-graphic-designer-free/',
					'priority'    => 200,
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'unique-graphic-designer-customize-controls', trailingslashit( get_template_directory_uri() ) . '/inc/upsell/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'unique-graphic-designer-customize-controls', trailingslashit( get_template_directory_uri() ) . '/inc/upsell/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Unique_Graphic_Designer_Customize::get_instance();
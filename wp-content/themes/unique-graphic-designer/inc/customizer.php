<?php
/**
 * Theme Customizer.
 *
 * @package unique_graphic_designer
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @since 1.0.0
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function unique_graphic_designer_customize_register( $wp_customize ) {

	// Load custom controls.
	include get_template_directory() . '/inc/customizer/control.php';

	// Register custom control types.
	$wp_customize->register_control_type( 'unique_graphic_designer_Dropdown_Taxonomies_Control' );
	$wp_customize->register_control_type( 'unique_graphic_designer_Section_Manager_Control' );

	// Load customize helpers.
	include get_template_directory() . '/inc/helper/options.php';

	// Load customize sanitize.
	include get_template_directory() . '/inc/customizer/sanitize.php';

	// Load customize callback.
	include get_template_directory() . '/inc/customizer/callback.php';

	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	// Load customize option.
	include get_template_directory() . '/inc/customizer/option.php';

	// Modify default customizer options.
	$wp_customize->get_control( 'background_color' )->description = __( 'Note: Background Color is applicable only if no image is set as Background Image.', 'unique-graphic-designer' );


}
add_action( 'customize_register', 'unique_graphic_designer_customize_register' );

/**
 * Customizer partials.
 *
 * @since 1.0.0
 */
function unique_graphic_designer_customizer_partials( WP_Customize_Manager $wp_customize ) {

	// Abort if selective refresh is not available.
	if ( ! isset( $wp_customize->selective_refresh ) ) {

		$wp_customize->get_setting( 'blogname' )->transport        = 'refresh';
		$wp_customize->get_setting( 'blogdescription' )->transport = 'refresh';
		$wp_customize->get_setting( 'theme_options[copyright_text]' )->transport = 'refresh';
		return;

	}

	// Load customizer partials callback.
	include get_template_directory() . '/inc/customizer/partials.php';

	// Partial blogname.
	$wp_customize->selective_refresh->add_partial(
		'blogname', array(
		'selector'            => '.site-title a',
		'container_inclusive' => false,
		'render_callback'     => 'unique_graphic_designer_customize_partial_blogname',
		 )
	);

	// Partial blogdescription.
	$wp_customize->selective_refresh->add_partial(
		'blogdescription', array(
		'selector'            => '.site-description',
		'container_inclusive' => false,
		'render_callback'     => 'unique_graphic_designer_customize_partial_blogdescription',
		 )
	);

	// Partial copyright_text.
	$wp_customize->selective_refresh->add_partial(
		'copyright_text', array(
		'selector'            => '#colophon .copyright',
		'container_inclusive' => false,
		'settings'            => array( 'theme_options[unique_graphic_designer_copyright_text]' ),
		'render_callback'     => 'unique_graphic_designer_render_partial_copyright_text',
		 )
	);
}

add_action( 'customize_register', 'unique_graphic_designer_customizer_partials', 99 );
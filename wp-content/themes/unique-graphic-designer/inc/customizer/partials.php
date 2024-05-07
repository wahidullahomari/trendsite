<?php
/**
 * Customizer partials.
 *
 * @package unique_graphic_designer
 */

/**
 * Render the site title for the selective refresh partial.
 *
 * @since 1.0.0
 *
 * @return void
 */
function unique_graphic_designer_customize_partial_blogname() {

	bloginfo( 'name' );

}

/**
 * Render the site title for the selective refresh partial.
 *
 * @since 1.0.0
 *
 * @return void
 */
function unique_graphic_designer_customize_partial_blogdescription() {

	bloginfo( 'description' );

}

/**
 * Partial for copyright text.
 *
 * @since 1.0.0
 *
 * @return void
 */
function unique_graphic_designer_render_partial_copyright_text() {
	$unique_graphic_designer_copyright_text = unique_graphic_designer_get_option( 'unique_graphic_designer_copyright_text' );
	$unique_graphic_designer_copyright_text = apply_filters( 'unique_graphic_designer_filter_copyright_text', $unique_graphic_designer_copyright_text );
	if ( ! empty( $unique_graphic_designer_copyright_text ) ) {
		$unique_graphic_designer_copyright_text = wp_kses_data( $unique_graphic_designer_copyright_text );
	}
	echo $unique_graphic_designer_copyright_text;
}
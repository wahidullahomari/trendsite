<?php
	
require get_template_directory() . '/inc/recommendations/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function unique_graphic_designer_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Mizan Demo Importor', 'unique-graphic-designer' ),
			'slug'             => 'mizan-demo-importer',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Essential Addons for Elementor', 'unique-graphic-designer' ),
			'slug'             => 'essential-addons-for-elementor-lite',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	unique_graphic_designer_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'unique_graphic_designer_register_recommended_plugins' );
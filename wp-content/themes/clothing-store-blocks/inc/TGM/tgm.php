<?php
	
load_template( get_template_directory() . '/inc/TGM/class-tgm-plugin-activation.php' );

/**
 * Recommended plugins.
 */
function clothing_store_blocks_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'WooCommerce', 'clothing-store-blocks' ),
			'slug'             => 'woocommerce',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Essential Blocks', 'clothing-store-blocks' ),
			'slug'             => 'essential-blocks',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	clothing_store_blocks_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'clothing_store_blocks_register_recommended_plugins' );
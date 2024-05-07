<?php
/**
 * Clothing Store Blocks: Block Patterns
 *
 * @since Clothing Store Blocks 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Clothing Store Blocks 1.0
 *
 * @return void
 */
function clothing_store_blocks_register_block_patterns() {
	$block_pattern_categories = array(
		'clothing-store-blocks'    => array( 'label' => __( 'Clothing Store Blocks', 'clothing-store-blocks' ) ),
	);

	$block_pattern_categories = apply_filters( 'clothing_store_blocks_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'clothing_store_blocks_register_block_patterns', 9 );

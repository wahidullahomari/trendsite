<?php

add_action( 'admin_menu', 'clothing_store_blocks_gettingstarted' );
function clothing_store_blocks_gettingstarted() {
	add_theme_page( esc_html__('Theme Documentation', 'clothing-store-blocks'), esc_html__('Theme Documentation', 'clothing-store-blocks'), 'edit_theme_options', 'clothing-store-blocks-guide-page', 'clothing_store_blocks_guide');
}

function clothing_store_blocks_admin_theme_style() {
   wp_enqueue_style('clothing-store-blocks-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/dashboard.css');
}
add_action('admin_enqueue_scripts', 'clothing_store_blocks_admin_theme_style');

if ( ! defined( 'CLOTHING_STORE_BLOCKS_SUPPORT' ) ) {
define('CLOTHING_STORE_BLOCKS_SUPPORT',__('https://wordpress.org/support/theme/clothing-store-blocks/','clothing-store-blocks'));
}
if ( ! defined( 'CLOTHING_STORE_BLOCKS_REVIEW' ) ) {
define('CLOTHING_STORE_BLOCKS_REVIEW',__('https://wordpress.org/support/theme/clothing-store-blocks/reviews/','clothing-store-blocks'));
}
if ( ! defined( 'CLOTHING_STORE_BLOCKS_LIVE_DEMO' ) ) {
define('CLOTHING_STORE_BLOCKS_LIVE_DEMO',__('https://www.ovationthemes.com/demos/clothing-store/','clothing-store-blocks'));
}
if ( ! defined( 'CLOTHING_STORE_BLOCKS_BUY_PRO' ) ) {
define('CLOTHING_STORE_BLOCKS_BUY_PRO',__('https://www.ovationthemes.com/wordpress/clothing-store-wordpress-theme/','clothing-store-blocks'));
}
if ( ! defined( 'CLOTHING_STORE_BLOCKS_PRO_DOC' ) ) {
define('CLOTHING_STORE_BLOCKS_PRO_DOC',__('https://ovationthemes.com/docs/ot-clothing-store-pro-doc/','clothing-store-blocks'));
}
if ( ! defined( 'CLOTHING_STORE_BLOCKS_FREE_DOC' ) ) {
define('CLOTHING_STORE_BLOCKS_FREE_DOC',__('https://www.ovationthemes.com/docs/ot-clothing-store-free-doc/','clothing-store-blocks'));
}
if ( ! defined( 'CLOTHING_STORE_BLOCKS_THEME_NAME' ) ) {
define('CLOTHING_STORE_BLOCKS_THEME_NAME',__('Premium Clothing Store Blocks Theme','clothing-store-blocks'));
}

/**
 * Theme Info Page
 */
function clothing_store_blocks_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$clothing_store_blocks_theme = wp_get_theme( '' ); ?>

	<div class="getting-started__header">
		<div class="col-md-10">
			<h2><?php echo esc_html( $clothing_store_blocks_theme ); ?></h2>
			<p><?php esc_html_e('Version: ', 'clothing-store-blocks'); ?><?php echo esc_html($clothing_store_blocks_theme['Version']);?></p>
		</div>
		<div class="col-md-2">
			<div class="btn_box">
				<a class="button-primary" href="<?php echo esc_url( CLOTHING_STORE_BLOCKS_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'clothing-store-blocks'); ?></a>
				<a class="button-primary" href="<?php echo esc_url( CLOTHING_STORE_BLOCKS_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'clothing-store-blocks'); ?></a>
			</div>
		</div>
	</div>

	<div class="wrap getting-started">
		<div class="container">
			<div class="col-md-9">
				<div class="leftbox">
					<h3><?php esc_html_e('Documentation','clothing-store-blocks'); ?></h3>
					<p><?php $clothing_store_blocks_theme = wp_get_theme(); 
						echo wp_kses_post( apply_filters( 'description', esc_html( $clothing_store_blocks_theme->get( 'Description' ) ) ) );
					?></p>

					<h4><?php esc_html_e('Edit Your Site','clothing-store-blocks'); ?></h4>
					<p><?php esc_html_e('Now create your website with easy drag and drop powered by gutenburg.','clothing-store-blocks'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url() . 'site-editor.php' ); ?>" target="_blank"><?php esc_html_e('Edit Your Site','clothing-store-blocks'); ?></a>

					<h4><?php esc_html_e('Visit Your Site','clothing-store-blocks'); ?></h4>
					<p><?php esc_html_e('To check your website click here','clothing-store-blocks'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( home_url() ); ?>" target="_blank"><?php esc_html_e('Visit Your Site','clothing-store-blocks'); ?></a>

					<h4><?php esc_html_e('Theme Documentation','clothing-store-blocks'); ?></h4>
					<p><?php esc_html_e('Check the theme documentation to easily set up your website.','clothing-store-blocks'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( CLOTHING_STORE_BLOCKS_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','clothing-store-blocks'); ?></a>
				</div>
       	</div>
			<div class="col-md-3">
				<h3><?php echo esc_html(CLOTHING_STORE_BLOCKS_THEME_NAME); ?></h3>
				<img class="clothing_store_blocks_img_responsive" style="width: 100%;" src="<?php echo esc_url( $clothing_store_blocks_theme->get_screenshot() ); ?>" />
				<div class="pro-links">
					<hr>
			    	<a class="button-primary livedemo" href="<?php echo esc_url( CLOTHING_STORE_BLOCKS_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'clothing-store-blocks'); ?></a>
					<a class="button-primary buynow" href="<?php echo esc_url( CLOTHING_STORE_BLOCKS_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'clothing-store-blocks'); ?></a>
					<a class="button-primary docs" href="<?php echo esc_url( CLOTHING_STORE_BLOCKS_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'clothing-store-blocks'); ?></a>
					<hr>
				</div>
				<ul style="padding-top:10px">
					<li class="upsell-clothing_store_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'clothing-store-blocks');?> </li>                 
					<li class="upsell-clothing_store_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'clothing-store-blocks');?> </li>
					<li class="upsell-clothing_store_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'clothing-store-blocks');?> </li>
					<li class="upsell-clothing_store_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'clothing-store-blocks');?> </li>
					<li class="upsell-clothing_store_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'clothing-store-blocks');?> </li>
					<li class="upsell-clothing_store_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'clothing-store-blocks');?> </li>
					<li class="upsell-clothing_store_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'clothing-store-blocks');?> </li>
					<li class="upsell-clothing_store_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'clothing-store-blocks');?> </li>
					<li class="upsell-clothing_store_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'clothing-store-blocks');?> </li>
					<li class="upsell-clothing_store_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'clothing-store-blocks');?> </li>
					<li class="upsell-clothing_store_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'clothing-store-blocks');?> </li>
					<li class="upsell-clothing_store_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'clothing-store-blocks');?> </li>
					<li class="upsell-clothing_store_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'clothing-store-blocks');?> </li>
               <li class="upsell-clothing_store_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'clothing-store-blocks');?> </li>
            </ul>
        	</div>
		</div>
	</div>

<?php }?>
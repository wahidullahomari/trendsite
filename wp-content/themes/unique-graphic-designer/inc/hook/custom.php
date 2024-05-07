<?php
/**
 * Custom theme functions.
 *
 * This file contains hook functions attached to theme hooks.
 *
 * @package unique_graphic_designer
 */

if ( ! function_exists( 'unique_graphic_designer_skip_to_content' ) ) :
	/**
	 * Add Skip to content.
	 *
	 * @since 1.0.0
	 */
	function unique_graphic_designer_skip_to_content() {
	?><a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'unique-graphic-designer' ); ?></a><?php
	}
endif;

add_action( 'unique_graphic_designer_action_before', 'unique_graphic_designer_skip_to_content', 15 );

// Middle Header

if ( ! function_exists( 'unique_graphic_designer_site_branding' ) ) :

	/**
	 * Site branding.
	 *
	 * @since 1.0.0
	 */
	function unique_graphic_designer_site_branding() {

		$unique_graphic_designer_header_top_button_text = unique_graphic_designer_get_option( 'unique_graphic_designer_header_top_button_text' );
		$unique_graphic_designer_header_top_button_link = unique_graphic_designer_get_option( 'unique_graphic_designer_header_top_button_link' );

		$unique_graphic_designer_data_sticky = unique_graphic_designer_get_option( 'unique_graphic_designer_show_data_sticky_setting' );
		?>

		<div id="middle-header" data-sticky= "<?php echo esc_attr($unique_graphic_designer_data_sticky); ?>">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-lg-3 col-md-4 align-self-center">
					    <div class="site-branding mb-3 mb-lg-0">
							<?php unique_graphic_designer_the_custom_logo(); ?>
							<?php $unique_graphic_designer_show_title = unique_graphic_designer_get_option( 'unique_graphic_designer_show_title' ); ?>
							<?php $unique_graphic_designer_show_tagline = unique_graphic_designer_get_option( 'unique_graphic_designer_show_tagline' ); ?>
							<?php if ( true === $unique_graphic_designer_show_title || true === $unique_graphic_designer_show_tagline ) :  ?>
								<div id="site-identity" class="text-center text-md-center text-lg-start">
									<?php if ( true === $unique_graphic_designer_show_title ) :  ?>
										<?php if ( is_front_page() ) : ?>
											<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
										<?php else : ?>
											<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
										<?php endif; ?>
									<?php endif; ?>
									<?php if ( true === $unique_graphic_designer_show_tagline ) :  ?>
										<p class="site-description"><?php bloginfo( 'description' ); ?></p>
									<?php endif; ?>
								</div>
							<?php endif; ?>
					    </div>
					</div>
					<div class="col-xl-7 col-lg-6 col-md-4 align-self-center">
						<?php if(has_nav_menu('primary-menu')){?>
							<div class="toggle-menu gb_menu">
								<button onclick="unique_graphic_designer_gb_Menu_open()" class="gb_toggle"><?php esc_html_e('Menu','unique-graphic-designer'); ?></button>
							</div>
						<?php }?>
						<div id="gb_responsive" class="nav side_gb_nav">
							<nav id="top_gb_menu" class="gb_nav_menu" role="navigation" aria-label="<?php esc_attr_e( 'Menu', 'unique-graphic-designer' ); ?>">
								<?php 
									wp_nav_menu( array( 
										'theme_location' => 'primary-menu',
										'container_class' => 'gb_navigation clearfix' ,
										'menu_class' => 'clearfix',
										'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav m-0 px-0">%3$s</ul>',
										'fallback_cb' => 'wp_page_menu',
									) ); 
								?>
								<a href="javascript:void(0)" class="closebtn gb_menu" onclick="unique_graphic_designer_gb_Menu_close()">x<span class="screen-reader-text"><?php esc_html_e('Close Menu','unique-graphic-designer'); ?></span></a>
							</nav>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 align-self-center">
						<div class="top-btn text-md-end text-center">
							<?php if( !empty($unique_graphic_designer_header_top_button_text) || !empty($unique_graphic_designer_header_top_button_link) ):?>
								<a href="<?php echo esc_url($unique_graphic_designer_header_top_button_link);?>"><?php echo esc_html($unique_graphic_designer_header_top_button_text);?></a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	    <?php
	}

endif;

add_action( 'unique_graphic_designer_action_header', 'unique_graphic_designer_site_branding' );


/////////////////////////////////// copyright start /////////////////////////////

if ( ! function_exists( 'unique_graphic_designer_footer_copyright' ) ) :

	/**
	 * Footer copyright
	 *
	 * @since 1.0.0
	 */
	function unique_graphic_designer_footer_copyright() {

		// Check if footer is disabled.
		$unique_graphic_designer_footer_status = apply_filters( 'unique_graphic_designer_filter_footer_status', true );
		if ( true !== $unique_graphic_designer_footer_status ) {
			return;
		}

		// Copyright content.
		$unique_graphic_designer_copyright_text = unique_graphic_designer_get_option( 'unique_graphic_designer_copyright_text' );
		$unique_graphic_designer_copyright_text = apply_filters( 'unique_graphic_designer_filter_copyright_text', $unique_graphic_designer_copyright_text );
		if ( ! empty( $unique_graphic_designer_copyright_text ) ) {
			$unique_graphic_designer_copyright_text = wp_kses_data( $unique_graphic_designer_copyright_text );
		}

		// Powered by content.
		$unique_graphic_designer_powered_by_text = sprintf( __( 'Unique Graphic Designer by %s', 'unique-graphic-designer' ), '<span>' . __( 'Mizan Themes', 'unique-graphic-designer' ) . '</span>' );
		?>

		<div class="colophon-inner">
		    <?php if ( ! empty( $unique_graphic_designer_copyright_text ) ) : ?>
			    <div class="colophon-column">
			    	<div class="copyright">
			    		<?php echo $unique_graphic_designer_copyright_text; ?>
			    	</div><!-- .copyright -->
			    </div><!-- .colophon-column -->
		    <?php endif; ?>

		    <?php if ( ! empty( $unique_graphic_designer_powered_by_text ) ) : ?>
			    <div class="colophon-column">
			    	<div class="site-info">
						<a href="<?php echo esc_url('https://www.mizanthemes.com/elementor/free-web-designer-wordpress-theme/','unique-graphic-designer'); ?>"><?php echo $unique_graphic_designer_powered_by_text; ?></a>
			    	</div><!-- .site-info -->
			    </div><!-- .colophon-column -->
		    <?php endif; ?>

		</div><!-- colophon-inner -->
		
	    <?php
	}

endif;

add_action( 'unique_graphic_designer_action_footer', 'unique_graphic_designer_footer_copyright', 10 );

// /////////////////////////////////sidebar//////////////////


if ( ! function_exists( 'unique_graphic_designer_add_sidebar' ) ) :

	/**
	 * Add sidebar.
	 *
	 * @since 1.0.0
	 */
	function unique_graphic_designer_add_sidebar() {

		global $post;

		$unique_graphic_designer_global_layout = unique_graphic_designer_get_option( 'unique_graphic_designer_global_layout' );
		$unique_graphic_designer_global_layout = apply_filters( 'unique_graphic_designer_filter_theme_global_layout', $unique_graphic_designer_global_layout );

		// Check if single.
		if ( $post && is_singular() ) {
			$unique_graphic_designer_post_options = get_post_meta( $post->ID, 'unique_graphic_designer_theme_settings', true );
			if ( isset( $unique_graphic_designer_post_options['post_layout'] ) && ! empty( $unique_graphic_designer_post_options['unique_graphic_designer_post_layout'] ) ) {
				$unique_graphic_designer_global_layout = $unique_graphic_designer_post_options['unique_graphic_designer_post_layout'];
			}
		}

		// Include primary sidebar.
		if ( 'no-sidebar' !== $unique_graphic_designer_global_layout ) {
			get_sidebar();
		}
		// Include Secondary sidebar.
		switch ( $unique_graphic_designer_global_layout ) {
			case 'three-columns':
			get_sidebar( 'secondary' );
			break;

			default:
			break;
		}

		// Include Secondary sidebar 1.
		switch ( $unique_graphic_designer_global_layout ) {
			case 'four-columns':
			get_sidebar( 'secondary' );
			break;

			default:
			break;
		}

	}

endif;

add_action( 'unique_graphic_designer_action_sidebar', 'unique_graphic_designer_add_sidebar' );

//////////////////////////////////////// single page


if ( ! function_exists( 'unique_graphic_designer_add_image_in_single_display' ) ) :

	/**
	 * Add image in single post.
	 *
	 * @since 1.0.0
	 */
	function unique_graphic_designer_add_image_in_single_display() {

		global $post;

		if ( has_post_thumbnail() ) {

			$values = get_post_meta( $post->ID, 'unique_graphic_designer_theme_settings', true );
			$unique_graphic_designer_theme_settings_single_image = isset( $values['unique_graphic_designer_single_image'] ) ? esc_attr( $values['unique_graphic_designer_single_image'] ) : '';

			if ( ! $unique_graphic_designer_theme_settings_single_image ) {
				$unique_graphic_designer_theme_settings_single_image = unique_graphic_designer_get_option( 'unique_graphic_designer_single_image' );
			}

			if ( 'disable' !== $unique_graphic_designer_theme_settings_single_image ) {
				$args = array(
					'class' => 'aligncenter',
				);
				the_post_thumbnail( esc_attr( $unique_graphic_designer_theme_settings_single_image ), $args );
			}
		}

	}

endif;

add_action( 'unique_graphic_designer_single_image', 'unique_graphic_designer_add_image_in_single_display' );

if ( ! function_exists( 'unique_graphic_designer_footer_goto_top' ) ) :

	/**
	 * Go to top.
	 *
	 * @since 1.0.0
	 */
	function unique_graphic_designer_footer_goto_top() {
        
        $unique_graphic_designer_show_scroll_to_top = unique_graphic_designer_get_option( 'unique_graphic_designer_show_scroll_to_top' );
        if ( true === $unique_graphic_designer_show_scroll_to_top ) :
		echo '<a href="#page" class="scrollup" id="btn-scrollup"><i class="fa fa-angle-up"><span class="screen-reader-text">' . esc_html__( 'Scroll Up', 'unique-graphic-designer' ) . '</span></i></a>';
		endif;

	}

endif;

add_action( 'unique_graphic_designer_action_after', 'unique_graphic_designer_footer_goto_top', 20 );
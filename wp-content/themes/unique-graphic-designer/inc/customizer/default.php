<?php
/**
 * Default theme options.
 *
 * @package unique_graphic_designer
 */

if ( ! function_exists( 'unique_graphic_designer_get_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
	function unique_graphic_designer_get_default_theme_options() {

		$defaults = array();

		//General Option
        $defaults['unique_graphic_designer_show_scroll_to_top']          = true;
        $defaults['unique_graphic_designer_show_preloader_setting']      = false;
        $defaults['unique_graphic_designer_show_data_sticky_setting']    = false;

        //Post Option
        $defaults['unique_graphic_designer_show_post_date_setting']           = true;
        $defaults['unique_graphic_designer_show_post_heading_setting']        = true;
        $defaults['unique_graphic_designer_show_post_content_setting']        = true;

		// Header.
		$defaults['unique_graphic_designer_show_title']            = true;
		$defaults['unique_graphic_designer_show_tagline']          = false;
		$defaults['unique_graphic_designer_show_social_in_header'] = false;
		$defaults['unique_graphic_designer_search_in_header']      = true;

		// Layout.
		$defaults['unique_graphic_designer_global_layout']           = 'right-sidebar';
		$defaults['unique_graphic_designer_archive_layout']          = 'excerpt';
		$defaults['unique_graphic_designer_archive_image']           = 'large';
		$defaults['unique_graphic_designer_archive_image_alignment'] = 'center';
		$defaults['unique_graphic_designer_single_image']            = 'large';

		// Home Page.
		$defaults['unique_graphic_designer_home_content_status'] = true;
		
		// Footer.
		$defaults['unique_graphic_designer_copyright_text']        = esc_html__( 'Copyright &copy; All rights reserved.', 'unique-graphic-designer' );
		
		// Pass through filter.
		$defaults = apply_filters( 'unique_graphic_designer_filter_default_theme_options', $defaults );
		return $defaults;
	}

endif;

<?php
/**
 * Core functions.
 *
 * @package unique_graphic_designer
 */

if ( ! function_exists( 'unique_graphic_designer_get_option' ) ) :

	/**
	 * Get theme option
	 *
	 * @since 1.0.0
	 *
	 * @param string $key Option key.
	 * @return mixed Option value.
	 */
	function unique_graphic_designer_get_option( $key ) {

		$unique_graphic_designer_default_options = unique_graphic_designer_get_default_theme_options();

		if ( empty( $key ) ) {
			return;
		}

		$unique_graphic_designer_theme_options = (array)get_theme_mod( 'theme_options' );
		$unique_graphic_designer_theme_options = wp_parse_args( $unique_graphic_designer_theme_options, $unique_graphic_designer_default_options );

		$unique_graphic_designer_value = null;

		if ( isset( $unique_graphic_designer_theme_options[ $key ] ) ) {
			$unique_graphic_designer_value = $unique_graphic_designer_theme_options[ $key ];
		}

		return $unique_graphic_designer_value;

	}

endif;

if ( ! function_exists( 'unique_graphic_designer_get_options' ) ) :

	/**
	 * Get all theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Theme options.
	 */
  function unique_graphic_designer_get_options() {

    $unique_graphic_designer_default_options = unique_graphic_designer_get_default_theme_options();
    $unique_graphic_designer_theme_options = (array)get_theme_mod( 'theme_options' );
    $unique_graphic_designer_theme_options = wp_parse_args( $unique_graphic_designer_theme_options, $unique_graphic_designer_default_options );
    return $unique_graphic_designer_theme_options;

  }

endif;

if( ! function_exists( 'unique_graphic_designer_exclude_category_in_blog_page' ) ) :

  /**
   * Exclude category in blog page.
   *
   * @since 1.0
   */
  function unique_graphic_designer_exclude_category_in_blog_page( $query ) {

    if( $query->is_home && $query->is_main_query()   ) {
      $unique_graphic_designer_exclude_categories = unique_graphic_designer_get_option( 'exclude_categories' );
      if ( ! empty( $unique_graphic_designer_exclude_categories ) ) {
        $cats = explode( ',', $unique_graphic_designer_exclude_categories );
        $cats = array_filter( $cats, 'is_numeric' );
        $unique_graphic_designer_string_exclude = '';
        if ( ! empty( $cats ) ) {
          $unique_graphic_designer_string_exclude = '-' . implode( ',-', $cats);
          $query->set( 'cat', $unique_graphic_designer_string_exclude );
        }
      }
    }
    return $query;
  }

endif;

add_filter( 'pre_get_posts', 'unique_graphic_designer_exclude_category_in_blog_page' );

<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package unique_graphic_designer
 */

?>
<?php
	/**
	 * Hook - unique_graphic_designer_action_doctype.
	 *
	 * @hooked unique_graphic_designer_doctype -  10
	 */
	do_action( 'unique_graphic_designer_action_doctype' );
?>
<head>
	<?php
	/**
	 * Hook - unique_graphic_designer_action_head.
	 *
	 * @hooked unique_graphic_designer_head -  10
	 */
	do_action( 'unique_graphic_designer_action_head' );
	?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php do_action( 'wp_body_open' ); ?>

	<?php 
	$unique_graphic_designer_show_preloader = unique_graphic_designer_get_option( 'unique_graphic_designer_show_preloader_setting' );
        if ( true === $unique_graphic_designer_show_preloader ) : ?>
			<div id="preloader" class="loader-head">
				<div class="preloader">
				    <div class="spinner"></div>
				    <div class="spinner-2"></div>
				</div>
			</div>
	<?php endif; ?>

	<?php
	/**
	 * Hook - unique_graphic_designer_action_before.
	 *
	 * @hooked unique_graphic_designer_page_start - 10
	 * @hooked unique_graphic_designer_skip_to_content - 15
	 */
	do_action( 'unique_graphic_designer_action_before' );
	?>

    <?php
	  /**
	   * Hook - unique_graphic_designer_action_before_header.
	   *
	   * @hooked unique_graphic_designer_header_start - 10
	   */
	  do_action( 'unique_graphic_designer_action_before_header' );
	?>
		<?php
		/**
		 * Hook - unique_graphic_designer_action_header.
		 *
		 * @hooked unique_graphic_designer_site_branding - 10
		 */
		do_action( 'unique_graphic_designer_action_header' );
		?>
    <?php
	  /**
	   * Hook - unique_graphic_designer_action_after_header.
	   *
	   * @hooked unique_graphic_designer_header_end - 10
	   */
	  do_action( 'unique_graphic_designer_action_after_header' );
	?>

	<?php
	/**
	 * Hook - unique_graphic_designer_action_before_content.
	 *
	 * @hooked unique_graphic_designer_content_start - 10
	 */
	do_action( 'unique_graphic_designer_action_before_content' );
	?>

	<!-- <?php
	  /**
	   * Hook - unique_graphic_designer_action_content.
	   */
	  do_action( 'unique_graphic_designer_action_content' );
	?> -->
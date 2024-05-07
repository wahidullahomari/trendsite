<?php
/**
 * Theme Options.
 *
 * @package unique_graphic_designer
 */

$default = unique_graphic_designer_get_default_theme_options();

// Add Panel.
$wp_customize->add_panel( 'unique_graphic_designer_theme_option_panel',
	array(
	'title'      => __( 'Theme Options', 'unique-graphic-designer' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	)
);

// General Option.
$wp_customize->add_section( 'unique_graphic_designer_section_general_option',
	array(
	'title'      => __( 'General Options', 'unique-graphic-designer' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'unique_graphic_designer_theme_option_panel',
	)
);

// Setting show scroll to top.
$wp_customize->add_setting( 'theme_options[unique_graphic_designer_show_scroll_to_top]',
	array(
	'default'           => $default['unique_graphic_designer_show_scroll_to_top'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_graphic_designer_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[unique_graphic_designer_show_scroll_to_top]',
	array(
	'label'    => __( 'Show Scroll To Top', 'unique-graphic-designer' ),
	'section'  => 'unique_graphic_designer_section_general_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Preloader.
$wp_customize->add_setting( 'theme_options[unique_graphic_designer_show_preloader_setting]',
	array(
	'default'           => $default['unique_graphic_designer_show_preloader_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_graphic_designer_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[unique_graphic_designer_show_preloader_setting]',
	array(
	'label'    => __( 'Show Preloader', 'unique-graphic-designer' ),
	'section'  => 'unique_graphic_designer_section_general_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Sticky Header.
$wp_customize->add_setting( 'theme_options[unique_graphic_designer_show_data_sticky_setting]',
	array(
	'default'           => $default['unique_graphic_designer_show_data_sticky_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_graphic_designer_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[unique_graphic_designer_show_data_sticky_setting]',
	array(
	'label'    => __( 'Show Sticky Header', 'unique-graphic-designer' ),
	'section'  => 'unique_graphic_designer_section_general_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Post Option.
$wp_customize->add_section( 'unique_graphic_designer_section_post_option',
	array(
	'title'      => __( 'Post Options', 'unique-graphic-designer' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'unique_graphic_designer_theme_option_panel',
	)
);

// Setting show Post date.
$wp_customize->add_setting( 'theme_options[unique_graphic_designer_show_post_date_setting]',
	array(
	'default'           => $default['unique_graphic_designer_show_post_date_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_graphic_designer_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[unique_graphic_designer_show_post_date_setting]',
	array(
	'label'    => __( 'Show Post Date', 'unique-graphic-designer' ),
	'section'  => 'unique_graphic_designer_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post Heading.
$wp_customize->add_setting( 'theme_options[unique_graphic_designer_show_post_heading_setting]',
	array(
	'default'           => $default['unique_graphic_designer_show_post_heading_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_graphic_designer_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[unique_graphic_designer_show_post_heading_setting]',
	array(
	'label'    => __( 'Show Post Heading', 'unique-graphic-designer' ),
	'section'  => 'unique_graphic_designer_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post Content.
$wp_customize->add_setting( 'theme_options[unique_graphic_designer_show_post_content_setting]',
	array(
	'default'           => $default['unique_graphic_designer_show_post_content_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_graphic_designer_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[unique_graphic_designer_show_post_content_setting]',
	array(
	'label'    => __( 'Show Post Full Content', 'unique-graphic-designer' ),
	'section'  => 'unique_graphic_designer_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Header Section.
$wp_customize->add_section( 'unique_graphic_designer_section_header',
	array(
	'title'      => __( 'Header Options', 'unique-graphic-designer' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'unique_graphic_designer_theme_option_panel',
	)
);

// Setting show_title.
$wp_customize->add_setting( 'theme_options[unique_graphic_designer_show_title]',
	array(
	'default'           => $default['unique_graphic_designer_show_title'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_graphic_designer_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[unique_graphic_designer_show_title]',
	array(
	'label'    => __( 'Show Site Title', 'unique-graphic-designer' ),
	'section'  => 'unique_graphic_designer_section_header',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show_tagline.
$wp_customize->add_setting( 'theme_options[unique_graphic_designer_show_tagline]',
	array(
	'default'           => $default['unique_graphic_designer_show_tagline'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_graphic_designer_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[unique_graphic_designer_show_tagline]',
	array(
	'label'    => __( 'Show Tagline', 'unique-graphic-designer' ),
	'section'  => 'unique_graphic_designer_section_header',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting button Text
$wp_customize->add_setting( 'theme_options[unique_graphic_designer_header_top_button_text]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'theme_options[unique_graphic_designer_header_top_button_text]',
	array(
	'label'    => __( 'Add Button Text', 'unique-graphic-designer' ),
	'section'  => 'unique_graphic_designer_section_header',
	'type'     => 'text',
	'priority' => 100,
	)
);

// Setting button Url
$wp_customize->add_setting( 'theme_options[unique_graphic_designer_header_top_button_link]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control( 'theme_options[unique_graphic_designer_header_top_button_link]',
	array(
	'label'    => __( 'Add Button Link', 'unique-graphic-designer' ),
	'section'  => 'unique_graphic_designer_section_header',
	'type'     => 'url',
	'priority' => 100,
	)
);

// Layout Section.
$wp_customize->add_section( 'unique_graphic_designer_section_layout',
	array(
	'title'      => __( 'Layout Options', 'unique-graphic-designer' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'unique_graphic_designer_theme_option_panel',
	)
);

// Setting global_layout.
$wp_customize->add_setting( 'theme_options[unique_graphic_designer_global_layout]',
	array(
	'default'           => $default['unique_graphic_designer_global_layout'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_graphic_designer_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[unique_graphic_designer_global_layout]',
	array(
	'label'    => __( 'Global Layout', 'unique-graphic-designer' ),
	'section'  => 'unique_graphic_designer_section_layout',
	'type'     => 'select',
	'choices'  => unique_graphic_designer_get_global_layout_options(),
	'priority' => 100,
	)
);

// Setting archive_layout.
$wp_customize->add_setting( 'theme_options[unique_graphic_designer_archive_layout]',
	array(
	'default'           => $default['unique_graphic_designer_archive_layout'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_graphic_designer_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[unique_graphic_designer_archive_layout]',
	array(
	'label'    => __( 'Archive Layout', 'unique-graphic-designer' ),
	'section'  => 'unique_graphic_designer_section_layout',
	'type'     => 'select',
	'choices'  => unique_graphic_designer_get_archive_layout_options(),
	'priority' => 100,
	)
);

// Setting archive_image.
$wp_customize->add_setting( 'theme_options[unique_graphic_designer_archive_image]',
	array(
	'default'           => $default['unique_graphic_designer_archive_image'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_graphic_designer_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[unique_graphic_designer_archive_image]',
	array(
	'label'    => __( 'Image in Archive', 'unique-graphic-designer' ),
	'section'  => 'unique_graphic_designer_section_layout',
	'type'     => 'select',
	'choices'  => unique_graphic_designer_get_image_sizes_options( true, array( 'disable', 'thumbnail', 'medium', 'large' ), false ),
	'priority' => 100,
	)
);
// Setting archive_image_alignment.
$wp_customize->add_setting( 'theme_options[unique_graphic_designer_archive_image_alignment]',
	array(
	'default'           => $default['unique_graphic_designer_archive_image_alignment'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_graphic_designer_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[unique_graphic_designer_archive_image_alignment]',
	array(
	'label'           => __( 'Image Alignment in Archive', 'unique-graphic-designer' ),
	'section'         => 'unique_graphic_designer_section_layout',
	'type'            => 'select',
	'choices'         => unique_graphic_designer_get_image_alignment_options(),
	'priority'        => 100,
	'active_callback' => 'unique_graphic_designer_is_image_in_archive_active',
	)
);
// Setting single_image.
$wp_customize->add_setting( 'theme_options[unique_graphic_designer_single_image]',
	array(
	'default'           => $default['unique_graphic_designer_single_image'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_graphic_designer_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[unique_graphic_designer_single_image]',
	array(
	'label'    => __( 'Image in Single Post/Page', 'unique-graphic-designer' ),
	'section'  => 'unique_graphic_designer_section_layout',
	'type'     => 'select',
	'choices'  => unique_graphic_designer_get_image_sizes_options( true, array( 'disable', 'large' ), false ),
	'priority' => 100,
	)
);

// Footer Section.
$wp_customize->add_section( 'unique_graphic_designer_section_footer',
	array(
	'title'      => __( 'Footer Options', 'unique-graphic-designer' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'unique_graphic_designer_theme_option_panel',
	)
);

// Setting copyright_text.
$wp_customize->add_setting( 'theme_options[unique_graphic_designer_copyright_text]',
	array(
	'default'           => $default['unique_graphic_designer_copyright_text'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'unique_graphic_designer_sanitize_textarea_content',
	'transport'         => 'postMessage',
	)
);
$wp_customize->add_control( 'theme_options[unique_graphic_designer_copyright_text]',
	array(
	'label'    => __( 'Copyright Text', 'unique-graphic-designer' ),
	'section'  => 'unique_graphic_designer_section_footer',
	'type'     => 'text',
	'priority' => 100,
	)
);
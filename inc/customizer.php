<?php
/**
 * PhotoBlog_s Theme Customizer
 *
 * @package PhotoBlog_s
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function photoblog_s_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->default = '#123456';
	$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
	$wp_customize->get_setting( 'background_color' )->default = '#123456';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'photoblog_s_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'photoblog_s_customize_partial_blogdescription',
		) );


		$wp_customize->selective_refresh->add_partial( 'link_textcolor', array(
			'selector'        => '.main-navigation',
		) );
	}

	/**
	 * TEST
	 */
	//2. Register new settings to the WP database...
	$wp_customize->add_setting( 'link_textcolor', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
		array(
			'default'    => '#2BA6CB', //Default setting/value to save
			'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
			'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
			'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
		)
	);

	//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
	$wp_customize->add_control( new WP_Customize_Color_Control( //Instantiate the color control class
		$wp_customize, //Pass the $wp_customize object (required)
		'mytheme_link_textcolor', //Set a unique ID for the control
		array(
			'label'      => 'Link Color', //Admin-visible name of the control
			'settings'   => 'link_textcolor', //Which setting to load and manipulate (serialized is okay)
			'priority'   => 10, //Determines the order this control appears in for the specified section
			'section'    => 'colors', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
		)
	) );

}
add_action( 'customize_register', 'photoblog_s_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function photoblog_s_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function photoblog_s_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function photoblog_s_customize_preview_js() {
	wp_enqueue_script( 'photoblog_s-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'photoblog_s_customize_preview_js' );

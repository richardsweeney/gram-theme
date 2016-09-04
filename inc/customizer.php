<?php
/**
 * Shipyard Theme Customizer
 *
 * @package shipyard
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function shipyard_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->remove_section( 'themes' );
	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'background_image' );


	// HEADER SECTION
	$wp_customize->add_section( 'shipyard_header_section' , [
		'title'    => __( 'Header settings', 'msp' ),
		'priority' => 10,
	]);

	// Header logo
	$wp_customize->add_setting( 'main_logo' );
	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'main_logo',
		[
			'label'    => __( 'Main logo', 'msp' ),
			'section'  => 'shipyard_header_section',
			'settings' => 'main_logo',
			'priority' => 2,
		]
	) );

	$wp_customize->add_setting( 'shipyard_email_text' );
	$wp_customize->add_control( 'shipyard_email_text', [
		'label'             => __( 'Email text', 'msp' ),
		'type'              => 'textarea',
		'section'           => 'main_logo',
		'sanitize_callback' => 'wp_kses_post',
	]);


	// Contact info
	$wp_customize->add_section( 'shipyard_contact_info_section' , [
		'title'    => __( 'Contact information', 'msp' ),
		'priority' => 20,
	]);

    $wp_customize->add_setting( 'shipyard_contact_info_address' );
    $wp_customize->add_control( 'shipyard_contact_info_address', [
        'label'             => __( 'Company Address', 'msp' ),
        'type'              => 'textarea',
        'section'           => 'shipyard_contact_info_section',
        'sanitize_callback' => 'wp_kses_post',
    ]);

    $wp_customize->add_setting( 'shipyard_contact_info_tel' );
    $wp_customize->add_control( 'shipyard_contact_info_tel', [
        'label'             => __( 'Telephone', 'msp' ),
        'type'              => 'textarea',
        'section'           => 'shipyard_contact_info_section',
        'sanitize_callback' => 'wp_kses_post',
    ]);

    $wp_customize->add_setting( 'shipyard_contact_info_visitor_adress' );
    $wp_customize->add_control( 'shipyard_contact_info_visitor_adress', [
        'label'             => __( 'Visitor Address', 'msp' ),
        'type'              => 'textarea',
        'section'           => 'shipyard_contact_info_section',
        'sanitize_callback' => 'wp_kses_post',
    ]);

    $wp_customize->add_setting( 'shipyard_contact_info_visitor_tel' );
    $wp_customize->add_control( 'shipyard_contact_info_visitor_tel', [
        'label'             => __( 'Visitor Telephone', 'msp' ),
        'type'              => 'textarea',
        'section'           => 'shipyard_contact_info_section',
        'sanitize_callback' => 'wp_kses_post',
    ]);



	// SOCIAL LINKS SECTION
	$wp_customize->add_section( 'shipyard_social_links_section' , array(
		'title'    => __( 'Social links settings', 'msp' ),
		'priority' => 30,
	) );

	// Facebook
	$wp_customize->add_setting( 'shipyard_facebook', array( 'default' => '', 'transport' => '', 'sanitize_callback' => 'esc_url_raw', ) );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'customizer_facebook',
		array(
			'label'    => __( 'Facebook', 'msp' ),
			'section'  => 'shipyard_social_links_section',
			'settings' => 'shipyard_facebook',
			'type'     => 'url',
			'priority' => 1,
		)
	));

	// Twitter
	$wp_customize->add_setting( 'shipyard_twitter', array( 'default' => '', 'transport' => '', 'sanitize_callback' => 'esc_url_raw', ) );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'customizer_twitter',
		array(
			'label'    => __( 'Twitter', 'msp' ),
			'section'  => 'shipyard_social_links_section',
			'settings' => 'shipyard_twitter',
			'type'     => 'url',
			'priority' => 2,
		)
	));

	// Instagram
	$wp_customize->add_setting( 'shipyard_instagram', array( 'default' => '', 'transport' => '', 'sanitize_callback' => 'esc_url_raw', ) );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'customizer_instagram',
		array(
			'label'    => __( 'Instagram', 'msp' ),
			'section'  => 'shipyard_social_links_section',
			'settings' => 'shipyard_instagram',
			'type'     => 'url',
			'priority' => 3,
		)
	));

	// Youtube
	$wp_customize->add_setting( 'shipyard_googleplus', array( 'default' => '', 'transport' => '', 'sanitize_callback' => 'esc_url_raw', ) );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'customizer_googleplus',
		array(
			'label'    => __( 'Google Plus', 'msp' ),
			'section'  => 'shipyard_social_links_section',
			'settings' => 'shipyard_googleplus',
			'type'     => 'url',
			'priority' => 4,
		)
	));


	// GOOGLE ANALYTICS SECTION
	$wp_customize->add_section( 'shipyard_google_analytics_section' , array(
		'title'    => __( 'Google Analytics settings', 'msp' ),
		'priority' => 60,
	) );

	// Google Analytics UA
	$wp_customize->add_setting( 'shipyard_google_analytics_code', array( 'default' => '', 'transport' => '', ) );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'customizer_google_analytics_code',
		array(
			'label'    => __( 'UA-Code', 'msp' ),
			'description' => __( 'The tracking Id should only be of the format UA-NNNNNN-N.' , 'msp' ),
			'section'  => 'shipyard_google_analytics_section',
			'settings' => 'shipyard_google_analytics_code',
			'type'     => 'text',
			'priority' => 1,
		)
	));


	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

}
add_action( 'customize_register', 'shipyard_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function shipyard_customize_preview_js() {
	wp_enqueue_script( 'shipyard_customizer', get_template_directory_uri() . '/resources/js/customizer.js', array( 'customize-preview' ), '', true );
}
add_action( 'customize_preview_init', 'shipyard_customize_preview_js' );

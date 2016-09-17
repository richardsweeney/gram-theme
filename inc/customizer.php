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

add_action( 'customize_register', function( WP_Customize_Manager $wp_customize ) {
	$wp_customize->remove_section( 'themes' );
	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'background_image' );


	$wp_customize->add_section( 'shipyard_header_section' , [
		'title'    => __( 'Header settings', 'gram' ),
		'priority' => 10,
	]);

	$wp_customize->add_setting( 'main_logo' );
	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'main_logo',
		[
			'label'    => __( 'Main logo', 'gram' ),
			'section'  => 'shipyard_header_section',
			'settings' => 'main_logo',
			'priority' => 2,
		]
	) );



	$wp_customize->add_section( 'shipyard_footer' , array(
		'title'    => __( 'Footer settings', 'gram' ),
		'priority' => 30,
	) );

	$wp_customize->add_setting( 'footer_logo' );
	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'footer_logo',
		[
			'label'    => __( 'Main logo', 'gram' ),
			'section'  => 'shipyard_footer',
			'settings' => 'footer_logo',
		]
	) );

	$wp_customize->add_setting( 'shipyard_address' );
	$wp_customize->add_control( 'shipyard_address', [
		'label'    => __( 'Address', 'gram' ),
		'section'  => 'shipyard_footer',
		'type'     => 'textarea',
	]);

	$wp_customize->add_setting( 'shipyard_email_address' );
	$wp_customize->add_control( 'shipyard_email_address', [
		'label'    => __( 'Email Address', 'gram' ),
		'section'  => 'shipyard_footer',
		'type'     => 'email',
	]);

	$wp_customize->add_setting( 'shipyard_telephone' );
	$wp_customize->add_control( 'shipyard_telephone', [
		'label'    => __( 'Telephone number', 'gram' ),
		'section'  => 'shipyard_footer',
		'type'     => 'tel',
	]);

	$wp_customize->add_setting( 'shipyard_facebook' );
	$wp_customize->add_control( 'shipyard_facebook', [
		'label'    => __( 'Facebook', 'gram' ),
		'section'  => 'shipyard_footer',
		'type'     => 'url',
	]);

	$wp_customize->add_setting( 'shipyard_twitter' );
	$wp_customize->add_control( 'shipyard_twitter', [
		'label'    => __( 'Twitter', 'gram' ),
		'section'  => 'shipyard_footer',
		'type'     => 'url',
	]);

	$wp_customize->add_setting( 'shipyard_instagram' );
	$wp_customize->add_control( 'shipyard_instagram', [
		'label'    => __( 'Instagram', 'gram' ),
		'section'  => 'shipyard_footer',
		'type'     => 'url',
	]);

	$wp_customize->add_setting( 'shipyard_youtube' );
	$wp_customize->add_control( 'shipyard_youtube', [
		'label'    => __( 'Youtube', 'gram' ),
		'section'  => 'shipyard_footer',
		'type'     => 'url',
	]);

	$wp_customize->add_setting( 'shipyard_pinterest' );
	$wp_customize->add_control( 'shipyard_pinterest', [
		'label'    => __( 'Pinterest', 'gram' ),
		'section'  => 'shipyard_footer',
		'type'     => 'url',
	]);


	$wp_customize->add_section( 'shipyard_google_analytics_section' , array(
		'title'    => __( 'Google Analytics settings', 'gram' ),
		'priority' => 60,
	) );

	$wp_customize->add_setting( 'shipyard_google_analytics_code', array( 'default' => '', 'transport' => '', ) );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'customizer_google_analytics_code',
		array(
			'label'    => __( 'UA-Code', 'gram' ),
			'description' => __( 'The tracking Id should only be of the format UA-NNNNNN-N.' , 'gram' ),
			'section'  => 'shipyard_google_analytics_section',
			'settings' => 'shipyard_google_analytics_code',
			'type'     => 'text',
			'priority' => 1,
		)
	));

});

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function shipyard_customize_preview_js() {
	wp_enqueue_script( 'shipyard_customizer', get_template_directory_uri() . '/resources/js/customizer.js', array( 'customize-preview' ), '', true );
}
add_action( 'customize_preview_init', 'shipyard_customize_preview_js' );

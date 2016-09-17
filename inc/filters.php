<?php

/**
 * Include PAPI-directory
 */
add_filter( 'papi/settings/directories', function () {
	return get_template_directory() . '/papi/page-types';
} );

/**
 * Filter custom page types
 */
add_filter( 'papi/settings/show_standard_page_type_page', '__return_true' );


/**
 * Filter the blade cache path
 */
add_filter( 'bladerunner/cache/path', function () {
	$upload_dir = wp_upload_dir();

	return $upload_dir['basedir'] . '/blade-cache';
} );


/**
 * Change the link values so the logo links to your site
 */
add_filter( 'login_headerurl', function() {
	return home_url();
});

add_filter( 'login_headertitle', function() {
	return get_bloginfo( 'name' );
});


/**
 * Set the option for blog_visiblity automatically
 * to avoid human error in this regard!
 */
add_filter( 'pre_option_blog_public', function( $option ) {
	$url = get_site_url();
	$is_visible = 0;

	if ( false === strpos( $url, '.stage.o-lab.se' ) && false === strpos( $url, '.stage2.o-lab.se' ) && false === strpos( $url, '.dev' ) ) {
		$is_visible = 1;
	}

	return $is_visible;
});


/**
 * Sanitize filenames on upload
 */
add_filter( 'sanitize_file_name', function( $filename ) {
	$ext = explode( '.', $filename );
	$ext = end( $ext );

	// Replace all weird characters
	$sanitized = preg_replace( '/[^a-zA-Z0-9-_.]/', '', substr( $filename, 0, - ( strlen( $ext ) + 1 ) ) );

	// Replace dots inside filename
	$sanitized = str_replace( '.','-', $sanitized );

	return strtolower( $sanitized . '.' . $ext );
});

/**
 * Allow SVG uploads.
 */
add_filter( 'upload_mimes', function( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';

	return $mimes;
});

add_filter( 'body_class', function( $classes ) {
	if ( is_page() && ! is_front_page() ) {
		$classes[] = 'single-page';
	}

	return $classes;
});

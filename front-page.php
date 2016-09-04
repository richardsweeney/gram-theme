<?php
/**
 * Created by PhpStorm.
 * User: richardsweeney
 * Date: 2016-07-04
 * Time: 13:03
 */

/**
 * Youtube Video
 */
$video_url = papi_get_field( 'video_url', false );
if ( $video_url ) {
	$video_url = wp_oembed_get( $video_url );
}


/**
 * About Image
 */
$about_home_image = papi_get_field( 'about_home_image', false );
if ( $about_home_image ) {
    if ( isset( $about_home_image->sizes['large'] ) ) {
        $about_image = $about_home_image->sizes['large']['url'];
    }
    else {
        $about_image = $about_home_image->url;
    }
}


$mc_message = '';
if ( isset( $_GET['mc'] ) ) {
	switch ( $_GET['mc'] ) {
		case 'invalid_email' :
			$mc_message = __( 'Please add a valid email address', 'gram' );
			break;

		case 'sigup_ok' :
			$mc_message = __( 'Thanks for signing up!', 'gram' );
			break;
	}
}


bladerunner( 'views.front-page', [
	'register_text'    => get_theme_mod( 'shipyard_email_text', 'Want to keep up to date with Gram’s news, events and special offers?' ),
	'video_title'      => papi_get_field( 'video_title' ),
	'video_url'        => $video_url,
	'video_text'       => papi_get_field( 'video_text' ),
	'about_home_title' => papi_get_field( 'about_home_title' ),
	'about_home_image' => $about_home_image,
	'about_home_text'  => papi_get_field( 'about_home_text' ),
	'mc_message'       => $mc_message,
] );



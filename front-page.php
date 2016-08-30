<?php
/**
 * Created by PhpStorm.
 * User: richardsweeney
 * Date: 2016-07-04
 * Time: 13:03
 */

/**
 * Hero Bg Image
 */
$bg_hero_image = papi_get_field( 'bg_hero_image', false );
if ( $bg_hero_image ) {
    if ( isset( $bg_hero_image->sizes['large'] ) ) {
        $img_src = $bg_hero_image->sizes['large']['url'];
    }
    else {
        $img_src = $bg_hero_image->url;
    }
}

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
	'hero_title'       => papi_get_field( 'hero_title' ),
	'hero_subheading'  => papi_get_field( 'hero_subheading' ),
	'register_text'    => papi_get_field( 'register_text' ),
	'video_title'      => papi_get_field( 'video_title' ),
	'video_url'        => $video_url,
	'video_text'       => papi_get_field( 'video_text' ),
	'about_home_title' => papi_get_field( 'about_home_title' ),
	'about_home_image' => $about_home_image,
	'about_home_text'  => papi_get_field( 'about_home_text' ),
	'mc_message'       => $mc_message,
] );



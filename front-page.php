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


bladerunner( 'views.front-page', [
	'img_src'          => $img_src,
	'hero_title'       => papi_get_field( 'hero_title' ),
	'hero_subheading'  => papi_get_field( 'hero_subheading' ),
	'register_text'    => papi_get_field( 'register_text' ),
	'video_title'      => papi_get_field( 'video_title' ),
	'video_url'        => $video_url,
	'video_text'       => papi_get_field( 'video_text' ),
	'about_home_title' => papi_get_field( 'about_home_title' ),
	'about_home_image' => $about_image,
	'about_home_text'  => papi_get_field( 'about_home_text' ),
] );



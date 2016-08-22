<?php

/**
 * About Bg Image
 */
$about_bg_img = papi_get_field( 'about_bg_img' );
if ( $about_bg_img ) {
    if ( isset( $about_bg_img->sizes['large'] ) ) {
        $about_img_src = $about_bg_img->sizes['large']['url'];
    }
    else {
        $about_img_src = $about_bg_img->url;
    }
}
else {
    $about_img_src = false;
}

/**
 * About Bg Image 2
 */
$about_bg_image_2 = papi_get_field( 'about_bg_img_2' );
if ( $about_bg_image_2 ) {
    if ( isset( $about_bg_image_2->sizes['large'] ) ) {
        $about_img_src_2 = $about_bg_image_2->sizes['large']['url'];
    }
    else {
        $about_img_src_2 = $about_bg_image_2->url;
    }
}
else {
    $about_img_src_2 = false;
}

/**
 * About Image
 */
$about_side_img = papi_get_field( 'about_side_img' );
if ( $about_side_img ) {
    if ( isset( $about_side_img->sizes['medium'] ) ) {
        $about_side_img_src = $about_side_img->sizes['medium']['url'];
    }
    else {
        $about_side_img_src = $about_side_img->url;
    }
}
else {
    $about_side_img_src = false;
}

// echo '<pre>';
// var_dump( $about_bg_image_2 );

bladerunner( 'views.pages.about', [
	'about_bg_img'        => $about_img_src,
	'about_feature_title' => papi_get_field( 'about_feature_title' ),
	'about_feature_text'  => papi_get_field( 'about_feature_text' ),
	'about_bg_image_2'    => $about_img_src_2,
	'about_post_title'    => papi_get_field( 'about_post_title' ),
	'about_post_article'  => papi_get_field( 'about_post_article' ),
	'about_side_img'      => $about_side_img_src,
] );



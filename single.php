<?php
/**
 * Created by PhpStorm.
 * User: richardsweeney
 * Date: 2016-07-04
 * Time: 10:42
 */

bladerunner( 'views.single', [
	'custom_likes' => ( class_exists( 'Jetpack_Likes' ) ) ? new Jetpack_Likes : null,
	'text' => [
		'filed_in' => __( 'Filed in: ', 'gram' ),
		'tags'     => __( 'Tags: ', 'gram' ),
	]
] );

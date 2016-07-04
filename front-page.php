<?php
/**
 * Created by PhpStorm.
 * User: richardsweeney
 * Date: 2016-07-04
 * Time: 13:03
 */

bladerunner( 'views.front-page', [
	'blogs' => new WP_Query( [
		'posts_per_page' => 2,
	] ),
] );

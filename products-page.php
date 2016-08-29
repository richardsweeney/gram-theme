<?php
/**
 * Template Name: Products Page
 */
$results = new WP_Query(
		array(
			'post_type' => 'product',
			'orderby' => 'post_id',
			'order' => 'ASC',
			'posts_per_page' => 10
			)
		);

bladerunner( 'views.pages.products', [
	'products' => $results->posts,
] );

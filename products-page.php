<?php
/**
 * Template Name: Products Page
 */


bladerunner( 'views.pages.products', [
	'loop' => new WP_Query( array( 'post_type' => 'product', 'orderby' => 'post_id', 'order' => 'ASC', 'posts_per_page' => 2 ) ),
] );

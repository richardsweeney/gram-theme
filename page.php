<?php
/**
 * Created by PhpStorm.
 * User: richardsweeney
 * Date: 2016-07-04
 * Time: 12:43
 */

$page_type = papi_get_page_type_id( get_the_ID() );
if ( 'papi-sections-page-type' === $page_type ) {
	bladerunner( 'views.pages.sections', [
		'sections' => papi_get_field( 'page_sections', [] ),
	] );
}
else if ( 'papi-products-page-type' === $page_type ) {
	$products = papi_get_field( 'products_section', [] );
	foreach ( $products as $key => &$product ) {
		$product['key'] = $key;
	}

	bladerunner( 'views.pages.products', [
		'products' => $products,
	] );
}
else {
	bladerunner( 'views.page' );
}

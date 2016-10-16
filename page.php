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
else {
	bladerunner( 'views.page' );
}

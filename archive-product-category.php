<?php
/**
 * Created by PhpStorm.
 * User: richardsweeney
 * Date: 2016-07-04
 * Time: 12:43
 */

bladerunner( 'views.products.archive', [
	'products' => gram_get_products_archive_collection(),
] );

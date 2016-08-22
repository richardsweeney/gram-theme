<?php
/**
 * Created by PhpStorm.
 * User: richardsweeney
 * Date: 2016-07-04
 * Time: 10:42
 */
$is_single_post = is_single_post();

bladerunner( 'views.single', [
	'single_post' => $is_single_post,
	] );

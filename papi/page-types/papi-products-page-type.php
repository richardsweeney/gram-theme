<?php

class Products_Page_Type extends Papi_Page_Type {

	/**
	 * The type meta options.
	 *
	 * @return array
	 */
	public function meta() {
		return [
			'name'        => __( 'Products Page Type', 'gram' ),
			'description' => __( "The page type for the products page", 'gram' ),
			'post_type'   => 'page',
		];
	}


	/**
	 * Register content meta box.
	 */
	public function register() {
		$this->box( __( 'Products', 'gram' ), [ $this, 'products_section' ] );
	}

	public function products_section() {
		return papi_property( [
			'title' => __( 'Products repeater', 'gram' ),
			'slug'  => 'products_section',
			'type'  => 'repeater',
			'settings' => [
				'layout' => 'row',
				'items' => [
					papi_property([
						'title' => __( 'Product Category', 'gram' ),
						'type' => 'string',
						'slug' => 'product_category',
					]),
					papi_property([
						'title' => __( 'Product Category Image', 'gram' ),
						'type' => 'image',
						'slug' => 'product_image',
					]),
					papi_property([
						'title' => __( 'Products list', 'gram' ),
						'type' => 'repeater',
						'slug' => 'products_repeater',
						'settings' => [
							'items' => [
								papi_property([
									'title' => __( 'Product', 'gram' ),
									'type' => 'string',
									'slug' => 'product',
								]),
							],
						],
					]),
				],
			],
		] );
	}

}

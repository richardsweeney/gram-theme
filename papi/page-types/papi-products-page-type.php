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
			'description' => __( 'The page type for the products page', 'gram' ),
			'post_type'   => 'product-category',
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
			'title'    => __( 'Product list', 'gram' ),
			'slug'     => 'products',
			'type'     => 'repeater',
			'settings' => [
				'layout'        => 'row',
				'add_new_label' => __( 'Add new product', 'gram' ),
				'items'         => [
					papi_property( [
						'title' => __( 'Product', 'gram' ),
						'type'  => 'string',
						'slug'  => 'product',
					] ),
				],
			],
		] );
	}

}

<?php

class Another_Page_Type extends Papi_Page_Type {

	/**
	 * The type meta options.
	 *
	 * @return array
	 */
	public function meta() {
		return [
			'name'        => __( 'Another Page', 'gram' ),
			'description' => __( "Don't use this one!", 'gram' ),
			'post_type'   => 'page',
		];
	}


	/**
	 * Register content meta box.
	 */
	public function register() {
		$this->box( __( 'A section', 'gram' ), [ $this, 'a_section' ] );
	}

	public function a_section() {
		return [
			papi_property( [
				'title' => __( 'Title', 'gram' ),
				'slug'  => 'title',
				'type'  => 'string',
				'settings' => [
					'allow_html' => true
				],
			] ),
		];
	}

}

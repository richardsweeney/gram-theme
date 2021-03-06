<?php

class Front_Page_Type extends Papi_Page_Type {

	/**
	 * The type meta options.
	 *
	 * @return array
	 */
	public function meta() {
		return [
			'name'        => __( 'Front Page', 'gram' ),
			'description' => __( 'The Front Page Template', 'gram' ),
			'post_type'   => 'page',
			'template'    => 'front-page.php'
		];
	}


	/**
	 * Register content meta box.
	 */
	public function register() {
		$this->box( __( 'About Home section', 'gram' ), [ $this, 'about_home_section' ] );
		$this->box( __( 'Video Home section', 'gram' ), [ $this, 'video_home_section' ] );
	}


	/**
	 * About with autocomplete fields.
	 *
	 * @return array
	 */
	public function about_home_section() {
		return [
			papi_property( [
				'title' => __( 'About Title', 'gram' ),
				'slug'  => 'about_home_title',
				'type'  => 'string',
				'settings' => [
					'allow_html' => true
				],
			] ),
			papi_property( [
				'title' => __( 'About Text', 'gram' ),
				'slug'  => 'about_home_text',
				'type'  => 'editor',
				'settings' => [
					'allow_html' => true
				],
			] ),
			papi_property( [
				'title' => __( 'About Image', 'gram' ),
				'slug'  => 'about_home_image',
				'type'  => 'image',
			] ),

		];
	}


	/**
	 * Video with autocomplete fields.
	 *
	 * @return array
	 */
	public function video_home_section() {
		return [
			papi_property( [
				'title' => __( 'Title', 'gram' ),
				'slug'  => 'video_title',
				'type'  => 'string',
				'settings' => [
					'allow_html' => true
				],
			] ),
			papi_property( [
				'title' => __( 'Text', 'gram' ),
				'slug'  => 'video_text',
				'type'  => 'editor',
			] ),
			papi_property( [
				'title'    => __( 'Video url', 'gram' ),
				'slug'     => 'video_url',
				'type'     => 'url',
				'description' => __( 'The youtube link to the video.', 'gram' ),
			] ),

		];
	}

}

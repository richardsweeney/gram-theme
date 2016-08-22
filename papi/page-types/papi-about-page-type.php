<?php

class About_Page_Type extends Papi_Page_Type {

	/**
	 * The type meta options.
	 *
	 * @return array
	 */
	public function meta() {
		return [
			'name'        => __( 'About Page', 'gram' ),
			'description' => __( 'About Page Template', 'gram' ),
			'post_type'   => 'page',
			'template'    => 'about-page.php'
		];
	}

	/**
	 * Register content meta box.
	 */
	public function register() {
		$this->box( __( 'Feature Section', 'gram' ), [ $this, 'register_feature_meta_section' ] );
	}

	/**
	 * Hero with autocomplete fields.
	 *
	 * @return array
	 */
	public function register_feature_meta_section() {
		return [
			papi_property( [
				'title' => __( 'Background Image', 'gram' ),
				'slug'  => 'about_bg_img',
				'type'  => 'image',
			] ),
			papi_property( [
				'title' => __('About Feature Title', 'gram' ),
				'slug'  => 'about_feature_title',
				'type'  => 'string',
				'settings' => [
					'allow_html' => true
				],
			] ),
			papi_property( [
				'title'    => __( 'About Feature Text', 'gram' ),
				'slug'     => 'about_feature_text',
				'type'     => 'text',
				'settings' => [
					'allow_html' => true
				],
			] ),
			papi_property( [
				'title'    => __( 'About Background Image 2', 'gram' ),
				'slug'     => 'about_bg_img_2',
				'type'     => 'image',
			] ),
			papi_property( [
				'title'    => __( 'About Post Title', 'gram' ),
				'slug'     => 'about_post_title',
				'type'     => 'string',
				'settings' => [
					'allow_html' => true
				],
			] ),
			papi_property( [
				'title'    => __( 'About Post Article', 'gram' ),
				'slug'     => 'about_post_article',
				'type'     => 'text',
				'settings' => [
					'allow_html' => true
				],
			] ),
			papi_property( [
				'title'    => __( 'About Side Image', 'gram' ),
				'slug'     => 'about_side_img',
				'type'     => 'image',
			] ),

		];
	}
}



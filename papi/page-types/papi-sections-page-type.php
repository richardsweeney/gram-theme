<?php

class Sections_Page_Type extends Papi_Page_Type {

	/**
	 * The type meta options.
	 *
	 * @return array
	 */
	public function meta() {
		return [
			'name'        => __( 'Sections Page Type', 'gram' ),
			'description' => __( 'The page type for building sections', 'gram' ),
			'post_type'   => 'page',
		];
	}

	/**
	 * @return array
	 */
	public function remove() {
		return [ 'editor', 'comments', 'thumbnail' ];
	}

	/**
	 * Register the metabox
	 */
	public function register() {
		$this->box( __( 'Sections', 'gram' ), [ $this, 'render_sections' ] );
	}

	/**
	 * @return null|Papi_Property
	 */
	public function render_sections() {
		return papi_property( [
			'title' => __( 'Sections', 'gram' ),
			'slug'  => 'page_sections',
			'type'  => 'flexible',
			'settings' => [
				'layout' => 'row',
				'items' => [
					[
						'title' => __( 'Wide image with text.', 'gram' ),
						'items' => [
							papi_property([
								'title' => __( 'Wide Image', 'gram' ),
								'type' => 'image',
								'slug' => 'image',
							]),
							papi_property([
								'title' => __( 'Title', 'gram' ),
								'type' => 'string',
								'slug' => 'title',
							]),
							papi_property([
								'title' => __( 'Text', 'gram' ),
								'type' => 'editor',
								'slug' => 'text',
								'settings' => [
									'media_buttons' => false,
									'drag_drop_upload' => false,
								],
							]),
						],
					],
					[
						'title' => __( 'Circlular image with text.', 'gram' ),
						'items' => [
							papi_property([
								'title' => __( 'Title', 'gram' ),
								'type' => 'string',
								'slug' => 'title',
							]),
							papi_property([
								'title' => __( 'Text', 'gram' ),
								'type' => 'editor',
								'slug' => 'text',
								'settings' => [
									'media_buttons' => false,
									'drag_drop_upload' => false,
								],
							]),
							papi_property([
								'title' => __( 'Image', 'gram' ),
								'type' => 'image',
								'slug' => 'image',
							]),
							papi_property([
								'title' => __( 'Alignment', 'gram' ),
								'type' => 'dropdown',
								'slug' => 'alignment',
								'settings' => [
									'items' => [
										__( 'Image left, text right', 'gram' ) => 'img-left',
										__( 'Image right, text left', 'gram' ) => 'img-right',
									],
								],
							]),
						],
					],
				],
			],
		] );
	}

}

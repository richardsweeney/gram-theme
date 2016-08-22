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
		$this->box( __( 'Hero Section', 'gram' ), [ $this, 'register_hero_meta_section' ] );
		$this->box( __( 'Flexible sections', 'gram' ), [ $this, 'register_flexible_frontpage_sections' ] );
		$this->box( __( 'Video Home section', 'gram' ), [ $this, 'video_home_section' ] );
		$this->box( __( 'About Home section', 'gram' ), [ $this, 'about_home_section' ] );
		// $this->box( __( 'Contact Home section', 'gram' ), [ $this, 'contact_home_section' ] );
		// $this->box( __( 'Footer Home section', 'gram' ), [ $this, 'footer_section' ] );
	}


	/**
	 * Hero with autocomplete fields.
	 *
	 * @return array
	 */
	public function register_hero_meta_section() {
		return [
			papi_property( [
				'title' => __( 'Background Image', 'gram' ),
				'slug'  => 'bg_hero_image',
				'type'  => 'image',
			] ),
			papi_property( [
				'title' => 'Hero Title',
				'slug'  => 'hero_title',
				'type'  => 'string',
				'settings' => [
					'allow_html' => true
				],
			] ),
			papi_property( [
				'title'    => __( 'Hero Subheading', 'gram' ),
				'slug'     => 'hero_subheading',
				'type'     => 'text',
				'settings' => [
					'allow_html' => true
				],
			] ),
			papi_property( [
				'title'    => __( 'Register Email Text', 'gram' ),
				'slug'     => 'register_text',
				'type'     => 'text',
				'settings' => [
					'allow_html' => true
				],
			] ),
			papi_property( [
				'title'    => __( 'Email Input FIeld', 'gram' ),
				'slug'     => 'email_input_field',
				'type'     => 'email',
				'settings' => [
					'allow_html' => true
				],
			] ),
			papi_property( [
				'title'    => __( 'Button Text', 'gram' ),
				'slug'     => 'register_button_text',
				'type'     => 'string',
				'settings' => [
					'allow_html' => true
				],
			] ),

		];
	}


	/**
	 * Frontpage flexible sections.
	 *
	 * @return array
	 */
	public function register_flexible_frontpage_sections() {
		return [
			papi_property( [
				'title'    => __( 'Flexible sections', 'gram' ),
				'slug'     => 'frontpage_flexible_sections',
				'type'     => 'flexible',
				'settings' => [
					'closed_rows' => true,
					'items'       => [
						[
							'title' => __( 'Slider Section', 'gram' ),
							'items' => [
								papi_property( [
									'title' => __( 'Activate Slider Section', 'gram' ),
									'slug'  => 'enable_slider_section',
									'type'  => 'bool'
								] ),
							],
						],
						[
							'title' => __( 'Image, Text and link Section', 'gram' ),
							'items' => $this->register_frontpage_sections(),
						],
						[
							'title' => __( 'Puff Section', 'gram' ),
							'items' => [
								papi_property( [
									'title' => __( 'Activate Puff Section', 'gram' ),
									'slug'  => 'enable_puff_section',
									'type'  => 'bool'
								] ),
							],
						],
						[
							'title' => __( 'News Section', 'gram' ),
							'items' => [
								papi_property( [
									'title' => __( 'Show recent articles', 'gram' ),
									'slug'  => 'enable_news_section',
									'type'  => 'bool'
								] ),
								papi_property( [
									'title' => __( 'Header', 'gram' ),
									'slug'  => 'news_section_header',
									'type'  => 'string',
								] ),
								papi_property( [
									'title' => __( 'Text', 'gram' ),
									'slug'  => 'news_section_text',
									'type'  => 'text',
								] ),
							],
						],
					],
				],
			] ),
		];
	}


	/**
	 * Fields for the flexible sections.
	 *
	 * @return array
	 */
	public function register_frontpage_sections() {
		return [
			papi_property( [
				'title'    => __( 'Sections', 'gram' ),
				'slug'     => 'repeater_section',
				'type'     => 'repeater',
				'settings' => [
					'layout' => 'row',
					'items'  => [
						papi_property( [
							'title' => __( 'Image', 'gram' ),
							'slug'  => 'section_image',
							'type'  => 'image'
						] ),
						papi_property( [
							'title'    => __( 'Title', 'gram' ),
							'type'     => 'string',
							'slug'     => 'section_title',
							'settings' => [
								'allow_html' => true
							],
						] ),
						papi_property( [
							'title'    => __( 'Text', 'gram' ),
							'slug'     => 'section_text',
							'type'     => 'text',
							'settings' => [
								'allow_html' => true
							]
						] ),
						papi_property( [
							'title' => __( 'Link', 'gram' ),
							'type'  => 'link'
						] ),
						papi_property( [
							'title'    => __( 'Section Layout', 'gram' ),
							'slug'     => 'section_layout',
							'type'     => 'dropdown',
							'settings' => [
								'items' => [
									__( 'Section layout 1: Full width image, text content on left', 'gram' )  => 'frontpage_section_layout_1',
									__( 'Section layout 2: Full width image, text content on right', 'gram' ) => 'frontpage_section_layout_2',
									__( 'Section layout 3: Text left, image right', 'gram' )                  => 'frontpage_section_layout_3',
								]
							]
						] ),
					]
				]
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
				'title' => __( 'Video Title', 'gram' ),
				'slug'  => 'video_title',
				'type'  => 'string',
				'settings' => [
					'allow_html' => true
				],
			] ),
			papi_property( [
				'title'    => __( 'Video url with button', 'gram' ),
				'slug'     => 'video_url',
				'type'     => 'url',
				'settings' => [
					'mediauploader' => true
				],
			] ),
			papi_property( [
				'title' => __( 'Video text', 'gram' ),
				'slug'  => 'video_text',
				'type'  => 'text',
				'settings' => [
					'allow_html' => true
				],
			] ),

		];
	}

	/**
	 * About with autocomplete fields.
	 *
	 * @return array
	 */
	public function about_home_section() {
		return [
			papi_property( [
				'title' => 'About Title',
				'slug'  => 'about_home_title',
				'type'  => 'string',
				'settings' => [
					'allow_html' => true
				],
			] ),
			papi_property( [
				'title' => __( 'About Image', 'gram' ),
				'slug'  => 'about_home_image',
				'type'  => 'image',
			] ),
			papi_property( [
				'title' => 'About Text',
				'slug'  => 'about_home_text',
				'type'  => 'text',
				'settings' => [
				'allow_html' => true
				],
			] ),

		];
	}

	// /**
	//  * Contact with autocomplete fields.
	//  *
	//  * @return array
	//  */
	// public function contact_home_section() {
	// 	return [
	// 		papi_property( [
	// 			'title' => __( 'Logo Image', 'gram' ),
	// 			'slug'  => 'logo_image',
	// 			'type'  => 'image',
	// 		] ),
	// 		papi_property( [
	// 			'title'       => __( 'Searchfield text', 'gram' ),
	// 			'description' => __( 'The text to be displayed in the searchfield', 'gram' ),
	// 			'slug'        => 'faq_placeholder',
	// 			'type'        => 'string',
	// 		] ),
	// 		// papi_property( [
	// 		// 	'title'    => 'Social Icons',
	// 		// 	'slug'     => 'social_icons_home',
	// 		// 	'type'     => 'checkbox',
	// 		// 	'settings' => [
	// 		// 		'items' => [
	// 		// 			'url'   => 'https://www.facebook.com/',
	// 		// 			'icon' => ''
	// 		// 		]
	// 		// 	],
	// 		// ] ),
	// 		papi_property( [
	// 			'title'       => __( 'Searchfield text', 'gram' ),
	// 			'description' => __( 'The text to be displayed in the searchfield', 'gram' ),
	// 			'slug'        => 'faq_placeholder',
	// 			'type'        => 'string',
	// 		] ),
	// 		papi_property( [
	// 			'title'    => __( 'FAQ', 'gram' ),
	// 			'slug'     => 'faq_posts',
	// 			'type'     => 'relationship',
	// 			'settings' => [
	// 				'limit'     => 15,
	// 				'post_type' => [ 'page' ],
	// 			],
	// 		] ),
	// 	];
	// }

	// /**
	//  * Footer with autocomplete fields.
	//  *
	//  * @return array
	//  */
	// public function footer_home_section() {
	// 	return [
	// 		papi_property( [
	// 			'title' => __( 'Background Image', 'gram' ),
	// 			'slug'  => 'faq_image',
	// 			'type'  => 'image',
	// 		] ),
	// 		papi_property( [
	// 			'title'       => __( 'Searchfield text', 'gram' ),
	// 			'description' => __( 'The text to be displayed in the searchfield', 'gram' ),
	// 			'slug'        => 'faq_placeholder',
	// 			'type'        => 'string',
	// 		] ),
	// 		papi_property( [
	// 			'title'    => __( 'FAQ', 'gram' ),
	// 			'slug'     => 'faq_posts',
	// 			'type'     => 'relationship',
	// 			'settings' => [
	// 				'limit'     => 15,
	// 				'post_type' => [ 'page' ],
	// 			],
	// 		] ),
	// 	];
	// }

}

<?php

namespace TheShipyard;

class Custom_Post_Type {

	/**
	 * @var string
	 */
	private $post_type = '';

	/**
	 * @var array
	 */
	private $labels = [];

	/**
	 * @var array
	 */
	private $args = [];

	/**
	 * @var \WP_Post_Type
	 */
	private $post_type_object;


	/**
	 * Custom_Post_Type constructor.
	 *
	 * @param string $post_type
	 * @param array  $labels
	 * @param array  $args
	 */
	public function __construct( $post_type, array $labels = [], array $args = [] ) {
		$this->post_type = $post_type;
		$this->labels = $labels;
		$this->set_args( $args );
		$this->register();
	}


	/**
	 * @return string
	 */
	public function get_post_type() {
		return $this->post_type;
	}


	/**
	 * @return array
	 */
	public function get_args() {
		return $this->args;
	}


	/**
	 * @return \WP_Post_Type
	 */
	public function get_post_type_object() {
		return $this->post_type_object;
	}


	/**
	 * Merge default and new args.
	 *
	 * @param $args
	 */
	private function set_args( $args ) {
		$this->args = wp_parse_args( $args, [
			'labels'             => $this->get_labels(),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => [ 'title', 'editor', 'thumbnail' ]
		] );
	}


	/**
	 * @return array
	 */
	private function get_labels() {
		$singular = $this->get_singular_name();
		$plural = $this->get_plural_name();

		return [
			'name'               => $plural,
			'singular_name'      => $singular,
			'menu_name'          => $plural,
			'all_items'          => sprintf( __( 'All %s', 'shipyard' ), $plural ),
			'add_new'            => sprintf( __( 'Add %s', 'shipyard' ), $singular ),
			'add_new_item'       => sprintf( __( 'Add New %s', 'shipyard' ), $singular ),
			'edit_item'          => sprintf( __( 'Edit %s', 'shipyard' ), $singular ),
			'new_item'           => sprintf( __( 'New %s', 'shipyard' ), $singular ),
			'view_item'          => sprintf( __( 'View %s', 'shipyard' ), $singular ),
			'search_items'       => sprintf( __( 'Search %s', 'shipyard' ), $plural ),
			'not_found'          => sprintf( __( 'No %s found', 'shipyard' ), $plural ),
			'not_found_in_trash' => sprintf( __( 'No %s found in Trash', 'shipyard' ), $plural ),
			'parent_item_colon'  => sprintf( __( 'Parent %s:', 'shipyard' ), $singular ),
		];
	}


	/**
	 * @return mixed|null|string
	 */
	public function get_singular_name() {
		return isset( $this->labels['singular'] ) ? $this->labels['singular'] : ucfirst( $this->post_type );
	}


	/**
	 * @return mixed|null|string
	 */
	public function get_plural_name() {
		return isset( $this->labels['plural'] ) ? $this->labels['plural'] : ucfirst( $this->post_type );
	}


	/**
	 * Register the post type.
	 *
	 * @return mixed
	 */
	public function register() {
		if ( ! $this->post_type ) {
			return new \WP_Error( 'no_post_type_defined', __( 'You must define at least the post type!', 'shipyard' ) );
		}

		$post_type = register_post_type(
			$this->post_type,
			$this->get_args()
		);

		if ( is_wp_error( $post_type ) ) {
			return $post_type;
		}

		$this->post_type_object = $post_type;

		return $this;
	}

}

<?php

/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', function() {
	if ( true === shipyard_is_dev() ) {
		$main_js  = '/resources/js/all.js';
		$main_css = '/resources/css/main.css';
	}
	else {
		$main_js  = '/resources/js/all-min.js';
		$main_css = '/resources/css/main.min.css';
	}

	$ua_code = get_theme_mod( 'shipyard_google_analytics_code' );
	if ( empty( $ua_code ) || ( is_user_logged_in() && current_user_can( 'manage_options' ) ) ) {
		$ua_code = '';
	}

	wp_enqueue_script( 'shipyard-js', get_template_directory_uri() . $main_js, [ 'jquery' ], filemtime( get_template_directory() . $main_js ), true );

	wp_enqueue_style( 'shipyard-css', get_template_directory_uri() . $main_css, [], filemtime( get_template_directory() . $main_css ) );

	$t10ns = [
		'ajaxurl' => admin_url( 'admin-ajax.php' ),
		'ua_code' => $ua_code,
	];

	wp_localize_script( 'shipyard-js', 'shipyard', $t10ns );
});



/**
 * Change the Login Logo
 */
add_action( 'login_enqueue_scripts', function() {
	$shipyard_logo = get_theme_mod( 'shipyard_logo' );
	if ( ! empty( $shipyard_logo ) ) { ?>

		<style type="text/css">
			.login h1 a {
				background-image: url(<?php echo $shipyard_logo; ?>);
			}
		</style>

	<?php }
});


/**
 * Register the sidebar
 */
add_action( 'widgets_init', function() {
	register_sidebar( [
		'name'          => __( 'Sidebar', 'gram' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	] );
});

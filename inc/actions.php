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

	$parallax_js = '/resources/js/vendor/parallax.js/parallax.min.js';

	wp_register_script( 'parallax-js', get_template_directory_uri() . $parallax_js, [ 'jquery' ], filemtime( get_template_directory() . $parallax_js ), true );
	wp_enqueue_script( 'shipyard-js', get_template_directory_uri() . $main_js, [ 'jquery', 'parallax-js' ], filemtime( get_template_directory() . $main_js ), true );

	// Google Fonts:
	wp_enqueue_style( 'google-heading', '//fonts.googleapis.com/css?family=Pathway+Gothic+One&subset=latin-ext');

	wp_enqueue_style( 'google-body', '//fonts.googleapis.com/css?family=Open+Sans:400,700');

	wp_enqueue_style( 'shipyard-style', get_stylesheet_uri() );/* Custom stylesheet */

	wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/resources/js/all/isotope.pkgd.min.js', array('jquery'), '3.0.1', true );

	wp_enqueue_script( 'imgs-loaded-js', get_template_directory_uri() . '/resources/js/all/imagesloaded.pkgd.min.js', array('jquery'), '4.1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_style( 'shipyard-css', get_template_directory_uri() . $main_css, [], filemtime( get_template_directory() . $main_css ) );

	$t10ns = [
		'ajaxurl' => admin_url( 'admin-ajax.php' ),
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
		'id'            => 'sidebar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	] );
	register_sidebar( [
		'name'          => __( 'Footer', 'gram' ),
		'id'            => 'footer-1',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	] );
});


add_action( 'init', function() {
	if ( ! isset( $_POST['mailchimp_email'] ) ) return;

	if ( empty( $_POST['mailchimp_email'] ) || ! is_email( $_POST['mailchimp_email'] ) ) {
		wp_redirect( home_url('/?mc=invalid_email' ) );
		exit;
	}

	require get_template_directory() . '/mailchimp-api-master/src/MailChimp.php';
	$mailChimp = new \DrewM\MailChimp\MailChimp( '1adb927105dbebd9f262f02b921eaccb-us14' );
	$list_id = 'fcd23dec93';
	$result = $mailChimp->post( "lists/$list_id/members", [
		'email_address' => $_POST['mailchimp_email'],
		'status'        => 'subscribed',
	]);

	wp_redirect( home_url( '/?mc=sigup_ok' ) );
	exit;
});


add_action( 'loop_start', function() {
	remove_filter( 'the_content', 'sharing_display', 19 );
	remove_filter( 'the_excerpt', 'sharing_display', 19 );
	if ( class_exists( 'Jetpack_Likes' ) ) {
		remove_filter( 'the_content', [ Jetpack_Likes::init(), 'post_likes' ], 30, 1 );
	}
});





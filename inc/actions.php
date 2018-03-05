<?php

/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', function() {
	$main_js  = '/resources/js/app.js';
	$main_css = '/resources/css/main.css';

	wp_enqueue_script( 'shipyard-js', get_template_directory_uri() . $main_js, [ 'jquery' ], filemtime( get_template_directory() . $main_js ), true );

	wp_localize_script( 'shipyard-js', 'gram', gram_get_js_t10ns() );

	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700|Oswald' );

	wp_enqueue_style( 'shipyard-css', get_template_directory_uri() . $main_css, [ 'google-fonts' ], filemtime( get_template_directory() . $main_css ) );
});



/**
 * Change the Login Logo
 */
add_action( 'login_enqueue_scripts', function() { ?>
	<style type="text/css">
		body #login {
			padding-top: 1%;
		}
		#login h1 a {
			background-image: url( '<?php echo get_template_directory_uri() ?>/resources/img/gram-logo.svg' );
			background-size: 300px;
			height: 300px;
			width: 300px;
			margin-bottom: -50px;
		}
	</style>
<?php });


/**
 * Mailchimp callback handler.
 */
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


/**
 * Move the sharing Jetpack buttons.
 */
add_action( 'loop_start', function() {
	remove_filter( 'the_content', 'sharing_display', 19 );
	remove_filter( 'the_excerpt', 'sharing_display', 19 );
	if ( class_exists( 'Jetpack_Likes' ) ) {
		remove_filter( 'the_content', [ Jetpack_Likes::init(), 'post_likes' ], 30, 1 );
	}
});

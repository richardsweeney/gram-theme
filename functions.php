<?php
/**
 * shipyard functions and definitions
 *
 * @package shipyard
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function shipyard_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on shipyard, use a find and replace
	 * to change 'shipyard' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'gram', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'primary', 'shipyard' ),
		'footer-menu' => esc_html__( 'Footer', 'shipyard' ),
	) );


	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
add_action( 'after_setup_theme', 'shipyard_setup' );

/**
 * Carefully check for PAPI before loading custom properties
 */
if ( class_exists( 'Papi_Property' ) ) {
	require_once get_template_directory() . '/papi/custom-controls/class-property-googlemap.php';
	require_once get_template_directory() . '/inc/class-location.php';
}
else {
	add_action( 'admin_notices', function () {
		$class   = "error";
		$message = "Couldn't find PAPI, please check that it's installed and activated.";
		echo "<div class=\"$class\"> <p>$message</p></div>";
	} );
}

require get_template_directory() . '/inc/actions.php';
require get_template_directory() . '/inc/filters.php';

/**
 * Register widget area.
 *
 */
function shipyard_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer 1', 'shipyard' ),
		'id'            => 'footer-1',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
		register_sidebar( array(
		'name'          => __( 'Footer 2', 'shipyard' ),
		'id'            => 'footer-2',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
		register_sidebar( array(
		'name'          => __( 'Footer 3', 'shipyard' ),
		'id'            => 'footer-3',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'shipyard_widgets_init' );


/**
 * Add customizer settings
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * Include shipyard functions
 */
require get_template_directory() . '/inc/shipyard-theme-functions.php';

/**
 * Replaces the excerpt "more" text by a link.
 */
function new_excerpt_more($more) {
    global $post;
	return '... <a class="moretag" href="'. get_permalink($post->ID) . '"> continue reading &raquo;</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');











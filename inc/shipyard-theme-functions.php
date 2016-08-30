<?php

/**
 * Output a SVG-file via an include
 *
 * @param string $svg_file Path to the file, with or without .svg suffix.
 *
 * @return void
 */
function shipyard_render_svg( $svg_file ) {
	if ( false === strpos( $svg_file, '.svg' ) ) {
		$svg_file .= '.svg';
	}

	$file_path            = get_stylesheet_directory() . '/resources/img/' . $svg_file;
	$compressed_file_path = get_stylesheet_directory() . '/resources/img/compressed/' . $svg_file;

	if ( is_file( $compressed_file_path ) ) {
		include( $compressed_file_path );
	}
	elseif ( is_file( $file_path ) ) {
		include( $file_path );
	}

}

/**
 * Check if site is on stage
 *
 * @return bool
 */
function shipyard_is_stage() {
	if ( strpos( site_url(), 'stage' ) !== false ) {
		return true;
	}
	return false;
}


/**
 * Check if site is on dev
 *
 * @return bool
 */
function shipyard_is_dev() {
	if ( strpos( site_url(), '.dev' ) !== false ) {
		return true;
	}
	return false;
}


/**
 * Render Social icons from cusomizer section "shipyard_social_links_section"
 */
function shipyard_render_customizer_social_icons() {
	ob_start(); ?>

	<ul class="social-link-list">
		<?php foreach( [ 'facebook', 'twitter', 'instagram', 'googleplus' ] as $social_link ) :
			if ( get_theme_mod( 'shipyard_' . $social_link ) ) : ?>
				<li>
					<a class="social-link" href="<?php echo get_theme_mod( 'shipyard_' . $social_link ); ?>" target="_blank">
						<?php  echo shipyard_render_svg( $social_link . '.svg' ) ?>
					</a>
				</li>
			<?php endif;
		endforeach; ?>
	</ul>

	<?php return ob_get_clean();
}


/**
 * Get the site logo.
 *
 * @return string
 */
function shipyard_get_logo() {
	$logo = get_theme_mod( 'main_logo', null );
	if ( ! $logo ) {
		return '';
	}

	return $logo;
}


/**
 * Get the featured image for a post.
 *
 * @param string $size
 *
 * @return array|bool|false
 */
function shipyard_get_featured_image( $size = 'full' ) {
	if ( has_post_thumbnail() ) {
		return wp_get_attachment_image_src( get_post_thumbnail_id(), $size );
	}

	return false;
}


function shipyard_get_featured_image_src( $size = 'full' ) {
	$img = shipyard_get_featured_image();
	if ( $img ) {
		return $img[0];
	}

	return false;
}


function shipyard_render_image_metadata() {
	if ( ! has_post_thumbnail() ) return;

	$featured_image = shipyard_get_featured_image();
	?>
    <div itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
        <meta itemprop="url" content="<?php echo $featured_image[0] ?>">
        <meta itemprop="width" content="<?php echo $featured_image[1] ?>">
        <meta itemprop="height" content="<?php echo $featured_image[2] ?>">
    </div>
<?php }


/**
 * Custom Post Types
 */
require get_template_directory() . '/inc/post-types/CPT.php';

//Product Custom Post Type
require get_template_directory() . '/inc/post-types/register-products.php';

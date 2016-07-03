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

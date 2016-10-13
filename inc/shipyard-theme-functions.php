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

	$file_path            = get_stylesheet_directory() . '/resources/img/svg/' . $svg_file;
	$compressed_file_path = get_stylesheet_directory() . '/resources/img/compressed/svg' . $svg_file;

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
		<?php foreach( [ 'facebook', 'twitter', 'instagram', 'pinterest', 'youtube' ] as $social_link ) :
			if ( get_theme_mod( 'shipyard_' . $social_link ) ) : ?>
				<li>
					<a class="social-link" href="<?php echo esc_url( get_theme_mod( 'shipyard_' . $social_link ) ); ?>" target="_blank">
						<?php echo shipyard_render_svg( "{$social_link}-square" ) ?>
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
 * Render an image from a papi image object.
 *
 * @param object $papi_image_object
 * @param string $size
 *
 * @return string
 */
function gram_papi_get_image( $papi_image_object, $size ) {
	$file_type = wp_check_filetype( $papi_image_object->file );
	$src_set   = wp_get_attachment_image_srcset( $papi_image_object->id, $size );

	return sprintf(
		'<img src="%s" alt="%s" %s class="gram-papi-image %s">',
		isset( $papi_image_object->sizes[ $size ] ) ? $papi_image_object->sizes[ $size ]['url'] : $papi_image_object->url,
		esc_attr( $papi_image_object->alt ),
		( $src_set ) ? 'srcset="' . $src_set . '"' : '',
		esc_attr( $file_type['ext'] )
	);
}


/**
 * @param $papi_image_object
 * @param string $size
 *
 * @return mixed
 */
function gram_papi_get_image_src( $papi_image_object, $size = 'thumbnail' ) {
	return isset( $papi_image_object->sizes[ $size ] ) ? $papi_image_object->sizes[ $size ]['url'] : $papi_image_object->url;
}


/**
 * @return array
 */
function gram_get_js_t10ns() {
	$t10ns = [];

	if ( is_post_type_archive( 'product-category' ) ) {
		$t10ns['products'] = gram_get_products_archive_collection();
	}

	return $t10ns;
}


/**
 * Add Google Analytics where appropriate.
 */
function shipyard_maybe_add_ga() {
	$ua_code = get_theme_mod( 'shipyard_google_analytics_code', false );
	if ( ! $ua_code || ( is_user_logged_in() && current_user_can( 'manage_options' ) ) ) {
		return;
	} ?>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', '<?php echo $ua_code ?>', 'auto');
		ga('send', 'pageview');
	</script>

<?php }


/**
 * @return array
 */
function gram_get_products_archive_collection() {
	global $wp_query;

	$products = [];
	foreach ( $wp_query->posts as $product ) {
		$products[] = [
			'title'     => $product->post_title,
			'thumbnail' => get_the_post_thumbnail( $product->ID, 'full' ),
			'products'  => gram_get_products_product_repeater( $product->ID ),
		];
	}

	return $products;
}


/**
 * @param int $post_id
 *
 * @return array
 */
function gram_get_products_product_repeater( $post_id ) {
	$products = papi_get_field( $post_id, 'products', [] );
	if ( empty( $products ) ) {
		return [];
	}

	return wp_list_pluck( $products, 'product' );
}

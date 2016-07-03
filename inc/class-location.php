<?php

final class Location {

	/**
	 * @var object $instance Public class instance.
	 */
	private static $instance;


	/**
	 * Creates or returns an instance of this class.
	 *
	 * @return object A single instance of this class.
	 */
	public static function get() {
		if ( self::$instance === null ) {
			self::$instance = new self;
		}

		return self::$instance;
	}


	/**
	 * Render a location
	 *
	 * @param \WP_Post $location
	 */
	public function render_location( $location ) {
		// validate params
		if ( empty( $location ) ) {
			return;
		}
		ob_start();

		?>
		<section class="location">
			<?php if ( !empty( $location['contact_map'] ) ) :
				$contact_map = $location['contact_map'];
				?>
				<div class="contact-map">
					<div class="map-container" data-lat="<?php echo $contact_map->lat ?>" data-lng="<?php echo $contact_map->lng ?>"></div>
				</div>
			<?php endif; ?>

			<div class="contact-location-container">
				<?php if ( !empty( $location['contact_heading'] ) ) : ?>
				<h3><?php echo $location['contact_heading'] ?></h3>
				<?php endif; ?>

				<?php if ( !empty( $location['contact_text'] ) ) : ?>
					<p><?php echo $location['contact_text'] ?></p>
				<?php endif; ?>
			</div>

		</section>
		<?php

		echo ob_get_clean();
	}
}

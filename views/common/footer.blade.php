		</div>

		<footer role="contentinfo" class="gram-footer">

			<div class="footer">

				<div class="footer-inner container">
					<div class="footer-inner-column footer-logo">
						<img src="{{ get_theme_mod( 'footer_logo' ) }}" alt="{{ get_bloginfo( 'title' ) }}">
					</div>
					<div class="footer-inner-column footer-social">
						<ul class="opening-hours">
							<li><h3>{{ __( 'Opening hours', 'gram' ) }}</h3></li>
							<li>{{ __( 'Monday - Friday', 'gram' ) }} 10.00 - 19.00</li>
							<li>{{ __( 'Saturday', 'gram' ) }} 10.00 - 17.00</li>
							<li>{{ __( 'Sunday', 'gram' ) }} 11.00 - 16.00</li>
						</ul>

						{!! shipyard_render_customizer_social_icons() !!}
					</div>

				</div>

			</div>

			<div class="footer-2">
				<div class="footer-inner container">

					<div class="address">
						{{ get_theme_mod( 'shipyard_address' ) }}
						<span class="email-address">
							&nbsp;•&nbsp;
							<a href="mailto:{{ get_theme_mod( 'shipyard_email_address' ) }}">{{ get_theme_mod( 'shipyard_email_address' ) }}</a>
						</span>
					</div>

				</div>
			</div>

		</footer>
		{{ wp_footer() }}
	</body>
</html>

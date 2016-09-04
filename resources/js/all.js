if ( shipyard.ua_code !== "" ) {

	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', shipyard.ua_code, 'auto');
	ga('send', 'pageview');

}

( function ( $, shipyard ) {

	// DROPDOWN TOGGLE MENU
	$( '#js-mobile-menu' ).click( function () {
		$( this ).next( '#js-navigation-menu' ).toggle();
	} );

	$( document ).click( function ( e ) {
		var target = e.target;
		if ( !$( target ).is( '#js-mobile-menu' ) && !$( target ).parents().is( '#js-mobile-menu' ) ) {
			$( '#js-navigation-menu' ).hide();
		}
	} );


	// PRALLAX BACKGROUNDS
	$( document ).ready( function () {
		if ( $( "#js-parallax-window" ).length ) {
			parallax();
		}
	} );

	$( window ).scroll( function ( e ) {
		if ( $( "#js-parallax-window" ).length ) {
			parallax();
		}
	} );

	function parallax() {
		if ( $( "#js-parallax-window" ).length > 0 ) {
			var plxBackground = $( "#js-parallax-background" );
			var plxWindow = $( "#js-parallax-window" );

			var plxWindowTopToPageTop = $( plxWindow ).offset().top;
			var windowTopToPageTop = $( window ).scrollTop();
			var plxWindowTopToWindowTop = plxWindowTopToPageTop - windowTopToPageTop;

			var plxBackgroundTopToPageTop = $( plxBackground ).offset().top;
			var windowInnerHeight = window.innerHeight;
			var plxBackgroundTopToWindowTop = plxBackgroundTopToPageTop - windowTopToPageTop;
			var plxBackgroundTopToWindowBottom = windowInnerHeight - plxBackgroundTopToWindowTop;
			var plxSpeed = 0.35;

			plxBackground.css( 'top', -(plxWindowTopToWindowTop * plxSpeed) + 'px' );
		}
	}


	// NAVIGATION
	$( document ).ready( function () {
		var menu = $( '#navigation-menu' );
		var menuToggle = $( '#js-mobile-menu' );
		var signUp = $( '.sign-up' );

		$( menuToggle ).on( 'click', function ( e ) {
			e.preventDefault();
			menu.slideToggle( function () {
				if ( menu.is( ':hidden' ) ) {
					menu.removeAttr( 'style' );
				}
			} );
		} );

		// underline under the active nav item
		$( ".nav .nav-link" ).click( function () {
			$( ".nav .nav-link" ).each( function () {
				$( this ).removeClass( "active-nav-item" );
			} );
			$( this ).addClass( "active-nav-item" );
			$( ".nav .more" ).removeClass( "active-nav-item" );
		} );
	} );

	// SMOOTH SCROLLING DOWN
	// jQuery('a[href^="#"]').click(function(e) {

	// jQuery('html,body').animate({ scrollTop: jQuery(this.hash).offset().top}, 1000);

	// return false;

	// e.preventDefault();

	// });


	// initialize Isotope after all images have loaded
	// var $container = $( '.portfolio-items' ).imagesLoaded( function () {
	// 	$container.isotope( {
	// 		itemSelector: '.item',
	// 		layoutMode: 'fitRows'
	// 	} );
	// } );



}( jQuery, shipyard ));

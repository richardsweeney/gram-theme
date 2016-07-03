if ( shipyard.ua_code !== "" ) {

	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', shipyard.ua_code, 'auto');
	ga('send', 'pageview');

}

( function( $, shipyard ) {

  $( function() {
		var $menuToggle     = $( '.menu-toggle' ),
			$menu           = $( '.menu' );

		// mobile menu toggle
		if ( $( window ).width() < 640 ) {
			$menuToggle.on( 'click', function( e ) {
				e.preventDefault();

				$menu.slideToggle( 'slow', function() {
					if ( $menu.is( ':hidden' ) ) {
						$menu.removeAttr( 'style' );
					}

				});
			});
		}

	});

    var $recipeTagsForm = $( '#recipe-tags--form' ),
        $recipeForm = $( '#recipe-filter-form' );


    if ( $( '#frontpage-carousel' ).length ) {
        $( '#frontpage-carousel' ).slick({
            dots: true,
            speed: 300
        });
    }


    $('.accordion-tabs-minimal').each(function(index) {
        $(this).children('li').first().children('a').addClass('is-active').next().addClass('is-open').show();
    });

    $('.accordion-tabs-minimal').on( 'click', 'li > a.tab-link', function( e ) {
        e.preventDefault();
        var $this = $( this );
        if ( ! $this.hasClass('is-active') ) {
            var accordionTabs = $this.closest('.accordion-tabs-minimal');
            accordionTabs.find('.is-open').removeClass('is-open').hide();

            $this.next().toggleClass('is-open').toggle();
            accordionTabs.find('.is-active').removeClass('is-active');
            $this.addClass('is-active');
        }
    });


    if ( $( "#myChart" ).length ) {
        var options = {
            tooltipTemplate: "<%=label%>"
        };
        var ctx = $( "#myChart" ).get( 0 ).getContext( '2d' );
        var myPieChart = new Chart( ctx ).Pie( shipyard.energies, options );
    }


    $( '#mobile-nav-toggle, #close-link' ).on( 'click', function( e ) {
        e.preventDefault();

        $( 'body' ).toggleClass( 'nav-active' );

        $( '.menu' ).css({ height: $( document ).outerHeight() });
    });


    $recipeTagsForm.on( 'change', 'input', function() {
        $recipeTagsForm.submit();
    });


    $recipeForm
        .on( 'click', '.pagination-radio', function() {
            $recipeForm.submit();
        })
        .on( 'change', '.pagination-page', function() {
            $recipeForm.submit();
        });



    /**
     * Initialize all Google Maps on page
     */
    shipyard.initializeGoogleMaps = function () {

        if ('undefined' == typeof( google ) || 'undefined' == typeof( google.maps )) {
            return;
        }

        var $mapContainers = $( '.map-container' );

        _.each( $mapContainers, function ( mapContainer ) {

            shipyard.initializeSingleGoogleMap( mapContainer );

        });
    };


    /**
     * Initializes a single Google Map
     *
     * @param mapContainer
     */
    shipyard.initializeSingleGoogleMap = function( mapContainer ) {

        var lat = Number( $( mapContainer ).attr('data-lat') );
        var lng = Number( $( mapContainer ).attr('data-lng') );
        var position = {
            lat: lat,
            lng: lng
        };

        var map = new google.maps.Map( mapContainer, {
            zoom: 15,
            scrollwheel: false,
            center: position
        });

        google.maps.event.trigger( map, 'resize' );

        var marker = new google.maps.Marker({
            position: position,
            map: map
        });

    };


    /**
     * Add Google Maps support
     */
    $( document ).ready( function () {
        shipyard.initializeGoogleMaps();
    });

}( jQuery, shipyard ));

WebFontConfig = {
    google: { families: [ 'Open+Sans:400,400italic,700:latin', 'Gochi+Hand::latin' ] }
};
(function() {
    var wf = document.createElement('script');
    wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
})();

var Vue = require( 'vue' );

( function ( $ ) {

	parallax();

	$( window ).scroll( function ( e ) {
		parallax();
	} );

	$('.sliding-panel-button, .sliding-panel-fade-screen, .sliding-panel-close, .nav-menu-toggle').on('click touchstart',function (e) {
		$('.sliding-panel-content,.sliding-panel-fade-screen').toggleClass('is-visible');
		e.preventDefault();
	});


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
			// var plxBackgroundTopToWindowBottom = windowInnerHeight - plxBackgroundTopToWindowTop;
			var plxSpeed = 0.35;

			plxBackground.css( 'top', -(plxWindowTopToWindowTop * plxSpeed) + 'px' );
		}
	}


	$( "#modal-1" ).on( "change", function () {
		if ( $( this ).is( ":checked" ) ) {
			$( "body" ).addClass( "modal-open" );
		}
		else {
			$( "body" ).removeClass( "modal-open" );
		}
	} );

	$( ".modal-fade-screen, .modal-close" ).on( "click", function () {
		$( ".modal-state:checked" ).prop( "checked", false ).change();
	} );

	$( ".modal-inner" ).on( "click", function ( e ) {
		e.stopPropagation();
	} );


	Vue.transition( 'fade', {
		css: false,
		enter: function ( el, done ) {
			$( el )
				.css( 'opacity', 0 )
				.animate( { opacity: 1 }, 250, done );
		},
		enterCancelled: function ( el ) {
			$( el ).stop();
		},
		leave: function ( el, done ) {
			$( el ).animate( { opacity: 0 }, 200, done );
		},
		leaveCancelled: function ( el ) {
			$( el ).stop();
		}
	} );


	if ( $( '#products' ).length > 0 ) {
		new Vue( {
			el: '#products',
			data: {
				modalActive: false,
				products: gram.products,
				currentProductIndex: 0,
				currentProduct: gram.products[ 0 ]
			},
			methods: {
				showModal: function ( key ) {
					this.currentProductIndex = key;
					$( "#modal-1" ).prop( "checked", true ).change();

					this.currentProduct = this.products[ key ];
				},
				hideModal: function () {
					$( ".modal-state:checked" ).prop( "checked", false ).change();
				},
				prevProductCategory: function() {
					if ( this.currentProductIndex > 0 ) {
						this.currentProductIndex--;

						this.currentProduct = this.products[ this.currentProductIndex ];
					}
				},
				nextProductCategory: function() {
					if ( this.currentProductIndex <= ( this.products.length - 1 ) ) {
						this.currentProductIndex++;

						this.currentProduct = this.products[ this.currentProductIndex ];
					}
				}
			}
		} );
	}


}( jQuery ));

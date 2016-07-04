( function( $, shipyard ) {

    $( '#nav-close-link, #menu-toggle, .sliding-panel-fade-screen, .sliding-panel-close' ).on( 'click touchstart', function (e) {
        e.preventDefault();

        $( '.sliding-panel-content, .sliding-panel-fade-screen' ).toggleClass( 'is-visible' );
        $( 'body' ).toggleClass( 'nav-visible' );
    });

}( jQuery, shipyard ));

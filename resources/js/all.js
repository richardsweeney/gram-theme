if ( shipyard.ua_code !== "" ) {

	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', shipyard.ua_code, 'auto');
	ga('send', 'pageview');

}

( function( $, shipyard ) {

    $( '#nav-close-link, #menu-toggle, .sliding-panel-fade-screen, .sliding-panel-close' ).on( 'click touchstart', function (e) {
        e.preventDefault();

        $( '.sliding-panel-content, .sliding-panel-fade-screen' ).toggleClass( 'is-visible' );
        $( 'body' ).toggleClass( 'nav-visible' );
    });

}( jQuery, shipyard ));

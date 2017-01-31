@include( 'views.common.header' )

@if ( is_front_page() )
	@include( 'views.frontpage-sections.intro' )

	@include( 'views.frontpage-sections.signup-form' )
@endif

<main id="content">
	@yield( 'main' )
</main>

@include( 'views.common.footer' )

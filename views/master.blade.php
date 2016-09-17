<!DOCTYPE html>
<html {{ language_attributes() }}>
    <head>

        <title>{{ wp_title() }}</title>

        <meta charset="{{ bloginfo( 'charset' ) }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">

        {{ wp_head() }}

    </head>

    <body {{ body_class() }}>

        <div id="page" class="hfeed site">

            @include( 'views.common.header' )

            @if ( is_front_page() )
                @include( 'views.common.frontpage-sections.intro' )

                @include( 'views.common.frontpage-sections.signup-form' )
            @endif

            <main id="content">
                @yield( 'main' )
            </main>

        </div>

        @include( 'views.common.footer' )

        {{ wp_footer() }}
    </body>

</html>

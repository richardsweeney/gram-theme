<!DOCTYPE html>
<html {{ language_attributes() }}>
    <head>

        <title>{{ wp_title() }}</title>

        <meta charset="{{ bloginfo( 'charset' ) }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <!-- Font Awesome Icons -->
        <script src="https://use.fontawesome.com/1d1c7c86b0.js"></script>

        {{ wp_head() }}

    </head>

    <body {{ body_class() }}>

        <div id="page" class="hfeed site">

            @include( 'views.common.header' )

            @if ( is_front_page() )
                @include( 'views.common.frontpage-sections.intro' )

                @include( 'views.common.frontpage-sections.signup-form', [ 'register_text' => $register_text ] )
            @else
                <div id="js-parallax-window" class="parallax-window other-pages">
                <div class="parallax-static-content">
                    <h1>{{ the_title() }}</h1>
                </div>
                @if ( has_post_thumbnail() )
                <div id="js-parallax-background" class="parallax-background" style="background: url('{{ the_post_thumbnail_url() }}'); background-position: 50% 50%;"></div>
                @endif
                </div>
            @endif

            <div id="content" class="site-content">
                @yield( 'main' )
            </div>

        </div>

        @include( 'views.common.footer' )

        {{ wp_footer() }}
    </body>
</html>








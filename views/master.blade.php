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
            @else
                @if ( is_page() || is_singular( 'post' ) )
                    <div id="js-parallax-window" class="parallax-window">

                        <div id="js-parallax-window" class="parallax-window">
                            <div class="parallax-static-content page container">
                                <h1>{{ the_title() }}</h1>
                            </div>

                            @if( has_post_thumbnail() )
                                <div id="js-parallax-background" class="parallax-background" style="background: url('{{ the_post_thumbnail_url() }}') 0 0 / cover;"></div>
                            @endif
                        </div>

                    </div>
                @endif
            @endif

            <div id="content" class="site-content">
                @yield( 'main' )
            </div>

        </div>

        @include( 'views.common.footer' )

        {{ wp_footer() }}
    </body>

</html>

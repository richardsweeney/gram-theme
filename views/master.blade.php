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
        <div id="page" class="hfeed site-container">

            <a class="skip-link screen-reader-text" href="#content">{{ __( 'Skip to content', 'shipyard' ) }}</a>

            <header id="masthead" class="site-header">
                <nav id="site-navigation" class="main-navigation">
                    <a class="mobile-nav-toggle" id="mobile-nav-toggle" href="#"></a>
                    <span class="close-link" id="close-link" href="#">&#215;</span>

                    {{ wp_nav_menu( [ 'theme_location' => 'primary' ] ) }}

                    {{-- <a href="#" class="newsletter-link text">{{ __( 'Sign up for our newsletter', 'shipyard' ) }}</a> --}}
                </nav>
            </header>

            <div id="content" class="site-content">
                @yield( 'main' )
            </div>

            <footer id="colophon" class="site-footer">
                <div class="site-info">
                    FOOTER
                </div>
            </footer>

        </div>

        {{ wp_footer() }}
    </body>
</html>

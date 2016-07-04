<!DOCTYPE html>
<html {{ language_attributes() }}>
    <head>

        <title>{{ wp_title() }}</title>

        <meta charset="{{ bloginfo( 'charset' ) }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One&subset=latin-ext" rel="stylesheet">

        {{ wp_head() }}

    </head>

    <body {{ body_class() }}>

        <div class="hfeed site-container">

            @include( 'views.common.header' )

            <div id="content" class="site-content">
                @yield( 'main' )
            </div>

        </div>

        @include( 'views.common.footer' )

        {{ wp_footer() }}
    </body>
</html>

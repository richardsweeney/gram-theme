<a class="skip-link screen-reader-text" href="#content">{{ __( 'Skip to content', 'gram' ) }}</a>

<div class="js-menu sliding-panel-content main-navi">
    <button class="sliding-panel-close">&#215;</button>
    <nav id="site-navigation">
        <?php wp_nav_menu([ 'theme_location' => 'primary' ]); ?>
    </nav>
</div>

<header id="masthead" class="site-header">
    <a class="no-border" href="{{ home_url( '/') }}"><img class="main-logo" src="{{ shipyard_get_logo() }}" alt="Gram Malmö Logo"></a>

    {{--    <span class="tagline">{{ get_bloginfo( 'description' ) }}</span>--}}

    <button class="menu-toggle" id="menu-toggle"></button>
</header>

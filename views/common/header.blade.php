<a class="skip-link screen-reader-text" href="#content">{{ __( 'Skip to content', 'gram' ) }}</a>

<img src="{{ shipyard_get_logo() }}">

<header id="masthead" class="site-header">
    <nav id="site-navigation" class="main-navigation">
        <a class="mobile-nav-toggle" id="mobile-nav-toggle" href="#"></a>
        <span class="close-link" id="close-link" href="#">&#215;</span>

        {{ wp_nav_menu( [ 'theme_location' => 'primary' ] ) }}
    </nav>
</header>

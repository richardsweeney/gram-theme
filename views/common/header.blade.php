<header class="navigation container site-header" role="banner">
    <a href="{{ home_url( '/') }}" class="logo">
        <img class="main-logo" src="{{ get_template_directory_uri() }}/resources/img/gram-text-logo.svg" alt="Gram Malmö Text Logo">
    </a>

    <a href="#" type="button" class="js-menu-trigger sliding-panel-button">
        {{ shipyard_render_svg('bars') }}
    </a>

    <div class="js-menu-screen sliding-panel-fade-screen"></div>

    <nav role="navigation" class="nav-menu js-menu sliding-panel-content">
        <a type="button" href="#" class="nav-menu-toggle">{{ shipyard_render_svg('times') }}</a>
        {{ wp_nav_menu([ 'theme_location' => 'primary' ]) }}
    </nav>
</header>

<header class="navigation container site-header" role="banner">
    <div>
        <a href="{{ home_url( '/') }}" class="logo">
            <img class="main-logo" src="{{ get_theme_mod('main_logo') }}" alt="Gram Malmö Logo">
        </a>
    </div>

    <nav role="navigation" class="nav-menu">
        {{ wp_nav_menu([ 'theme_location' => 'primary' ]) }}
    </nav>
</header>

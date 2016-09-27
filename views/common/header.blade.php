<header class="navigation container site-header" role="banner">
    <div>
        <a href="{{ home_url( '/') }}" class="logo">
            <img class="main-logo" src="{{ get_template_directory_uri() }}/resources/img/gram-text-logo.svg" alt="Gram Malmö Text Logo">
        </a>
    </div>

    <nav role="navigation" class="nav-menu">
        {{ wp_nav_menu([ 'theme_location' => 'primary' ]) }}
    </nav>
</header>

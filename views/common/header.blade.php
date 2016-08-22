<header class="navigation" role="banner">
  <div class="navigation-wrapper">
    <a href="{{ home_url( '/') }}" class="logo">
      <img class="main-logo" src="{{ shipyard_get_logo() }}" alt="Gram Malmö Logo">
    </a>
    <a href="{{ home_url( '/') }}" class="navigation-menu-button" id="js-mobile-menu">MENU</a>
    <nav role="navigation">
      <ul id="js-navigation-menu" class="navigation-menu show random">
        {{ wp_nav_menu([ 'theme_location' => 'primary' ]) }}
      </ul>
    </nav>
  </div>
</header>












































<footer class="footer" role="contentinfo">

    <div class="footer-inner container">
        <div class="footer-inner-column footer-logo">
            <img src="{{ get_theme_mod( 'footer_logo' ) }}" alt="{{ get_bloginfo( 'title' ) }}">
        </div>
        <div class="footer-inner-column footer-social">
            {!! shipyard_render_customizer_social_icons() !!}
        </div>

    </div>
</footer>

<footer class="footer-2" role="contentinfo">
    <div class="footer-inner container">
        {{ wp_nav_menu([ 'theme_location' => 'footer' ]) }}
    </div>
</footer>

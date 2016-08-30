<footer class="footer" role="contentinfo">
    <div class="footer-inner">
        <div class="footer-logo">
          <?php dynamic_sidebar( 'footer-1' ) ?>
        </div>

        <div class="footer-social">
            <?php dynamic_sidebar( 'footer-2' ) ?>
        </div>
    </div>
</footer>

<footer class="footer-2" role="contentinfo">
    <div class="footer-inner">
        {{ wp_nav_menu([ 'theme_location' => 'footer' ]) }}

        <div class="copyright-info">
            <p class="pull-right"> Gram Malmö &copy; <?php echo date('Y'); ?> <?php echo the_author_link(); ?></p>
        </div>
    </div>
</footer>

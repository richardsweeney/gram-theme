<footer class="footer" role="contentinfo">
  	<div class="footer-logo">
    <?php dynamic_sidebar( 'footer-1' ); ?>
 	</div>

    <ul class="footer-social">
      <?php dynamic_sidebar( 'footer-2' ); ?>
    </ul>

</footer>

<footer class="footer-2" role="contentinfo">
    <ul>
      {{ wp_nav_menu([ 'theme_location' => 'footer' ]) }}
    </ul>

    <div class="copyright-info">
      <p class="pull-right"> Gram Malmö &copy; <?php echo date('Y'); ?> <?php echo the_author_link(); ?></p>
    </div>
</footer>

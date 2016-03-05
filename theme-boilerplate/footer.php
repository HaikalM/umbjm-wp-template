<footer id="footer" role="contentinfo">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Universitas Muhammadiyah">
          </a>

        </div>
        <div class="col-sm-3">
          <ul id="contact">
            <li>
              Jalan S. Parman Komplek Rumah Sakit Islam Banjarmasin
            </li>
            <li> Telp/Fax. (0511) 3363002</li>
            <li>Mail. info@umbjm.ac.id</li>
          </ul>
        </div>
        <div class="col-sm-2">
          <?php wp_nav_menu( array( 'theme_location' => 'footer-1' ) ); ?>
        </div>
        <div class="col-sm-2">
          <?php wp_nav_menu( array( 'theme_location' => 'footer-2' ) ); ?>
        </div>
        <div class="col-sm-2">
          <?php wp_nav_menu( array( 'theme_location' => 'footer-3' ) ); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div id="copyright" class="pull-left">
        <?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) );  ?>
      </div>
      <div class="pull-right">
        <a href="#header" class="btn btn-default">
          <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
      </div>
    </div>
  </div>
</footer>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>


<footer id="footer" role="contentinfo">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <h2>Logo</h2>
        </div>
        <div class="col-sm-3">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi ducimus fuga maiores accusamus aspernatur asperiores dolore natus perferendis, nemo ullam. Voluptates maiores recusandae voluptatum incidunt atque veniam deleniti temporibus quas!
          </p>
        </div>
        <div class="col-sm-3"></div>
        <div class="col-sm-3"></div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div id="copyright">
        <?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) );  ?>
      </div>
    </div>
  </div>
</footer>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>


<aside id="sidebar" role="complementary">

<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>

<div id="primary" class="widget-area">
<ul class="xoxo">
<?php 
if (is_singular('post')) {
  ?>
<!--   <li class="widget-category" class="widget-container">
    <h3 class="widget-title">Kategori</h3>
    <?php _e( '<li>', 'blankslate' ); ?><?php the_category( '</li> ' ); ?>
  </li> -->

   <li class="widget-tag" class="widget-container" style="overflow:hidden" >
    <h3 class="widget-title">Tag</h3>
    <ul>
      <?php the_tags( '<li class="pull-left btn btn-xs btn-danger" style="margin-right:10px;margin-bottom:10px;">','</li><li class="pull-left btn btn-xs btn-danger" style="margin-right:10px;margin-bottom:10px;">','</li>' ); ?>
    </ul>
  </li>
  <?php
}
 ?>
<?php dynamic_sidebar( 'primary-widget-area' ); ?>
</ul>
</div>
<?php endif; ?>
</aside>
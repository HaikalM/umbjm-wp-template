<?php get_header(); ?>

<div class="container" id="content" class="frontpage">
  <div class="row">
    <div class="col-sm-5">
      <h2>BERITA</h2>
      <ul class="frontpage">
      <?php 
      // mulai filter halaman sesuai kategori untuk berita
      $category = 'berita';
      query_posts( array ( 'category_name' => $category, 'posts_per_page' => 5) ); ?>
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php $id = get_the_id()  ?>
            <li>
              <!-- <div class="thumbnail">
                <?php 
                  if ( has_post_thumbnail() ) {
                      the_post_thumbnail('thumbnail');
                  } 
                 ?>
              </div> -->
              <a href="<?php the_permalink()?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
                <h4><?php ucwords(the_title()) ?></h4>

              </a>
             <?php $little_excerpt = substr(the_excerpt(),0,5); ?>
             <?php echo $little_excerpt; ?>
            </li>
        <?php endwhile;?>
      <?php endif;?>  
      </ul>
      <a href="#">
        Lihat semua berita &raquo;
      </a>
    </div>
    <div class="col-sm-4">
      <h2>AGENDA</h2>
      <ul class="frontpage">
      <?php 
      // mulai filter halaman sesuai kategori untuk berita
      $category = 'agenda';
      query_posts( array ( 'category_name' => $category, 'posts_per_page' => 5) ); ?>
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php $id = get_the_id()  ?>
          <li>
            <!-- <div class="thumbnail">
              <?php 
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail('thumbnail');
                } 
               ?>
            </div> -->
            <a href="<?php the_permalink()?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
              <h4><?php ucwords(the_title()) ?></h4>
            </a>

            <p style="margin:0">
              <?php echo get_post_meta( $id, 'tanggal', true ) ?> <?php echo get_post_meta( $id, 'bulan', true ) ?> <?php echo get_post_meta( $id, 'tahun', true ) ?>
              <?php 
              if(get_post_meta( $id, 'waktu', true )){
                echo ' — '.get_post_meta($id,'waktu',true);
              }?>
            </p>
            <p>
              <?php 
              if(get_post_meta( $id, 'Tempat', true )){
                echo get_post_meta($id,'Tempat',true);
              }?>
            </p>
          </li>
        <?php endwhile;?>
      <?php endif;?>  
      </ul>
      <a href="#">
        Lihat semua agenda &raquo;
      </a>
    </div>
    <div class="col-sm-3">
      <h2>LAYANAN ONLINE</h2>
      <?php strtoupper(wp_nav_menu( array( 'theme_location' => 'layanan-menu' ) )); ?>
    </div>
  </div>
<!-- endcontainer -->
</div>

<?php //if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php //get_template_part( 'entry' ); ?>
<?php //comments_template(); ?>
<?php //endwhile; endif; ?>

<?php get_template_part( 'nav', 'below' ); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
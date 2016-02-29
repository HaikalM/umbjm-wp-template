<?php get_header(); ?>

<div class="container" id="content" class="frontpage">
  <div class="row">
    <div class="col-sm-5">
      <h2>Berita</h2>
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
              <a href="<?php the_permalink()?>">
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
    <div class="col-sm-5">
      <h2>Agenda</h2>
      <ul class="frontpage">
      <?php 
      // mulai filter halaman sesuai kategori untuk berita
      $category = 'agenda';
      query_posts( array ( 'category_name' => $category, 'posts_per_page' => 5) ); ?>
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php $id = get_the_id()  ?>

        <?php endwhile;?>
      <?php endif;?>  
      </ul>
    </div>
    <div class="col-sm-2">
      <h2>Layanan</h2>
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
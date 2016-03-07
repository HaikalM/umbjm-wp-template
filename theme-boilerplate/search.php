<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-sm-9">
      <section id="content" role="main">
        <?php if ( have_posts() ) : ?>
        <header class="header">
        <h1 class="entry-title"><?php printf( __( 'Hasil Pencarian: %s', 'blankslate' ), get_search_query() ); ?></h1>
        </header>
        <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'entry' ); ?>
        <?php endwhile; ?>
        <?php get_template_part( 'nav', 'below' ); ?>
        <?php else : ?>
        <article id="post-0" class="post no-results not-found">
        <header class="header">
        <h2 class="entry-title"><?php _e( 'Tidak ditemukan', 'blankslate' ); ?></h2>
        </header>
        <section class="entry-content">
        <p><?php _e( 'Maaf, yang anda cari tidak ditemuakan. Silahkan coba kata yang lain.', 'blankslate' ); ?></p>
        <?php get_search_form(); ?>
        </section>
        </article>
        <?php endif; ?>
      </section>
    </div>
    <div class="col-sm-3">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>


<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-sm-9">
      <section id="content">
        <header class="header">
        <h1 class="entry-title"><?php _e( 'Tag Archives: ', 'blankslate' ); ?><?php single_tag_title(); ?></h1>
        </header>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'entry' ); ?>
        <?php endwhile; endif; ?>
        <?php get_template_part( 'nav', 'below' ); ?>
      </section>
    </div>
    <div class="col-sm-3">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
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


<!-- tweet -->
<section id="tweet">
  <div class="container">
    <div class="row">
      <div class="col-sm-9">
        <div id="last_tweet">
          <!-- show tweet meta and button -->
          <div class="col-xs-12 col-sm-4" id="tweet_meta">
            <div class="row">
              <div class="col-sm-5">
                <div id="tweet_date">
                  proses...
                </div>
              </div>

              <div class="col-sm-7">
                <a id="badge" href="https://twitter.com/um_bjm" class="tweet-link btn btn-default" data-ua-action="@um_bjm timeline" data-ua-label="badge">
                  <svg xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" id="svg2" xml:space="preserve" height="148.12" width="182.26" version="1.1" viewBox="0 0 182.66667 150.66667" data-livestyle-extension="available">
                    <metadata id="metadata8"><rdf:RDF><cc:Work rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/></cc:Work></rdf:RDF></metadata>
                    <defs id="defs6"><clipPath id="clipPath20" clipPathUnits="userSpaceOnUse"><path id="path18" d="m0 10.012h1366.9v1110.9h-1366.9z"/></clipPath></defs>
                    <g id="g10" transform="matrix(1.3333 0 0 -1.3333 0 150.67)"><g id="g12" transform="scale(.1)"><g id="g14"><g id="g16" clip-path="url(#clipPath20)">
                    <path id="path22" d="m1366.9 989.39c-50.27-22.309-104.33-37.387-161.05-44.18 57.89 34.723 102.34 89.679 123.28 155.15-54.18-32.15-114.18-55.47-178.09-68.04-51.13 54.49-124.02 88.55-204.68 88.55-154.89 0-280.43-125.55-280.43-280.43 0-21.988 2.457-43.398 7.258-63.91-233.08 11.68-439.72 123.36-578.04 293.01-24.141-41.4-37.969-89.567-37.969-140.97 0-97.308 49.489-183.13 124.76-233.44-45.969 1.437-89.218 14.058-127.03 35.078-0.043-1.18-0.043-2.348-0.043-3.52 0-135.9 96.68-249.22 224.96-275-23.512-6.41-48.281-9.8-73.86-9.8-18.089 0-35.628 1.711-52.781 5 35.711-111.41 139.26-192.5 262-194.77-96.058-75.23-216.96-120.04-348.36-120.04-22.621 0-44.961 1.332-66.918 3.91 124.16-79.568 271.55-125.98 429.94-125.98 515.82 0 797.86 427.31 797.86 797.93 0 12.153-0.28 24.223-0.79 36.25 54.77 39.571 102.31 88.95 139.93 145.2" fill="#55ACEE"/></g></g></g>
                    </g>
                  </svg>
                   @um_bjm
                </a>
              </div>
            </div>
          </div>
          <!-- show tweet text -->
          <div class="col-xs-12 col-sm-8" id="tweet_text">
            proses...
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <ul id="social">
          <li>
            <a href="" id="social-facebook">
              <svg id="facebook" viewBox="0 0 512 512"><path d="M211.9 197.4h-36.7v59.9h36.7V433.1h70.5V256.5h49.2l5.2-59.1h-54.4c0 0 0-22.1 0-33.7 0-13.9 2.8-19.5 16.3-19.5 10.9 0 38.2 0 38.2 0V82.9c0 0-40.2 0-48.8 0 -52.5 0-76.1 23.1-76.1 67.3C211.9 188.8 211.9 197.4 211.9 197.4z"></path></svg>
            </a>
          </li>
          <li>
            <a href="#" id="social-twitter">
              <svg id="twitter" viewBox="0 0 512 512"><path d="M419.6 168.6c-11.7 5.2-24.2 8.7-37.4 10.2 13.4-8.1 23.8-20.8 28.6-36 -12.6 7.5-26.5 12.9-41.3 15.8 -11.9-12.6-28.8-20.6-47.5-20.6 -42 0-72.9 39.2-63.4 79.9 -54.1-2.7-102.1-28.6-134.2-68 -17 29.2-8.8 67.5 20.1 86.9 -10.7-0.3-20.7-3.3-29.5-8.1 -0.7 30.2 20.9 58.4 52.2 64.6 -9.2 2.5-19.2 3.1-29.4 1.1 8.3 25.9 32.3 44.7 60.8 45.2 -27.4 21.4-61.8 31-96.4 27 28.8 18.5 63 29.2 99.8 29.2 120.8 0 189.1-102.1 185-193.6C399.9 193.1 410.9 181.7 419.6 168.6z"></path></svg>
            </a>
          </li>
          <li>
            <a href="#" id="social-gplus">
              <svg id="gplus" viewBox="0 0 512 512"><path d="M179.7 237.6L179.7 284.2 256.7 284.2C253.6 304.2 233.4 342.9 179.7 342.9 133.4 342.9 95.6 304.4 95.6 257 95.6 209.6 133.4 171.1 179.7 171.1 206.1 171.1 223.7 182.4 233.8 192.1L270.6 156.6C247 134.4 216.4 121 179.7 121 104.7 121 44 181.8 44 257 44 332.2 104.7 393 179.7 393 258 393 310 337.8 310 260.1 310 251.2 309 244.4 307.9 237.6L179.7 237.6 179.7 237.6ZM468 236.7L429.3 236.7 429.3 198 390.7 198 390.7 236.7 352 236.7 352 275.3 390.7 275.3 390.7 314 429.3 314 429.3 275.3 468 275.3"></path></svg>
            </a>
          </li>
          <li>
            <a href="#" id="social-youtube">
              <svg id ="youtube" viewBox="0 0 32 32">
                <path d="m 16,7.2359122 c 0,0 -4.924504,-0.00237 -8.193509,0.2510546 -0.4564629,0.056236 -1.4384059,0.058062 -2.3279608,1.0498647 -0.6996663,0.7566329 -0.9357489,2.4877225 -0.9357489,2.4877225 0,0 -0.2282314,2.000403 -0.2282314,4.016874 l 0,1.894321 c 0,2.017931 0.2282314,4.039696 0.2282314,4.039696 0,0 0.2353523,1.709728 0.9357489,2.4649 0.8895549,0.991803 2.0590129,0.968979 2.5790154,1.072688 C 9.9264873,24.704382 16,24.764087 16,24.764087 c 0,0 4.900951,-5.47e-4 8.170686,-0.251054 0.456463,-0.05843 1.461959,-0.08088 2.350784,-1.072688 0.699666,-0.755172 0.912926,-2.4649 0.912926,-2.4649 0,0 0.251054,-2.022495 0.251054,-4.039696 l 0,-1.894321 c 0,-2.017201 -0.251054,-4.016874 -0.251054,-4.016874 0,0 -0.21253,-1.7310896 -0.912926,-2.4877225 C 25.632645,7.5450289 24.627149,7.5432031 24.170686,7.4869668 20.900951,7.2335386 16,7.2359122 16,7.2359122 z M 13.078637,11.617956 20.382044,16 l -7.303407,4.382044 0,-8.764088 z"/>
              </svg>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section id="video">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt vitae, voluptas! Fugiat quidem enim non corporis numquam, id quos, dignissimos temporibus tempore error, ducimus hic maxime deleniti recusandae, iusto reiciendis.
      </div>
    </div>
  </div>
</section>

<?php //if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php //get_template_part( 'entry' ); ?>
<?php //comments_template(); ?>
<?php //endwhile; endif; ?>

<?php get_template_part( 'nav', 'below' ); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
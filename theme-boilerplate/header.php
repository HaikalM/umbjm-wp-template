<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<?php 
wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<header id="header">
  <nav class="nav-secondary">
    <ul class="container">
      <li><a href="#">Calon Mahasiswa</a></li>
      <li><a href="#">Mahasiswa</a></li>
      <li><a href="#">Orang Tua</a></li>
      <li><a href="#">Alumni</a></li>
      <li><a href="#">Dosen/Staf</a></li>
      <li class="pull-right">
        <form id="searchform" method="get">
          <div>
           <input name="s" id="s" type="text" placeholder="pencarian">
           <button>
             <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
           </button>
          </div>
        </form>
      </li>
    </ul>
  </nav>
  <nav class="nav-primary">
    <div class="container">
      <div id="site-title">
        <h1>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home">
          <?php //echo esc_html( get_bloginfo( 'name' ) ); ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Universitas Muhammadiyah">
          </a>
        </h1>
      </div>
      <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
    </div>
  </nav>
</header>

<?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) : ?>
<section id="slide">
<ul>
  <?php 
  // mulai filter halaman sesuai kategori untuk slider
  $category = 'slider';
  query_posts( array ( 'category_name' => $category, 'posts_per_page' => 5) ); ?>
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <?php $id = get_the_id()  ?>
      
      <li>
          <?php 
            if ( has_post_thumbnail() ) {
                the_post_thumbnail('large');
            } 
           ?>
      </li>
    <?php endwhile;?>
  <?php endif;?>  
</ul>    
</section>
<section id="grettings" class="row">
  <div class="container">
    <div class="row">
      <div class="col-sm-6" class="grettings-main">
        <h2>Selamat Datang Di UM Banjarmasin</h2>
        <p>
          Universitas Muhammdiyah Banjarmasin memiliki misi untuk menghasilkan lulusan profesional, unggul dan islami yang memiliki integritas kepribadian dan moralitas yang islami dalam konteks kehidupan individual maupun sosial.
        </p>
      </div>
      <div class="col-sm-2 grettings-box" >
        <h2>Program Studi</h2>
        <a href="#" id="prodi">Lihat semua program studi</a>
      </div>
      <div class="col-sm-2 grettings-box" >
        <h2>Pendaftaran</h2>
        <a href="#" id="pmb">Info Penerimaan Mhs baru</a>
      </div>
      <div class="col-sm-2 grettings-box" >
        <h2>Peta Kampus</h2>
        <a href="#">Lihat peta kampus</a>
      </div>
    </div>
  </div>
</section>
<?php endif ?>
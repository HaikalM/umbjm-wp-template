<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<?php 
wp_head(); ?>
</head>
<body <?php body_class(); ?>>

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
  
</section>
<section id="gretting" class="row">
  <div class="container">
    <h2>Selamat Datang Di Universitas Muhammdiyah Banjarmasin</h2>
    <p>
      UMY memiliki misi untuk menghasilkan lulusan profesional, unggul dan islami yang memiliki integritas kepribadian dan moralitas yang islami dalam konteks kehidupan individual maupun sosial.
    </p>
  </div>
</section>
<?php endif ?>





<div class="container">
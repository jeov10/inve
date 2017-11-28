<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset= <?php bloginfo( 'charset' ); ?>">
  <title><?php wp_title(); ?></title>
  <!-- Definir viewport para dispositivos web móviles -->
  <meta name="viewport" content="width=device-width, minimum-scale=1">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>"/>
  <?php wp_enqueue_style( "topbaricons", "http://alchimia.mx/wp-content/themes/inverspot/style/font-awesome/css/font-awesome.min.css" ); ?>
  <?php wp_enqueue_script( "jquery", "https://code.jquery.com/jquery-3.2.1.min.js" ); ?>
  <?php wp_enqueue_script( "menuresponsive", "http://alchimia.mx/wp-content/themes/inverspot/menu.js" ); ?>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <section class="u-bg-complementary">
      <div class="container">
        <div class="top-bar">
          <div class="top-bar__p">
            <p class="u-fc-white">Atención al cliente | <spam class="u-fw-bold">01 (55) 8000 6555</spam> | <a class="link-item u-color-white" href="#">hola@inverspot.mx</a> | <a class="link-item u-color-white" href="#">Conoce nuestros casos de éxito</a> </p>
          </div>
          <div class="top-bar__icons">
            <a href="#"><i class="u-color-white fa fa-vimeo link-item" aria-hidden="true"></i></a>
            <a href="#"><i class="u-color-white fa fa-crosshairs link-item" aria-hidden="true"></i></a>
            <a href="#"><i class="u-color-white fa fa-youtube link-item" aria-hidden="true"></i></a>
            <a href="#"><i class="u-color-white fa fa-twitter link-item" aria-hidden="true"></i></a>
            <a href="#"><i class="u-color-white fa fa-facebook link-item" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </section>
    <header class="u-bg-primary header">
      <div class="header__container">
        <div class="nav-bar">
          <div class="brand">
            <div class="brand-image">
              <img class="brand__image--primary" alt="Inverspot" src="http://inverspot.apps-1and1.com/wp-content/uploads/2017/11/inverspotblanco.png">
            </div>
            <div class="brand__caption">
              <p class="u-color-white u-fs-super-small">Tu punto de inversión inmobiliario</p>
            </div>
          </div>
          <button type="button" class="nav-bar__collapsed u-bg-primary u-color-white" data-toggle="collapse" data-target="#navbar-1">
            <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
          </button>
        </div>
      </div>
      <div class="menu u-bg-primary">
        <div class="menu__container">
          <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </div>
      </div>
    </header>

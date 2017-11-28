<?php
/*
Template Name: Home
*/
?>
<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">


<section class="slider-main">
  <p class="h1 text-aling-center">a slider goes here </p>
</section>
<section class="container">
  <div class="box">
    <div class="box__description">
      <p class="h1 u-fw-bold u-color-accent">Proyectos para Participar</p>
    </div>
    <div class="box__description">
      <a href="#" class="link-item u-color-primary link-item__border-bottom"><p class="u-fw-bold h3">Ver todos</p></a>
    </div>
  </div>
  <div class="cards-container">
    <div class="card-item"></div>
  </div>
</section>
<section class="container">
  <div class="box">
    <div class="box__description">
      <p class="h1 u-fw-bold u-color-accent">¡Casos de Éxito!</p>
    </div>
    <div class="box__description">
      <a href="#" class="link-item u-color-primary link-item__border-bottom"><p class="h3 u-fw-bold">Ver todos</p></a>
    </div>
  </div>
  <div class="slider-cards">
  </div>
</section>
<section class="container">
  <div class="box">
    <div class="box__description">
      <p class="h1 p u-fw-bold u-color-accent">Últimos proyectos fondeados</p>
    </div>
    <div class="box__description">
      <a href="#" class="link-item u-color-primary link-item__border-bottom"><p class="h3 u-fw-bold">Ver todos</p></a>
    </div>
  </div>
    <div class="slider-main">
      <p class="h1 text-aling-center">a slider goes here </p>
    </div>
</section>
<section>
  <div class="box">
    <div class="box__description">
      <p class=" h1 u-fw-bold u-color-primary">Una cifra vale más que mil palabras</p>
    </div>
  </div>
  <div class="u-bg-light section__icon-box_size ">
    <div class="container">
      <div class="icon-box padding-bottom-1rem">
          <img class="icon-box__img-size" src="https://inverspot.mx/style/images/plugins/counter/money.png" alt="inverspot">
          <p class="h1 padding-bottom-1rem u-color-primary icon-box__text-number--size">180</p>
          <p class="u-color-primary padding-bottom-1rem">Millones de pesos recaudados</p>
      </div>
      <div class="icon-box padding-bottom-1rem">
          <img class="icon-box__img-size" src="https://inverspot.mx/style/images/plugins/counter/handshake.png" alt="inverspot">
          <p class="h1 padding-bottom-1rem u-color-primary icon-box__text-number--size">1600</p>
          <p class="u-color-primary padding-bottom-1rem">Participaciones vendidas</p>
      </div>
      <div class="icon-box padding-bottom-1rem">
          <img class="icon-box__img-size" src="https://inverspot.mx/style/images/plugins/counter/shield.png" alt="inverspot">
          <p class="h1 padding-bottom-1rem u-color-primary icon-box__text-number--size">560</p>
          <p class="u-color-primary padding-bottom-1rem">Inversionistas</p>
      </div>
    </div>
  </div>
</section>
<section class="u-bg-primary u-bt-accent-lg top-border form__container_border">
  <div class="container">
    <div class="form-inline">
      <p class="h2 u-color-white text-aling-center padding-bottom-1rem">Suscríbete para recibir más información con nuevos proyectos, noticias y mucho más</p>
      <div class="subscribe-form">
        <form action="" class="subscribe-form__items">
          <input type="text" placeholder="Correo electrónico" class="subscribe-form__items_mb text-input u-border-radius">
          <input type="text" placeholder="Teléfono (Opcional)" class="subscribe-form__items_mb text-input u-border-radius">
          <button class="u-bg-accent button-radius button-resposive">
            <a href="#" class="link-item"><p class="h3 u-fw-bold u-color-white">Suscribirse</p></a>
          </button>
        </form>
      </div>
    </div>
  </div>
</section>
<section class="container section-display">
  <div class="box__description">
    <p class="h2 u-color-primary u-fw-bold">Ellos hablan de nosotros</p>
  </div>
  <div class="slider-main">
    <p class="h1 text-aling-center">a slider goes here </p>
  </div>
  <div class="box__description">
    <button class="u-bg-primary button-radius section-display__button-size" type="button" name="button">
      <p class="h3"><a href="#" class="link-item u-color-white">Ver más</a></p>
    </button>
  </div>
</section>
<section class="container">
  <div class="box-spot">
    <div class="box-spot__container top-border target__top-border_primary u-bg-blue">
      <div class="box-spot__spot-info">
        <p class="h1 u-fw-bold u-color-white">Sellspot</p>
      </div>
      <div class="box-spot__spot-info u-color-white">
        <p class="h2">Vendemos proyectos inmobiliarios</p>
        <p class="h3">Únete a nuestro equipo y genera comiciones</p>
      </div>
      <div class="box-spot__spot-info">
        <p class="h3"><a href="#" class="link-item u-color-white">Ir al sitio</a></p>
      </div>
    </div>
    <div class="box-spot__container top-border target__top-border_blue u-bg-dark-gray">
      <div class="box-spot__spot-info">
        <p class=" h1 u-fw-bold u-color-white text-aling-right">Premiumspot</p>
      </div>
      <div class="box-spot__spot-info u-color-white">
        <p class="h2 text-aling-right">Buscas inversiones superiores a <span class="u-fw-bold">$1,000,000</span></p>
      </div>
      <div class="box-spot__spot-info">
        <p class="h3 text-aling-right"><a href="#" class="link-item u-color-white">Ir al sitio</a></p>
      </div>
    </div>
  </div>
</section>
</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>

<?php
/*
Template Name: Contacto
*/
 ?>

<?php get_header() ?>

<?php get_template_part('templates_part/banner', 'secciones'); ?>

<section ="Contacto">
<div class="container">
  <div class="row">
    <div class="col-12 col-md-6">
      <section id="datos-contacto">
              <?php the_post(); ?>
              <?php the_content(); ?>
      </section>
    </div>
    <div class="col-12 col-md-6">
      <?php get_template_part('templates_part/formulario', 'contacto'); ?>
    </div>
  </div>
</div>
</section>

<section id="map">

</section>




<?php get_footer() ?>

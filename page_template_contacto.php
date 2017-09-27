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
      <section id="formulario-contacto">
        <form>
          <div class="form-group">
            <label for="nombre">Correo</label>
            <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre">
          </div>
          <div class="form-group">
            <label for="correo">Correo</label>
            <input type="email" class="form-control" id="correo" placeholder="nombre@hola.com">
          </div>
          <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" id="telefono" placeholder="+56 9 1234 5678">
          </div>
          <div class="form-group">
            <label for="asunto">Motivo de contacto</label>
            <input type="text" class="form-control" id="asunto" placeholder="¿Que quieres Preguntarnos?">
          </div>
          <div class="form-group">
            <label for="mensaje">Mensaje</label>
            <textarea class="form-control" id="mensaje" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </section>
    </div>
  </div>
</div>
</section>

<section id="google-maps">
  aca va el mapá de google
</section>


<?php get_footer() ?>

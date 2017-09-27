<?php get_header() ?>

<section id="banner-principal">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-1.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h3>Slider 1</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-2.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h3>Slider 2</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-1.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h3>Slider 3</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>

<section id="publicidad-top">
  <div class="container">
    <div class="row w-100">
      <div class="col-12 col-md-6">
        <?php if ( is_active_sidebar( 'publicidad_left_widget' ) ) : ?>
      		<?php dynamic_sidebar( 'publicidad_left_widget' ); ?>
      	<?php endif; ?>
      </div>
      <div class="col-12 col-md-6">
        <?php if ( is_active_sidebar( 'publicidad_right_widget' ) ) : ?>
      		<?php dynamic_sidebar( 'publicidad_right_widget' ); ?>
      	<?php endif; ?>
      </div>
    </div>
  </div>
</section>

<section id="productos-destacados">
  <div class="container">
    <h2 class="text-center">Productos Destacados del Més</h2>
    <div class="row">

        <?php
          $args = array(
            'post_type' => 'destacados',
            'posts_per_page' => '3',
            'orderby' => 'title',
            'order' => 'ASC',
            'category_name' => 'productos-destacados'
          );
          $destacados = new WP_Query($args);
          while($destacados->have_posts()): $destacados->the_post();
        ?>

        <div class="col-12 col-md-4">
            <div class="producto-destacado-item">
              <figure>
                <?php the_post_thumbnail('productos_destacados_img'); ?>
              </figure>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              <h4><?php the_field('precio_producto'); ?></h4>
              <a href="<?php the_field('enlace_producto') ?>">ver producto</a>
            </div>

        </div>

        <?php endwhile; wp_reset_postdata(); ?>

      </div>
    </div>
</section>

<section id="parallax">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12">
        <?php if ( is_active_sidebar( 'parallax_home_widget' ) ) : ?>
          <?php dynamic_sidebar( 'parallax_home_widget' ); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>


</section>

<section id="categorias-destacadas">
  <div class="container">
    <h2 class="text-center">Categorias Destacadas</h2>
    <div class="row">

        <?php
          $args = array(
            'post_type' => 'destacados',
            'posts_per_page' => '4',
            'orderby' => 'title',
            'order' => 'ASC',
            'category_name' => 'categorias-destacadas'
          );
          $categorias_destacada = new WP_Query($args);
          while($categorias_destacada->have_posts()): $categorias_destacada->the_post();
        ?>

        <div class="col-12 col-md-3">
            <div class="categorias-destacadas-item">
              <figure class="thumbnail">
                <?php the_post_thumbnail('categorias_destacadas_img'); ?>
              </figure>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>

        </div>

        <?php endwhile; wp_reset_postdata(); ?>

      </div>
    </div>

  </div>
</section>

<section id="productos-especiales">
  <div class="container">
    <h2 class="text-center">Productos Especiales<br><span>Edición Limitada</span></h2>
    <div class="row">

        <?php
          $args = array(
            'post_type' => 'destacados',
            'posts_per_page' => '8',
            'orderby' => 'title',
            'order' => 'ASC',
            'category_name' => 'productos-especiales'
          );
          $productos_especiales = new WP_Query($args);
          while($productos_especiales->have_posts()): $productos_especiales->the_post();
        ?>

        <div class="col-12 col-md-3">
            <div class="productos-especiales-item">
              <figure>
                <?php the_post_thumbnail('productos_especiales_img'); ?>
              </figure>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              <h4><?php the_field('precio_producto'); ?></h4>
              <a href="<?php the_field('enlace_producto') ?>">ver producto</a>
            </div>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
  </div>
</section>

<section id="envio-cupon-garantia">
  <div class="container">
        <?php if ( is_active_sidebar( 'bottom_widget' ) ) : ?>
      		<?php dynamic_sidebar( 'bottom_widget' ); ?>
      	<?php endif; ?>
  </div>
</section>

<section id="ultimas-entradas-home">
  <div class="container">
    <h2 class="text-center">Últimas Entradas del Blog</h2>
    <div class="row">
      <?php
        $args = array(
          'posts_per_page' => '3'
        );
        $entradas = new WP_Query($args);
        while($entradas->have_posts()): $entradas->the_post(); ?>
        <div class="col-12 col-md-4">
          <div class="entradas">
            <figure>
              <?php the_post_thumbnail('entradas_blog_img') ?>
            </figure>
            <?php the_time(get_option('date_format')); ?>
            <h3><?php the_title(); ?></h3>
            <?php the_excerpt(); ?>
          </div>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
  </div>
</section>


<?php get_footer() ?>

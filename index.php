<?php get_header() ?>

<?php get_template_part('templates_part/banner', 'secciones'); ?>

<main>
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-8">
        <div class="row">
          <?php
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 6,
              'orderby' => 'date',
              'oder' => 'ASC',
            );
            $blogposts = new WP_Query($args);
          while($blogposts->have_posts()): $blogposts->the_post(); ?>
          <div class="col-12 col-md-6">
              <figure>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('entradas_blog_img'); ?></a>
              </figure>
              <?php echo the_time('d'); ?><?php echo the_time('M'); ?>
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h3>
              <?php the_excerpt(); ?>
              <a href="<?php the_permalink(); ?>">Leer más</a>
          </div>
        <?php endwhile; wp_reset_postdata();?>

        </div>
      </div>

      <div class="col-12 col-md-4">
        <?php get_sidebar('blog') ?>
      </div>
    </div>


  </div>
</main>



<?php get_footer() ?>

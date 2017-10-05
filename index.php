<?php get_header() ?>

<?php get_template_part('templates_part/banner', 'secciones'); ?>

<main>
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-8">
        <div class="row">
          <?php while(have_posts()): the_post(); ?>
          <div class="col-12 col-md-6">
            <div class="entradas">
              <figure>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('entradas_blog_img') ?></a>
                <figcaption><div class="fecha-post"><p><?php echo the_time('d'); ?></p><span>|</span> <p><?php echo the_time('M'); ?></p></div></figcaption>
              </figure>

              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              <?php the_excerpt(); ?>
            </div>
          </div>
          <?php endwhile;?>
        </div>
        <div class="paginacion">
          <?php echo paginate_links(); ?>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="categorias-blog">
        <h3>Categorias</h3>
        <?php // get_sidebar('blog')
          $categories = get_categories( array(
              'orderby' => 'name',
              'order'   => 'ASC',
              'hide_empty'=> 1,
              'exclude' => array(22,19,23)
          ) );
          foreach( $categories as $category ):  ?>

            <a href="<?php echo esc_url( get_category_link( $category->term_id ) ) ?>"><?php echo  $category->name ?> (<?php echo   $category->count ?>)</a>

        <?php endforeach; // end for each?>
        </div>
        <div class="sidebar-blog">
          <?php get_sidebar('Blog') ?>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer() ?>

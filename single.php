<?php get_header() ?>

<?php get_template_part('templates_part/banner', 'secciones'); ?>

<section id="detalle">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-8">
				<div class="detalle-post">
					<?php the_post(); ?>
					<figure>
						<?php the_post_thumbnail('single_blog_img') ?>
						<figcaption><div class="fecha-post"><p><?php echo the_time('d'); ?></p><span>|</span> <p><?php echo the_time('M'); ?></p></div></figcaption>
					</figure>
					<h3><?php the_title() ?></h3>
					<?php the_content() ?>
					<?php comment_form(); ?>
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
</section>



<?php get_footer() ?>

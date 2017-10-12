<?php
/*
*Template Name: Nosotros
*/
 ?>

<?php get_header() ?>

<?php get_template_part('templates_part/banner', 'secciones'); ?>

<main id="nosotros">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6">
        <div class="nosotros-imagen">
          <?php the_post_thumbnail('nosotros_img') ?>
        </div>
			</div>
			<div class="col-12 col-md-6">
        <div class="nosotros-texto">
          <h2><?php the_title(); ?></h2>
  				<?php the_post(); ?>
  				<?php the_content(); ?>
        </div>
			</div>
		</div>
	</div>
</main>

<section id="caracteristicas">
  <?php $caracteristicas = new WP_Query("page_id=88"); while($caracteristicas->have_posts()) : $caracteristicas->the_post();?>
    <?php the_content(); ?>
  <?php endwhile; ?>

</section>

<section id="que-hacemos">
	<div class="container">
		<div class="row">
				<?php $que_hacemos = new WP_Query("page_id=90"); while($que_hacemos->have_posts()) : $que_hacemos->the_post();?>
					<div class="col-12 col-md-6">
            <div class="que-hacemos-texto">
              <h2><?php the_title(); ?></h2>
    					<?php the_content(); ?>
            </div>
				</div>
				<div class="col-12 col-md-6">
          <div class="que-hacemos-imagen">
            <?php the_post_thumbnail('nosotros_img') ?>
          </div>

				</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>

</section>

<?php get_footer() ?>

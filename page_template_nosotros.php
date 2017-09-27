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
				<?php the_post_thumbnail('nosotros_img') ?>
			</div>
			<div class="col-12 col-md-6">
				<h2><?php the_title(); ?></h2>
				<?php the_post(); ?>
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</main>

<section id="caracteristicas">
	<?php $recent = new WP_Query("page_id=88"); while($recent->have_posts()) : $recent->the_post();?>
		<?php the_content(); ?>
	<?php endwhile; ?>
</section>

<section id="que-hacemos">
	<div class="container">
		<div class="row">
				<?php $recent = new WP_Query("page_id=90"); while($recent->have_posts()) : $recent->the_post();?>
					<div class="col-12 col-md-6">
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				</div>
				<div class="col-12 col-md-6">
					<?php the_post_thumbnail('nosotros_img') ?>
				</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>

</section>

<?php get_footer() ?>

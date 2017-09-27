<?php get_header() ?>

<?php get_template_part('templates_part/banner', 'secciones'); ?>

<section id="pages">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-12">
				<?php the_post() ?>
				<?php the_post_thumbnail() ?>
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>


<?php get_footer() ?>

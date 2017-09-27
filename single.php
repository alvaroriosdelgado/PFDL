<?php get_header() ?>

<?php get_template_part('templates_part/banner', 'secciones'); ?>

<section id="detalle">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-8">
						<?php the_post(); ?>
						<figure>
							<?php the_post_thumbnail('single_blog_img') ?>
						</figure>
						<time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time>
						<h3><?php the_title() ?></h3>
						<?php the_content() ?>
						<?php comment_form(); ?>
			</div>
			<div class="col-12 col-md-4">
				<?php get_sidebar('Blog') ?>
			</div>
		</div>
	</div>
</section>



<?php get_footer() ?>

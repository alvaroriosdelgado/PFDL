<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>

	
</head>
<body>
<section id="top">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-12">
				<?php if ( is_active_sidebar( 'publicidad_top_widget' ) ) : ?>
      		<?php dynamic_sidebar( 'publicidad_top_widget' ); ?>
      	<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<header id="menu-principal">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">

			<div class="row w-100 ">
				<div class="col-12 col-md-l2 logo">
					<div class="contenedor-logo">
						<a class="navbar-brand" href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/amiel-logo.jpg"></a>
					</div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
				</div>
				<div class="clearfix">

				</div>
				<div class="col-12 col-md-12">
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
								<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header_menu' ) ); ?>
							<?php } ?>
					</div>
				</div>
			</div>

		</nav>
	</div>

	</div>
</header>

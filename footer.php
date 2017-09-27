
<footer>
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-3">
					<h3>Información</h3>
					<?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
						<?php wp_nav_menu( array(
							'theme_location' => 'footer-menu',
							'container_class' => 'footer_menu' ) );
						?>
					<?php } ?>
			</div>
			<div class="col-12 col-md-3">
					<h3>Redes Sociales</h3>
					<?php if ( has_nav_menu( 'redes-menu' ) ) { ?>
						<?php wp_nav_menu( array(
							'theme_location' => 'redes-menu',
							'container_class' => 'redes_menu' ) );
						?>
					<?php } ?>
			</div>
			<div class="col-12 col-md-6">
					<div class="row">
						<?php if ( is_active_sidebar( 'pie_de_pagina_widget' ) ) : ?>
								<?php dynamic_sidebar( 'pie_de_pagina_widget' ); ?>
						<?php endif; ?>
					</div>
				</div>
		</div>
	</div>
	<div class="copy">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6">
					<p>Todos los derechos reservador ©Amiel 2017</p>
				</div>
				<div class="col-12 col-md-6" >
					<p class="by">Amiel Theme by Alvaro Rios</p>
				</div>
			</div>

		</div>

	</div>
</footer>



<?php wp_footer() ?>
</body>
</html>

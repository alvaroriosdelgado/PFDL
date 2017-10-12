<?php

	// Agrega los tamaños personalizados en la lista de tamaños disponibles en el administrador
	function dl_image_sizes($sizes) {
		$addsizes = array(
			"slideshow" => __( "Tamaño del slideshow"),
			"custom_logo" => __( "Tamaño personalizado del logo"),
			"productos_destacados_img" => __( "Tamaño personalizado de los productos destacados"),
			"categorias_destacadas_img" => __( "Tamaño personalizado de las categorias destacadas"),
			"productos_especiales_img" => __( "Tamaño personalizado para los productos de edicion limitada"),
			"entradas_blog_img" => __( "Tamaño personalizado para las entradas recientes del blog"),
			"single_blog_img" => __( "Tamaño personalizado para el detalle de las entradas"),
			"nosotros_img" => __( "Tamaño personalizado para las imagenes seccion nosotros"),
			"productos-woocommerce_img" => __( "Tamaño personalizado para las imagenes de woocommerce en listado")
		);

		return array_merge($sizes, $addsizes);
	}

	// Agrega tamaños de imágenes personalizadas en posts
	if ( function_exists( 'add_theme_support' ) ) {
		add_image_size( 'slideshow', 800, 600, true);		// Personalización del tamaño del slideshow
		add_image_size( 'custom_logo', 800, 600, true);		// Personalización del tamaño del logo
		add_image_size( 'productos_destacados_img', 350, 350, true);		// Personalización de los productos destacados
		add_image_size( 'categorias_destacadas_img', 248, 248, true);		// Personalización de los productos destacados
		add_image_size( 'productos_especiales_img', 248, 248, true);		// Personalización de los productos destacados
		add_image_size( 'entradas_blog_img', 342, 260, true);		// Personalización de las entradas del blog
		add_image_size( 'single_blog_img', 730, 435, true);		// Personalización de las entradas del blog single
		add_image_size( 'nosotros_img', 528, 408, true);		// Personalización sección nosotros
		add_image_size( 'productos_woocommerce_img', 233, 233, true);		// Personalización sección nosotros
		add_filter('image_size_names_choose', 'dl_image_sizes');
	}

?>

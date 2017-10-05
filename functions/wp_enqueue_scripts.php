<?php

	function dl_enqueue_scripts() {

		$theme_data = wp_get_theme();
		wp_register_script('mijs',get_parent_theme_file_uri('/assets/js/mijs.js'), array(), '', true);
		wp_register_script('fluidbox', get_parent_theme_file_uri('/assets/js/jquery.fluidbox.min.js'), array(), '4.0.0', true);
		wp_register_script('maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBrVVQKzLgkIg1FQd8AwmREZxLySG0QmjM&callback=initMap', array(), '', true);
		wp_register_script('mainJS', get_parent_theme_file_uri('/assets/js/functions.js'), array('jQuery_migrate'), $theme_data->get( 'Version' ), true);

		/* Enqueue Scripts */
		wp_enqueue_script('mainJS');
		wp_enqueue_script('jquery');
		wp_enqueue_script('popperjs', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js");
		wp_enqueue_script('bootstrapjs', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js");
		wp_enqueue_script('mijs');
		wp_enqueue_script('fluidbox');
		wp_enqueue_script('maps');


	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts' );

	// Agregar Async y Defer Google Maps API

	function agregar_async_defer($tag, $handle){
		if('maps' !== $handle)
			return $tag;
		return str_replace('src','async="async" defer="defer" src', $tag);
	}

	add_filter('script_loader_tag', 'agregar_async_defer', 10, 2);
?>

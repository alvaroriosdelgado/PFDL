<?php

	function dl_enqueue_scripts() {
		$theme_data = wp_get_theme();

		wp_register_script('mainJS', get_parent_theme_file_uri('/assets/js/functions.js'), array('jQuery_migrate'), $theme_data->get( 'Version' ), true);

		/* Enqueue Scripts */
		wp_enqueue_script('jquery');
		wp_enqueue_script('popperjs', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js");
		wp_enqueue_script('bootstrapjs', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js");
		wp_enqueue_script('mainJS');
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts' );
?>

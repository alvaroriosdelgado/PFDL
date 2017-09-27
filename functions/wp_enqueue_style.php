<?php

	function dl_enqueue_style() {
		$theme_data = wp_get_theme();

		/* Register Scripts */
		wp_register_style('reset', get_parent_theme_file_uri('/assets/css/reset.css'), null, $theme_data->get( 'Version' ), 'screen');
		wp_register_style('Raleway', 'https://fonts.googleapis.com/css?family=Raleway:400,400i,700,700i,900,900i',array(), '1.0.0');
		wp_register_style('mainStyle', get_parent_theme_file_uri('/assets/css/style.css'), array('reset'), $theme_data->get( 'Version' ), 'screen');
		wp_register_style('fontawesome', get_parent_theme_file_uri('/assets/css/font-awesome.min.css'), array('reset'), '4.7.0', 'screen');
		wp_register_style('misEstilos', get_parent_theme_file_uri('/assets/css/misEstilos.css'), null, $theme_data->get( 'Version' ), 'screen');
		/* Enqueue Scripts */


		wp_enqueue_style('mainStyle');
		wp_enqueue_style('fontawesome');
		wp_enqueue_style('bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css");
		wp_enqueue_style('misEstilos');
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
?>

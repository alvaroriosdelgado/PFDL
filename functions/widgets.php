<?php


	function dl_sidebar_widget_init() {
		register_sidebar( array(
			'name'          => 'Sidebar Woocommerce',
			'id'            => 'sidebar_widget',
			'before_widget' => '<div class="sidebar-woocommerce">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		) );
	}

	function dl_sidebar_left_widget_init() {
		register_sidebar( array(
			'name'          => 'Sidebar Left',
			'id'            => 'sidebar_left_widget',
			'before_widget' => '<div class="sidebar-left">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		) );
	}

	function dl_sidebar_right_widget_init() {
		register_sidebar( array(
			'name'          => 'Sidebar Right',
			'id'            => 'sidebar_right_widget',
			'before_widget' => '<div class="sidebar-right">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		) );
	}


	function dl_top_widget_init() {
		register_sidebar( array(
			'name'          => 'Top',
			'id'            => 'top_widget',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		) );
	}

	function dl_bottom_widget_init() {
		register_sidebar( array(
			'name'          => 'Bottom',
			'id'            => 'bottom_widget',
			'before_widget' => '<div class="bottom">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		) );
	}

	function dl_publicidad_left_widget_init() {
		register_sidebar( array(
			'name'          => 'Publicidad Home Left',
			'id'            => 'publicidad_left_widget',
			'before_widget' => '<div class="publicidad-left">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		) );
	}

	function dl_publicidad_right_widget_init() {
		register_sidebar( array(
			'name'          => 'Publicidad Home Right',
			'id'            => 'publicidad_right_widget',
			'before_widget' => '<div class="publicidad-right">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		) );
	}

	function dl_parallax_home_widget_init() {
		register_sidebar( array(
			'name'          => 'Parallax Home',
			'id'            => 'parallax_home_widget',
			'before_widget' => '<div class="parallax-home">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		) );
	}

	function dl_parallax_nosotros_widget_init() {
		register_sidebar( array(
			'name'          => 'Parallax Nosotros',
			'id'            => 'parallax_nosotros_widget',
			'before_widget' => '<div class="parallax-nosotros">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		) );
	}

	function dl_pie_de_pagina_widget_init() {
		register_sidebar( array(
			'name'          => 'Pie de pagina',
			'id'            => 'pie_de_pagina_widget',
			'before_widget' => '<div class="col-12 col-md-6 pie-item">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		) );
	}


	add_action( 'widgets_init', 'dl_sidebar_widget_init' );
	add_action( 'widgets_init', 'dl_sidebar_left_widget_init' );
	add_action( 'widgets_init', 'dl_sidebar_right_widget_init' );
	add_action( 'widgets_init', 'dl_top_widget_init' );
	add_action( 'widgets_init', 'dl_bottom_widget_init' );
	add_action( 'widgets_init', 'dl_publicidad_left_widget_init' );
	add_action( 'widgets_init', 'dl_publicidad_right_widget_init' );
	add_action( 'widgets_init', 'dl_parallax_home_widget_init' );
	add_action( 'widgets_init', 'dl_parallax_nosotros_widget_init' );
	add_action( 'widgets_init', 'dl_pie_de_pagina_widget_init' );
?>

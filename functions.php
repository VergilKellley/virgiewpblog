<?php
	// Register Nav Walker class_alias
	//require_once('wp_bootstrap_navwalker.php');

	// Theme Support
	//function wpb_theme_setup(){
		// Nav Menus
		//register_nav_menus(array(
			//'primary' => __('Primary Menu')
		//));
	//}

	add_action('after_setup_theme', 'wpb_theme_setup');

	// Theme Support (photo)
	function wpb_theme_setup(){
		add_theme_support('post-thumbnails');

		//Post Formats
		add_theme_support('post-formats', array('aside', 'gallery'));
	}

	//github
	// Register Custom Navigation Walker
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

	register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );

	// Excerpt Length Control
	function set_excerpt_length(){
		return 35;
	}

	add_filter('excerpt_length', 'set_excerpt_length');

	function wpb_init_widgets($id){
		register_sidebar(array(
			'name' 	=> 'Sidebar',
			'id' 	=> 'sidebar',
			'before_widget'	=>	'<div class="sidebar-module">',
			'after_widget'	=>	'</div>',
			'before_title'	=>	'<h4>',
			'after_title'	=>	'</h4>',
		));

		register_sidebar(array(
			'name' 	=> 'Box1',
			'id' 	=> 'box1',
			'before_widget'	=>	'<div class="box">',
			'after_widget'	=>	'</div>',
			'before_title'	=>	'<h3>',
			'after_title'	=>	'</h3>',
		));

		register_sidebar(array(
			'name' 	=> 'Box2',
			'id' 	=> 'box2',
			'before_widget'	=>	'<div class="box">',
			'after_widget'	=>	'</div>',
			'before_title'	=>	'<h3>',
			'after_title'	=>	'</h3>',
		));

		register_sidebar(array(
			'name' 	=> 'Box3',
			'id' 	=> 'box3',
			'before_widget'	=>	'<div class="box">',
			'after_widget'	=>	'</div>',
			'before_title'	=>	'<h3>',
			'after_title'	=>	'</h3>',
		));
	}

	add_action('widgets_init', 'wpb_init_widgets');

	// Customizer File
	require get_template_directory(). '/inc/customizer.php';
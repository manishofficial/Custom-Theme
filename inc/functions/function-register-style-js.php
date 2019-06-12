<?php
	// INCLUDE STYLE SCRIPTS
	function styleScripts(){
		// bootstrap
		wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), false, 'all');
		wp_enqueue_style('bootstrap');
		// google fonts
		wp_enqueue_style( 'google_fonts', get_template_directory_uri().'/assets/css/google_fonts.css', array(), false, 'all');
		wp_enqueue_style('google_fonts');
		// font awesome
		wp_enqueue_style( 'font_awesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), false, 'all');
		wp_enqueue_style('font_awesome');
		// CSS
		wp_enqueue_style( 'mainStyle', get_template_directory_uri().'/assets/css/mainStyle.css', array(), false, 'all');
		wp_enqueue_style('mainStyle');

	}
	add_action('wp_enqueue_scripts','styleScripts');

	// INCLUDE JS SCRIPTS
	function loadjs(){
		// bootstrap scripts
		wp_register_script( 'slim_min_js', get_template_directory_uri().'/assets/js/jquery-3.3.1.slim.min.js', '', 1, false);
		wp_enqueue_script('slim_min_js');

		wp_register_script( 'popper_min_js', get_template_directory_uri().'/assets/js/popper.min.js', '', 1, false);
		wp_enqueue_script('popper_min_js');

		wp_register_script( 'bootstrap_min_js', get_template_directory_uri().'/assets/js/bootstrap.min.js', '', 1, false);
		wp_enqueue_script('bootstrap_min_js');

		wp_register_script( 'main_js', get_template_directory_uri().'/assets/js/mainjs.js', '', 1, false);
		wp_enqueue_script('main_js');
	}
	add_action('wp_enqueue_scripts','loadjs');






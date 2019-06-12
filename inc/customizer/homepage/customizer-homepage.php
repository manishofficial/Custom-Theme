<?php
function homepage_customization_register( $wp_customize ) {

	/* HomePage Panel */
	$wp_customize->add_panel( 'homepage_setting_pannel',
	   array(
	      'title' => __( 'Theme Home Page' ),
	      'description' => esc_html__( 'Adjust your Homepage sections.' ),
	      // 'priority' => 160, // Not typically needed. Default is 160
	   )
	);

// Top Section
	$wp_customize->add_section( 'homepage_main_section',array(
		'title' => 'Top Section',
		'panel' => 'homepage_setting_pannel', 
	));

	// show section yes or no
	$wp_customize->add_setting( 'homepage_main_setting',array(
		'default'	=>	'Grid',
	) );
	$wp_customize->add_control(new WP_Customize_control($wp_customize,'homepage_main_setting',
		array(
			'label'=>'What TO Display This Section?',
			'section' => 'homepage_main_section',
			'settings' => 'homepage_main_setting',
			'type'	=> 'select',
			'choices'=>	array('grid'=>'Grid', 'slider'=>'Full Slider', 'thumbnail_slider'=>'Thumbnail Slider'),
		) 
	));

// Middle Posts section
	$wp_customize->add_section( 'homepage_posts_section',array(
		'title' => 'Posts Setting',
		'panel' => 'homepage_setting_pannel', 
	));

	//POSTS SECTION
	$wp_customize->add_setting( 'homepage_posts_setting',array(
		'default' => 'Latest stories',
		'transport' => 'refresh', // Optional. 'refresh' or 'postMessage'. Default: 'refresh'
	    'type' => 'theme_mod', // Optional. 'theme_mod' or 'option'. Default: 'theme_mod'
	    'capability' => 'edit_theme_options',
	) );
	$wp_customize->add_control(new WP_Customize_control($wp_customize,'homepage_posts_setting',
		array(
			'label'		=> 'Post Label',
			'section'	=> 'homepage_posts_section',
			'settings' 	=> 'homepage_posts_setting',
			'type'		=> 'text'
		) 
	));

	// Set POST limit
	$wp_customize->add_setting( 'homepage_posts_limit_setting',array(
		'default' => '9',
		'transport' => 'refresh', // Optional. 'refresh' or 'postMessage'. Default: 'refresh'
	    'type' => 'theme_mod', // Optional. 'theme_mod' or 'option'. Default: 'theme_mod'
	    'capability' => 'edit_theme_options',
	) );
	$wp_customize->add_control(new WP_Customize_control($wp_customize,'homepage_posts_limit_setting',
		array(
			'label'		=> 'Show Posts Limit',
			'section'	=> 'homepage_posts_section',
			'settings' 	=> 'homepage_posts_limit_setting',
			'type'		=> 'number'
		) 
	));

	// POST Text Limit
	$wp_customize->add_setting( 'homepage_posts_text_limit_setting',array(
		'default' => '20',
		'transport' => 'refresh', // Optional. 'refresh' or 'postMessage'. Default: 'refresh'
	    'type' => 'theme_mod', // Optional. 'theme_mod' or 'option'. Default: 'theme_mod'
	    'capability' => 'edit_theme_options',
	) );
	$wp_customize->add_control(new WP_Customize_control($wp_customize,'homepage_posts_text_limit_setting',
		array(
			'label'		=> 'Show Posts text Limit',
			'section'	=> 'homepage_posts_section',
			'settings' 	=> 'homepage_posts_text_limit_setting',
			'type'		=> 'number'
		) 
	));

	//POST Read more text
	$wp_customize->add_setting( 'homepage_posts_readmore_setting',array(
		'default' => 'Read More...',
		'transport' => 'refresh', // Optional. 'refresh' or 'postMessage'. Default: 'refresh'
	    'type' => 'theme_mod', // Optional. 'theme_mod' or 'option'. Default: 'theme_mod'
	    'capability' => 'edit_theme_options',
	) );
	$wp_customize->add_control(new WP_Customize_control($wp_customize,'homepage_posts_readmore_setting',
		array(
			'label'		=> 'Read More Text',
			'section'	=> 'homepage_posts_section',
			'settings' 	=> 'homepage_posts_readmore_setting',
			'type'		=> 'text'
		) 
	));

// Bottom POST's Section
	$wp_customize->add_section( 'homepage_bottom_section',array(
		'title' => 'Bottom Posts Setting',
		'panel' => 'homepage_setting_pannel',
	));

	// Show Or Hide This Section
	$wp_customize->add_setting( 'homepage_bottom_setting',array(
		'default'	=>	'yes',
	) );
	$wp_customize->add_control(new WP_Customize_control($wp_customize,'homepage_bottom_setting',
		array(
			'label'=>'What TO Display This Section?',
			'section' => 'homepage_bottom_section',
			'settings' => 'homepage_bottom_setting',
			'type'	=> 'select',
			'choices'=>	array('yes'=>'Yes', 'no'=>'No'),
		) 
	));

	//POSTS SECTION
	$wp_customize->add_setting( 'homepage_bottom_posts_setting',array(
		'default' => 'Popular Posts',
		'transport' => 'refresh',
	    'type' => 'theme_mod',
	    'capability' => 'edit_theme_options',
	) );
	$wp_customize->add_control(new WP_Customize_control($wp_customize,'homepage_bottom_posts_setting',
		array(
			'label'		=> 'Post Label',
			'section'	=> 'homepage_bottom_section',
			'settings' 	=> 'homepage_bottom_posts_setting',
			'type'		=> 'text'
		) 
	));
}	
add_action( 'customize_register', 'homepage_customization_register' );


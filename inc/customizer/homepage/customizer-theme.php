<?php

function JS_theme_customization_register( $wp_customize ) {

	/* Theme Change */
	$wp_customize->add_section( 'theme_setting',array(
		'title' => 'Theme Setting',
		// 'panel' => 'header_setting_pannel',
	) );

	/* Theme Color Panel */
	$wp_customize->add_setting( 'theme_color_setting',array(
		'default' => '#fff',
		'transport' => 'refresh',
		'type' => 'theme_mod', // Optional. 'theme_mod' or 'option'. Default: 'theme_mod'
	    'capability' => 'edit_theme_options',
	) );
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'theme_color_setting',
		array(
			'label'=> __('Theme Color'),
			'section' => 'theme_setting',
			'settings' => 'theme_color_setting',
		) 
	));
	/* Theme Text Color Panel */
	$wp_customize->add_setting( 'theme_text_color_setting',array(
		'default' => '#fff',
		'transport' => 'refresh',
		'type' => 'theme_mod', // Optional. 'theme_mod' or 'option'. Default: 'theme_mod'
	    'capability' => 'edit_theme_options',
	) );
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'theme_text_color_setting',
		array(
			'label'=> __('Theme Color'),
			'section' => 'theme_setting',
			'settings' => 'theme_text_color_setting',
		) 
	));


}
add_action( 'customize_register', 'JS_theme_customization_register' );

function theme_style(){?>
	<style type="text/css">
		body{
			background-color: <?php echo get_theme_mod('theme_color_setting'); ?>;
			/*color: <?php echo get_theme_mod('theme_text_color_setting'); ?>;*/
		}
	</style>
<?php
}
add_action( 'wp_head','theme_style' );
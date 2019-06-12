<?php
function footer_customization_register( $wp_customize ) {
	/* HomePage Section */
	$wp_customize->add_section( 'footer_section',array(
		'title' => 'Footer',
		// 'panel' => 'header_setting_pannel',
	) );

	/* Footer Color Panel */
	$wp_customize->add_setting( 'footer_color_setting',array(
		'default' => '#343a40',
		'transport' => 'refresh',
		'type' => 'theme_mod', // Optional. 'theme_mod' or 'option'. Default: 'theme_mod'
	    'capability' => 'edit_theme_options',
	) );
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'footer_color_setting',
		array(
			'label'=> __('Background Color'),
			'section' => 'footer_section',
			'settings' => 'footer_color_setting',
		) 
	));

	// Footer Text
	$wp_customize->add_setting( 'footer_text_setting',array(
		'default' => 'Zestgeeks Solutions',
		'transport' => 'refresh', // Optional. 'refresh' or 'postMessage'. Default: 'refresh'
	    'type' => 'theme_mod', // Optional. 'theme_mod' or 'option'. Default: 'theme_mod'
	    'capability' => 'edit_theme_options',
	) );
	$wp_customize->add_control(new WP_Customize_control($wp_customize,'footer_text_setting',
		array(
			'label'		=> 'Company Name.',
			'section'	=> 'footer_section',
			'settings' 	=> 'footer_text_setting',
			'type'		=> 'text'
		) 
	));
	// Footer Text
	$wp_customize->add_setting( 'footer_text_link_setting',array(
		'default' => '#',
		'transport' => 'refresh', // Optional. 'refresh' or 'postMessage'. Default: 'refresh'
	    'type' => 'theme_mod', // Optional. 'theme_mod' or 'option'. Default: 'theme_mod'
	    'capability' => 'edit_theme_options',
	) );
	$wp_customize->add_control(new WP_Customize_control($wp_customize,'footer_text_link_setting',
		array(
			'label'		=> 'Company Link',
			'section'	=> 'footer_section',
			'settings' 	=> 'footer_text_link_setting',
			'type'		=> 'link'
		) 
	));
	/* footer text Color Panel */
	$wp_customize->add_setting( 'footer_text_color_setting',array(
		'default' => '#fff',
		'transport' => 'refresh',
		'type' => 'theme_mod', // Optional. 'theme_mod' or 'option'. Default: 'theme_mod'
	    'capability' => 'edit_theme_options',
	) );
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'header_text_color_control',
		array(
			'label'=> __('Text Color'),
			'section' => 'footer_section',
			'settings' => 'footer_text_color_setting',
		) 
	));
}
add_action( 'customize_register', 'footer_customization_register' );

function footer_section_style(){?>
	<style type="text/css">
		.Footer{
			background-color: <?php echo get_theme_mod('footer_color_setting'); ?>;
			color: <?php echo get_theme_mod('footer_color_setting'); ?>;
		}
		p.text-capitalize.text-center.p-3.mb-0, p.text-capitalize.text-center.p-3.mb-0 a.text-capitalize{
			color: <?php echo get_theme_mod('footer_text_color_setting'); ?>;
		}
	</style>
<?php
}
add_action( 'wp_head','footer_section_style' );
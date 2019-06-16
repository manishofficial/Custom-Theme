<?php
function header_nav_register( $wp_customize ) {
	/* Header Nav SECTION */
	$wp_customize->add_section( 'header_nav_section',array(
		'title' => 'Header Cusotm Nav',
		'panel' => 'header_setting_pannel',
	) );

	/* Header Fixed */
	$wp_customize->add_setting( 'header_nav_setting',array(
		'default'	=>	'Yes',
	) );
	$wp_customize->add_control(new WP_Customize_control($wp_customize,'header_nav_setting',
		array(
			'label'=>'Want to show theme nav?',
			'section' => 'header_nav_section',
			'settings' => 'header_nav_setting',
			'type'	=> 'select',
			'choices'=>	array('no'=>'No', 'yes'=>'Yes'),
		) 
	));
}
add_action( 'customize_register', 'header_nav_register' );
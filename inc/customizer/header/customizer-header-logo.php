<?php
	/* Header Panel Using From Header*/
function header_logo_customization_register( $wp_customize ) {
	/* Header SECTION */
	$wp_customize->add_section( 'header_logo_section',array(
		'title' => 'Header Logo',
		'panel' => 'header_setting_pannel',
	) );

	/* Display Logo Bar */
	$wp_customize->add_setting( 'header_logo_setting',array(
		'default'	=>	'Yes',
	) );
	$wp_customize->add_control(new WP_Customize_control($wp_customize,'header_logo_setting_control',
		array(
			'label'=>'Display The Logo Or Text ?',
			'section' => 'header_logo_section',
			'settings' => 'header_logo_setting',
			'type'	=> 'select',
			'choices'=>	array('none'=>'No', 'block'=>'Yes'),
		) 
	));
	/* Header Color Panel */
	$wp_customize->add_setting( 'header_text_color_setting',array(
		'default' => '#ffffff',
		'transport' => 'refresh',
		'type' => 'theme_mod', // Optional. 'theme_mod' or 'option'. Default: 'theme_mod'
	    'capability' => 'edit_theme_options',
	) );
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'header_text_color_control',
		array(
			'label'=> __('Title Color'),
			'section' => 'header_logo_section',
			'settings' => 'header_text_color_setting',
		) 
	));

	/* Header Background Image */
	$wp_customize->add_setting( 'header_logo_image_setting',array(
		'default' => '',
		'transport' => 'refresh', // Optional. 'refresh' or 'postMessage'. Default: 'refresh'
	    'type' => 'theme_mod', // Optional. 'theme_mod' or 'option'. Default: 'theme_mod'
	    'capability' => 'edit_theme_options',
	) );
	$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize,'header_logo_image_control',
		array(
			'label'=>'Header Logo Size',
			'section' => 'header_logo_section',
			'settings' => 'header_logo_image_setting',
		) 
	));
	/* Header Logo Image Size */
	$wp_customize->add_setting( 'header_logo_height_setting',array(
		'default' => '100',
		'transport' => 'refresh', // Optional. 'refresh' or 'postMessage'. Default: 'refresh'
	    'type' => 'theme_mod', // Optional. 'theme_mod' or 'option'. Default: 'theme_mod'
	    'capability' => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'header_logo_height_setting', array(
	  'type' => 'range',
	  'section' => 'header_logo_section',
	  'label' => __( 'Header Size' ),
	  'description' => __( 'Select header size between 50 to 200.' ),
	  'input_attrs' => array(
	    'min' => 50,
	    'max' => 200,
	    'step' => 2,

	  ),
	) );
}
add_action( 'customize_register', 'header_logo_customization_register' );

function header_logo_style(){ ?>
	<style type="text/css">
		.navbar-light .navbar-brand{
			display: <?php echo get_theme_mod('header_logo_setting'); ?>;
			color: <?php echo get_theme_mod('header_text_color_setting'); ?>;
		}
		img.img-fluid.logo{
			width: <?php echo get_theme_mod('header_logo_height_setting'); ?>px;
		}
	</style>
<?php
}
add_action('wp_head','header_logo_style');


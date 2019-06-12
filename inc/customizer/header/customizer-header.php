<?php
function header_customization_register( $wp_customize ) {
	/* Header Panel */
	$wp_customize->add_panel( 'header_setting_pannel',
	   array(
	      'title' => __( 'Header' ),
	      'description' => esc_html__( 'Adjust your Homepage sections.' ), // Include html tags such as 
	      'priority' => 160, // Not typically needed. Default is 160
	   )
	);
	/* Header SECTION */
	$wp_customize->add_section( 'header_section',array(
		'title' => 'Header Background',
		'panel' => 'header_setting_pannel',
	) );

	/* Header Fixed */
	$wp_customize->add_setting( 'header_fixed_setting',array(
		'default'	=>	'Yes',
	) );
	$wp_customize->add_control(new WP_Customize_control($wp_customize,'header_search_control',
		array(
			'label'=>'Header Fixed?',
			'section' => 'header_section',
			'settings' => 'header_fixed_setting',
			'type'	=> 'select',
			'choices'=>	array('No'=>'No', 'Yes'=>'Yes'),
		) 
	));
	/* Header Color Panel */
	$wp_customize->add_setting( 'header_color_setting',array(
		'default' => '#ffffff',
		'transport' => 'refresh',
		'type' => 'theme_mod', // Optional. 'theme_mod' or 'option'. Default: 'theme_mod'
	    'capability' => 'edit_theme_options',
	) );
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'header_color_control',
		array(
			'label'=> __('Background Color'),
			'section' => 'header_section',
			'settings' => 'header_color_setting',
		) 
	));

	/* Header Background Image */
	$wp_customize->add_setting( 'header_background_image_setting',array(
		'default' => '',
		'transport' => 'refresh', // Optional. 'refresh' or 'postMessage'. Default: 'refresh'
	    'type' => 'theme_mod', // Optional. 'theme_mod' or 'option'. Default: 'theme_mod'
	    'capability' => 'edit_theme_options',
	) );
	$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize,'header_background_image_control',
		array(
			'label'=>'Header Size',
			'section' => 'header_section',
			'settings' => 'header_background_image_setting',
		) 
	));
	/* Header Background Image Size */
	$wp_customize->add_setting( 'header_height_setting',array(
		'default' => '56',
		'transport' => 'refresh', // Optional. 'refresh' or 'postMessage'. Default: 'refresh'
	    'type' => 'theme_mod', // Optional. 'theme_mod' or 'option'. Default: 'theme_mod'
	    'capability' => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'header_height_setting', array(
	  'type' => 'range',
	  'section' => 'header_section',
	  'label' => __( 'Header Size' ),
	  'description' => __( 'Select header size between 50 to 200.' ),
	  'input_attrs' => array(
	    'min' => 50,
	    'max' => 200,
	    'step' => 2,

	  ),
	) );

	// require get_template_directory() . '/inc/customizer/header/customizer-header-logo.php';
}
add_action( 'customize_register', 'header_customization_register' );

function custom_background_color(){ ?>
	<style type="text/css">
		nav.navbar.navbar-expand-lg.navbar-light.bg-light{
			background-color: <?php echo get_theme_mod('header_color_setting'); ?> !important;
			background-image: url(<?php echo wp_get_attachment_url(get_theme_mod('header_background_image_setting')); ?>); !important;
		}
		<?php if ( get_theme_mod('header_fixed_setting') == 'Yes' ) { ?>
			nav.navbar.navbar-expand-lg.navbar-light.bg-light{
			position: fixed;
			height: <?php echo get_theme_mod('header_height_setting'); ?>px;
			}
		<?php } else{ ?>
			nav.navbar.navbar-expand-lg.navbar-light.bg-light{
			position: absolute;
			height: <?php echo get_theme_mod('header_height_setting'); ?>px;
			}
		<?php } ?>
	</style>
<?php
}
add_action('wp_head','custom_background_color');


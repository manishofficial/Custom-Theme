<?php
/* Header Panel Using From Header*/
function header_search_customization_register( $wp_customize ) {
	/* Header SECTION */
	$wp_customize->add_section( 'header_search_section',array(
		'title' => 'Search',
		'panel' => 'header_setting_pannel',
	) );

	/* Display Search Bar */
	$wp_customize->add_setting( 'header_search_setting',array(
		'default'	=>	'Yes',
	) );
	$wp_customize->add_control(new WP_Customize_control($wp_customize,'header_search_control',
		array(
			'label'=>'Display Search ?',
			'section' => 'header_search_section',
			'settings' => 'header_search_setting',
			'type'	=> 'select',
			'choices'=>	array('No'=>'No', 'Yes'=>'Yes'),
		) 
	));
	/* Display Search Bar Text*/
	$wp_customize->add_setting( 'header_search_text_setting',array(
		'default' => 'Search',
		'transport' => 'refresh', // Optional. 'refresh' or 'postMessage'. Default: 'refresh'
	    'type' => 'theme_mod', // Optional. 'theme_mod' or 'option'. Default: 'theme_mod'
	    'capability' => 'edit_theme_options',
	) );
	$wp_customize->add_control(new WP_Customize_control($wp_customize,'header_search_text_setting',
		array(
			'label'		=> 'Link Text',
			'section'	=> 'header_search_section',
			'settings' 	=> 'header_search_text_setting',
		) 
	));
	/* Search Bar Size */
	$wp_customize->add_setting( 'header_search_size_setting',array(
		'default' => '110',
		'transport' => 'refresh', // Optional. 'refresh' or 'postMessage'. Default: 'refresh'
	    'type' => 'theme_mod', // Optional. 'theme_mod' or 'option'. Default: 'theme_mod'
	    'capability' => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'header_search_size_setting', array(
	  'type' => 'range',
	  'section' => 'header_search_section',
	  'label' => __( 'Header Size' ),
	  'description' => __( 'Select header size between 60 to 200.' ),
	  'input_attrs' => array(
	    'min' => 60,
	    'max' => 200,
	    'step' => 2,

	  ),
	) );
}
add_action( 'customize_register', 'header_search_customization_register' );

function header_search_style(){?>
	<style type="text/css">
		.search-feed input[type="text"]{
			width: <?php echo get_theme_mod('header_search_size_setting'); ?>px;
		}
		
	</style>
<?php
}
add_action('wp_head','header_search_style');

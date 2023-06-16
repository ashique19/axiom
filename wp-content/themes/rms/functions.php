<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
function responsive_theme_customizer( $wp_customize ) {
    $wp_customize->add_section( 'responsive_logo_section' , array(
		'title'       => __( 'Footer Logo', 'responsive' ),
		'priority'    => 30,
		'description' => 'Upload a logo to replace the default site name and description in the footer',
	) );
	$wp_customize->add_setting( 'responsive_logo' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'responsive_logo',array(
		'label'    => __( 'Footer Logo', 'responsive' ),
		'section'  => 'responsive_logo_section',
		'settings' => 'responsive_logo',
	)
	)
	);
	
	$wp_customize->add_section( 'responsive_inner_logo_section' , array(
		'title'       => __( 'Inner Page Logo', 'responsive' ),
		'priority'    => 30,
		'description' => 'Upload a logo to replace the default site name and description in the header',
	) );
	$wp_customize->add_setting( 'responsive_inner_logo' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'responsive_inner_logo',array(
		'label'    => __( 'Inner page Logo', 'responsive' ),
		'section'  => 'responsive_inner_logo_section',
		'settings' => 'responsive_inner_logo',
	)
	)
	);
}
add_action( 'customize_register', 'responsive_theme_customizer' );
?>
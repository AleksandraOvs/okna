<?php
// displayed header-footer logo

//displayed logo

function my_customize_register($wp_customize)
{
	$wp_customize->add_setting('header_logo', array(
		'default' => '',
		//'height' => '48',
		'width' => '280',
		'sanitize_callback' => 'absint',
	));
	$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'header_logo', array(

		'section' => 'title_tagline',
		'label' => 'Логотип Header'

	)));
	$wp_customize->add_setting('footer_logo', array(
		'default' => '',
		'sanitize_callback' => 'absint',
	));

	$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'footer_logo', array(
		'section' => 'title_tagline',
		'label' => 'Логотип Footer'
	)));
}
add_action('customize_register', 'my_customize_register');

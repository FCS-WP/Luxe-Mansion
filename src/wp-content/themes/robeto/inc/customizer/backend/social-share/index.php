<?php

// ============================================
// Panel
// ============================================

// no panel


// ============================================
// Sections
// ============================================

Kirki::add_section( 'social_share', array(
    'title'          => esc_html__( 'Social Share', 'robeto' ),
    'priority'       => 65,
    'capability'     => 'edit_theme_options',
) );


// ============================================
// Controls
// ============================================

$sep_id  = 98495;
$section = 'social_share';

Kirki::add_field( 'robeto', array(
	'type'        => 'switch',
	'settings'    => 'sharing_facebook',
  'label'       => esc_html__( 'Facebook', 'robeto' ),
	'section'     => $section,
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'robeto' ),
		'off' => esc_html__( 'Disable', 'robeto' ),
	),
) );

Kirki::add_field( 'robeto', array(
	'type'        => 'switch',
	'settings'    => 'sharing_twitter',
  'label'       => esc_html__( 'Twitter', 'robeto' ),
	'section'     => $section,
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'robeto' ),
		'off' => esc_html__( 'Disable', 'robeto' ),
	),
) );

Kirki::add_field( 'robeto', array(
	'type'        => 'switch',
	'settings'    => 'sharing_reddit',
  'label'       => esc_html__( 'Reddit', 'robeto' ),
	'section'     => $section,
	'default'     => 'off',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'robeto' ),
		'off' => esc_html__( 'Disable', 'robeto' ),
	),
) );

Kirki::add_field( 'robeto', array(
	'type'        => 'switch',
	'settings'    => 'sharing_linkedin',
  'label'       => esc_html__( 'Linkedin', 'robeto' ),
	'section'     => $section,
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'robeto' ),
		'off' => esc_html__( 'Disable', 'robeto' ),
	),
) );

Kirki::add_field( 'robeto', array(
	'type'        => 'switch',
	'settings'    => 'sharing_tumblr',
  'label'       => esc_html__( 'Tumblr', 'robeto' ),
	'section'     => $section,
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'robeto' ),
		'off' => esc_html__( 'Disable', 'robeto' ),
	),
) );

Kirki::add_field( 'robeto', array(
	'type'        => 'switch',
	'settings'    => 'sharing_pinterest',
  'label'       => esc_html__( 'Pinterest', 'robeto' ),
	'section'     => $section,
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'robeto' ),
		'off' => esc_html__( 'Disable', 'robeto' ),
	),
) );

Kirki::add_field( 'robeto', array(
	'type'        => 'switch',
	'settings'    => 'sharing_line',
  'label'       => esc_html__( 'Line', 'robeto' ),
	'section'     => $section,
	'default'     => 'off',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'robeto' ),
		'off' => esc_html__( 'Disable', 'robeto' ),
	),
) );

Kirki::add_field( 'robeto', array(
	'type'        => 'switch',
	'settings'    => 'sharing_vk',
  'label'       => esc_html__( 'VK', 'robeto' ),
	'section'     => $section,
	'default'     => 'off',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'robeto' ),
		'off' => esc_html__( 'Disable', 'robeto' ),
	),
) );

Kirki::add_field( 'robeto', array(
	'type'        => 'switch',
	'settings'    => 'sharing_whatapps',
  'label'       => esc_html__( 'Whatapps', 'robeto' ),
	'section'     => $section,
	'default'     => 'off',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'robeto' ),
		'off' => esc_html__( 'Disable', 'robeto' ),
	),
) );

Kirki::add_field( 'robeto', array(
	'type'        => 'switch',
	'settings'    => 'sharing_telegram',
  'label'       => esc_html__( 'Telegram', 'robeto' ),
	'section'     => $section,
	'default'     => 'off',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'robeto' ),
		'off' => esc_html__( 'Disable', 'robeto' ),
	),
) );

Kirki::add_field( 'robeto', array(
	'type'        => 'switch',
	'settings'    => 'sharing_email',
  'label'       => esc_html__( 'Email', 'robeto' ),
	'section'     => $section,
	'default'     => 'off',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'robeto' ),
		'off' => esc_html__( 'Disable', 'robeto' ),
	),
) );

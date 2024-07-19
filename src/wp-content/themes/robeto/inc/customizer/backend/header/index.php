<?php

// ============================================
// Panel
// ============================================

Kirki::add_section( 'panel_header', array(
    'title'         => esc_html__( 'Header', 'robeto' ),
    'priority'       => 30,
    'capability'     => 'edit_theme_options',
) );


// ============================================
// Controls
// ============================================

Kirki::add_field( 'robeto', array(
    'type'        => 'select',
    'settings'    => 'header_template',
    'label'       => esc_html__( 'Header Template', 'robeto' ),
    'section'     => 'panel_header',
    'default'     => 'type-3',
    'priority'    => 10,
    'choices'     => array(
        'type-default'     => esc_html__( 'Header Default', 'robeto' ),
    ),
) );

Kirki::add_field( 'robeto', array(
	'type'        => 'switch',
	'settings'    => 'header_show_main_menu',
  'label'       => esc_html__( 'Main Menu', 'robeto' ),
	'section'     => 'panel_header',
	'default'     => 'off',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'robeto' ),
		'off' => esc_html__( 'Disable', 'robeto' ),
	),
  'active_callback'    => array(
      array(
          'setting'  => 'header_template',
          'operator' => '==',
          'value'    => 'type-default',
      ),
  ),
) );

Kirki::add_field( 'robeto', array(
    'type'        => 'select',
    'settings'    => 'header_menu_position',
    'label'       => esc_html__( 'Menu Position', 'robeto' ),
    'section'     => 'panel_header',
    'default'     => 'menu-center',
    'priority'    => 10,
    'choices'     => array(
        'menu-center'     => esc_html__( 'Center', 'robeto' ),
        'menu-left'     => esc_html__( 'Left', 'robeto' ),
        'menu-right'     => esc_html__( 'Right', 'robeto' ),
    ),
    'active_callback'    => array(
        array(
            'setting'  => 'header_template',
            'operator' => '==',
            'value'    => 'type-3',
        ),
    ),
) );

  // ============================================
  // Sections
  // ============================================

  Kirki::add_section( 'header_settings', array(
      'title'          => esc_html__( 'Settings', 'robeto' ),
      'priority'       => 10,
      'capability'     => 'edit_theme_options',
      'section'          => 'panel_header',
  ) );

  Kirki::add_section( 'header_logo', array(
      'title'          => esc_html__( 'Logo', 'robeto' ),
      'priority'       => 10,
      'capability'     => 'edit_theme_options',
      'section'          => 'panel_header',
  ) );

  Kirki::add_section( 'header_elements', array(
      'title'          => esc_html__( 'Icons', 'robeto' ),
      'priority'       => 10,
      'capability'     => 'edit_theme_options',
      'section'          => 'panel_header',
  ) );

  Kirki::add_section( 'header_top_bar', array(
      'title'          => esc_html__( 'Top Bar', 'robeto' ),
      'priority'       => 10,
      'capability'     => 'edit_theme_options',
      'section'          => 'panel_header',
  ) );

  Kirki::add_section( 'header_mobile', array(
      'title'          => esc_html__( 'Mobile Header', 'robeto' ),
      'priority'       => 10,
      'capability'     => 'edit_theme_options',
      'section'          => 'panel_header',
  ) );

  Kirki::add_section( 'header_sticky', array(
      'title'          => esc_html__( 'Sticky Header', 'robeto' ),
      'priority'       => 10,
      'capability'     => 'edit_theme_options',
      'section'          => 'panel_header',
  ) );

  Kirki::add_section( 'page_header', array(
      'title'          => esc_html__( 'Page Header', 'robeto' ),
      'priority'       => 10,
      'capability'     => 'edit_theme_options',
      'section'          => 'panel_header',
  ) );

require_once('settings.php');
require_once('elements.php');
require_once('logo.php');
require_once('sticky.php');
require_once('mobile.php');
require_once('page_header.php');

<?php

$sep_id  = 9576;
$section = 'blog';

Kirki::add_field( 'robeto', array(
	'type'        => 'switch',
	'settings'    => 'blog_wide_layout',
  'label'       => esc_html__( 'Wide Layout', 'robeto' ),
	'section'     => $section,
	'default'     => '0',
	'priority'    => 10,
	'choices'     => array(
		'1'  => esc_html__( 'Enable', 'robeto' ),
		'0' => esc_html__( 'Disable', 'robeto' ),
	),
) );

Kirki::add_field( 'robeto', array(
    'type'        => 'toggle',
    'settings'    => 'blog_post_excerpt',
    'label'       => esc_html__( 'Show Excerpt', 'robeto' ),
    'section'     => $section,
    'default'     => 1,
    'priority'    => 10,
) );

// ---------------------------------------------
Kirki::add_field( 'robeto', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );
// ---------------------------------------------

Kirki::add_field( 'robeto', array(
    'type'        => 'toggle',
    'settings'    => 'blog_sidebar',
    'label'       => esc_html__( 'Blog Sidebar', 'robeto' ),
    'section'     => $section,
    'default'     => true,
    'priority'    => 10,
) );

// ---------------------------------------------
Kirki::add_field( 'robeto', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
		'active_callback'    => array(
				array(
						'setting'  => 'blog_sidebar',
						'operator' => '==',
						'value'    => 1,
				),
		),
) );
// ---------------------------------------------

Kirki::add_field( 'robeto', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'blog_sidebar_position',
    'label'       => esc_html__( 'Sidebar Position', 'robeto' ),
    'section'     => $section,
    'default'     => 'right',
    'priority'    => 10,
    'choices'     => array(
        'left'    => esc_html__( 'Left', 'robeto' ),
        'right'   => esc_html__( 'Right', 'robeto' ),
    ),
    'active_callback'    => array(
        array(
            'setting'  => 'blog_sidebar',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );

// ---------------------------------------------
Kirki::add_field( 'robeto', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'active_callback'    => array(
        array(
            'setting'  => 'blog_sidebar',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
// ---------------------------------------------

Kirki::add_field( 'robeto', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'blog_pagination',
    'label'       => esc_html__( 'Pagination', 'robeto' ),
    'section'     => $section,
    'default'     => 'default',
    'priority'    => 10,
    'choices'     => array(
        'default'           => esc_html__( 'Classic', 'robeto' ),
        'load_more_button'  => esc_html__( 'Load More', 'robeto' ),
        'infinite_scroll'   => esc_html__( 'Infinite', 'robeto' ),
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'robeto', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );
// ---------------------------------------------

Kirki::add_field( 'robeto', array(
	'type'        => 'switch',
	'settings'    => 'limit_excerpt',
  'label'       => esc_html__( 'Limit Excerpt', 'robeto' ),
	'section'     => $section,
	'default'     => '0',
	'priority'    => 10,
	'choices'     => array(
		'1'  => esc_html__( 'Enable', 'robeto' ),
		'0' => esc_html__( 'Disable', 'robeto' ),
	),
) );
// ---------------------------------------------
Kirki::add_field( 'robeto', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );
// ---------------------------------------------

Kirki::add_field( 'robeto', array(
  'type'     => 'number',
  'settings' => 'limit_excerpt_word',
  'section'  => $section,
  'label'       => esc_html__( 'Limit Excerpt Word', 'robeto' ),
  'default'  => 30,
  'priority' => 10,
  'choices'     => array(
      'min'  => 5,
      'max'  => 100,
      'step' => 1
  ),
  'active_callback'    => array(
      array(
          'setting'  => 'limit_excerpt',
          'operator' => '==',
          'value'    => 1,
      ),
  ),
) );

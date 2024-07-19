<?php

$sep_id  = 365434;
$section = 'blog_single';

Kirki::add_field( 'robeto', array(
    'type'        => 'toggle',
    'settings'    => 'blog_single_sidebar',
    'label'       => esc_html__( 'Blog Sidebar', 'robeto' ),
    'section'     => $section,
    'default'     => false,
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
    'settings'    => 'single_sticky_sidebar',
    'label'       => esc_html__( 'Sticky Sidebar', 'robeto' ),
    'section'     => $section,
    'default'     => false,
    'priority'    => 10,
		'active_callback'    => array(
				array(
						'setting'  => 'blog_single_sidebar',
						'operator' => '==',
						'value'    => 1,
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
						'setting'  => 'blog_single_sidebar',
						'operator' => '==',
						'value'    => 1,
				),
		),
) );
// ---------------------------------------------

Kirki::add_field( 'robeto', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'blog_single_sidebar_position',
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
            'setting'  => 'blog_single_sidebar',
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
            'setting'  => 'blog_single_sidebar',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
// ---------------------------------------------

Kirki::add_field( 'robeto', array(
    'type'        => 'toggle',
    'settings'    => 'blog_single_featured',
    'label'       => esc_html__( 'Display Featured Image', 'robeto' ),
    'section'     => $section,
    'default'     => true,
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
    'settings'    => 'blog_single_social_share',
    'label'       => esc_html__( 'Display Social Share', 'robeto' ),
    'section'     => $section,
    'default'     => false,
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
    'settings'    => 'blog_single_author_box',
    'label'       => esc_html__( 'Display Author Box', 'robeto' ),
    'section'     => $section,
    'default'     => false,
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
    'settings'    => 'blog_single_post_nav',
    'label'       => esc_html__( 'Display Post Navigation', 'robeto' ),
    'section'     => $section,
    'default'     => false,
    'priority'    => 10,
) );

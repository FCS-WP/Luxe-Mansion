<?php

$sep_id  = 6477;
$section = 'page_header';

Kirki::add_field( 'robeto', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'page_header_style',
    'label'       => esc_html__( 'Page Header Style', 'robeto' ),
    'section'     => $section,
    'default'     => 'mini',
    'priority'    => 10,
    'choices'     => array(
        'mini'  => esc_html__( 'Mini', 'robeto' ),
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
    'type'        => 'image',
    'settings'    => 'page_header_background_image',
    'label'       => esc_html__( 'Background Image', 'robeto' ),
    'section'     => $section,
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'page_header_style',
            'operator' => '==',
            'value'    => 'large',
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
            'setting'  => 'page_header_style',
            'operator' => '==',
            'value'    => 'large',
        ),
    ),

) );
Kirki::add_field( 'robeto', array(
    'type'        => 'color',
    'settings'    => 'pager_header_overlay_color',
    'label'       => esc_html__( 'Page Header Background Overlay Color', 'robeto' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'page_header_style',
            'operator' => '==',
            'value'    => 'large',
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
            'setting'  => 'page_header_style',
            'operator' => '==',
            'value'    => 'large',
        ),
    ),

) );
// ---------------------------------------------

Kirki::add_field( 'robeto', array(
    'type'        => 'color',
    'settings'    => 'pager_header_background_color',
    'label'       => esc_html__( 'Page Header Background Color', 'robeto' ),
    'section'     => $section,
    'default'     => '#FFF6EC',
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'page_header_style',
            'operator' => '==',
            'value'    => 'large',
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
            'setting'  => 'page_header_style',
            'operator' => '==',
            'value'    => 'large',
        ),
    ),

) );
// ---------------------------------------------

Kirki::add_field( 'robeto', array(
    'type'        => 'slider',
    'settings'    => 'page_header_height',
    'label'       => esc_html__( 'Page Header Height', 'robeto' ),
    'section'     => $section,
    'default'     => 200,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 100,
        'max'  => 1000,
        'step' => 1
    ),
    'active_callback'    => array(
        array(
            'setting'  => 'page_header_style',
            'operator' => '==',
            'value'    => 'large',
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
            'setting'  => 'page_header_style',
            'operator' => '==',
            'value'    => 'large',
        ),
    ),

) );
// ---------------------------------------------

Kirki::add_field( 'robeto', array(
    'type'        => 'color',
    'settings'    => 'pager_header_font_color',
    'label'       => esc_html__( 'Page Header Font Color', 'robeto' ),
    'section'     => $section,
    'default'     => '#616161',
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'page_header_style',
            'operator' => '==',
            'value'    => 'large',
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
            'setting'  => 'page_header_style',
            'operator' => '==',
            'value'    => 'large',
        ),
    ),

) );
// ---------------------------------------------

Kirki::add_field( 'robeto', array(
    'type'        => 'color',
    'settings'    => 'pager_header_heading_color',
    'label'       => esc_html__( 'Page Header Heading Color', 'robeto' ),
    'section'     => $section,
    'default'     => '#000',
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'page_header_style',
            'operator' => '==',
            'value'    => 'large',
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
            'setting'  => 'page_header_style',
            'operator' => '==',
            'value'    => 'large',
        ),
    ),

) );
// ---------------------------------------------

Kirki::add_field( 'robeto', array(
    'type'        => 'toggle',
    'settings'    => 'page_header_breadcrumb_toggle',
    'label'       => esc_html__( 'Site Breadcrumb', 'robeto' ),
    'section'     => $section,
    'default'     => 1,
    'priority'    => 10,
    'choices'     => array(
        'on'  => esc_html__( 'On', 'robeto' ),
        'off' => esc_html__( 'Off', 'robeto' ),
    ),

) );

// ---------------------------------------------

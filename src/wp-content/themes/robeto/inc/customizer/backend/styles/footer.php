<?php
$sep_id  = 77153;
$section = 'style_footer';

Kirki::add_field( 'robeto', array(
    'type'        => 'color',
    'settings'    => 'footer_background_color',
    'label'       => esc_html__( 'Footer Background Color', 'robeto' ),
    'section'     => $section,
    'default'     => '#FFFFFF',
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
    'type'        => 'color',
    'settings'    => 'footer_font_color',
    'label'       => esc_html__( 'Footer Font Color', 'robeto' ),
    'section'     => $section,
    'default'     => '#777',
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
    'type'        => 'color',
    'settings'    => 'footer_headings_color',
    'label'       => esc_html__( 'Footer Headings Color', 'robeto' ),
    'section'     => $section,
    'default'     => '#000',
    'priority'    => 10,
) );
// ---------------------------------------------
Kirki::add_field( 'robeto', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );
// ---------------------------------------------

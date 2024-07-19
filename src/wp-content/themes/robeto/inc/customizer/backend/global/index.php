<?php

// ============================================
// Panel
// ============================================

// no panel


// ============================================
// Sections
// ============================================

Kirki::add_section( 'global', array(
    'title'          => esc_html__( 'Global', 'robeto' ),
    'priority'       => 25,
    'capability'     => 'edit_theme_options',
) );


// ============================================
// Controls
// ============================================

$sep_id  = 100;
$section = 'global';

Kirki::add_field( 'robeto', array(
    'type'        => 'slider',
    'settings'    => 'site_width',
    'label'       => esc_html__( 'Site Width', 'robeto' ),
    'section'     => $section,
    'default'     => 1440,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 960,
        'max'  => 1920,
        'step' => 1
    ),
) );

// ---------------------------------------------

Kirki::add_field( 'robeto', array(
    'type'        => 'toggle',
    'settings'    => 'site_preloader',
    'label'       => esc_html__( 'Site Preloader', 'robeto' ),
    'section'     => $section,
    'default'     => false,
    'priority'    => 10,
) );

// ---------------------------------------------

Kirki::add_field( 'robeto', array(
    'type'        => 'toggle',
    'settings'    => 'site_support_list',
    'label'       => esc_html__( 'Site Support List', 'robeto' ),
    'section'     => $section,
    'default'     => false,
    'priority'    => 10,
) );

// ---------------------------------------------

Kirki::add_field( 'robeto', array(
    'type'        => 'text',
    'settings'    => 'site_chat_link',
    'label'       => esc_html__( 'Chat Link', 'robeto' ),
    'section'     => $section,
    'default'     => 'https://themeforest.ticksy.com/',
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'site_support_list',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );

Kirki::add_field( 'robeto', array(
    'type'        => 'text',
    'settings'    => 'site_phone_link',
    'label'       => esc_html__( 'Phone Link', 'robeto' ),
    'section'     => $section,
    'default'     => 'https://themeforest.ticksy.com/',
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'site_support_list',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );

Kirki::add_field( 'robeto', array(
    'type'        => 'text',
    'settings'    => 'site_email_ad',
    'label'       => esc_html__( 'Email Address', 'robeto' ),
    'section'     => $section,
    'default'     => 'demo@demo.com',
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'site_support_list',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );



// ============================================
// Sections
// ============================================

Kirki::add_section( 'global_popup', array(
    'title'          => esc_html__( 'Newsletter Popup', 'robeto' ),
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'section'          => 'global',
) );
require_once('newsletter_popup.php');

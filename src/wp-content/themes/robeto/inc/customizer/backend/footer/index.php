<?php

// ============================================
// Panel
// ============================================

// no panel


// ============================================
// Sections
// ============================================

Kirki::add_section( 'footer', array(
    'title'          => esc_html__( 'Footer', 'robeto' ),
    'priority'       => 60,
    'capability'     => 'edit_theme_options',
) );


// ============================================
// Controls
// ============================================

$sep_id  = 48536;
$section = 'footer';
Kirki::add_field( 'robeto', array(
    'type'     => 'textarea',
    'settings' => 'footer_text',
    'label'    => esc_html__( 'Copyright Text', 'robeto' ),
    'section'  => $section,
    'default'  => esc_html__( '© 2022 Robeto All rights reserved. Designed by Novaworks', 'robeto' ),
    'priority' => 10,
) );

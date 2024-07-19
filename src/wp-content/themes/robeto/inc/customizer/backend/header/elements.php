<?php

$sep_id  = 300;
$section = 'header_elements';

Kirki::add_field( 'robeto', array(
    'type'        => 'toggle',
    'settings'    => 'icons_on_topbar',
    'label'       => esc_html__( 'Show icons on Topbar', 'robeto' ),
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
    'settings'    => 'header_burger_menu',
    'label'       => esc_html__( 'Burger Menu', 'robeto' ),
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
    'settings'    => 'header_wishlist',
    'label'       => esc_html__( 'Wishlist', 'robeto' ),
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
    'settings'    => 'header_cart',
    'label'       => esc_html__( 'Cart', 'robeto' ),
    'section'     => $section,
    'default'     => true,
    'priority'    => 10,

) );
Kirki::add_field( 'robeto', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'header_cart_action',
    'label'       => esc_html__( 'Icon cart action', 'robeto' ),
    'section'     => $section,
    'default'     => 'mini-cart',
    'priority'    => 10,
    'choices'     => array(
        'mini-cart'     => esc_html__( 'Open Mini cart', 'robeto' ),
        'cart-page'     => esc_html__( 'Go to Cart page', 'robeto' ),
    ),
    'active_callback'    => array(
        array(
            'setting'  => 'header_cart',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );

<?php

// ============================================
// Panel
// ============================================

// no panel


// ============================================
// Sections
// ============================================

Kirki::add_section( 'product', array(
    'title'          => esc_html__( 'Product Page', 'robeto' ),
    'priority'       => 55,
    'capability'     => 'edit_theme_options',
) );


// ============================================
// Controls
// ============================================

$sep_id  = 34532;
$section = 'product';

Kirki::add_field( 'robeto', array(
    'type'        => 'toggle',
    'settings'    => 'single_product_sidebar',
    'label'       => esc_html__( 'Single Product Sidebar', 'robeto' ),
    'section'     => $section,
    'default'     => false,
    'priority'    => 10,
) );
// // ---------------------------------------------
Kirki::add_field( 'robeto', array(
    'settings'    => 'single_product_gallery_heading',
    'section'     => $section,
    'type'        => 'custom',
    'default'     => wp_kses(__( '<span class="big-separator">Image Gallery</span>', 'robeto' ),'simple'),
) );
// ---------------------------------------------
Kirki::add_field( 'robeto', array(
    'type'        => 'toggle',
    'settings'    => 'product_image_zoom',
    'label'       => esc_html__( 'Image Zoom', 'robeto' ),
    'section'     => $section,
    'default'     => true,
    'description' => esc_html__( 'Zooms in where your cursor is on the image', 'robeto' ),
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
    'settings'    => 'product_image_lightbox',
    'label'       => esc_html__( 'Image Lightbox', 'robeto' ),
    'section'     => $section,
    'default'     => true,
    'description' => esc_html__( 'Opens your images against a dark backdrop', 'robeto' ),
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
    'type'        => 'radio-buttonset',
    'settings'    => 'product_tab_preset',
    'label'       => esc_html__( 'Product Tab Style', 'robeto' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
    'choices'     => array(
        ''         => esc_html__( 'Default', 'robeto' ),
        'modal'  => esc_html__( 'Modal', 'robeto' ),
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
    'settings'    => 'single_product_section_heading',
    'section'     => $section,
    'type'        => 'custom',
    'default'     => wp_kses(__( '<span class="big-separator">Product Tabs Icons</span>', 'robeto' ),'simple'),
    'active_callback'    => array(
        array(
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
        ),
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'robeto', array(
    'type'        => 'image',
    'settings'    => 'panel_description_icon',
    'label'       => esc_html__( 'Description Icon', 'robeto' ),
    'section'     => $section,
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
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
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
        ),
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'robeto', array(
    'type'        => 'image',
    'settings'    => 'panel_additional_information_icon',
    'label'       => esc_html__( 'Additional Infomation Icon', 'robeto' ),
    'section'     => $section,
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
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
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
        ),
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'robeto', array(
    'type'        => 'image',
    'settings'    => 'panel_reviews_icon',
    'label'       => esc_html__( 'Reviews Icon', 'robeto' ),
    'section'     => $section,
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
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
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
        ),
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'robeto', array(
    'type'        => 'image',
    'settings'    => 'panel_sizeguide_icon',
    'label'       => esc_html__( 'Size Guide Icon', 'robeto' ),
    'section'     => $section,
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
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
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
        ),
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'robeto', array(
    'type'        => 'image',
    'settings'    => 'panel_store_available_icon',
    'label'       => esc_html__( 'Store availability Icon', 'robeto' ),
    'section'     => $section,
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
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
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
        ),
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'robeto', array(
    'type'        => 'toggle',
    'settings'    => 'single_product_store_availiable',
    'label'       => esc_html__( 'Store availability', 'robeto' ),
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
    'type'        => 'link',
    'settings'    => 'single_product_store_availiable_url',
    'label'       => esc_html__( 'Store availability  Page Url', 'robeto' ),
    'section'     => $section,
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'single_product_store_availiable',
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
            'setting'  => 'single_product_store_availiable',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
// ---------------------------------------------

Kirki::add_field( 'robeto', array(
    'type'        => 'radio-image',
    'settings'    => 'single_product_sidebar_position',
    'label'       => esc_html__( 'Sidebar Position', 'robeto' ),
    'section'     => $section,
    'default'     => 'left',
    'priority'    => 10,
    'choices'     => array(
        'left'    => get_template_directory_uri() . '/images/customiser/product-sidebar-left.png',
        'right'   => get_template_directory_uri() . '/images/customiser/product-sidebar-right.png',
    ),
    'active_callback'    => array(
        array(
            'setting'  => 'single_product_sidebar',
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
            'setting'  => 'single_product_sidebar',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
// ---------------------------------------------

Kirki::add_field( 'robeto', array(
    'type'        => 'toggle',
    'settings'    => 'single_product_social_share',
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
    'settings'    => 'upsell_products',
    'label'       => esc_html__( 'Up-sells Display', 'robeto' ),
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
    'settings'    => 'related_products',
    'label'       => esc_html__( 'Related Products Display', 'robeto' ),
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
            'setting'  => 'related_products',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
// ---------------------------------------------

Kirki::add_field( 'robeto', array(
    'type'        => 'slider',
    'settings'    => 'related_products_column',
    'label'       => esc_html__( 'Number of Related Products', 'robeto' ),
    'section'     => $section,
    'default'     => 4,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 2,
        'max'  => 6,
        'step' => 1
    ),
    'active_callback'    => array(
        array(
            'setting'  => 'related_products',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );

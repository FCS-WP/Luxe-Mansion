<?php

// ============================================
// Panel
// ============================================

// no panel


// ============================================
// Sections
// ============================================

Kirki::add_section( 'social_media', array(
    'title'          => esc_html__( 'Social Media', 'robeto' ),
    'priority'       => 65,
    'capability'     => 'edit_theme_options',
) );


// ============================================
// Controls
// ============================================

$sep_id  = 98795;
$section = 'social_media';

Kirki::add_field( 'robeto', array(
    'type'        => 'text',
    'settings'    => 'facebook_link',
    'label'       => esc_html__( 'Facebook', 'robeto' ),
    'section'     => $section,
    'default'     => '#',
    'priority'    => 10,
) );

Kirki::add_field( 'robeto', array(
    'type'        => 'text',
    'settings'    => 'twitter_link',
    'label'       => esc_html__( 'Twitter', 'robeto' ),
    'section'     => $section,
    'default'     => '#',
    'priority'    => 10,
) );

Kirki::add_field( 'robeto', array(
    'type'        => 'text',
    'settings'    => 'pinterest_link',
    'label'       => esc_html__( 'Pinterest', 'robeto' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'robeto', array(
    'type'        => 'text',
    'settings'    => 'linkedin_link',
    'label'       => esc_html__( 'LinkedIn', 'robeto' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'robeto', array(
    'type'        => 'text',
    'settings'    => 'googleplus_link',
    'label'       => esc_html__( 'Google+', 'robeto' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'robeto', array(
    'type'        => 'text',
    'settings'    => 'rss_link',
    'label'       => esc_html__( 'RSS', 'robeto' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'robeto', array(
    'type'        => 'text',
    'settings'    => 'tumblr_link',
    'label'       => esc_html__( 'Tumblr', 'robeto' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'robeto', array(
    'type'        => 'text',
    'settings'    => 'instagram_link',
    'label'       => esc_html__( 'Instagram', 'robeto' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'robeto', array(
    'type'        => 'text',
    'settings'    => 'youtube_link',
    'label'       => esc_html__( 'Youtube', 'robeto' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'robeto', array(
    'type'        => 'text',
    'settings'    => 'vimeo_link',
    'label'       => esc_html__( 'Vimeo', 'robeto' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'robeto', array(
    'type'        => 'text',
    'settings'    => 'behance_link',
    'label'       => esc_html__( 'Behance', 'robeto' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'robeto', array(
    'type'        => 'text',
    'settings'    => 'dribbble_link',
    'label'       => esc_html__( 'Dribbble', 'robeto' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'robeto', array(
    'type'        => 'text',
    'settings'    => 'flickr_link',
    'label'       => esc_html__( 'Flickr', 'robeto' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'robeto', array(
    'type'        => 'text',
    'settings'    => 'git_link',
    'label'       => esc_html__( 'Git', 'robeto' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'robeto', array(
    'type'        => 'text',
    'settings'    => 'skype_link',
    'label'       => esc_html__( 'Skype', 'robeto' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'robeto', array(
    'type'        => 'text',
    'settings'    => 'weibo_link',
    'label'       => esc_html__( 'Weibo', 'robeto' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'robeto', array(
    'type'        => 'text',
    'settings'    => 'foursquare_link',
    'label'       => esc_html__( 'Foursquare', 'robeto' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'robeto', array(
    'type'        => 'text',
    'settings'    => 'soundcloud_link',
    'label'       => esc_html__( 'Soundcloud', 'robeto' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'robeto', array(
    'type'        => 'text',
    'settings'    => 'snapchat_link',
    'label'       => esc_html__( 'Snapchat', 'robeto' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

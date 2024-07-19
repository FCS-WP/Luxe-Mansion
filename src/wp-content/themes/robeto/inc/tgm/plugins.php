<?php


function robeto_theme_register_required_plugins() {

  $plugins = array(
    'novaworks' => array(
      'name'               => esc_html__('Novaworks','robeto'),
      'slug'               => 'novaworks',
      'source'             => 'http://assets.novaworks.net/plugins/novaworks.zip',
      'required'           => true,
      'description'        => esc_html__('Extends the functionality of Robeto with theme specific shortcodes and page builder elements.','robeto'),
      'demo_required'      => true,
      'version'            => '2.0.1'
    ),
    'kitify' => array(
      'name'               => esc_html__('Kitify','robeto'),
      'slug'               => 'kitify',
      'source'             => 'http://assets.novaworks.net/plugins/kitify-1.0.4.zip',
      'required'           => true,
      'description'        => esc_html__('A perfect plugin for Elementor','robeto'),
      'demo_required'      => true,
      'version'            => '1.0.4.5'
    ),
    'demo-importer' => array(
      'name'               => esc_html__('Robeto Package Demo Data','robeto'),
      'slug'               => 'robeto-demo-data',
      'source'             => 'http://assets.novaworks.net/plugins/robeto/robeto-demo-data.zip',
      'required'           => false,
      'description'        => esc_html__('This plugin use only for Novaworks Theme.','robeto'),
      'demo_required'      => true,
      'version'            => '1.0.1'
    ),
    'wc-ajax-product-filter' => array(
      'name'               => esc_html__('Nova Ajax Product Filters','robeto'),
      'slug'               => 'nova-ajax-product-filter',
      'source'             => 'http://assets.novaworks.net/plugins/nova-ajax-product-filter.zip',
      'required'           => true,
      'description'        => esc_html__('A plugin to filter woocommerce products with AJAX request.','robeto'),
      'demo_required'      => true,
      'version'            => '1.0.0'
    ),
    'elementor' => array(
      'name'               => esc_html__('Elementor Page Builder','robeto'),
      'slug'               => 'elementor',
      'required'           => true,
      'description'        => esc_html__('The most advanced frontend drag & drop page builder. Create high-end, pixel perfect websites at record speeds. Any theme, any page, any design.','robeto'),
      'demo_required'      => true
    ),
    'woocommerce' => array(
      'name'               => esc_html__('WooCommerce','robeto'),
      'slug'               => 'woocommerce',
      'required'           => true,
      'description'        => esc_html__('The eCommerce engine','robeto'),
      'demo_required'      => true
    ),
    'kirki' => array(
      'name'               => esc_html__('Kirki','robeto'),
      'slug'               => 'kirki',
      'required'           => true,
      'demo_required'      => true
    ),
    'yith-woocommerce-wishlist' => array(
      'name'               => esc_html__('YITH WooCommerce Wishlist','robeto'),
      'slug'               => 'yith-woocommerce-wishlist',
      'required'           => false,
      'description'        => esc_html__('YITH WooCommerce Wishlist gives your users the possibility to create, fill, manage and share their wishlists allowing you to analyze their interests and needs to improve your marketing strategies.','robeto'),
      'demo_required'      => true
    ),
    'envato-market' => array(
      'name'               => esc_html__('Envato Market','robeto'),
      'slug'               => 'envato-market',
      'source'             => 'https://envato.github.io/wp-envato-market/dist/envato-market.zip',
      'required'           => false,
      'description'        => esc_html__('Automatically update your Envato theme','robeto'),
      'demo_required'      => true
    ),
    'revslider' => array(
      'name'               => esc_html__('Slider Revolution','robeto'),
      'slug'               => 'revslider',
      'source'				     => 'http://assets.novaworks.net/plugins/revslider.zip',
      'required'           => false,
      'demo_required'      => true
    ),
    'woo-variation-swatches' => array(
      'name'               => esc_html__('Variation Swatches for WooCommerce','robeto'),
      'slug'               => 'woo-variation-swatches',
      'required'           => false,
      'description'        => esc_html__('Beautiful colors, images and buttons variation swatches for woocommerce product attributes. Requires WooCommerce 3.2+','robeto'),
      'demo_required'      => true
    ),
    'contact-form-7' => array(
      'name'               => esc_html__('Contact Form 7','robeto'),
      'slug'               => 'contact-form-7',
      'required'           => false,
      'description'        => esc_html__('Just another contact form plugin. Simple but flexible.','robeto'),
      'demo_required'      => true
    ),
  );

	$config = array(
	  'id'                => 'robeto',
		'default_path'      => '',
		'parent_slug'       => 'themes.php',
		'menu'              => 'tgmpa-install-plugins',
		'has_notices'       => true,
		'is_automatic'      => true,
	);

	tgmpa( $plugins, $config );
}

add_action( 'tgmpa_register', 'robeto_theme_register_required_plugins' );

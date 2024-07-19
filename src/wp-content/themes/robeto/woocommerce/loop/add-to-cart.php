<?php

// @version 3.3.0

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
echo apply_filters(
	'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
	sprintf(
		'<a href="%s" data-quantity="%s" class="%s" %s>%s</a>',
		esc_url( $product->add_to_cart_url() ),
		esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
		esc_attr( isset( $args['class'] ) ? $args['class'] : 'button' ),
		isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
		'<svg class="robeto-addtocart"><use xlink:href="#robeto-addtocart" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg><span class="text">'.esc_html( $product->add_to_cart_text() ).'</span>'
	),
	$product,
	$args
);

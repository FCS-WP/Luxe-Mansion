<?php
add_filter( 'novathemes_fonts_choices','nova_kirki_fonts_choices' );
/**
* Add support wp-custom-fonts in Kirki
*/
function nova_kirki_fonts_choices( $settings = [] ) {

	$fonts_list = apply_filters( 'novathemes_fonts_list', [] );

	if ( ! $fonts_list ) {
		return $settings;
	}

	$fonts_settings = [
		'fonts' => [
			'google' => [],
			'families' => isset( $fonts_list[ 'families' ] ) ? $fonts_list[ 'families' ] : null,
			'variants' => isset( $fonts_list[ 'variants' ] ) ? $fonts_list[ 'variants' ] : null
		]
	];

	$fonts_settings = array_merge( (array) $fonts_settings, (array) $settings );
	return $fonts_settings;
}

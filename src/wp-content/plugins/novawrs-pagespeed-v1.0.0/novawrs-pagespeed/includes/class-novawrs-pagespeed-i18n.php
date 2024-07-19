<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://novaworks.net/
 * @since      1.0.0
 *
 * @package    Novawrs_Pagespeed
 * @subpackage Novawrs_Pagespeed/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Novawrs_Pagespeed
 * @subpackage Novawrs_Pagespeed/includes
 * @author     Novaworks <info@novaworks.net>
 */
class Novawrs_Pagespeed_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'novawrs-pagespeed',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}

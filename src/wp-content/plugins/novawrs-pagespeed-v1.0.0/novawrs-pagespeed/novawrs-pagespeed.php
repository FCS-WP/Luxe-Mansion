<?php
/**
 *
 * @link              https://novaworks.net/
 * @since             1.0.0
 * @package           Novawrs_Pagespeed
 *
 * @wordpress-plugin
 * Plugin Name:       Novaworks PageSpeed
 * Plugin URI:        https://novaworks.net/plugins/novawrs-pagespeed/
 * Description:       Novaworks PageSpeed eliminate render-blocking Javascript. This gives 2x-5x increase in page load speed, as well as in relevant Google page speed metrics. And this plugin improves your page speed, even on top of your existing optimizations
 * Version:           1.0.0
 * Requires at least: 5.0
 * Tested up to:      5.9
 * Requires PHP:      5.6
 * Author:            Novaworks
 * Author URI:        https://novaworks.net/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       novawrs-pagespeed
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'NOVAWRS_PAGESPEED_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-novawrs-pagespeed-activator.php
 */
function activate_novawrs_pagespeed() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-novawrs-pagespeed-activator.php';
	Novawrs_Pagespeed_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-novawrs-pagespeed-deactivator.php
 */
function deactivate_novawrs_pagespeed() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-novawrs-pagespeed-deactivator.php';
	Novawrs_Pagespeed_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_novawrs_pagespeed' );
register_deactivation_hook( __FILE__, 'deactivate_novawrs_pagespeed' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-novawrs-pagespeed.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_novawrs_pagespeed() {

	$plugin = new Novawrs_Pagespeed();
	$plugin->run();

}
run_novawrs_pagespeed();

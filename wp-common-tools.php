<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/thechetanvaghela
 * @since             1.0.0
 * @package           Wp_Common_Tools
 *
 * @wordpress-plugin
 * Plugin Name:       Common Tools for Site
 * Description:       The plugin provides common functionality to the site.
 * Version:           1.0.2
 * Author:            Chetan Vaghela
 * Author URI:        https://github.com/thechetanvaghela
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-common-tools
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
define( 'WP_COMMON_TOOLS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-common-tools-activator.php
 */
function activate_wp_common_tools() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-common-tools-activator.php';
	Wp_Common_Tools_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-common-tools-deactivator.php
 */
function deactivate_wp_common_tools() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-common-tools-deactivator.php';
	Wp_Common_Tools_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_common_tools' );
register_deactivation_hook( __FILE__, 'deactivate_wp_common_tools' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-common-tools.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_common_tools() {

	$plugin = new Wp_Common_Tools();
	$plugin->run();

}
run_wp_common_tools();

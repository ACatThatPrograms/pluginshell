<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              Null
 * @since             1.0.0
 * @package           Inform_Me
 *
 * @wordpress-plugin
 * Plugin Name:       InformMe
 * Plugin URI:        Null
 * Description:       Adds Info Panel to Admin Settings
 * Version:           1.0.0
 * Author:            AG
 * Author URI:        Null
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       inform-me
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-inform-me-activator.php
 */
function activate_inform_me() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-inform-me-activator.php';
	Inform_Me_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-inform-me-deactivator.php
 */
function deactivate_inform_me() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-inform-me-deactivator.php';
	Inform_Me_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_inform_me' );
register_deactivation_hook( __FILE__, 'deactivate_inform_me' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-inform-me.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_inform_me() {

	$plugin = new Inform_Me();
	$plugin->run();

}
run_inform_me();

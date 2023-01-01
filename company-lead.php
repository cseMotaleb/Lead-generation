<?php
/**
 * Plugin Name:       Company Lead
 * Plugin URI:        https://motaleb.info
 * Description:       This plugin is company's lead genetor 
 * Version:           1.0.0
 * Author:            Motaleb
 * Author URI:        https://motaleb.info
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       company-lead
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 */
define( 'COMPANY_LEAD_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-company-lead-activator.php
 */
function activate_company_lead() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-company-lead-activator.php';
	Company_Lead_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-company-lead-deactivator.php
 */
function deactivate_company_lead() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-company-lead-deactivator.php';
	Company_Lead_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_company_lead' );
register_deactivation_hook( __FILE__, 'deactivate_company_lead' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-company-lead.php';
require plugin_dir_path( __FILE__ ) . 'includes/custom-post-type.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_company_lead() {

	$plugin = new Company_Lead();
	$plugin->run();

}
run_company_lead();

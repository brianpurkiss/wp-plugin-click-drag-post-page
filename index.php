<?php /*
	Plugin Name: Click and Drag Posts and Pages
	Description: Click and Drag to re-order posts and pages from within the WordPress Admin, reordering them within The Loop.
	Author: Brian Purkiss
	Author URI: http://brianpurkiss.com
	Version: 1.0
	License: GPLv2 or later
	License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

/*
 * Plugin based on code from Rob, the late Web Development Director for MOD Studio.
 * Rest in peace.
 */



// load the scripts
require_once cdpp_get_plugin_directory('functions/enqueue.php');

// save after dragging
require_once cdpp_get_plugin_directory('functions/reorder-post-types.php');


/**
 * Return file path relative to plugin base directory
 *
 * Note: This functions appears in this file to ensure that the plugin path is relative to the plugins base directory.
 *
 * @since 0.1
 *
 * @param string $path Optional. Concatenates path to the end of the base directory.
 * @return string Base path of the plugin
 */

function cdpp_get_plugin_directory($path='') {
	return plugin_dir_path( __FILE__ ) . $path;
}

/**
 * Return file path relative to plugin base url
 *
 * Note: This functions appears in this file to ensure that the plugin path is relative to the plugins base url.
 *
 * @since 0.1
 *
 * @param string $path Optional. Concatenates path to the end of the base url.
 * @return string Base path of the plugin
 */

function cdpp_get_plugin_url($path='') {
	return plugin_dir_url( __FILE__ ) . $path;
}

<?php
/**
 * @package md-heatmap
 * @version 0.0.1
 */
/*
  Plugin Name: Heatmap
  Description: Display a heatmap of user clicks on a page.
  Version: 0.0.1
  Author: @mattduffy
  Author URI: https://github.com/mattduffy
  License: GNU General Public License (GPL) version 2 
  Text Domain: md-heatmap
  Domain Path: /languages
*/

// Disallow direct access
if (!function_exists("add_action")) {
  echo "Don't call me, I'll call you.";
  exit;
}

define("MD_HEATMAP", "0.0.1");
define("MD_HEATMAP_PLUGIN_DIR", plugin_dir_path(__FILE__));
define("MD_HEATMAP_PLUGIN_URL", plugin_dir_url(__FILE__));

if (is_admin()) {
  require_once(MD_HEATMAP_PLUGIN_DIR . "library-admin.php");
  add_action("init", array(<php class name>, <php class initi method>));
  } else {
  require_once(MD_HEATMAP_PLUGIN_DIR . "library-site.php");
  add_action("init", array(<php class name>, <php class initi method>));
}


?>

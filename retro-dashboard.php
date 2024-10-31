<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
/**
 * Plugin Name: Retro-Dashboard Admin Theme
 * Plugin URI: http://wordpress.org/extend/plugins/retro-dashboard/
 * Description: Retro-Dashboard Admin Theme for your dashboard.  This plugin implements an admin theme which results in the Dashboard looking similar (but not exactly) to how it looked prior to the 2.5 release.
 * Author: Mike Walsh
 * Version: 0.5
 * Author URI: http://mpwalsh8.wordpress.com/
 */

/**
 * RetroDashboard class
 *
 * @author Mike Walsh <mike_walsh@mindspring.com>
 * @access public
 * @see stdClass
 */
class RetroDashboard
{
	var $options_name = 'RetroDashboard';
	var $plugin_path = '';
	
    /**
     * Constructor
     *
     */
    function RetroDashboard($type = false)
    {
        $this->plugin_path = get_bloginfo('wpurl') .
            '/wp-content/plugins/' . dirname(plugin_basename(__FILE__)) . '/' ;
		
        add_action('admin_head', array($this, 'add_admin_css'));
			
	}

    /**
     * add admin css
     *
     */
	function add_admin_css() {
		echo '<link type="text/css" rel="stylesheet" href="' . $this->plugin_path . 'retro-dashboard.css" />' . "\n";
	}
}


//  Load the plugin

if (defined('ABSPATH')) require_once(ABSPATH . 'wp-config.php');
	else require_once(dirname(__FILE__) . "/../../../wp-config.php");

//  Initiate the RetroDashboard

new RetroDashboard() ;

?>

<?php

/*
Plugin Name: rtCamp WP-Contributors Plugin
Plugin URI:  https://aum-rtcamp.000webhostapp.com/
Description: Contributer Plugin Assignment
Version:     1.0
Author:      Aum Trivedi
Author URI:  

*/

//Prevent Direct Access to File (Only WordPress Can Access)
if (!defined('ABSPATH')) {
	die('No script kiddies please!');
}

//Include Admin Panel File
require_once (plugin_dir_path(__FILE__) . 'admin/admin.php');

//Include Frontend View File
require_once (plugin_dir_path(__FILE__) . 'view/view.php');
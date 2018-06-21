<?php 
/* 
Plugin Name: Redirection
Description: Tu verras ce que ça fait
Version: 0.2
Author: B&E Production
Author URI: eval7.local
Plugin URI: eval7.local/simplon
License: GPLv2
*/

include_once(ABSPATH .'wp-admin/includes/plugin.php');
$url = $_SERVER['REQUEST_URI'];
if(is_plugin_active('redirection/redirection.php') && strstr($url, '/simplon'))
{
    echo '<p>It works</p>';
    die;
}

?>
<?php
/*
Plugin Name: Chosen for WordPress
Plugin URI: http://wordpress.org/extend/plugins/chosen/
Description: Chosen makes long, unwieldy select boxes much more user-friendly. There are no settings. Chosen applies itself automatically.
Author: Brent Shepherd updated by Ola Lindberg 2015-02-16
Version: 0.3-1
Author URI: http://find.brentshepherd.com && http://olalindberg.com
License: GPLv2 or later
*/

function enqueue_and_register_wp_chosen_scripts_and_styles(){
    wp_enqueue_style('chosen', plugins_url('chosen/chosen-js/chosen.css'));
    wp_enqueue_script('chosen', plugins_url('chosen/chosen-js/chosen.jquery.min.js'), array('jquery'), false, true);
    wp_enqueue_script('wp-chosen', plugins_url('chosen/wp-chosen.js'), array('chosen', 'jquery' ), false, true);
}

add_action('wp_enqueue_scripts', 'enqueue_and_register_wp_chosen_scripts_and_styles');

?>
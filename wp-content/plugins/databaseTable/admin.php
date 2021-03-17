<?php
/**
 * Plugin Name:       Database Table
 * Plugin URI:        https://github.com/iktakhairul/wordpress-plugin-development.git
 * Description:       This is ikta's plugin. Anyone who is interested for me please mail me to 'databaseTable@gmail.com'.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Shah Md. Iktakhairul Islam
 * Author URI:        https://github.com/iktakhairul/wordpress-plugin-development.git
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       my-plugin
 */

define('PLUGIN_DIR_PATH', plugin_dir_path(__file__));
define('PLUGINS_URL', plugins_url());
defined('ABSPATH') or die("Unauthorized Access!");

add_action('admin_menu', 'add_custom_menu');

function add_custom_menu() {
    add_menu_page(
        'Database',
        'Database',
        'manage_options',
        'database-plugin',
        'custom_plugin_func',
        'dashicons-database-view',
        9
    );
    add_submenu_page(
        'database-plugin',
        'All Pages',
        'All Pages',
        'manage_options',
        'database-plugin',
        'database_allPage_sub_func'
    );
    add_submenu_page(
        'database-plugin',
        'add new page',
        'add new page',
        'manage_options',
        'add page',
        'database_newPage_sub_func'
    );
}

function custom_plugin_func() {
    include_once PLUGIN_DIR_PATH.'/views/all-pages.php';
}

function database_allPage_sub_func() {
    include_once PLUGIN_DIR_PATH.'/views/all-pages.php';
}

function database_newPage_sub_func() {
    include_once PLUGIN_DIR_PATH.'/views/add-new-pages.php';
}

add_action('admin_enqueue_scripts', 'my_admin_scripts');

function my_admin_scripts()  {
    wp_enqueue_style('table_style', plugins_url('/assets/css/jquery.dataTables.min.css', __FILE__), array(), '1.0.0', 'all');
    wp_enqueue_script('table_script', plugins_url('/assets/js/jquery.dataTables.min.js', __FILE__), array('jquery'), '1.0.0', true);
    wp_enqueue_script('table_script-init', plugins_url('/assets/js/init.js', __FILE__), array('table_script'), '1.0.0', true);
}

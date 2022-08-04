<?php

/**
 * Plugin Name:       Bid Point
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Md. Sakibur Rahman
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */


global $wpdb;
define('CRUD_PLUGIN_URL', plugin_dir_url(__FILE__));
define('CRUD_PLUGIN_PATH', plugin_dir_path(__FILE__));

register_activation_hook(__FILE__, 'activate_crud_plugin_function');
register_deactivation_hook(__FILE__, 'deactivate_crud_plugin_function');

// activating plugin hook

function activate_crud_plugin_function()
{
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
    $table_name = $wpdb->prefix . 'blogpress';

    $wpdb->query("CREATE TABLE $table_name (
    `id` bigint(11) unsigned NOT NULL AUTO_INCREMENT,
    `title` varchar(255),
    `description` text,
    `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
    `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY  (id)
    ) $charset_collate;");

    $comment_table = $wpdb->prefix . "commentpress";

    $wpdb->query("CREATE TABLE IF NOT EXISTS $comment_table (
        id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        blog_id INT UNSIGNED NOT NULL,
        content TEXT,
        FOREIGN KEY  (blog_id) REFERENCES $comment_table(id)
    ) ENGINE = INNODB
    DEFAULT CHARACTER SET = utf8
    COLLATE = utf8_general_ci");

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta();
}

// deactivating plugin hook

function deactivate_crud_plugin_function()
{
    global $wpdb;
    $blog_table = $wpdb->prefix."blogpress";
    $comment_table = $wpdb->pefix."commentpress";

    $sql1 = "DROP TABLE IF EXISTS $blog_table";
    $sql2 = "DROP TABLE IF EXISTS $comment_table";

    $wpdb->query($sql1);

    $wpdb->query($sql2);
}

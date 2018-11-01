<?php
/**
 * Plugin Name:     My Plugin
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     my-plugin
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         My_Plugin
 */

function my_plugin_load_textdomain() {
	load_plugin_textdomain(
		'my-plugin',
		false,
		basename( __DIR__ ) . '/languages'
	);
};

add_action( 'init', 'my_plugin_load_textdomain' );

require_once __DIR__ . '/post-types/book.php';
require_once __DIR__ . '/taxonomies/chapter.php';

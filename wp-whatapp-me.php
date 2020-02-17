<?php
/**
 * Plugin Name:       WP Whasapp Me
 * Plugin URI:        https://github.com/webmarcello8080/wp-whatapp-me
 * Description:       Send a whatsapp message from your Wordpress website. You can render a message form through shotcode or widget.
 * Version:           1.0.0
 * Requires at least: 4.5.13
 * Requires PHP:      5.6
 * Author:            Marcello Perri
 * Author URI:        http://webmarcello.co.uk
 */


define('PLUGINWMEBASENAME', plugin_basename(__FILE__) );

foreach ( glob( plugin_dir_path( __FILE__ ) .'includes/*.php') as $filename)
{
    include_once $filename;
}

if ( !function_exists( 'wp_whatapp_me_loader' ) ) {
    function wp_whatapp_me_loader(){
        if( is_admin() ){
            $wpWhatappMeAdmin = new WpWhatappMeAdmin;
        }
        $wpWhatappMeShortcode = new WpWhatappMeShortcode;
    }
    add_action('plugins_loaded', 'wp_whatapp_me_loader');
}

// Register and load the widget
if ( !function_exists( 'wp_whatapp_me_load_widget' ) ) {
    function wp_whatapp_me_load_widget() {
        register_widget( 'WpWhatappMeWidget' );
    }
    add_action( 'widgets_init', 'wp_whatapp_me_load_widget' );
}

/* uninstall section */

/* setting plugin in wordpress website */
<?php
/**
 * Plugin Name:       WP Whatsapp Me
 * Plugin URI:        https://github.com/webmarcello8080/wp-whatsapp-me
 * Description:       Send a whatsapp message from your Wordpress website. You can render a message form through shotcode or widget.
 * Version:           1.0.0
 * Requires at least: 4.5.13
 * Requires PHP:      5.6
 * Author:            Marcello Perri
 * Author URI:        http://webmarcello.co.uk
 */

define('PLUGINWMEBASENAME', plugin_basename(__FILE__) );

foreach ( glob( plugin_dir_path( __FILE__ ) .'classes/*.php') as $filename)
{
    include_once $filename;
}

if ( !function_exists( 'wp_whatsapp_me_loader' ) ) {
    function wp_whatsapp_me_loader(){
        if( is_admin() ){
            $wpWhatsappMeAdmin = new WpWhatsappMeAdmin;
        }
        $wpWhatsappMeShortcode = new WpWhatsappMeShortcode;
    }
    add_action('plugins_loaded', 'wp_whatsapp_me_loader');
}

// Register and load the widget
if ( !function_exists( 'wp_whatsapp_me_load_widget' ) ) {
    function wp_whatsapp_me_load_widget() {
        register_widget( 'WpWhatsappMeWidget' );
    }
    add_action( 'widgets_init', 'wp_whatsapp_me_load_widget' );
}
 /* setting plugin in wordpress website */
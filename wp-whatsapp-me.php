<?php
/**
 * Plugin Name:       WP Whatsapp Me
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Send a whatsapp message from your Wordpress website
 * Version:           1.0.0
 * Requires at least: 3.3
 * Requires PHP:      5.6
 * Author:            Marcello Perri
 * Author URI:        http://webmarcello.co.uk
 */


//defined('ASBPATH') or die('You are not allowed here');

foreach ( glob( plugin_dir_path( __FILE__ ) .'classes/*.php') as $filename)
{
    include_once $filename;
}

function wp_whatsapp_me_loader(){
    if( is_admin() ){
        $wpWhatsappMeAdmin = new WpWhatsappMeAdmin;
    }
}
add_action('plugins_loaded', 'wp_whatsapp_me_loader');

 /* dropdown with international phone prefix */

 /* create short cut */

 /* create widjet */

 /* setting plugin in wordpress website */
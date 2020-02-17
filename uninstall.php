<?php

if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

delete_option( 'wp-whatsapp-me-phone-number' );
delete_option( 'wp-whatsapp-me-phone-prefix' );
delete_option( 'wp-whatsapp-me-full-phone-number' );
delete_option( 'wp-whatsapp-me-title' );
delete_option( 'wp-whatsapp-me-text' );
delete_option( 'wp-whatsapp-me-button' );
delete_option( 'wp-whatsapp-me-form-message' );

add_shortcode( 'wp-whatsapp-me', '__return_false' );
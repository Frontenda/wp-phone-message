<?php

if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

delete_option( 'wp-phone-message-phone-number' );
delete_option( 'wp-phone-message-phone-prefix' );
delete_option( 'wp-phone-message-full-phone-number' );
delete_option( 'wp-phone-message-title' );
delete_option( 'wp-phone-message-text' );
delete_option( 'wp-phone-message-button' );
delete_option( 'wp-phone-message-form-message' );

add_shortcode( 'wp-phone-message', '__return_false' );
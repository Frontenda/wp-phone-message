<?php

if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

delete_option( 'wp-whatapp-me-phone-number' );
delete_option( 'wp-whatapp-me-phone-prefix' );
delete_option( 'wp-whatapp-me-full-phone-number' );
delete_option( 'wp-whatapp-me-title' );
delete_option( 'wp-whatapp-me-text' );
delete_option( 'wp-whatapp-me-button' );
delete_option( 'wp-whatapp-me-form-message' );

add_shortcode( 'wp-whatapp-me', '__return_false' );
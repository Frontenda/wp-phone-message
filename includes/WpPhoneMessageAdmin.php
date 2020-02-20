<?php
if ( !class_exists( 'WpPhoneMessageAdmin' ) ) {

    class WpPhoneMessageAdmin {

        public function __construct(){
            add_action( 'admin_menu', array( $this, 'adminMenu' ) );
            add_action( 'admin_post', array( $this, 'adminSave' ) );
            add_action( 'admin_enqueue_scripts', array( $this, 'adminStyle' ) );
        }

        public function adminMenu() {
            add_options_page(
                'WP Phone Message Settings',
                'WP Phone Message',
                'manage_options',
                'wp-phone-message-admin',
                array( $this, 'WhatappMeAdminPage' ),
                91
            );
        }

        public function WhatappMeAdminPage() {
            //show the form
            include_once( PLUGIN_WPM_PATH . 'views/admin-form.php' );
        }
        
        public function adminSave(){
            // save data
            if( ( $_POST['wp-phone-message-phone-number'] ) && ( $_POST['wp-phone-message-phone-prefix'] ) ) {

                $phone = sanitize_text_field( $_POST['wp-phone-message-phone-number'] );
                $prefix = (int) str_replace(' ', '', sanitize_text_field( $_POST['wp-phone-message-phone-prefix'] ));
                $title = sanitize_text_field( $_POST['wp-phone-message-title'] );
                $text = sanitize_text_field( $_POST['wp-phone-message-text'] );
                $button = sanitize_text_field( $_POST['wp-phone-message-button'] );
                $fullPhoneNumber = (int) str_replace(' ', '', $prefix) . (int) str_replace(' ', '', $phone);
                update_option( 'wp-phone-message-phone-number', $phone );
                update_option( 'wp-phone-message-phone-prefix', $prefix );
                update_option( 'wp-phone-message-full-phone-number', $fullPhoneNumber );
                update_option( 'wp-phone-message-title', $title );
                update_option( 'wp-phone-message-text', $text );
                update_option( 'wp-phone-message-button', $button );
                update_option( 'wp-phone-message-form-message', 'Settings saved.');

            }
            else{
                update_option( 'wp-phone-message-form-message', 'International prefix and Whatsapp phone number are required.');
            }

            $this->adminRedirect();
        }

        public function adminRedirect() {
            // redirect at the end of the process
            if(isset( $_POST['_wp_http_referer'] )){
                // redirect the user to the appropriate page
                $url = sanitize_text_field(
                    wp_unslash( $_POST['_wp_http_referer'] ) // Input var okay.
                );
                // Finally, redirect back to the admin page.
                wp_safe_redirect( urldecode( $url ) );
                exit;
            }
            else{
                wp_safe_redirect( urldecode( '/wp-admin' ) );
                exit;
            }
        }

        public function adminStyle() {
            wp_enqueue_style('wp-phone-message-intel-tel', PLUGIN_WPM_URL . 'js/intl-tel-input/build/css/intlTelInput.css', array(), null, 'all' );
            wp_enqueue_script('wp-phone-message-intel-tel', PLUGIN_WPM_URL . 'js/intl-tel-input/build/js/intlTelInput.js' );
            wp_enqueue_style('wp-phone-message-admin', PLUGIN_WPM_URL . 'css/admin.css', array(), null, 'all' );
            wp_enqueue_script('wp-phone-message-admin', PLUGIN_WPM_URL . 'js/admin.js' );
        }

        public function adminCallback() { // Section Callback
            echo '<p>This section is part of WP Phone Message Plugin</p>';
        }
    }
}

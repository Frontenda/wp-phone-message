<?php
if ( !class_exists( 'WpWhatappMeAdmin' ) ) {

    class WpWhatappMeAdmin {

        public function __construct(){
            add_action( 'admin_menu', array( $this, 'adminMenu' ) );
            add_action( 'admin_post', array( $this, 'adminSave' ) );
            add_action( 'admin_enqueue_scripts', array( $this, 'adminStyle' ) );
        }

        public function adminMenu() {
            add_options_page(
                'WP Whasapp Me Settings',
                'WP Whasapp Me',
                'manage_options',
                'wp-whatapp-me-admin',
                array( $this, 'WhatappMeAdminPage' ),
                91
            );
        }

        public function WhatappMeAdminPage() {
            //show the form
            include_once( PLUGINWMEPATH . 'views/admin-form.php' );
        }
        
        public function adminSave(){
            // save data
            if( ( $_POST['wp-whatapp-me-phone-number'] ) && ( $_POST['wp-whatapp-me-phone-prefix'] ) ) {

                $phone = sanitize_text_field( $_POST['wp-whatapp-me-phone-number'] );
                $prefix = (int) str_replace(' ', '', sanitize_text_field( $_POST['wp-whatapp-me-phone-prefix'] ));
                $title = sanitize_text_field( $_POST['wp-whatapp-me-title'] );
                $text = sanitize_text_field( $_POST['wp-whatapp-me-text'] );
                $button = sanitize_text_field( $_POST['wp-whatapp-me-button'] );
                $fullPhoneNumber = (int) str_replace(' ', '', $prefix) . (int) str_replace(' ', '', $phone);
                update_option( 'wp-whatapp-me-phone-number', $phone );
                update_option( 'wp-whatapp-me-phone-prefix', $prefix );
                update_option( 'wp-whatapp-me-full-phone-number', $fullPhoneNumber );
                update_option( 'wp-whatapp-me-title', $title );
                update_option( 'wp-whatapp-me-text', $text );
                update_option( 'wp-whatapp-me-button', $button );
                update_option( 'wp-whatapp-me-form-message', 'Settings saved.');

            }
            else{
                update_option( 'wp-whatapp-me-form-message', 'International prefix and Whatsapp phone number are required.');
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
            wp_enqueue_style('wp-whatapp-me-intel-tel', PLUGINWMEURL . 'js/intl-tel-input/build/css/intlTelInput.css', array(), null, 'all' );
            wp_enqueue_script('wp-whatapp-me-intel-tel', PLUGINWMEURL . 'js/intl-tel-input/build/js/intlTelInput.js' );
            wp_enqueue_style('wp-whatapp-me-admin', PLUGINWMEURL . 'css/admin.css', array(), null, 'all' );
            wp_enqueue_script('wp-whatapp-me-admin', PLUGINWMEURL . 'js/admin.js' );
        }

        public function adminCallback() { // Section Callback
            echo '<p>This section is part of WP Whasapp Me Plugin</p>';
        }
    }
}

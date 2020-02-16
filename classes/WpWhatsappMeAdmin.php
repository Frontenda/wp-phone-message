<?php

 class WpWhatsappMeAdmin {

    public function __construct(){
        add_action( 'admin_menu', array( $this, 'adminMenu' ) );
        add_action( 'admin_post', array( $this, 'adminSave' ) );
        add_action( 'admin_enqueue_scripts', array( $this, 'adminStyle' ) );
    }

    public function adminMenu() {
        add_options_page(
			'WP Whatsapp Me Settings',
			'WP Whatsapp Me',
			'manage_options',
			'wp-whatsapp-me-admin',
			array( $this, 'whatsappMeAdminPage' ),
			91
		);
    }

    public function whatsappMeAdminPage() {
        //show the form
        include_once( PLUGINWMEPATH . 'views/admin-form.php' );
    }
    
    public function adminSave(){
        // save data
        if( ( $_POST['wp-whatsapp-me-phone-number'] ) && ( $_POST['wp-whatsapp-me-phone-prefix'] ) ) {

            $phone = sanitize_text_field( $_POST['wp-whatsapp-me-phone-number'] );
            $prefix = (int) str_replace(' ', '', sanitize_text_field( $_POST['wp-whatsapp-me-phone-prefix'] ));
            $title = sanitize_text_field( $_POST['wp-whatsapp-me-title'] );
            $text = sanitize_text_field( $_POST['wp-whatsapp-me-text'] );
            $button = sanitize_text_field( $_POST['wp-whatsapp-me-button'] );
            $fullPhoneNumber = (int) str_replace(' ', '', $prefix) . (int) str_replace(' ', '', $phone);
            update_option( 'wp-whatsapp-me-phone-number', $phone );
            update_option( 'wp-whatsapp-me-phone-prefix', $prefix );
            update_option( 'wp-whatsapp-me-full-phone-number', $fullPhoneNumber );
            update_option( 'wp-whatsapp-me-title', $title );
            update_option( 'wp-whatsapp-me-text', $text );
            update_option( 'wp-whatsapp-me-button', $button );
            update_option( 'wp-whatsapp-me-form-message', 'Settings saved.');

        }
        else{
            update_option( 'wp-whatsapp-me-form-message', 'International prefix and Whatsapp phone number are required.');
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
        wp_enqueue_style('wp-whatsapp-me-intel-tel', PLUGINWMEURL . 'js/intl-tel-input/build/css/intlTelInput.css', array(), null, 'all' );
        wp_enqueue_script('wp-whatsapp-me-intel-tel', PLUGINWMEURL . 'js/intl-tel-input/build/js/intlTelInput.js' );
        wp_enqueue_style('wp-whatsapp-me-admin', PLUGINWMEURL . 'css/admin.css', array(), null, 'all' );
        wp_enqueue_script('wp-whatsapp-me-admin', PLUGINWMEURL . 'js/admin.js' );
    }

    public function adminCallback() { // Section Callback
        echo '<p>This section is part of WP Whatsapp Me Plugin</p>';
    }
}

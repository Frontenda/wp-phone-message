<?php

 /* admin area */

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
        //echo '<pre>';
        // save data
        if( isset( $_POST['wp-whatsapp-me-phone-number'] ) ) {

            $value = sanitize_text_field( $_POST['wp-whatsapp-me-phone-number'] );
            update_option( 'wp-whatsapp-me-phone-number', $value );
            update_option( 'wp-whatsapp-me-form-message', 'Settings saved.');

        }
        else{
            update_option( 'wp-whatsapp-me-form-message', 'Impossible saving data.');
        }

        // redirect at the end of the process
        if(isset( $_POST['_wp_http_referer'] )){
            // redirect the user to the appropriate page
            $url = sanitize_text_field(
                wp_unslash( $_POST['_wp_http_referer'] ) // Input var okay.
            );
            // Finally, redirect back to the admin page.
            wp_redirect( urldecode( $url ) );
            exit;
        }
        else{
            wp_redirect( urldecode( '/wp-admin' ) );
            exit;
        }
    }

    public function adminStyle() {
        wp_enqueue_style('wp-whatsapp-me-admin', PLUGINWMEURL . 'css/style.css' );
    }

    public function adminCallback() { // Section Callback
        echo '<p>This section is part of WP Whatsapp Me Plugin</p>';
    }
}

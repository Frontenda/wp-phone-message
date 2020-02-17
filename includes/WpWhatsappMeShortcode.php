<?php
if ( !class_exists( 'WpWhatsappMeShortcode' ) ) {

    class WpWhatsappMeShortcode {

        public function __construct(){
            add_action( 'init', array( $this, 'registerShortcode' ));
            add_action( 'wp_enqueue_scripts', array( $this, 'shortcodeStyle' ) );
        }

        public function registerShortcode(){
            add_shortcode('wp-whatsapp-me', array( $this, 'renderShortcode' ));
        }

        public function renderShortcode($atts){
            include_once( PLUGINWMEPATH . 'views/shortcode-form.php' );
        }

        public function shortcodeStyle(){
            wp_enqueue_style('wp-whatsapp-me-shortcode', PLUGINWMEURL . 'css/shortcode.css', array(), null, 'all' );
            wp_enqueue_script('wp-whatsapp-me-shortcode', PLUGINWMEURL . 'js/shortcode.js' );
        }
    }
}
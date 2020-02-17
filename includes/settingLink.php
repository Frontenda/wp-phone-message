<?php

if ( !function_exists( 'wp_whatsapp_me_loader' ) ) {
	function wp_whatsapp_me_settings_link( $links ) {
		$links[] = '<a href="' .
			admin_url( 'options-general.php?page=wp-whatsapp-me-admin' ) .
			'">' . __('Settings', 'wp_whatsapp_me_domain') . '</a>';
		return $links;
	}
	add_filter('plugin_action_links_' . PLUGINWMEBASENAME, 'wp_whatsapp_me_settings_link');
}

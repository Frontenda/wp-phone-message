<?php

if ( !function_exists( 'wp_whatapp_me_loader' ) ) {
	function wp_whatapp_me_settings_link( $links ) {
		$links[] = '<a href="' .
			admin_url( 'options-general.php?page=wp-whatapp-me-admin' ) .
			'">' . __('Settings', 'wp_whatapp_me_domain') . '</a>';
		return $links;
	}
	add_filter('plugin_action_links_' . PLUGINWMEBASENAME, 'wp_whatapp_me_settings_link');
}

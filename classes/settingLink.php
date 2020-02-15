<?php

add_filter('plugin_action_links_' . PLUGINWMEBASENAME, 'wp_whatsapp_me_settings_link');

function wp_whatsapp_me_settings_link( $links ) {
	$links[] = '<a href="' .
		admin_url( 'options-general.php?page=wp-whatsapp-me-admin' ) .
		'">' . __('Settings') . '</a>';
	return $links;
}
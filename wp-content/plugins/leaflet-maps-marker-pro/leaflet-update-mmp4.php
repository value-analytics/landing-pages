<?php
/* Pro 4 Upgrade */
//info prevent file from being accessed directly
if (basename($_SERVER['SCRIPT_FILENAME']) == 'leaflet-update-mmp4.php') { die ("Please do not access this file directly. Thanks!<br/><a href='https://www.mapsmarker.com/go'>www.mapsmarker.com</a>"); }

$mmp4_readme = WP_PLUGIN_DIR . DIRECTORY_SEPARATOR . 'maps-marker-pro' . DIRECTORY_SEPARATOR . 'readme.txt';
$action = isset($_POST['action']) ? $_POST['action'] : '';
$download_url = 'https://www.mapsmarker.com/update-pro4';
echo '<div class="wrap">';
if ( $action == NULL ) {
	if (lmm_validate_license_info(false, true) === true && lmm_validate_license_info() === false) {
		echo '<div class="mmp-dashboard-expired"><strong>' . esc_html__('Warning: your access to updates and support for Maps Marker Pro has expired!', 'mmp') . '<br/>' . sprintf(esc_html__('You need to renew your access to updates and support first before you are able to update to Maps Marker Pro v4.0 - more details at %1$s', 'mmp'), 'https://www.mapsmarker.com/renew/') . '</strong><br />';
	} else {
		if (!file_exists($mmp4_readme)) {
			echo '<h1 style="margin:0 0 12px 0;">' . __('Update to Maps Marker Pro v4.0','lmm') . '</h1>';
			echo '<div style="margin:0;padding:0 6px 0 6px;background-color:#fff;box-shadow:0 1px 1px 0 rgba(0,0,0,.1);overflow:hidden;">';
			echo '<form method="post"><input type="hidden" name="action" value="upgrade_to_mmp4" />';
			wp_nonce_field('pro4-upgrade-nonce');
			echo '<p>Version 4.0 of Maps Marker Pro features a complete object-oriented rewrite of the codebase. While this process took quite a few months to complete, the long-term benefits are absolutely worth it. Not only does the new code dramatically decrease load times and enhance security, but it also makes it much easier for us to fix bugs or implement new features. Please see the release notes at <a href="https://www.mapsmarker.com/v4.0" target="_blank">https://www.mapsmarker.com/v4.0</a> for details.</p>';
			echo '<p>' . sprintf(__('Maps Marker Pro 4 update needs to be installed as separate plugin. If you click the button below, the plugin package will be downloaded from %1$s and installed on your server.','lmm'), '<a href="' . $download_url . '" target="_blank">' . $download_url . '</a>') . '<br/>' . __('After you activated new plugin, your map data needs to be migrated. You can always switch back to v3.1.1 in case you do not like the new version (which we doubt ;-)','lmm') . '</p>';
			if ( current_user_can( 'install_plugins' ) ) {
				echo '<input style="font-weight:bold;margin-bottom:12px;" type="submit" name="submit_upgrade_to_pro_version" value="' . __('Sounds good! I want to update to Maps Marker Pro v4.0 now','lmm') . ' &raquo;" class="submit button-primary" />';
			} else {
				echo '<div class="error" style="padding:10px;"><strong>' . sprintf(__('Warning: your user does not have the capability to install new plugins - please contact your administrator (%1s)','lmm'), '<a href="mailto:' . get_bloginfo('admin_email') . '?subject=' . esc_attr__('Please update the plugin "Maps Marker Pro"','lmm') . '">' . get_bloginfo('admin_email') . '</a>' ) . '</strong></div>';
				echo '<input style="font-weight:bold;" type="submit" name="submit_upgrade_to_pro_version" value="' . __('Sounds good! I want to update to Maps Marker Pro v4.0 now','lmm') . ' &raquo;" class="submit button-secondary" disabled="disabled" />';
			}
			echo '</form>';
		} else if (file_exists($mmp4_readme)) {
			$mmp4_version_metadata = get_plugin_data(WP_PLUGIN_DIR . DIRECTORY_SEPARATOR . 'maps-marker-pro' . DIRECTORY_SEPARATOR . 'maps-marker-pro.php');
			echo '<h1 style="margin:0 0 12px 0;">' . __('Update to Maps Marker Pro v4.0','lmm') . '</h1>';
			echo '<div style="margin:0;padding:0 6px 0 6px;background-color:#fff;box-shadow:0 1px 1px 0 rgba(0,0,0,.1);overflow:hidden;">';
			echo '<div class="error" style="padding:10px;"><strong>' . sprintf(__('You already downloaded "Maps Marker Pro v%s" to your server but did not activate the plugin yet!','lmm'), $mmp4_version_metadata['Version']) . '</strong></div>';
			if ( current_user_can( 'install_plugins' ) ) {
				echo '<p>' . sprintf(__('Please navigate to <a href="%1$s">Plugins / Installed Plugins</a>, deactivate the plugin "Maps Marker Pro" Version 3.1.1 first and then activate the plugin "Maps Marker Pro" Version %2$s','lmm'), LEAFLET_WP_ADMIN_URL . 'plugins.php', $mmp4_version_metadata['Version']) . '</p>';
			} else {
				echo '<p>' . sprintf(__('Please contact your administrator (%1$s) to first deactivate the plugin "Maps Marker Pro" Version 3.1.1 and then to activate the plugin "Maps Marker Pro" Version %2$s','lmm'), '<a href="mailto:' . get_bloginfo('admin_email') . '?subject=' . esc_attr__('Please activate the plugin "Maps Marker Pro"','lmm') . '">' . get_bloginfo('admin_email') . '</a>', $mmp4_version_metadata['Version'] ) . '</p>';
			}
		}
	}
} else {
	if (!wp_verify_nonce( $_POST['_wpnonce'], 'pro4-upgrade-nonce') ) { wp_die('<br/>'.__('Security check failed - please call this function from the according admin page!','lmm').''); };
	if ($action == 'upgrade_to_mmp4') {
		include_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
		add_filter( 'https_ssl_verify', '__return_false' ); //info: otherwise SSL error on localhost installs.
		add_filter( 'https_local_ssl_verify', '__return_false' ); //info: not sure if needed, added to be sure
		$upgrader = new Plugin_Upgrader( new Plugin_Upgrader_Skin() );
		$upgrader->install( $download_url );
		//info: check if download was successful
		$mmp4_readme = WP_PLUGIN_DIR . DIRECTORY_SEPARATOR . 'maps-marker-pro' . DIRECTORY_SEPARATOR . 'readme.txt';
		if (file_exists($mmp4_readme)) {
			$mmp4_version_metadata = get_plugin_data(WP_PLUGIN_DIR . DIRECTORY_SEPARATOR . 'maps-marker-pro' . DIRECTORY_SEPARATOR . 'maps-marker-pro.php');
			echo '<div class="notice notice-info"><p>' . sprintf(__('Now please deactivate "Maps Marker Pro" Version 3.1.1 <a href="%1$s">on the plugins page</a> first and then activate "Maps Marker Pro" Version %2$s','lmm'), LEAFLET_WP_ADMIN_URL . 'plugins.php', $mmp4_version_metadata['Version']) . '</div>';
		} else {
			echo '<p>' . sprintf(__('The pro plugin package could not be downloaded automatically. Please download the plugin from <a href="%1$s">%2$s</a> and upload it to the directory /wp-content/plugins on your server manually','lmm'), $download_url, $download_url) . '</p>';
		}
	}
}
echo '</div>';
echo '</div>';

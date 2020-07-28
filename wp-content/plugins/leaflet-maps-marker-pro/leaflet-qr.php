<?php
/*
    QR code generator - Maps Marker Pro
*/
//info redirect to permalink if file is being accessed directly
if (basename($_SERVER['SCRIPT_FILENAME']) == 'leaflet-qr.php') {
	while (!is_file('wp-load.php')) {
		if (is_dir('..' . DIRECTORY_SEPARATOR)) {
			chdir('..' . DIRECTORY_SEPARATOR);
		} else {
			die('Error: Could not construct path to wp-load.php - please check <a href="https://www.mapsmarker.com/path-error">https://www.mapsmarker.com/path-error</a> for more details');
		}
	}
	require_once('wp-load.php');
	if (isset($_GET['layer'])) {
		$layer = intval($_GET['layer']);
		unset($_GET['layer']);
		$argv = (!empty($_GET)) ? '?' . http_build_query($_GET) : '';
		wp_redirect(MMP_Globals::translate_permalink(MMP_Rewrite::get_base_url() . MMP_Rewrite::get_slug() . '/qr/layer/' . $layer . '/' . $argv), 301);
	} elseif (isset($_GET['marker'])) {
		$marker = intval($_GET['marker']);
		unset($_GET['marker']);
		$argv = (!empty($_GET)) ? '?' . http_build_query($_GET) : '';
		wp_redirect(MMP_Globals::translate_permalink(MMP_Rewrite::get_base_url() . MMP_Rewrite::get_slug() . '/qr/marker/' . $marker . '/' . $argv), 301);
	}
	exit;
}

//info: check if plugin is active (didnt use is_plugin_active() due to problems reported by users)
function lmm_is_plugin_active( $plugin ) {
	$active_plugins = get_option('active_plugins');
	$active_plugins = array_flip($active_plugins);
	if ( isset($active_plugins[$plugin]) || lmm_is_plugin_active_for_network( $plugin ) ) { return true; }
}
function lmm_is_plugin_active_for_network( $plugin ) {
	if ( !is_multisite() )
		return false;
	$plugins = get_site_option( 'active_sitewide_plugins');
	if ( isset($plugins[$plugin]) )
				return true;
	return false;
}
if (!lmm_is_plugin_active('leaflet-maps-marker-pro/leaflet-maps-marker.php') ) {
	echo sprintf(__('The plugin "Maps Marker Pro" is inactive on this site and therefore this API link is not working.<br/><br/>Please contact the site owner (%1s) who can activate this plugin again.','lmm'), antispambot(get_bloginfo('admin_email')) );
} else {
	$lmm_options = get_option( 'leafletmapsmarker_options' );
	$lmm_base_url = MMP_Rewrite::get_base_url();
	$lmm_slug = MMP_Rewrite::get_slug();
	if (get_query_var('layer', false)) {
		$filename = 'layer-' . intval(get_query_var('layer')) . '.png';
		$url = MMP_Globals::translate_permalink($lmm_base_url . $lmm_slug . '/fullscreen/layer/' . intval(get_query_var('layer')) . '/');
	} else if (get_query_var('marker', false)) {
		$filename = 'marker-' . intval(get_query_var('marker')) . '.png';
		$url = MMP_Globals::translate_permalink($lmm_base_url . $lmm_slug . '/fullscreen/marker/' . intval(get_query_var('marker')) . '/');
	}
	$google_qr_link = 'https://chart.googleapis.com/chart?chs=' . intval($lmm_options[ 'misc_qrcode_size' ]) . 'x' . intval($lmm_options[ 'misc_qrcode_size' ]) . '&cht=qr&chl=' . $url;
	echo '<script type="text/javascript">window.location.href = "' . $google_qr_link . '";</script>  ';
} //info: end plugin active check

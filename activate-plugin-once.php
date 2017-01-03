<?php

//put into the template functions.php

if (is_admin() && !is_plugin_active('my-custom-plugin/my-custom-plugin.php') && get_option('my-custom-plugin-enabled', '') == '') {
	$pluginActivationResult = activate_plugin('my-custom-plugin/my-custom-plugin.php');
	if (!is_wp_error($pluginActivationResult)) {
		update_option('my-custom-plugin-enabled', 'true');
	}
}
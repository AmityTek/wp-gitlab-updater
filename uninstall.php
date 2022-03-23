<?php
/**
 * Uninstall routine
 *
 * @package App\GitLabUpdater
 * @author  AmityTek
 */

namespace App\GitLabUpdater;

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	die;
}

// Delete the options.
delete_site_option( 'wp-gitlab-updater-themes' );
delete_site_option( 'wp-gitlab-updater-plugins' );
delete_option( 'wp-gitlab-updater-themes' );
delete_option( 'wp-gitlab-updater-plugins' );

<?php
/**
 * Lib for updating themes and plugins from private GitLab repos.
 *
 * @package   App\GitLabUpdater
 * @author    AmityTek
 * @license   GPL-2.0+
 * @link      https://reputabox.com
 * @copyright 2022 AmityTek
 */

/**
 * Plugin Name:       GitLab updater
 * Plugin URI:        https://github.com/AmityTek/wp-gitlab-updater
 * Description:       Plugin for updating themes and plugins from private GitLab repos.
 * Version:           2.0.2
 * Author:            AmityTek
 * Author URI:        https://reputabox.com
 * License:           GPL-2.0+
 * Network:           true
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: App/wp-gitlab-updater
 */

namespace App\GitLabUpdater;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Include classes.
require_once 'src/updater-base.php';
require_once 'src/settings.php';
require_once 'src/plugin-updater.php';
require_once 'src/theme-updater.php';

// Init plugin.
new UpdaterBase();

<?php
/**
 * The kilinjal plugin
 * This is a plugin for browser client, to manage data in tabular format
 * from REST end point.
 * kilinjal is named after my village in karaikal, India,
 * PHP version 7.4.0
 *
 * @category  PHP
 * @package   Kilinjal
 * @author    Gunabalan <gunabalans@yahoo.com>
 * @copyright 2020 Gunabalan
 * @license   http://www.gnu.org/licenses/gpl-2.0.txt GPL-2.0-or-later
 * @version   GIT: 1.0.0
 * @link      https://netkathir.com
 *
 * @wordpress-plugin
 * Plugin Name:       kilinjal
 * Plugin URI:        https://netkathir.com
 * Description:       This is a wordpress plugin to manage JSON data
 *                    in tabular format from REST end point
 * Version:           1.0.0
 * Requires PHP:      5.6.40
 * Author:            Gunabalan
 * Author URI:        https://github.com/gunabalans
 * Text Domain:       kilinjal
 * Domain Path:       /languages
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */
use Kilinjal\Lib\Plugin_Manager;
use Kilinjal\Lib\Menu_Manager;

// Exit if accessed directly
defined('ABSPATH') || exit;
define('WP_DEBUG', true);

require_once __DIR__. '/vendor/autoload.php';

//manage plugins activation
$plugin_manager = new Plugin_Manager();
register_activation_hook(__FILE__, array($plugin_manager,'createPageOnActivate'));

//here we call menu manager
new Menu_Manager();

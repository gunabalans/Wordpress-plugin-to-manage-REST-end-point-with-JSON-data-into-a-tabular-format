<?php
/**
 * Manage menu
 *
 * Manage all the menu link creation functions
 *
 * PHP version 5
 *
 * @category Menu
 * @package  Kilinjal\Lib
 * @author   Gunabalan S <gunabalans@yahoo.com>
 * @license  GPL v2 or later
 * @link     https://github.com/gunabalans
 * @date     2020-03-25 08:08:45
 */

namespace Kilinjal\Lib;

/**
 * Menu_Manager manages all the menu in the plugin
 *
 * @category Menu
 * @package  Kilinjal\Lib
 * @author   Gunabalan S <gunabalans@yahoo.com>
 * @license  GPL v2 or later
 * @link     https://github.com/gunabalans
 */
class Menu_Manager extends Page_Manger
{
    /**
     * __construct
     *
     * @return void
     */
    function __construct()
    {
        add_action('init', array(&$this,'registerShortcodes'));
        add_action('admin_menu', array(&$this,'jsonTableMenu'));
    }
    

    /**
     * Create short code to json table page
     *
     * @return void
     */
    function registerShortcodes()
    {
        add_shortcode('kilinjal-user-list', array(&$this,'jsonTablePage'));
    }


    /**
     * Jsontable menu link
     *
     * @return void
     */
    function jsonTableMenu()
    {
        add_menu_page(
            'Json Table',
            'Kilinjal Json Table',
            'manage_options',
            'kilinjal-json-table',
            array(&$this,'jsonTablePage')
        );
    }

}//End Class

<?php
/**
 * Manage Pages
 *
 *  Manage all the menu link creation functions
 *
 * PHP version 5
 *
 * @category Page
 * @package  Kilinjal\Lib
 * @author   Gunabalan S <gunabalans@yahoo.com>
 * @license  GPL v2 or later
 * @link     https://github.com/gunabalans
 * @date     2020-03-25 08:08:45
 */


namespace Kilinjal\Lib;

/**
 * Page_Manger manages all the pages in the plugin
 *
 * @category Page
 * @package  Kilinjal\Lib
 * @author   Gunabalan S <gunabalans@yahoo.com>
 * @license  GPL v2 or later
 * @link     https://github.com/gunabalans
 */
class Page_Manger
{
    
    /**
     * My custom menu page
     *
     * @return void
     */
    public function jsonTablePage()
    {
        wp_enqueue_style(
            'kilinjal_tingle_model_css',
            dirname(plugin_dir_url(__FILE__)) . '/assets/css/tingle.css',
            array(),
            null,
            'all'
        );


        wp_enqueue_style(
            'kilinjal_custom_css',
            dirname(plugin_dir_url(__FILE__)) . '/assets/css/style.css',
            array(),
            null,
            'all'
        );

       
        wp_register_script(
            'myjquery',
            'https://code.jquery.com/jquery-3.3.1.js',
            false,
            '2.1.1',
            true
        );


        wp_enqueue_script(
            'kilinjal_tingle_model_js',
            dirname(plugin_dir_url(__FILE__)) . '/assets/js/tingle.js',
            array('myjquery'),
            '1.0',
            true
        );
            
        wp_enqueue_script(
            'kilinjal_custom_js',
            dirname(plugin_dir_url(__FILE__)) . '/assets/js/script.js',
            array('myjquery'),
            '1.0',
            true
        );
        
        $container =  '<div id="grid" style="width: 100%;">';
        echo  $container;
    }
}//close class
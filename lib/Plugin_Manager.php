<?php
/**
 * Manage Plugin
 *
 *  Manage Plugin clean up and init process
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
 * Plugin_Manager manages plugin`s 
 * activation and de-activation process
 *
 * @category Plugin
 * @package  Kilinjal\Lib
 * @author   Gunabalan S <gunabalans@yahoo.com>
 * @license  GPL v2 or later
 * @link     https://github.com/gunabalans
 */
class Plugin_Manager
{

    /**
     * It is required to create a pae on plugin activation
     * This finction is create a page 
     * and it is called on plugin activation 
     * 
     * @return void
     */    
    function createPageOnActivate()
    {
        $page_id =   'kilinjal_user_listing_page_id';
        $page_title = 'User List';  
        $page_id_exists = get_option($pageId);

        if (!$page_id_exists ) {
            $user    = get_current_user_id();
            $post    = array(
                'post_author'  => $user,
                'post_title'   => $page_title,
                'post_status'  => 'publish',
                'post_content' => '[kilinjal-user-list]',
                'post_type'    => 'page',
            );
            //create post
            $post_id = wp_insert_post($post);
            
            if (! empty($post_id) && ! is_wp_error($post_id) ) {
                update_option($page_id, $post_id);
            }
        }
    }//close


}//close plugin manager

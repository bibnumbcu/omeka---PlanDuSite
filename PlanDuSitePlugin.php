<?php 
/**
 * @version $Id$
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 * @copyright Bibliothèque Université Clermont Auvergne
 * @package PlanDusite
 */

 // Define Constants.
define('PLAN_DU_SITE_PAGE_PATH', 'plandusite');
define('PLAN_DU_SITE_PAGE_TITLE', 'Plan du site');
define('PLAN_DU_SITE_ADD_TO_MAIN_NAVIGATION', 1);
define('PLAN_DU_SITE_ADD_MAIN_NAVIGATION_MENU', 0);
define('PLAN_DU_SITE_ADD_EXHIBIT_BUILDER_PLUGIN', 0);
define('PLAN_DU_SITE_ADD_COLLECTION_TREE_PLUGIN', 0);
define('PLAN_DU_SITE_ADD_SIMPLE_PAGE_PLUGIN', 0);
define('PLAN_DU_SITE_ADD_SIMPLE_CONTACT_FORM_PLUGIN', 0);

class PlanDuSitePlugin extends Omeka_Plugin_AbstractPlugin{

    // Define Hooks
    protected $_hooks = array(
        'install',
        'uninstall',
        'define_routes',
        'config_form',
        'config'
    );

    //Add filters
    protected $_filters = array(
        'public_navigation_main'
    );

    public function hookInstall()
    {
        set_option('plan_du_site_page_title', PLAN_DU_SITE_PAGE_TITLE);
        set_option('plan_du_site_add_to_main_navigation', PLAN_DU_SITE_ADD_TO_MAIN_NAVIGATION);
        set_option('plan_du_site_add_main_navigation_menu', PLAN_DU_SITE_ADD_MAIN_NAVIGATION_MENU);
        set_option('plan_du_site_add_exhibit_builder_plugin', PLAN_DU_SITE_ADD_EXHIBIT_BUILDER_PLUGIN);
        set_option('plan_du_site_add_collection_tree_plugin', PLAN_DU_SITE_ADD_COLLECTION_TREE_PLUGIN);
        set_option('plan_du_site_add_simple_page_plugin', PLAN_DU_SITE_ADD_SIMPLE_PAGE_PLUGIN);
        set_option('plan_du_site_add_simple_contact_form_plugin', PLAN_DU_SITE_ADD_SIMPLE_CONTACT_FORM_PLUGIN);        
    }

    public function hookUninstall()
    {
        delete_option('plan_du_site_page_path');
        delete_option('plan_du_site_page_title');    
        delete_option('plan_du_site_add_to_main_navigation');
        delete_option('plan_du_site_add_main_navigation_menu');
        delete_option('plan_du_site_add_exhibit_builder_plugin');
        delete_option('plan_du_site_add_collection_tree_plugin');
        delete_option('plan_du_site_add_simple_page_plugin');
        delete_option('plan_du_site_add_simple_contact_form_plugin');  
    }

    /**
     * Add route for the plandusite page
     **/
    function hookDefineRoutes($args)
    {
        $router = $args['router'];

        $router->addRoute(
            'plan_du_site_index', 
            new Zend_Controller_Router_Route(
                'plandusite', 
                array(
                    'module'       => 'plan-du-site', 
                    'controller'   => 'index', 
                    'action'       => 'index', 
                )
            )
        );
    }

    public function hookConfigForm() 
    {
        include 'config_form.php';
    }

    public function hookConfig($args)
    {
        $post = $args['post'];
        set_option('plan_du_site_page_title', $post['plan_du_site_page_title']);        
        set_option('plan_du_site_add_to_main_navigation', $post['plan_du_site_add_to_main_navigation']);
        set_option('plan_du_site_add_main_navigation_menu', $post['plan_du_site_add_main_navigation_menu']); 
        set_option('plan_du_site_add_exhibit_builder_plugin', $post['plan_du_site_add_exhibit_builder_plugin']); 
        set_option('plan_du_site_add_collection_tree_plugin', $post['plan_du_site_add_collection_tree_plugin']);
        set_option('plan_du_site_add_simple_page_plugin', $post['plan_du_site_add_simple_page_plugin']); 
        set_option('plan_du_site_add_simple_contact_form_plugin', $post['plan_du_site_add_simple_contact_form_plugin']); 
    }

    public function filterPublicNavigationMain($nav)
    {
        $page_title = get_option('plan_du_site_page_title');
        $add_to_navigation = get_option('plan_du_site_add_to_main_navigation');
        if ($add_to_navigation) {
                $nav[] = array(
                    'label'   => $page_title,
                    'uri'     => url(array(), 'plan_du_site_index'),
                    'visible' => true
                );
        }
        return $nav;
    }
}

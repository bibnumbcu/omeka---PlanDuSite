<?php 
/**
 * @version $Id$
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 * @copyright Bibliothèque Université Clermont Auvergne
 * @package PlanDusite
 */

class PlanDuSitePlugin extends Omeka_Plugin_AbstractPlugin{

    // Define Hooks
    protected $_hooks = array(
        'define_routes'
    );

    //Add filters
    protected $_filters = array(
        'public_navigation_main'
    );

    /**
     * Adds 2 routes for the form and the thank you page.
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

    public function filterPublicNavigationMain($nav)
    {
        $contact_title = 'Plan du site';
    
        $nav[] = array(
            'label'   => $contact_title,
            'uri'     => url(array(),'plan_du_site_index'),
            'visible' => true
        );
        
        return $nav;
    }
}

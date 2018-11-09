<?php
/**
 * @copyright Biliothèque Université Clermont Auvergne
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 * @package PlanDuSite
 */

 /**
 * Controller for Site map page
 *
 * @package PlanDuSite
 */
class PlanDuSite_IndexController extends Omeka_Controller_AbstractActionController
{
    public function indexAction()
    {
        $collections = get_records('Collection', array('public'=>1), 100);
     
        if (get_option('plan_du_site_add_exhibit_builder_plugin')){
            $exhibits = get_records('Exhibit', array('public'=>1), 100);
            $this->view->exhibits = $exhibits;
        }

        if (get_option('plan_du_site_add_simple_page_plugin')){
            $simplepages = get_records('SimplePagesPage', array('is_published'=>1), 100);
             $this->view->simplepages = $simplepages;
        }

        if (get_option('plan_du_site_add_collection_tree_plugin')){
            $this->view->collectiontree =  $this->view->collectionTreeFullList();
        }

        if (get_option('plan_du_site_add_simple_contact_form_plugin')){
            $this->view->simplecontactformpath = SIMPLE_CONTACT_FORM_PAGE_PATH;
        }

        $this->view->collections = $collections;
    }
}
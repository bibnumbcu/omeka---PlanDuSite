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
        //$collectionTable = $this->_helper->db->getTable('Collection')->findAll();
        $collections = get_records('Collection', array('public'=>1), 100);
     
        $this->view->collections = $collections;

       

        // $collectionTable = $this->_helper->db->getTable('Collection');
        // $select = $collectionTable->getSelect();
        
        // $select->where("public", 1);
        // $collections = $this->fetchObject($select);
        // $this->view->collections = $collections;
    }
}
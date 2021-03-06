<?php
/** 

 * Quickshop block 

 * 

 * @category Brainvire 

 * @package Brainvire_Quickshop

* @copyright Copyright (c) 2015 Brainvire Infotech Pvt Ltd
 
 * 
 */
class Brainvire_Quickshop_Block_Quickshop extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getQuickshop()     
     { 
        if (!$this->hasData('quickshop')) {
            $this->setData('quickshop', Mage::registry('quickshop'));
        }
        return $this->getData('quickshop');
        
    }
}
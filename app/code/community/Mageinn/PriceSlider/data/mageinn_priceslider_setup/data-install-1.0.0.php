<?php
/**
 * Mageinn_PriceSlider extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category    Mageinn
 * @package     Mageinn_PriceSlider
 * @copyright   Copyright (c) 2016 Mageinn. (http://mageinn.com/)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */


/**
 * @category   Mageinn
 * @package    Mageinn_PriceSlider
 * @author     Mageinn
 */

$installer = $this;
$installer->startSetup();

$helper = Mage::helper('mageinn_core');
$notification = Mage::getModel('adminnotification/inbox');

$cls1 = $helper->checkRewrite('catalog/layer_filter_price');
$cls2 = $helper->checkRewrite('catalog_resource/layer_filter_price');
        
if($cls1 != 'Mageinn_PriceSlider_Model_Catalog_Layer_Filter_Price' || $cls2 != 'Mageinn_PriceSlider_Model_Catalog_Resource_Layer_Filter_Price') {
    // error
    $notification->addCritical('Problem with Mageinn PriceSlider','Mageinn PriceSlider was installed, but some conflicts were detected on your store. Please contact our support team at <a href="mailto:sales@mageinn.com">sales@mageinn.com</a>.');
} else {
    // success
    $notification->addNotice('Mageinn PriceSlider was successfully installed!','Mageinn PriceSlider was successfully installed on your store. Please log out and log in again.');
}

$installer->endSetup();
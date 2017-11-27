<?php 
require_once 'app/Mage.php';
		Mage::app('admin');
		$j = 0;
		$img=$sku=$filename=array(); 
		$_product = Mage::getModel('catalog/product')->loadByAttribute('sku','custom_design1');
        
        
        $media = Mage::getModel('catalog/product_attribute_media_api');
	$count = 0;

	
		$sku=$sk="custom_design1";
		
	
		
  $productid = Mage::getModel('catalog/product')
	                  ->getIdBySku(trim($sk));
 

$product = Mage::getModel('catalog/product');
 

$product ->load($productid);
    
    if ($product->getId() > 0)
    {
		

		$count++;

		$mediaApi = Mage::getModel("catalog/product_attribute_media_api");
		$items = $mediaApi->items($product->getId());
		
				
			foreach($items as $item)
			{
			
				//print_r($item['file']);
				//echo"--------------";
				//echo "<br/>";
				//print_r($item['label']);
				//echo "<br/>";
				
			}  
			


	
    }


?>
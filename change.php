<?php
include 'app/Mage.php';
Mage::app();
// Need for start the session
Mage::getSingleton('core/session', array('name' => 'frontend'));

try {
    $product_id = '2'; // Replace id with your product id
    $qty = '1'; // Replace qty with your qty
    $product = Mage::getModel('catalog/product')->load($product_id);
	$opt_plck = "Type 2";
	$opt_base_fab = "Fabric 2";
	$opt_con_fab = "Con Fabric 2";
foreach($product->getOptions() as $o)

{
	
	$option = $o->getData();
	$option_title = $option['default_title'];
	if($option_title == "Base Fabric")
	{
		$option_base_title_id =  $option['option_id'];
		
	}
	if($option_title == "Contast Fabric")
	{
	 $option_contast_title_id =  $option['option_id'];
		
	}
	if($option_title == "Placket Type")
	{
		 $option_placket_title_id =  $option['option_id'];
		
	}
	if($option_title == "Emboroidery")
	{
		$option_em_title_id =  $option['option_id'];
		
	}
	$optionType = $o->getType();
	if ($optionType == 'area') 
	{
		$values = $o->getValues();
		
	}
	if ($optionType == 'drop_down') 
	{
       $values = $o->getValues();

            foreach ($values as $k => $v) 
			{
				$ipt_title = $v->getData();
				//print_r($ipt_title);
				if($ipt_title['default_title'] ==$opt_plck)
				{
					$opt_plck_id = $ipt_title['option_type_id'];
					
					//echo "placket id is ".$opt_plck_id."<br/>";
					
				}
				if($ipt_title['default_title'] ==$opt_base_fab)
				{
				 $opt_base_fab = $ipt_title['option_type_id'];
				 
				// echo "base fab id is ".$opt_base_fab."<br/>";
				
				}
				if($ipt_title['default_title'] ==$opt_con_fab)
				{
				 $opt_con_fab = $ipt_title['option_type_id'];
				 //echo "con fab id is ".$opt_con_fab."<br/>";
				
				}
            }
     }
	
}	

	$cart = Mage::getModel('checkout/cart');
    $cart->init();
    $cart->addProduct($product, array('qty' => $qty,'options' => array(
        $option_em_title_id => 'black gloss finish',
		$option_base_title_id => $opt_base_fab,
		 $option_contast_title_id=> $opt_con_fab,
		$option_placket_title_id => $opt_plck_id,
     ),));
    $cart->save();
    Mage::getSingleton('checkout/session')->setCartWasUpdated(true);
    Mage::getSingleton('core/session')->addSuccess('Product added successfully');
   header('Location: ' . 'index.php/checkout/cart/');
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
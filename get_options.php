<?php
require_once 'app/Mage.php'; 

umask(0);  
Mage::init('default');
$product_id = 2;
 $obj = Mage::getModel('catalog/product');
$product = $obj->load($product_id);
$opt1 = "Type 1";
foreach($product->getOptions() as $o)

{
	echo "<pre>";
	print_r($o->getData());
	$optionType = $o->getType();
	if ($optionType == 'area') 
	{
		$values = $o->getValues();
		//print_r($values);
	}
	if ($optionType == 'drop_down') 
	{
       $values = $o->getValues();

            foreach ($values as $k => $v) 
			{
				$ipt_title = $v->getData();
				
				if($ipt_title['default_title'] ==$opt1)
				{
					$final_options = $opt1;
					//echo $final_options."<br/>";
					//echo $ipt_title['option_id'];
				}
				
            }
     }
	
}	
			
		
    ?>

<?php
include 'app/Mage.php';
Mage::app();
// Need for start the session


$designname = $_REQUEST['desname'] ;

$emdtext = $_REQUEST['emdtext'];

$measurement_size = $_REQUEST['measurement_size'];
$slim_or_normal = $_REQUEST['slim_or_normal'];

$rqst_data = $_REQUEST['rqst_data'];

$finalNocontrast = $_REQUEST['finalNocontrast'];

$emdColor = $_REQUEST['emdColor'];

Mage::getSingleton('core/session', array('name' => 'frontend'));
$product = Mage::getModel('catalog/product')->loadByAttribute('name', $designname);
$dadaarray = $product->getData();
//print_r($dadaarray['entity_id']);
    $product_id = $dadaarray['entity_id']; // Replace id with your product id
    $qty = '1'; // Replace qty with your qty
    $product = Mage::getModel('catalog/product')->load($product_id);
	//$opt_plck = "Type 2";
	 $opt_base_fab = $_REQUEST['fabcode_alt'];
	$opt_con_fab = $_REQUEST['confabcode_alt'];
	 $opt_plck = $_REQUEST['sleev'];

	$image =$_REQUEST['newData'];

//$opt_plck = "Short Sleeve";
	 
	
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
	if($option_title == "Customize Sleeve")
	{
	 $option_placket_title_id =  $option['option_id'];
		
	}
	if($option_title == "Emboroidery")
	{
		$option_em_title_id =  $option['option_id'];
		
	}
	
	if($option_title == "Fit")
	{
	$option_fit_title_id =  $option['option_id'];
		
	}
	if($option_title == "Size")
	{
	$option_size_title_id =  $option['option_id'];
		
	}
	
	if($option_title == "Add a special request")
	{
	$option_rqst_title_id =  $option['option_id'];
		
	}
	if($option_title == "Embroidery Color")
	{
	$option_emd_color_title_id =  $option['option_id'];
		
	}
	if($option_title == "No contrast")
	{
	$option_nocon_title_id =  $option['option_id'];
		
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
				if($ipt_title['default_title'] == $opt_plck)
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
				if($ipt_title['default_title'] == $measurement_size)
				{
				$opt_slim_fit = $ipt_title['option_type_id'];
				 //echo "con fab id is ".$opt_con_fab."<br/>";
				
				}
				if($ipt_title['default_title'] == $slim_or_normal)
				{
				 $opt_fit = $ipt_title['option_type_id'];
				 //echo "con fab id is ".$opt_con_fab."<br/>";
				
				}
				if($ipt_title['default_title'] == $measurement_size)
				{
				 $opt_size = $ipt_title['option_type_id'];
				 //echo "con fab id is ".$opt_con_fab."<br/>";
				
				}
				if($ipt_title['default_title'] == $emdColor)
				{
				 $opt_color = $ipt_title['option_type_id'];
				 //echo "con fab id is ".$opt_con_fab."<br/>";
				
				}
				if($ipt_title['default_title'] == $finalNocontrast)
				{
				 $opt_nocon = $ipt_title['option_type_id'];
				 //echo "con fab id is ".$opt_con_fab."<br/>";
				
				}
            }
     }
	
}	

	$cart = Mage::getModel('checkout/cart');
    $cart->init();
    $cart->addProduct($product, array('qty' => $qty,'options' => array(
        $option_em_title_id => $emdtext,
		$option_rqst_title_id =>$rqst_data,
		$option_base_title_id => $opt_base_fab,
		 $option_contast_title_id=> $opt_con_fab,
		$option_placket_title_id => $opt_plck_id,
		$option_fit_title_id =>$opt_fit,
		$option_size_title_id=>$opt_size,
		$option_emd_color_title_id=>$opt_color,
		$option_nocon_title_id=>$opt_nocon,
     ),));
    $cart->save();
	
    Mage::getSingleton('checkout/session')->setCartWasUpdated(true);
    Mage::getSingleton('core/session')->addSuccess('Product added successfully');
   
$resource = Mage::getSingleton('core/resource');
      $writeConnection = $resource->getConnection('core_write');
	  $connection = Mage::getSingleton('core/resource')->getConnection('core_read');
	  
$customer_id=Mage::getSingleton('customer/session')->getId();

$imagename = rand();
 
 //$img ='<img src="'.$newData.'">';
 $sql ="INSERT INTO `dev-vertical`.`custom_cart_image` (id, `customer_id`, `image_name`, `time`) VALUES ('', '$customer_id', '$imagename', CURRENT_TIMESTAMP)";
$writeConnection->query($sql);
   //echo "succesfully added to cart";
   $filedir='/home/uniterrene2015/public_html/dev/vertical-menswere/customize_shirt_images/';

$name=time();

$image = str_replace('data:application/octet-stream;base64','',$image);

$decode  =base64_decode($image);

file_put_contents($filedir."/".$imagename.".png",$decode, LOCK_EX);

//echo "Product Added !!!";

echo Mage::helper('checkout/cart')->getSummaryCount();


?>

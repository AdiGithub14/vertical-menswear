<?php
require_once 'app/Mage.php'; 

umask(0);  
Mage::init('default');
       
  
      
$sleev = $_REQUEST['sleev'];  
   $slim_or_normal = $_REQUEST['slim_or_normal'];  
$measurement_size = $_REQUEST['measurement_size'];  
 //$rqst_data = $_REQUEST['rqst_data'];  
//$desname = $_REQUEST['desname'];  
//$emdtext = $_REQUEST['emdtext'];  

      
      
 $design = $_REQUEST['design'];
	 $type = $_REQUEST['show'];
	 
	 $newdata = $_REQUEST['newData'];
	$custom_design_name = $_REQUEST['custom_design_name'];
	 
	$imagename = rand();
	 
	 $filedir='/home/uniterrene2015/public_html/dev/vertical-menswere/save_images/';

$name=time();

$image = str_replace('data:application/octet-stream;base64','',$newdata);

$decode  =base64_decode($image);

file_put_contents($filedir."/".$imagename.".png",$decode, LOCK_EX);
	 
	
		
	 $date =date("Y/m/d");

 date_default_timezone_set('Asia/Jakarta');
 $time= date('h:i:sa') ;

		 $contrastFabric = $_REQUEST['contrastFabric'];
		 $baseFabric = $_REQUEST['baseFabric'];
		
		
	
	//echo $design = $_REQUEST['design'];
			$resource = Mage::getSingleton('core/resource');
      $writeConnection = $resource->getConnection('core_write');
		//echo $_REQUEST['show'];
		Mage::getSingleton('core/session', array('name' => 'frontend'));

		$sessionCustomer = Mage::getSingleton("customer/session");

if($sessionCustomer->isLoggedIn()) {
  //echo "Logged";
} else {
   echo "Please login. Go to the http://www.uniterreneprojects.com/dev/vertical-menswere/customer/account/login/";
    exit();
}
 Mage::getSingleton('customer/session')->getId();
$customer_id=Mage::getSingleton('customer/session')->getId();
//echo "<pre>";
//print_r($customer_data);


$sql ="INSERT INTO `dev-vertical`.`custmize_shirt` (`customer id`, `data`, `design`, `date`, `time`,`base_fabric`,`contast_fabric`,`imagename`,`customize_design_name`,`sleev`,`slim_or_normal`,`measurement_size`,`rqst_data`,`desname`) VALUES ('$customer_id', '$type', '$design', '$date', CURRENT_TIMESTAMP,'$baseFabric','$contrastFabric','$imagename','$custom_design_name'
,'$sleev','$slim_or_normal','$measurement_size','$rqst_data','$emdtext');";	
		$writeConnection->query($sql);
	echo "Save succesfully. Go to the http://www.uniterreneprojects.com/dev/vertical-menswere/downloadable/customer/products/";
	exit();	
			
		
    ?>

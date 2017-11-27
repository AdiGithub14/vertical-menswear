<?php
require_once 'app/Mage.php'; 

umask(0);  
Mage::init('default');
       
       
 $innerdata = $_REQUEST['innerdata'];


 $desname=$_REQUEST['desname'];

 $fabcode_alt=$_REQUEST['fabcode_alt'];

 $confabcode_alt=$_REQUEST['confabcode_alt'];

$sleev=$_REQUEST['sleev'];
    
 $no_contrast=$_REQUEST['no_contrast'];
           

 $slim_or_normal=$_REQUEST['slim_or_normal'];

 $measurement_size=$_REQUEST['measurement_size'];

$rqst_data=$_REQUEST['rqst_data'];

 $emdtext=$_REQUEST['emdtext'];

















 $date =date("Y/m/d");

 date_default_timezone_set('Asia/Jakarta');
 $time= date('h:i:sa') ;
 //echo $design = $_REQUEST['design'];
			$resource = Mage::getSingleton('core/resource');
      $writeConnection = $resource->getConnection('core_write');
		//echo $_REQUEST['show'];
		Mage::getSingleton('core/session', array('name' => 'frontend'));

		$sessionCustomer = Mage::getSingleton("customer/session");

if($sessionCustomer->isLoggedIn()) {
  //echo "Logged";
} else {
   //echo "Not Logged";
}
 Mage::getSingleton('customer/session')->getId();
$customer_id=Mage::getSingleton('customer/session')->getId();

 $id = rand();

//$sql ="INSERT INTO `dev-vertical`.`social_sharing` 
//(`id`, `social_innerdata`, `social_customer_id`, `time`) VALUES ('$id', '$innerdata', '$customer_id', CURRENT_TIMESTAMP);";	

$sql ="INSERT INTO `dev-vertical`.`social_sharing` 
(`id`, `social_innerdata`, `social_customer_id`, `time`, `desname`, `measurement_size`, `slim_or_normal`, `sleev`, `imagename`, `contast_fabric`, `base_fabric`, `emdtext_color`, `rqst_data`, `emdtext`) VALUES ('$id', '$innerdata', '$customer_id', CURRENT_TIMESTAMP, '$desname', '$measurement_size', '$slim_or_normal', '$sleev', '$no_contrast', '$confabcode_alt', '$fabcode_alt', '', '$rqst_data', '$emdtext');";
		$writeConnection->query($sql);
	echo $id;

exit();


?>
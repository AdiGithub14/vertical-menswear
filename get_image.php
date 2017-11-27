<?php
require_once 'app/Mage.php'; 

umask(0);  
Mage::init('default');
       
       
$newData = $_REQUEST['newData'];


 $input = base64_decode($newData);//$BB6B>8l8@B,;n(B - testing

 $resource = Mage::getSingleton('core/resource');
      $writeConnection = $resource->getConnection('core_write');
	  $connection = Mage::getSingleton('core/resource')->getConnection('core_read');
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
 
 //$img ='<img src="'.$newData.'">';
 $sql ="INSERT INTO `dev-vertical`.`shirt_share` (`shirt_share_id`, `customer_id`, `shirt_share_data`, `shirt_share_time`) VALUES ('', '$customer_id', '$newData', CURRENT_TIMESTAMP)";
$writeConnection->query($sql);
 //$sql1="SELECT LAST_INSERT_ID() FROM  `shirt_share`;"
 $lastInsertId = $writeConnection->lastInsertId();
echo $lastInsertId;
 //echo "here";
	exit();	
			
		
    ?>
	

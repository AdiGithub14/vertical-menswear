<?php
include 'app/Mage.php';
Mage::app();
// Need for start the session


echo $delid = $_REQUEST['delid'] ;

$resource = Mage::getSingleton('core/resource');
$writeConnection = $resource->getConnection('core_write');
$connection = Mage::getSingleton('core/resource')->getConnection('core_read');
	  
	   $sql ="DELETE FROM `custmize_shirt` where `Save_id`=$delid;";
$writeConnection->query($sql);
header("Location: http://www.uniterreneprojects.com/dev/vertical-menswere/downloadable/customer/products/");
exit();



?>
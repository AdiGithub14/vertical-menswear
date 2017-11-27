<?php
require_once 'app/Mage.php';


umask(0);

Mage::app('default');

Mage::getSingleton('core/session', array('name' => 'frontend'));

$sessionCustomer = Mage::getSingleton("customer/session");

if($sessionCustomer->isLoggedIn()) {
  echo "Logged";
} else {
   echo "Not Logged";
}

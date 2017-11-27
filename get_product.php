<?php
require_once 'app/Mage.php';

umask(0);
Mage::init('default');


$entityTypeId = Mage::getModel('eav/entity')
                ->setType('catalog_product')
                ->getTypeId();
$attributeSetName   = 'Default';
$attributeSetId     = Mage::getModel('eav/entity_attribute_set')
                    ->getCollection()
                    ->setEntityTypeFilter($entityTypeId)
                    ->addFieldToFilter('attribute_set_name', $attributeSetName)
                    ->getFirstItem()
                    ->getAttributeSetId();



$productCollection = Mage::getModel('catalog/product')
                    ->getCollection()
                    ->addAttributeToSelect('*')
                    ->addFieldToFilter('attribute_set_id', $attributeSetId); ?>
                    
       <ul>             
  <?php              
  
  $i = 1;
       
foreach($productCollection as $_product){
    $pro_data = $_product->getData();
    
    print_r($pro_data['name']);?>

 <li id="d<?php echo $i;?>" data-id="producrId" >
                            <div class="productImg">
                                <img src="images/design<?php echo $i;?>.png" alt="#">
                            </div>
                           <div class="productName">

                              <h5><?php print_r($pro_data['name']);?></h5>
                              <div class="productPrice">
                              <p class="code">
                               <?php $product = Mage::getModel('catalog/product')->loadByAttribute('name', $pro_data['name']);
                                
                                    $price =  Mage::helper('core')->currency($product->getPrice(), true, false);
                                    echo str_replace("$","RM",$price);
                                  ?>
                              </p>
                           </div>
                           </div>


                         </li>

<?php 

$i++;

} 




?>
</ul>

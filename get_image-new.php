<?php
umask(0);
    require 'app/Mage.php'; //include magento libraries
	Mage::app('admin');
$pid = $_REQUEST["pid"];

$product  = Mage::getModel('catalog/product')->load($pid);


$product_data =$product->getData();

echo $design_name = $product_data['designname'];



if (!file_exists('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name)) {
    mkdir('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name, 0777, true);
}

if (!file_exists('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric')) {
    mkdir('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric', 0777, true);
}
if (!file_exists('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric')) {
    mkdir('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric', 0777, true);
}
if (!file_exists('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric1')) {
    mkdir('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric1', 0777, true);
}

if (!file_exists('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric2')) {
    mkdir('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric2', 0777, true);
}
if (!file_exists('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric3')) {
    mkdir('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric3', 0777, true);
}

if (!file_exists('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric4')) {
    mkdir('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric4', 0777, true);
}
if (!file_exists('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric5')) {
    mkdir('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric5', 0777, true);
}
if (!file_exists('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric6')) {
    mkdir('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric6', 0777, true);
}
if (!file_exists('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric7')) {
    mkdir('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric7', 0777, true);
}
if (!file_exists('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric8')) {
    mkdir('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric8', 0777, true);
}
if (!file_exists('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric9')) {
    mkdir('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric9', 0777, true);
}
if (!file_exists('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric10')) {
    mkdir('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric10', 0777, true);
}
if (!file_exists('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric11')) {
    mkdir('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric11', 0777, true);
}
if (!file_exists('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric12')) {
    mkdir('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric12', 0777, true);
}
if (!file_exists('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric5')) {
    mkdir('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric12', 0777, true);
}


if (!file_exists('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric')) {
    mkdir('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric', 0777, true);
}

if (!file_exists('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric1')) {
    mkdir('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric1', 0777, true);
}
if (!file_exists('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric2')) {
    mkdir('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric2', 0777, true);
}
if (!file_exists('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric3')) {
    mkdir('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric3', 0777, true);
}
if (!file_exists('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric4')) {
    mkdir('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric4', 0777, true);
}
if (!file_exists('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric5')) {
    mkdir('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric5', 0777, true);
}
if (!file_exists('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric6')) {
    mkdir('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric6', 0777, true);
}
if (!file_exists('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric7')) {
    mkdir('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric7', 0777, true);
}
if (!file_exists('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric8')) {
    mkdir('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric8', 0777, true);
}
if (!file_exists('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric9')) {
    mkdir('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric9', 0777, true);
}
if (!file_exists('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric10')) {
    mkdir('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric10', 0777, true);
}
if (!file_exists('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric11')) {
    mkdir('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric11', 0777, true);
}
if (!file_exists('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric12')) {
    mkdir('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric12', 0777, true);
}
if (!file_exists('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric13')) {
    mkdir('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric13', 0777, true);
}
if (!file_exists('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric14')) {
    mkdir('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric14', 0777, true);
}
if (!file_exists('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric15')) {
    mkdir('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric15', 0777, true);
}
if (!file_exists('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric16')) {
    mkdir('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric16', 0777, true);
}
if (!file_exists('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric17')) {
    mkdir('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric17', 0777, true);
}
if (!file_exists('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric18')) {
    mkdir('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric18', 0777, true);
}
if (!file_exists('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric19')) {
    mkdir('/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric19', 0777, true);
}
define('DIRECTORY', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/');
define('DIRECTORY1', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/');
define('DIRECTORY3', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/');

define('DIRECTORYbase1', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric1/');
define('DIRECTORYbase2', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric2/');
define('DIRECTORYbase3', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric3/');		
define('DIRECTORYbase4', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric4/');
define('DIRECTORYbase5', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric5/');
define('DIRECTORYbase6', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric6/');	
define('DIRECTORYbase7', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric7/');
define('DIRECTORYbase8', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric8/');	
define('DIRECTORYbase9', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric9/');		
define('DIRECTORYbase10', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric10/');
define('DIRECTORYbase11', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric11/');		
define('DIRECTORYbase12', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric12/');
define('DIRECTORYbase13', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric13/');
define('DIRECTORYbase14', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric14/');		
define('DIRECTORYbase15', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric15/');
define('DIRECTORYbase16', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric16/');
define('DIRECTORYbase17', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric17/');
define('DIRECTORYbase18', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/baseFabric/baseFebric18/');		
		
define('DIRECTORYcon1', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric1/');		
define('DIRECTORYcon2', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric2/');	
define('DIRECTORYcon3', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric3/');	
define('DIRECTORYcon4', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric4/');	
define('DIRECTORYcon5', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric5/');
define('DIRECTORYcon6', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric6/');	
define('DIRECTORYcon7', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric7/');				
		
define('DIRECTORYcon8', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric8/');

define('DIRECTORYcon9', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric9/');

define('DIRECTORYcon10', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric10/');

define('DIRECTORYcon11', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric11/');		
		
define('DIRECTORYcon12', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric12/');

define('DIRECTORYcon13', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric13/');

define('DIRECTORYcon14', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric14/');	

define('DIRECTORYcon15', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric15/');	

define('DIRECTORYcon16', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric16/');	

define('DIRECTORYcon17', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric17/');			
		
define('DIRECTORYcon18', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric18/');

define('DIRECTORYcon19', '/home/uniterrene2015/public_html/dev/vertical-menswere/products/design/'.$design_name.'/fabric/contrastFebric/contrastFabric19/');	

require_once 'app/Mage.php';
		Mage::app('admin');
		$j = 0;
		$img=$sku=$filename=array(); 
		//$_product = Mage::getModel('catalog/product')->loadByAttribute('sku','custom_design1');
        
        
        $media = Mage::getModel('catalog/product_attribute_media_api');
	$count = 0;
	//echo " count:".count($sku);
	//var_dump($sku);
//	for($i=0;$i<count($sku);$i++)
	
		$sku=$sk="custom_design1";
		
		//echo "<br/><br/>".$sk;
		
  //$productid = Mage::getModel('catalog/product')
	              //   ->getIdBySku(trim($sk));
 
// Initiate product model
//$product = Mage::getModel('catalog/product');
 
// Load specific product whose tier price want to update
////$product ->load($productid);
    //$product = Mage::getModel('catalog/product')->loadByAttribute('sku',$sk);
//echo "<pre>";
//print_r($product->getData());
   // echo "<br/> pid:".$product->getId().'	<=product_id <br>';
	
    if ($product->getId() > 0)
    {
		
		//echo $count."	<=Count<br>";
		$count++;

		$mediaApi = Mage::getModel("catalog/product_attribute_media_api");
		$items = $mediaApi->items($product->getId());
		
		//echo "image count: ".count($items);
		
		
			 
			//echo "<br/>sku:".$sk;
				
			foreach($items as $item){
			
			
			
				
				$path='http://www.uniterreneprojects.com/dev/vertical-menswere/media/catalog/product'.$item['file'];
				
				if($item['label'] == "main images")
				{
				 $content = file_get_contents($path);
				$filename= explode('/', $path);
				$variable = $filename[10];
				//echo $filename[10]."<br/>";
				$words = preg_replace('/\_[0-9]+/', '', $variable);
				
				//$variable = trim(str_replace(range(0,9),'',$variable));
				 //$variable = str_replace('__', '', $variable);
				 //$variable = str_replace('_1.png', '.png', $variable);
				
				file_put_contents(DIRECTORY.$words, $content);
				}
				
				
				if($item['label'] == "base fabric")
				{
				 $content = file_get_contents($path);
				$filename= explode('/', $path);
				$variable = $filename[10];
				$words = preg_replace('/\_[0-9]+/', '', $variable);
				file_put_contents(DIRECTORY1.$words, $content);
				}
				
				if($item['label'] == "contrast fabric")
				{
				 $content = file_get_contents($path);
				$filename= explode('/', $path);
				
				   $variable = $filename[10];
				
				$words = preg_replace('/\_[0-9]+/', '', $variable);
				// $variable = trim(str_replace(range(0,9),'',$variable));
				// $variable = str_replace('__', '', $variable);
				 //$variable = str_replace('_1.png', '.png', $variable);
				file_put_contents(DIRECTORY3.$words, $content);
		
				}
				
				
				
				
				
				
				
				
				if(substr_count($item['label'],"base fabric1")>0)
				{
					
				 $content = file_get_contents($path);
				$filename= explode('/', $path);
				$variable = $filename[10];
				$words = preg_replace('/\_[0-9]+/', '', $variable);
				 
				file_put_contents(DIRECTORYbase1.$words, $content);
		
				}
				if(substr_count($item['label'],"base fabric2")>0)
				{
					
				 $content = file_get_contents($path);
				$filename= explode('/', $path);
				$variable = $filename[10];
				$words = preg_replace('/\_[0-9]+/', '', $variable);
				file_put_contents(DIRECTORYbase2.$words, $content);
		
				}
				if(substr_count($item['label'],"base fabric3")>0)
				{
					
				 $content = file_get_contents($path);
				$filename= explode('/', $path);
				$variable = $filename[10];
				$words = preg_replace('/\_[0-9]+/', '', $variable);
				file_put_contents(DIRECTORYbase3.$words, $content);
		
				}
				if(substr_count($item['label'],"base fabric4")>0)
				{
					
				 $content = file_get_contents($path);
				$filename= explode('/', $path);
				$variable = $filename[10];
				$words = preg_replace('/\_[0-9]+/', '', $variable);
				file_put_contents(DIRECTORYbase4.$words, $content);
		
				}
				if(substr_count($item['label'],"base fabric5")>0)
				{
					
				 $content = file_get_contents($path);
				$filename= explode('/', $path);
				$variable = $filename[10];
				$words = preg_replace('/\_[0-9]+/', '', $variable);
				file_put_contents(DIRECTORYbase5.$words, $content);
		
				}
				if(substr_count($item['label'],"base fabric6")>0)
				{
					
				 $content = file_get_contents($path);
				$filename= explode('/', $path);
				$variable = $filename[10];
				$words = preg_replace('/\_[0-9]+/', '', $variable);
				file_put_contents(DIRECTORYbase6.$words, $content);
				}
				if(substr_count($item['label'],"base fabric7")>0)
				{
					
				 $content = file_get_contents($path);
				$filename= explode('/', $path);
				$variable = $filename[10];
				$words = preg_replace('/\_[0-9]+/', '', $variable);
				file_put_contents(DIRECTORYbase7.$words, $content);
		
				}
				if(substr_count($item['label'],"base fabric8")>0)
				{
					
				 $content = file_get_contents($path);
				$filename= explode('/', $path);
				$variable = $filename[10];
				$words = preg_replace('/\_[0-9]+/', '', $variable);
				file_put_contents(DIRECTORYbase8.$words, $content);
		
				}
				if(substr_count($item['label'],"base fabric9")>0)
				{
					
				 $content = file_get_contents($path);
				$filename= explode('/', $path);
				$variable = $filename[10];
				$words = preg_replace('/\_[0-9]+/', '', $variable);
				file_put_contents(DIRECTORYbase9.$words, $content);
		
				}
				
				if(substr_count($item['label'],"base fabric10")>0)
				{
					
				 $content = file_get_contents($path);
				$filename= explode('/', $path);
				$variable = $filename[10];
				$words = preg_replace('/\_[0-9]+/', '', $variable);
				file_put_contents(DIRECTORYbase10.$words, $content);
		
				}
				if(substr_count($item['label'],"base fabric11")>0)
				{
					
				 $content = file_get_contents($path);
				$filename= explode('/', $path);
				$variable = $filename[10];
				$words = preg_replace('/\_[0-9]+/', '', $variable);
				file_put_contents(DIRECTORYbase11.$words, $content);
		
				}
				if(substr_count($item['label'],"base fabric12")>0)
				{
					
				 $content = file_get_contents($path);
				$filename= explode('/', $path);
				$variable = $filename[10];
				$words = preg_replace('/\_[0-9]+/', '', $variable);
				file_put_contents(DIRECTORYbase12.$words, $content);
		
				}
				
				if(substr_count($item['label'],"base fabric13")>0)
				{
					
				 $content = file_get_contents($path);
				$filename= explode('/', $path);
				$variable = $filename[10];
				$words = preg_replace('/\_[0-9]+/', '', $variable);
				file_put_contents(DIRECTORYbase13.$words, $content);
		
				}
				
				if(substr_count($item['label'],"base fabric14")>0)
				{
					
				 $content = file_get_contents($path);
				$filename= explode('/', $path);
				$variable = $filename[10];
				$words = preg_replace('/\_[0-9]+/', '', $variable);
				file_put_contents(DIRECTORYbase14.$words, $content);
		
				}
				if(substr_count($item['label'],"base fabric15")>0)
				{
					
				 $content = file_get_contents($path);
				$filename= explode('/', $path);
				$variable = $filename[10];
				$words = preg_replace('/\_[0-9]+/', '', $variable);
				file_put_contents(DIRECTORYbase15.$words, $content);
		
				}
				
				
			
			
			
			
				if(substr_count($item['label'],"contrast fabric1")>0)
				{
				 $content = file_get_contents($path);
					$filename= explode('/', $path);
				
				$variable = $filename[10];
				$words = preg_replace('/\_[0-9]+/', '', $variable);
				file_put_contents(DIRECTORYcon1.$words, $content);
		
				}
				
				if(substr_count($item['label'],"contrast fabric2")>0)
				{
				 $content = file_get_contents($path);
					$filename= explode('/', $path);
				
				$variable = $filename[10];
				$words = preg_replace('/\_[0-9]+/', '', $variable);
				file_put_contents(DIRECTORYcon2.$words, $content);
		
				}
				
				
				if(substr_count($item['label'],"contrast fabric3")>0)
				{
				 $content = file_get_contents($path);
					$filename= explode('/', $path);
				
				$variable = $filename[10];
				$words = preg_replace('/\_[0-9]+/', '', $variable);
				file_put_contents(DIRECTORYcon3.$words, $content);
		
				}
				
				
				if(substr_count($item['label'],"contrast fabric4")>0)
				{
				 $content = file_get_contents($path);
					$filename= explode('/', $path);
				
				$variable = $filename[10];
				$words = preg_replace('/\_[0-9]+/', '', $variable);
				file_put_contents(DIRECTORYcon4.$words, $content);
		
				}
				
				
				if(substr_count($item['label'],"contrast fabric5")>0)
				{
				 $content = file_get_contents($path);
					$filename= explode('/', $path);
				
				$variable = $filename[10];
				$words = preg_replace('/\_[0-9]+/', '', $variable);
				file_put_contents(DIRECTORYcon5.$words, $content);
		
				}
				
				if(substr_count($item['label'],"contrast fabric6")>0)
				{
				 $content = file_get_contents($path);
					$filename= explode('/', $path);
				
				$variable = $filename[10];
				$words = preg_replace('/\_[0-9]+/', '', $variable);
				file_put_contents(DIRECTORYcon6.$words, $content);
		
				}
				if(substr_count($item['label'],"contrast fabric7")>0)
				{
				 $content = file_get_contents($path);
					$filename= explode('/', $path);
				
				$variable = $filename[10];
				$words = preg_replace('/\_[0-9]+/', '', $variable);
				file_put_contents(DIRECTORYcon7.$words, $content);
		
				}
				if(substr_count($item['label'],"contrast fabric8")>0)
				{
				 $content = file_get_contents($path);
					$filename= explode('/', $path);
				
				$variable = $filename[10];
				$words = preg_replace('/\_[0-9]+/', '', $variable);
				file_put_contents(DIRECTORYcon8.$words, $content);
		
				}
				if(substr_count($item['label'],"contrast fabric9")>0)
				{
				 $content = file_get_contents($path);
					$filename= explode('/', $path);
				
				$variable = $filename[10];
				$words = preg_replace('/\_[0-9]+/', '', $variable);
				file_put_contents(DIRECTORYcon9.$words, $content);
		
				}
				if(substr_count($item['label'],"contrast fabric10")>0)
				{
				 $content = file_get_contents($path);
					$filename= explode('/', $path);
				
				$variable = $filename[10];
				$words = preg_replace('/\_[0-9]+/', '', $variable);
				file_put_contents(DIRECTORYcon10.$words, $content);
		
				}
				if(substr_count($item['label'],"contrast fabric11")>0)
				{
				 $content = file_get_contents($path);
					$filename= explode('/', $path);
				
				$variable = $filename[10];
				$words = preg_replace('/\_[0-9]+/', '', $variable);
				file_put_contents(DIRECTORYcon11.$words, $content);
		
				}
				if(substr_count($item['label'],"contrast fabric12")>0)
				{
				 $content = file_get_contents($path);
					$filename= explode('/', $path);
				
				$variable = $filename[10];
				$words = preg_replace('/\_[0-9]+/', '', $variable);
				file_put_contents(DIRECTORYcon12.$words, $content);
		
				}
				
				if(substr_count($item['label'],"contrast fabric13")>0)
				{
				 $content = file_get_contents($path);
					$filename= explode('/', $path);
				
				$variable = $filename[10];
				$words = preg_replace('/\_[0-9]+/', '', $variable);
				file_put_contents(DIRECTORYcon13.$words, $content);
		
				}
				if(substr_count($item['label'],"contrast fabric14")>0)
				{
				 $content = file_get_contents($path);
					$filename= explode('/', $path);
				
				$variable = $filename[10];
				$words = preg_replace('/\_[0-9]+/', '', $variable);
				file_put_contents(DIRECTORYcon14.$words, $content);
		
				}
				if(substr_count($item['label'],"contrast fabric15")>0)
				{
				 $content = file_get_contents($path);
					$filename= explode('/', $path);
				
				$variable = $filename[10];
				$words = preg_replace('/\_[0-9]+/', '', $variable);
				file_put_contents(DIRECTORYcon15.$words, $content);
		
				}
				if(substr_count($item['label'],"contrast fabric16")>0)
				{
				 $content = file_get_contents($path);
					$filename= explode('/', $path);
				
				$variable = $filename[10];
				$words = preg_replace('/\_[0-9]+/', '', $variable);
				file_put_contents(DIRECTORYcon16.$words, $content);
		
				}
				
				if(substr_count($item['label'],"contrast fabric main")>0)
				{
				 $content = file_get_contents($path);
					$filename= explode('/', $path);
				
				$variable = $filename[10];
				$words = preg_replace('/\_[0-9]+/', '', $variable);
				file_put_contents(DIRECTORY3.$words, $content);
		
				}
			}  
			


	
    }
	
?>
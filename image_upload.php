<?php
    umask(0);
    require 'app/Mage.php'; //include magento libraries
	Mage::app('admin');
	$fp = fopen("product-feed_new.csv", 'r'); 
	$i = 0;
			
	while(($website=fgetcsv($fp))) 
	{
	
	if($i!=0)
		{
	
		$image1 = $website[10];
		$image2 = $website[11];
		$image3 = $website[12];
		$image4 = $website[13];
		$image5 = $website[14];
		$image6 = $website[15];
		$sku = $website[0];
				define('DIRECTORY2', '/home/uniterrene2015/public_html/dev/vertical-menswere/import/HC-18558/');
		
		//echo "here";
		 $dir = "/home/uniterrene2015/public_html/dev/vertical-menswere/import/".$sku;
		 $filename= end(explode('/',$image1));
		mkdir('import/'.$sku, 0777, true);
		
		
file_put_contents(DIRECTORY2.$filename, file_get_contents($image1));
		
		//$content = file_get_contents($image1);
		
		
				
				
				
				
				
				 //$variable = $filename[10];
				 //$variable = str_replace('_1.png', '.png', $variable);
		
	
	
		}
	$i++;
	}
	
	fclose($fp);


        
       
?>
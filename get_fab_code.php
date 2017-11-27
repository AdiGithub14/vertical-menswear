<?php
require_once 'app/Mage.php'; 

umask(0);  
Mage::init('default');
 
	$dadaget=array(); 
 $designname = $_REQUEST['designname'];
	$_product = Mage::getModel('catalog/product')->loadByAttribute('name', $designname);
	$price =  Mage::helper('core')->currency($_product->getPrice(), true, false);
	/*Get Options*/
	$dadaarray = $_product->getData();
//print_r($dadaarray['entity_id']);
    $product_id = $dadaarray['entity_id'];
	$product = Mage::getModel('catalog/product')->load($product_id);
	
	foreach($product->getOptions() as $o)

	{
		//print_r($o);
		$option = $o->getData();
		$option_title = $option['default_title'];
		if($option_title == "Embroidery Color")
		{
			 $option_base_title_id =  $option['option_id'];
			$values = $o->getValues();
			$opt_emd = array();
			foreach ($values as $k => $v) 
			{
				$opt = $v->getData();
				
				//print_r($opt['title']);
				
				array_push($opt_emd,$opt['title']);
				
				
			}
			
			
		   	
		//print_r($opt_emd);
		}
		
			
		
				
	}
	
	
	
	/**/
	
	$dadaarray = $_product->getData();


//echo "<pre>";

//print_r($dadaarray);
$user_contrast = $dadaarray["user_contrast"];
$must_contrast = $dadaarray["must_contrast"];
$no_contrast = $dadaarray["no_contrast"];

/*Easy iron code*/
$fab1_easy_iron = $dadaarray["fab1_easy_iron"];
$fab2_easy_iron = $dadaarray["fab2_easy_iron"];
$fab3_easy_iron = $dadaarray["fab3_easy_iron"];
$fab4_easy_iron = $dadaarray["fab4_easy_iron"];
$fab5_easy_iron = $dadaarray["fab5_easy_iron"];
$fab6_easy_iron = $dadaarray["fab6_easy_iron"];
$fab7_easy_iron = $dadaarray["fab7_easy_iron"];
$fab8_easy_iron = $dadaarray["fab8_easy_iron"];
$fab9_easy_iron = $dadaarray["fab9_easy_iron"];
$fab10_easy_iron = $dadaarray["fab10_easy_iron"];


$con_fab1_easy_iron = $dadaarray["con_fab1_easy_iron"];
$con_fab2_easy_iron = $dadaarray["con_fab2_easy_iron"];
$con_fab3_easy_iron = $dadaarray["con_fab3_easy_iron"];
$con_fab4_easy_iron = $dadaarray["con_fab4_easy_iron"];
$con_fab5_easy_iron = $dadaarray["con_fab5_easy_iron"];
$con_fab6_easy_iron = $dadaarray["con_fab6_easy_iron"];
$con_fab7_easy_iron = $dadaarray["con_fab7_easy_iron"];
$con_fab8_easy_iron = $dadaarray["con_fab8_easy_iron"];
$con_fab9_easy_iron = $dadaarray["con_fab9_easy_iron"];
$con_fab10_easy_iron = $dadaarray["con_fab10_easy_iron"];

/********************************/

	
	$base = $dadaarray["base"];
	$inner_back =$dadaarray["inner_back"];
	$full_collar  = $dadaarray["full_collar"];
	$inner_collar = $dadaarray["inner_collar"];
	$outer_collar = $dadaarray["outer_collar"];
	$base_top = $dadaarray["base_top"];
	$inner_placket = $dadaarray["inner_placket"];
	$outer_placket = $dadaarray["outer_placket"];
	$full_sleev = $dadaarray["full_sleev"];
	$hulf_sleev = $dadaarray["hulf_sleev"];
	$left_cuff = $dadaarray["left_cuff"];
	$right_cuff = $dadaarray["right_cuff"];
	

    $base_contrast = $dadaarray["base_contrast"];
	$inner_back_contrast =$dadaarray["inner_back_contrast"];
	$full_collar_contrast  = $dadaarray["full_collar_contrast"];
	$inner_collar_contrast = $dadaarray["inner_collar_contrast"];
	$outer_collar_contrast = $dadaarray["outer_collar_contrast"];
	$base_top_contrast = $dadaarray["base_top_contrast"];
	$inner_placket_contrast = $dadaarray["inner_placket_contrast"];
	$outer_placket_contrast = $dadaarray["outer_placket_contrast"];
	$full_sleev_contrast = $dadaarray["full_sleev_contrast"];
	$hulf_sleev_contrast = $dadaarray["hulf_sleev_contrast"];
	$left_cuff_contrast = $dadaarray["left_cuff_contrast"];
	$right_cuff_contrast = $dadaarray["right_cuff_contrast"];
	
	
	
	
	$opt_pl = $dadaarray["customizeplacket"];
	$opt_clr = $dadaarray["customizecollar"];
	$opt_slv = $dadaarray["customizesleeve"];
	
	$slim_size = $dadaarray['slimsize'];
	$normal_size = $dadaarray['normalsize'];
	//echo $dadaarray['fab3'];
	//print_r($dadaarray['entity_id']);
	/*For con_fab1 */
	$confabname_code1 = explode("|",$dadaarray['con_fab1']);
	$confabname1 = $confabname_code1[0];
	$confabcode1 = $confabname_code1[1];
	
	/*For con_fab2 */
	$confabname_code2 = explode("|",$dadaarray['con_fab2']);
	$confabname2 = $confabname_code2[0];
	$confabcode2 = $confabname_code2[1];
	
	/*For con_fab3 */
	$confabname_code3 = explode("|",$dadaarray['con_fab3']);
	$confabname3 = $confabname_code3[0];
	$confabcode3 = $confabname_code3[1];
	
	/*For con_fab4 */
	$confabname_code4 = explode("|",$dadaarray['con_fab4']);
	$confabname4 = $confabname_code4[0];
	$confabcode4 = $confabname_code4[1];
	
	/*For con_fab5 */
	$confabname_code5 = explode("|",$dadaarray['con_fab5']);
	$confabname5 = $confabname_code5[0];
	$confabcode5 = $confabname_code5[1];
	
	/*For con_fab6 */
	$confabname_code6 = explode("|",$dadaarray['con_fab6']);
	$confabname6 = $confabname_code6[0];
	$confabcode6 = $confabname_code6[1];
	
	/*For con_fab7 */
	$confabname_code7 = explode("|",$dadaarray['con_fab7']);
	$confabname7 = $confabname_code7[0];
	$confabcode7 = $confabname_code7[1];
	
	/*For con_fab8 */
	$confabname_code8 = explode("|",$dadaarray['con_fab8']);
	$confabname8 = $confabname_code8[0];
	$confabcode8 = $confabname_code8[1];
	
	/*For con_fab9 */
	$confabname_code9 = explode("|",$dadaarray['con_fab9']);
	$confabname9 = $confabname_code9[0];
	$confabcode9 = $confabname_code9[1];
	
	/*For con_fab10 */
	$confabname_code10 = explode("|",$dadaarray['con_fab10']);
	$confabname10 = $confabname_code10[0];
	$confabcode10 = $confabname_code10[1];
	
	
	/*For con_fab11 */
	$confabname_code11 = explode("|",$dadaarray['con_fab11']);
	$confabname11 = $confabname_code11[0];
	$confabcode11 = $confabname_code11[1];
	
	/*For con_fab12 */
	$confabname_code12 = explode("|",$dadaarray['con_fab12']);
	$confabname12 = $confabname_code12[0];
	$confabcode12 = $confabname_code12[1];
	
	/*For con_fab13 */
	$confabname_code13 = explode("|",$dadaarray['con_fab13']);
	$confabname13 = $confabname_code13[0];
	$confabcode13 = $confabname_code13[1];
	
	
	/*For fab2*/
	$fabname_code2 = explode("|",$dadaarray['fab2']);
	$fabname2 = $fabname_code2[0];
	$fabcode2 = $fabname_code2[1];
	
	/*For fab1*/
	$fabname_code1 = explode("|",$dadaarray['fab1']);
	$fabname1 = $fabname_code1[0];
	$fabcode1 = $fabname_code1[1];
	
	/*For fab3*/
	$fabname_code3 = explode("|",$dadaarray['fab3']);
	$fabname3 = $fabname_code3[0];
	$fabcode3 = $fabname_code3[1];
	
	/*For fab4*/
	$fabname_code4 = explode("|",$dadaarray['fab4']);
	$fabname4 = $fabname_code4[0];
	$fabcode4 = $fabname_code4[1];
	
	/*For fab5*/
	$fabname_code5 = explode("|",$dadaarray['fab5']);
	$fabname5 = $fabname_code5[0];
	$fabcode5 = $fabname_code5[1];
	
	/*For fab6*/
	$fabname_code6 = explode("|",$dadaarray['fab6']);
	$fabname6 = $fabname_code6[0];
	$fabcode6 = $fabname_code6[1];
	
	/*For fab7*/
	$fabname_code7 = explode("|",$dadaarray['fab7']);
	$fabname7 = $fabname_code7[0];
	$fabcode7 = $fabname_code7[1];
	
	/*For fab8*/
	$fabname_code8 = explode("|",$dadaarray['fab8']);
	$fabname8 = $fabname_code8[0];
	$fabcode8 = $fabname_code8[1];
	
	/*For fab9*/
	$fabname_code9 = explode("|",$dadaarray['fab9']);
	$fabname9 = $fabname_code9[0];
	$fabcode9 = $fabname_code9[1];
	
	/*For fab10*/
	$fabname_code10 = explode("|",$dadaarray['fab10']);
	$fabname10 = $fabname_code10[0];
	$fabcode10 = $fabname_code10[1];
	
	
	
	$dadaget = array(
        
        "price"=>$price,
	"embroiderycode"=>$opt_emd,
	
	"user_contrast" => $user_contrast,
    "must_contrast" =>$must_contrast,
    "no_contrast" =>$no_contrast,
    "base"=>$base,
	"inner_back"=>$inner_back,
	"full_collar"=>$full_collar,
	"inner_collar"=>$inner_collar,
	"outer_collar"=>$outer_collar,
	"base_top"=>$base_top,
	"inner_placket" =>$inner_placket,
	"outer_placket" =>$outer_placket,
	"full_sleev" =>$full_sleev,
	"hulf_sleev" =>$hulf_sleev,
	"left_cuff" =>$left_cuff,
	"right_cuff" =>$right_cuff,
        
        "base_contrast"=>$base_contrast,
	"inner_back_contrast"=>$inner_back_contrast,
	"full_collar_contrast"=>$full_collar_contrast,
	"inner_collar_contrast"=>$inner_collar_contrast,
	"outer_collar_contrast"=>$outer_collar_contrast,
	"base_top_contrast"=>$base_top_contrast,
	"inner_placket_contrast" =>$inner_placket_contrast,
	"outer_placket_contrast" =>$outer_placket_contrast,
	"full_sleev_contrast" =>$full_sleev_contrast,
	"hulf_sleev_contrast" =>$hulf_sleev_contrast,
	"left_cuff_contrast" =>$left_cuff_contrast,
	"right_cuff_contrast" =>$right_cuff_contrast,
        
	
	
	"optnplck" =>$opt_pl,
	"opnclr"=>$opt_clr,
	"opnslv"=>$opt_slv,
	
	"slimsize" =>$slim_size,
	"normalsize" =>$normal_size,

	"fab1easyiron"=>$fab1_easy_iron,
	"fab2easyiron"=>$fab2_easy_iron,
	"fab3easyiron"=>$fab3_easy_iron,
	"fab4easyiron"=>$fab4_easy_iron,
	"fab5easyiron"=>$fab5_easy_iron,
	"fab6easyiron"=>$fab6_easy_iron,
	"fab7easyiron"=>$fab7_easy_iron,
	"fab8easyiron"=>$fab8_easy_iron,
	"fab9easyiron"=>$fab9_easy_iron,
	"fab10easyiron"=>$fab10_easy_iron,
	
	"con_fab1easyiron"=>$con_fab1_easy_iron,
	"con_fab2easyiron"=>$con_fab2_easy_iron,
	"con_fab3easyiron"=>$con_fab3_easy_iron,
	"con_fab4easyiron"=>$con_fab4_easy_iron,
	"con_fab5easyiron"=>$con_fab5_easy_iron,
	"con_fab6easyiron"=>$con_fab6_easy_iron,
	"con_fab7easyiron"=>$con_fab7_easy_iron,
	"con_fab8easyiron"=>$con_fab8_easy_iron,
	"con_fab9easyiron"=>$con_fab9_easy_iron,
	"con_fab10easyiron"=>$con_fab10_easy_iron,

	
	
	"fab2name"=>$fabname2,"fab2code"=>$fabcode2,
	"fab1name"=>$fabname1,"fab1code"=>$fabcode1,
	"fab3name"=>$fabname3,"fab3code"=>$fabcode3,
	"fab4name"=>$fabname4,"fab4code"=>$fabcode4,
	"fab5name"=>$fabname5,"fab5code"=>$fabcode5,
	"fab6name"=>$fabname6,"fab6code"=>$fabcode6,
	"fab7name"=>$fabname7,"fab7code"=>$fabcode7,
	"fab8name"=>$fabname8,"fab8code"=>$fabcode8,
	"fab9name"=>$fabname9,"fab9code"=>$fabcode9,
	"fab10name"=>$fabname10,"fab10code"=>$fabcode10,
	
	"confab1name"=>$confabname1,"confab1code"=>$confabcode1,
	"confab2name"=>$confabname2,"confab2code"=>$confabcode2,
	"confab3name"=>$confabname3,"confab3code"=>$confabcode3,
	"confab4name"=>$confabname4,"confab4code"=>$confabcode4,
	"confab5name"=>$confabname5,"confab5code"=>$confabcode5,
	"confab6name"=>$confabname6,"confab6code"=>$confabcode6,
	"confab7name"=>$confabname7,"confab7code"=>$confabcode7,
	"confab8name"=>$confabname8,"confab8code"=>$confabcode8,
	"confab9name"=>$confabname9,"confab9code"=>$confabcode9,
	"confab10name"=>$confabname10,"confab10code"=>$confabcode10,
	"confab11name"=>$confabname11,"confab11code"=>$confabcode11,
	"confab12name"=>$confabname12,"confab12code"=>$confabcode12,
	"confab13name"=>$confabname13,"confab13code"=>$confabcode13
	
	);
	echo json_encode($dadaget);
	exit();
?>

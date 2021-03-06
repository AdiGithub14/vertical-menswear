
<?php 
require_once 'app/Mage.php'; 

umask(0);  
Mage::init('default');

$id = $_GET['id'];

$connection = Mage::getSingleton('core/resource')->getConnection('core_read');
$sql        = "SELECT * FROM  `custmize_shirt` where `Save_id`=$id
LIMIT 0 , 30 ";
$rows       = $connection->fetchAll($sql); 



     foreach($rows as $row)
     {
		 
		 $sku_pro ="custom_".$row["design"];  
         
        // print_r($rows);
         
      
        $measurement_size = $row["measurement_size"];
      $slim_or_normal     = $row["slim_or_normal"];
        $sleev = $row["sleev"];
       $nocontrast = $row["imagename"];
       $contrastfab = $row["contast_fabric"];
       $base_fabric = $row["base_fabric"];
       $emdtext_color = $row["emdtext_color"];
       $rqst_data = $row["rqst_data"];
       $emdtext = $row["emdtext"];
    
         
     }
$productid = Mage::getModel('catalog/product')
	                  ->getIdBySku(trim($sku_pro));
 
// Initiate product model
$product = Mage::getModel('catalog/product');
 
// Load specific product whose tier price want to update
$product ->load($productid);
 
$pro_data = $product->getData();

$pro_name = $pro_data["name"];



$design_name = $rows[0]["design"];

//echo html_entity_decode($rows[0]['data']);


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="shortcut icon" href="http://www.uniterreneprojects.com/dev/vertical-menswere/skin/frontend/base/default/favicon.ico" >
<title>VERTICAL MENSWEAR</title>
<link href="css/custom.css" type="text/css" rel="stylesheet">
<link href="css/responsive.css" type="text/css" rel="stylesheet">
<link href="css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css"> -->
</head>
<body id="customizeBody">
  <!--special request popup-->
  <div id="forArray">
    <ul>
      <li id="base">no</li>
      <li id="inner_back">no</li>
      <li id="full_collar">no</li>
      <li id="inner_collar">no</li>
      <li id="outer_collar">no</li>
      <li id="base_top">no</li>
      <li id="inner_placket">no</li>
      <li id="outer_placket">no</li>
      <li id="full_sleev">no</li>
      <li id="hulf_sleev">no</li>
      <li id="left_cuff">no</li>
      <li id="right_cuff">no</li>
    </ul>
  </div>
  <div id="forContrastArray">
    <ul>
      <li id="base">no</li>
      <li id="inner_back">no</li>
      <li id="full_collar">no</li>
      <li id="inner_collar">no</li>
      <li id="outer_collar">no</li>
      <li id="base_top">no</li>
      <li id="inner_placket">no</li>
      <li id="outer_placket">no</li>
      <li id="full_sleev">no</li>
      <li id="hulf_sleev">no</li>
      <li id="left_cuff">no</li>
      <li id="right_cuff">no</li>
    </ul>
  </div>
  <div class="rqst_overlay">
    <div class="rqst_inner">
      <div class="close_this"> 
        X
      </div>
      <ul>
        <li>  <textarea name="spl_rqst" id="spical_request_field" placeholder="Please Type Your Request Here"></textarea></li>
        <li><button type="submit" id="spl_rqst_btn" name="button">Submit</button></li>
      </ul>

    </div>
  </div>
<!-- bottom addd to cart popup -->
<div class="addto_Overlay">
  <div id="addto_Inner">
    <!-- <div class="closeAddToInner">
      X
    </div> -->
  <ul id="infoHolers">
      <li class="prevImg">
        <img src="products/design/design1/design1.png">
      </li>
      <li class="prevInfo">
        <ul id='User_updated_info'>
          
         <h4> <li id="User_design_name">Your Design Name</li></h4>

           <li id="fabric_section">

             <ul id="base_fabric_sec">
              <div class="productHead">
                <h5><i class="fa fa-angle-double-right" aria-hidden="true"></i> Base Fabric</h5>
              </div>
               <li id=base_fabric_name>base_fabric_name</li>
               <li id=base_fabric_code>base_fabric_code</li>
             </ul>
             <ul id="contrast_fabric_sec">
              <div class="productHead">
                <h5><i class="fa fa-angle-double-right" aria-hidden="true"></i> Contrast Fabric</h5>
              </div>
               <li id=contrast_fabric_name>contrast_fabric_name</li>
               <li id=contrast_fabric_code>contrast_fabric_code</li>
             </ul>

           </li>
           <li id='sleev_area'>sleev_area </li>
           <li id='emb_area'>emb_area</li>


        </ul>

      </li>
      <li class="pop_bottom_btn_set"><button id="processed" onClick="addtoCart();" class="cart_btn"><a href="#">Add To Cart</a></button></li>



      <li class="pop_bottom_btn_set"><button  class="cart_btn "><a href="#" class="save2 ">Save</a></button></li>

    </ul>
  </div>
</div>
<!-- add to cart popup  end-->

<!-- after addto cart popup -->

<!-- end addto cart popup -->

<!-- save button popup -->
  <div class="saveOverlay">
    <div id="saveInner">
      <div class="closeIt">X</div>
      <form>
        <ul>
        <p>Please Enter a Name to Save Your Design</p>
          <li id="input_area_for_save"><input type="text" name="saved_Option_Name" id="saved_Option_Name" placeholder="Please Enter a Name to save"></li>
          <li id="save_btn_area"><input type="button" name="save__Btn" onClick="save()" id="save_btn" value="Save" class="cart"></li>
        </ul>
      </form>
    </div>
  </div>
<!-- save button popup end -->

<!-- share icons popup -->
    <div class="share_overlay">
       <div class="share_block">
         <div class="share_inner">
           <div class="close_btn"><a href="javascript:void(0);" ><i class="fa fa-times"></i></a></div>
           <ul class="clearfix">
               <li><a class="fb_link" target="_blank" href="http://www.facebook.com/sharer.php?s=100&p[url]=www.uniterreneprojects.com/dev/vertical-menswere/customize_shirt_new.php?id=862967900"><i class="fa fa-facebook"></i> Share on  Facebook</a></li>
               <li><a href="#"><i class="fa fa-pinterest"></i> Share on  Pinterest</a></li>
               <li><a href="#"><i class="fa fa-twitter"></i> Share on  Twitter</a></li>
               <li><a href="#"><i class="fa fa-google-plus"></i> Share on  Google Plus</a></li>
            </ul>
         </div>
     </div>
     </div>

<header id="header" class="custom_shirt_header">
  <div class="header-bottom">
    <div class="container clearfix">
    <?php $url = Mage::getBaseUrl();?>
      <div class="logo"> <a href="<?php echo $url;?>"><img src="images/logo.png" ></a> </div>
      <div class="top_menu">
        <ul>

         <li><a href="<?php echo $url;?>customer/account/login/"><i class="fa fa-lock"></i> Sign In</a></li>
   

          <li><a href="<?php echo $url?>/wishlist/"><i class="fa fa-heart"></i><span> wish list</span></a></li>

          <li><a href="<?php echo $url?>/checkout/cart"><i class="fa fa-shopping-bag"></i><span> shopping bag </span><span class="circle">0</span></a></li>
        </ul>
      </div>
    </div>
  </div>
</header>
<div id="viewport" class="clearfix">
  <div class="overLoader">
    <h4>Loading....</h4>
    <img src="images/loading.gif">
  </div>
  <div class="stepsbar_wrapper">
     <div class="stepsbar_inner_wrapper">
      <div class="arrow">
              <img src="images/bh-arrow-left.svg">
              <h2>START HERE</h2>
          </div>
        <a href="javascript:void(0)" id="btn_up"><img src="images/up.png"/></a>
        <div class="steps_bar">
        <!--Arrow-->
          <!-- <div class="arrow">
              <img src="images/bh-arrow-left.svg">
              <h2>START HERE</h2>
          </div> -->
          <!--arrow-->
          <ul class="steps_scroll">
             <li id="design" class="customCursor">
                <img src="images/shirt_icon.png" alt="#">
                <p>Design</p>
             </li>
             <li  id="febric">
              <img src="images/fabric_icon.png" alt="#">
              <p>Fabric</p>
             </li>
             <li id="customize_shirt" class="customize_shirt">
               <img src="images/shirt_customize_icon.png" alt="#">
               <p>Customized</p>
             </li>
             <li id="embroidery_li" class="embroidery">
               <img src="images/embroidery_icon.png" alt="#">
               <p>Embroidery</p>
             </li>
             <li id="measurement">
                <img src="images/measurement.png" alt="#">
                <p>Measurement</p>
             </li>
          </ul>

        </div>
         <a id="btn_bottom" href="javascript:void(0)>"><img src="images/down.png"/></a>
     </div>
  </div>

  <!---->
    <div id="popups">
          <div id="design" class="popup ">
              <div class="default_close close"><a href="#" class=""><i class="fa fa-times"></i></a></div>
              <div class="responsive_close close"><a href="#" class=""><i class="fa  fa-angle-double-down"></i></a></div>
              <div class="popup_inner">
                 <div class="header clearfix">
                     <h4>Step 1. Choose <span> Design</span></h4>
                     <ul id="buttons">
                      <li id="prev"><button>Previous</button></li>
                       <li id="next"><button>Next</button></li>
                     </ul>
                 </div>
                 <div class="popup_body">
                   <div class="scrollbar"></div>
                   <div class="scrollable">
                      <ul class="scrollableds">
                         <li id="d1">
                            <div class="productImg">
                                <img src="images/design1.png" alt="#">
                            </div>
                           <div class="productName" >
                           <h5>Vertical Folded Collar</h5>
                              <div class="productPrice">
                              <p class="code">
                               <?php //$product = Mage::getModel('catalog/product')->loadByAttribute('name', 'Vertical Folded Collar');
                                
                                    //$price =  Mage::helper('core')->currency($product->getPrice(), true, false);
                                   // echo str_replace("$","RM",$price);
                                  ?>
                                  RM 139.00
                              </p>
                                  

                           </div>
                           </div>
                           <input type="hidden" name="spanDesign" id="spanDesign">

                         </li>
                         <li id="d2" >
                            <div class="productImg">
                                <img src="images/design2.png" alt="#">
                            </div>
                           <div class="productName">
                       		 <h5 >Vertical Mandarin Collar</h5>

                              <div class="productPrice">
                              <p class="code">
                                <?php //$product = Mage::getModel('catalog/product')->loadByAttribute('name', 'Vertical Mandarin Collar');
                                
                                    //$price =  Mage::helper('core')->currency($product->getPrice(), true, false);
                                    //echo str_replace("$","RM",$price);
                                  ?>
                                  RM 139.00
                              </p>
                           </div>
                           </div>


                         </li>
                         <li id="d3" data-id="producrId" >
                            <div class="productImg">
                                <img src="images/design3.png" alt="#">
                            </div>
                           <div class="productName">

                              <h5 >Vertical Denim</h5>
                              <div class="productPrice">
                              <p class="code">
                               RM 139.00
                              </p>
                           </div>
                           </div>


                         </li>
                         <li id="d4" >
                            <div class="productImg">
                                <img src="images/design4.png" alt="#">
                            </div>
                           <div  class="productName">
                              <h5>Vertical Double Collar</h5>
                              <div class="productPrice">
                              <p class="code">
                               RM 139.00
                              </p>
                           </div>
                           </div>
                           
                                
                         </li>
                         <li id="d5" >
                            <div class="productImg">
                                <img src="images/design5.png" alt="#">
                            </div>
                           <div class="productName">
                              <h5 >Vertical Designer Collar</h5>
                              <div class="productPrice">
                              <p class="code">
                               RM 139.00
                              </p>
                           </div>
                           </div>


                         </li>
                         <li id="d6" >
                            <div class="productImg">
                                <img src="images/design6.png" alt="#">
                            </div>
                           <div class="productName">
                              <h5 >Vertical Horizon Matched (Half-Matched)</h5>
                              <div class="productPrice">
                              <p class="code">
                               RM 139.00
                              </p>
                           </div>
                           </div>


                         </li>
                         <li id="d7" >
                            <div class="productImg">
                                <img src="images/design7.png" alt="#">
                            </div>
                           <div class="productName">
                              <h5 >Vertical Casual Smart </h5>
                              <div class="productPrice">
                              <p class="code">
                               RM 135.00
                              </p>
                           </div>
                           </div>


                         </li>
                       </ul>
                   </div>
                 </div>
              </div>
          </div>

          <div id="fabric" class="popup">
              <div class="default_close close"><a href="#" class=""><i class="fa fa-times"></i></a></div>
              <div class="responsive_close close"><a href="#" class=""><i class="fa  fa-angle-double-down"></i></a></div>
              <div class="popup_inner clearfix">
                <div class="noContrast">
                  <span>No Contrast</span>
                </div>
                 <div class="header">
                     <h4>Step 2. Choose Fabric</h4>


                     <ul id="buttons">
                      <li id="prev"><button>Previous</button></li>
                       <li id="next"><button>Next</button></li>
                     </ul>
                 </div>
                 <div id="baseFebric" class="popup_body fab_body">
                   <h5>Base Fabric</h5>
                   <div class="scrollbar"></div>
                   <div class="scrollable">
                     <!-- <ul>
                         <li id="fab1" >
                            <div class="productImg">
                                <img src="images/fb1.png" alt="#">
                                <img src="images/easy_iron.png" class="easy_iron" alt="#">
                            </div>
                           <div class="productPrice">
                              <p class="code_fabric">

                              <small class="name_fabric1">xxxx</small>
                              </p>
                              <p class="code_fabric code_fabric1">

                              </p>
                           </div>

                         </li>
                         <li id="fab2" >
                            <div class="productImg">
                                <img src="images/fb2.png" alt="#">
                                <img src="images/easy_iron.png" class="easy_iron" alt="#">
                            </div>
                           <div class="productPrice">
                              <p class="code_fabric">
                               <small class="name_fabric2">Cotton Drill, Black</small>

                              </p>
                              <p class="code_fabric code_fabric2">
                              KM-MD33-P003
                              </p>
                           </div>

                         </li>
                         <li id="fab3" >
                            <div class="productImg">
                                <img src="images/fb3.png" alt="#">
                            </div>
                           <div class="productPrice">
                              <p class="code_fabric">
                               <small class="name_fabric3">Cotton Drill, Dark Grey</small>

                              </p>
                              <p class="code_fabric code_fabric3">
                               KM-MD32-P006
                              </p>
                           </div>

                         </li>
                         <li id="fab4" >
                            <div class="productImg">
                                <img src="images/fb4.png" alt="#">
                                <img src="images/easy_iron.png" class="easy_iron" alt="#">
                            </div>
                           <div class="productPrice">
                              <p class="code_fabric">
                              <small class="name_fabric4">Cotton Drill, Red</small>

                              </p>
                              <p class="code_fabric code_fabric4">
                              KM-MD21-P002
                              </p>
                           </div>

                         </li>
                         <li id="fab5" >
                            <div class="productImg">
                                <img src="images/fb5.png" alt="#">
                            </div>
                           <div class="productPrice">
                              <p class="code_fabric">
                               <small class="name_fabric5">Cotton Drill, Navy Blue</small>

                              </p>
                              <p class="code_fabric code_fabric5">
                             KM-MD28-P015
                              </p>
                           </div>

                         </li>
                         <li id="fab6" >
                            <div class="productImg">
                                <img src="images/fb6.png" alt="#">
                                <img src="images/easy_iron.png" class="easy_iron" alt="#">
                            </div>
                           <div class="productPrice">
                              <p class="code_fabric">
                               <small class="name_fabric6">Cotton Drill, Maroon</small>

                              </p>
                              <p class="code_fabric code_fabric6">
                               KM-MD30-P005
                              </p>
                           </div>

                         </li>
                          <li id="fab7" >
                            <div class="productImg">
                                <img src="images/fb7.png" alt="#">
                                <img src="images/easy_iron.png" class="easy_iron" alt="#">
                            </div>
                           <div class="productPrice">
                              <p class="code_fabric">
                               <small class="name_fabric7">Cotton Drill, Grey</small>

                              </p>
                              <p class="code_fabric code_fabric7">
                              KM-MD62-P014
                              </p>
                           </div>

                         </li>
                          <li id="fab8" >
                            <div class="productImg">
                                <img src="images/fb8.png" alt="#">
                            </div>
                           <div class="productPrice">
                              <p class="code_fabric">
                              <small class="name_fabric8">Cotton Drill, Dark Maroon</small>

                              </p>
                              <p class="code_fabric code_fabric8">
                               KM-MD45-P010
                              </p>
                           </div>

                         </li>
                          <li id="fab9" >
                            <div class="productImg">
                                <img src="images/fb8.png" alt="#">
                            </div>
                           <div class="productPrice">
                              <p class="code_fabric">
                              <small class="name_fabric9">Cotton Drill, Blue</small>

                              </p>
                              <p class="code_fabric code_fabric9">
                               KM-MD91-P007
                              </p>
                           </div>
                                
                         </li>
                          <li id="fab10" >
                            <div class="productImg">
                                <img src="images/fb8.png" alt="#">
                                <img src="images/easy_iron.png" class="easy_iron" alt="#">
                            </div>
                           <div class="productPrice">
                              <p class="code_fabric">
                               <small class="name_fabric10">Cotton Drill, Purple</small>

                              </p>
                              <p class="code_fabric code_fabric10">
                             KM-MD78-P008
                              </p>
                           </div>

                         </li>
                       </ul>-->
                       <ul>
                       <?php
					   
					   require_once 'app/Mage.php'; 

umask(0);  
Mage::init('default');

$id = $_GET['id'];
                       $sql        = "SELECT * FROM  `custmize_shirt` where `Save_id`=$id
LIMIT 0 , 30 ";
$rows1      = $connection->fetchAll($sql); 

foreach($rows1 as $rows1)
    
{
    
    
     $sku = "custom_".$rows1["design"];
}
$_product = Mage::getModel('catalog/product')->loadByAttribute('sku', $sku);



$pro_data = $_product->getData();



$test1 =array();?>

    <?php
for($j=1;$j<=10;$j++)
 {
  $fab ='fab'.$j;
  $test1[$j] = $pro_data[$fab]; 

$fabname_code[$j] = explode("|",$pro_data[$fab]);
	$fabname[$j] = $fabname_code[$j][0];
	$fabcode[$j] = $fabname_code[$j][1];


?>

<li id="fab<?php echo $j; ?>" >
    
    <?php $imagename = "fb".$j.".png";
    
    $class_name = "name_fabric".$j;
    
    $class_name2 = "code_fabric".$j;
    ?>
                            <div class="productImg">
                                <img src="products/design/<?php echo $rows1["design"];?>/fabric/baseFabric/<?php echo $imagename;?>" alt="#">
                                <img src="images/easy_iron.png" class="easy_iron" alt="#">
                            </div>
   
                           <div class="productPrice">
                              <p class="code_fabric">
                              <small class="<?php $class_name;?>"><?php echo $fabname[$j];?></small>

                              </p>
                              <p class="code_fabric <?php echo $class_name2;?>">
                              <?php echo $fabcode[$j];?>
                              </p>
                           </div>

                         </li>
  
 <?php }

?>
</ul>
                   </div>
                 </div>
                 <div id="contrastFebric" class="popup_body fab_body">
                    <h5>Contrast Fabric</h5>
                    <div class="scrollbar"></div>
                      <div class="scrollable">
                       <ul>
                         <li id="cst1" >
                            <div class="productImg">
                                <img src="images/cst1.png" alt="#">
                                <img src="images/easy_iron.png" class="easy_iron" alt="#">
                            </div>
                           <div class="productPrice">
                              <p class="code_fabric">
                               <small class="con_name_fabric1">Cotton Drill, White</small>

                              </p>
                              <p class="code_fabric con_code_fabric1">
                               GL-C013
                              </p>
                           </div>

                         </li>
                         <li id="cst2" >
                            <div class="productImg">
                                <img src="images/cst2.png" alt="#">
                            </div>
                           <div class="productPrice">
                              <p class="code_fabric">
                               <small class="con_name_fabric2">Cotton Drill, Red</small>

                              </p>
                              <p class="code_fabric con_code_fabric2">
                               KM-MD21-P002
                              </p>
                           </div>

                         </li>
                         <li id="cst3" >
                            <div class="productImg">
                                <img src="images/cst3.png" alt="#">
                                <img src="images/easy_iron.png" class="easy_iron" alt="#">
                            </div>
                           <div class="productPrice">
                              <p class="code_fabric">
                               <small class="con_name_fabric3">Cotton Drill, Black</small>

                              </p>
                              <p class="code_fabric con_code_fabric3">
                               KM-MD33-P003
                              </p>
                           </div>

                         </li>
                         <li id="cst4" >
                            <div class="productImg">
                                <img src="images/cst4.png" alt="#">
                                <img src="images/easy_iron.png" class="easy_iron" alt="#">
                            </div>
                           <div class="productPrice">
                              <p class="code_fabric">
                               <small class="con_name_fabric4">Cotton Drill, Maroon</small>

                              </p>
                              <p class="code_fabric con_code_fabric4">
                                KM-MD30-P005
                              </p>
                           </div>

                         </li>
                         <li id="cst5" >
                            <div class="productImg">
                                <img src="images/cst5.png" alt="#">
                                <img src="images/easy_iron.png" class="easy_iron" alt="#">
                            </div>
                           <div class="productPrice">
                               <p class="code_fabric">
                               <small class="con_name_fabric5">Cotton Drill, Dark Grey</small>

                              </p>
                              <p class="code_fabric con_code_fabric5">
                                KM-MD32-P006
                              </p>
                           </div>

                         </li>
                         <li id="cst6" >
                            <div class="productImg">
                                <img src="images/cst6.png" alt="#">
                                <img src="images/easy_iron.png" class="easy_iron" alt="#">
                            </div>
                           <div class="productPrice">
                              <p class="code_fabric">
                              <small class="con_name_fabric6">Cotton Drill, Pink</small>

                              </p>
                              <p class="code_fabric con_code_fabric6">
                                KM-MD47-P011
                              </p>
                           </div>

                         </li>
                         <li id="cst7" >
                            <div class="productImg">
                                <img src="images/cst7.png" alt="#">
                            </div>
                           <div class="productPrice">
                               <p class="code_fabric">
                               <small class="con_name_fabric7">Checkered Cotton, Red</small>

                              </p>
                              <p class="code_fabric con_code_fabric7">
                               YF637-3-C014
                              </p>
                           </div>

                         </li>
                         <li id="cst8" >
                            <div class="productImg">
                                <img src="images/cst8.png" alt="#">
                            </div>
                           <div class="productPrice">
                              <p class="code_fabric">
                               <small class="con_name_fabric8">Checkered Cotton, Black</small>

                              </p>
                              <p class="code_fabric con_code_fabric8">
                              GL-C013
                              </p>
                           </div>

                         </li>

                         <li id="cst9" >
                            <div class="productImg">
                                <img src="images/cst8.png" alt="#">
                                <img src="images/easy_iron.png" class="easy_iron" alt="#">
                            </div>
                           <div class="productPrice">
                              <p class="code_fabric">
                              <small class="con_name_fabric9">Checkered Cotton, Black</small>

                              </p>
                              <p class="code_fabric con_code_fabric9">
                                KM-B&W1-C011
                              </p>
                           </div>

                         </li>
                         <li id="cst10" >
                            <div class="productImg">
                                <img src="images/cst8.png" alt="#">
                                <img src="images/easy_iron.png" class="easy_iron" alt="#">
                            </div>
                           <div class="productPrice">
                              <p class="code_fabric">
                               <small class="con_name_fabric10">Floral Cotton</small>

                              </p>
                              <p class="code_fabric con_code_fabric10">
                               GL-F011
                              </p>
                           </div>

                         </li>
                         <li id="cst11" >
                            <div class="productImg">
                                <img src="images/cst8.png" alt="#">
                            </div>
                           <div class="productPrice">
                              <p class="code_fabric">
                               <small class="con_name_fabric11">Floral Cotton</small>

                              </p>
                              <p class="code_fabric con_code_fabric11">
                              GL-F012
                              </p>
                           </div>

                         </li>
                         <li id="cst12" >
                            <div class="productImg">
                                <img src="images/cst8.png" alt="#">
                                <img src="images/easy_iron.png" class="easy_iron" alt="#">
                            </div>
                           <div class="productPrice">
                              <p class="code_fabric">
                               <small class="con_name_fabric12">Stripe Cotton, B&W </small>

                              </p>
                              <p class="code_fabric con_code_fabric12">
                              GL-S007
                              </p>
                           </div>
                         </li>
                         <li id="cst13" >
                            <div class="productImg">
                                <img src="images/cst8.png" alt="#">
                            </div>
                           <div class="productPrice">
                              <p class="code_fabric">
                              <small class="con_name_fabric13">Stripe Cotton, Pink</small>

                              </p>
                              <p class="code_fabric con_code_fabric13">
                               GL-S002
                              </p>
                           </div>

                         </li>
                         <li id="cst14" >
                            <div class="productImg">
                                <img src="images/cst8.png" alt="#">
                                <img src="images/easy_iron.png" class="easy_iron" alt="#">
                            </div>
                           <div class="productPrice">
                              <p class="code_fabric">
                               <small class="con_name_fabric14">Stripe Cotton, Light Blue</small>

                              </p>
                              <p class="code_fabric con_code_fabric14">
                              GL-S004
                              </p>
                           </div>

                         </li>
                         <li id="cst15" >
                            <div class="productImg">
                                <img src="images/cst8.png" alt="#">
                                <img src="images/easy_iron.png" class="easy_iron" alt="#">
                            </div>
                           <div class="productPrice">
                              <p class="code_fabric">
                              <small class="con_name_fabric15">Stripe Cotton, Red</small>

                              </p>
                              <p class="code_fabric con_code_fabric15">
                                GL-S003
                              </p>
                           </div>

                         </li>
                       </ul>
                    
                   </div>
                 </div>
              </div>
          </div>

          <div id="customize" class="popup ">
              <div class="default_close close"><a href="#" class=""><i class="fa fa-times"></i></a></div>
              <div class="responsive_close close"><a href="#" class=""><i class="fa  fa-angle-double-down"></i></a></div>
              <div class="popup_inner">
                 <div class="header clearfix">
                     <h4>Step 3. Customize Design</h4>
                     <ul id="buttons">
                      <li id="prev"><button>Previous</button></li>
                       <li id="next"><button>Next</button></li>
                     </ul>
                 </div>
                 <div class="popup_body">
                   <div class="scrollbar"></div>
                   <div class="scrollable">
                      <ul>
                         <li id="c1" >
                            <h5>Customize Sleeve</h5>
                            <div class="sleeve_sec">
                              <div class="inputarea">
                                <input type="radio" name="sleev" value="hulf_sleev">
                              </div>
                              <div class="inputlabel">
                                <img src="images/short.png">
                                 <label>Short Sleeve</label>
                                 <div class="price_sec"><p><strong>RM125</strong></p></div>
                              </div>
                              <!-- <div class="iconImg">
                                <img src="images/short.png">
                              </div>
                               <div class="input_sec">
                                  <input type="radio" name="sleev" value="hulf_sleev"> <label>Short Sleeve</label>
                                </div>
                               <div class="price_sec"><p><strong>RM125</strong></p></div> -->
                            </div>
                            <div class="sleeve_sec">
                              <div class="inputarea">
                                 <input type="radio" name="sleev" value="full_sleev" checked>
                              </div>
                              <div class="inputlabel clearfix">
                                <img src="images/long.png">
                                 <label>Long Sleeve</label>
                                   <div class="price_sec"><p><strong class="long">
                                     
                                      <?php $product = Mage::getModel('catalog/product')->loadByAttribute('name', 'Vertical Folded Collar');
                                
                                    $price =  Mage::helper('core')->currency($product->getPrice(), true, false);
                                    //echo str_replace("$","RM",$price);
                                  ?>
                                   </strong></p></div>
                              </div>
                              <!-- <div class="iconImg">
                                <img src="images/long.png">
                              </div>
                               <div class="input_sec">
                                  <input type="radio" name="sleev" value="full_sleev"> <label>Long Sleeve</label>
                                </div>
                               <div class="price_sec"><p><strong>RM135</strong></p></div> -->
                            </div>
                         </li>
                         <li id="c2" >
                             <h5>Customize Placket</h5>


                            <div class="sleeve_sec">
                            <div class="inputarea">
                                 <input type="radio" name="sleev" value="covered_plaket">
                              </div>
                              <div class="inputlabel clearfix">
                                <img src="images/covered.png">
                                 <label> Covered Placket </label>
                                   <!-- <div class="price_sec"><p><strong>RM135</strong></p></div> -->
                              </div>
                               <!-- <div class="input_sec">
                                  <input type="radio" name="sleev" value="covered_plaket">
                                </div>  -->
                              </div>
                            <div class="sleeve_sec">
                              <div class="inputarea">
                                 <input type="radio" name="sleev" value="covered_plaket">
                              </div>
                              <div class="inputlabel clearfix">
                                <img src="images/uncovered.png">
                                 <label> Exposed Placket</label>
                                   <!-- <div class="price_sec"><p><strong>RM135</strong></p></div> -->
                              </div>

                               <!-- <div class="input_sec">
                                  <input type="radio" name="sleev" value="normal_plaket"> <label> Exposed Placket </label>
                                </div>  -->
                              </div>
                         </li>
                         <li id="c3" >
                             <h5>Customize Collar</h5>
                            <div class="sleeve_sec">
                               <div class="input_sec">
                                  <input type="radio" name="sleev" value="collar_1"> <label> Collar 1 </label>
                                </div>
                              </div>
                            <div class="sleeve_sec">
                               <div class="input_sec">
                                  <input type="radio" name="sleev" value="collar_2"> <label> Collar 2 </label>
                                </div>
                              </div>
                         </li>

                       </ul>
                   </div>
                 </div>
              </div>
          </div>

          <div id="embroidery" class="popup ">
              <div class="default_close close"><a href="#" class=""><i class="fa fa-times"></i></a></div>
              <div class="responsive_close close"><a href="#" class=""><i class="fa  fa-angle-double-down"></i></a></div>
              <div class="popup_inner">
                 <div class="header clearfix">
                     <h4>Step 4. Add Embroidery</h4>
                     <ul id="buttons">
                      <li id="prev"><button>Previous</button></li>
                       <li id="next"><button>Next</button></li>
                     </ul>
                 </div>
                 <div class="popup_body">
                   <div class="scrollbar"></div>
                   <div class="scrollable">
                   <div class="empopup">
                     <span>At <b>First</b> Please Select The <b>color</b> <br> Then, Enter Your <b>Text</b></span>
                   </div> <!-- Em popup End -->
                      <div class="emOptions">
                        <!-- <h4>Placement</h4>
                        <select id="placement_of_embroidery">
                          <option value="no">Select A Place</option>
                          <option value="collar">Inner Collar</option>
                          <option value="pocket">Pocket/ Chest</option>
                          <option value="mercedes">Mercedes</option>
                          <option value="audi">Audi</option>
                        </select>  -->
                        <h4>Enable Embroidery? <span id="addOnPrice">Add on price: <b>RM10</b></span></h4>
                        <ul class="enableOptions">
                          <li><button id="YesEm"class="EnableEm">Yes</button></li>
                           <li><button id="NoEm" class="EnableEm">No</button></li>
                        </ul>
                        <div class="mainC">
                          <div class="mainCInner"></div>
                           <h5>Choose Color</h5>
                           <ul class='EmColors'>
                              <li id="c0392b"></li>
                              <li id="f4d03f"></li>
                              <li id="a569bd "></li>
                              <li id="f0b27a"></li>
                              <li id="aab7b8"></li>
                              <li id="0e6655"></li>
                              <li id="2e4053 "></li>
                              <li id="f5b7b1"></li>
                              <li id="884ea0"></li>
                              <li id="eafaf1 "></li>
                           </ul>
                          <h4 class="emText">Embroidery Text <span id="choosedColor"></span></h4>
                            <span>For example, your initials. Maximum 8 charactes including punctuation and space</span>
                            <div class="inputField">
                            <span class="ab">Enter Your Text : </span>
                            <input type="text" id="userInput" maxlength="8" placeholder="" disabled>
                              <!-- <span class="abs bottomSpan popup_text_field">  </span> -->
                            </div>
                            <div class="bottomFabric">
                              <span class="abs bottomSpan popup_text_field">  </span>
                            </div>
                        </div>

                      </div>
                   </div>
                 </div>
              </div>
          </div>

          <div id="measurement_pop" class="popup ">
              <div class="default_close close"><a href="#" class=""><i class="fa fa-times"></i></a></div>
              <div class="responsive_close close"><a href="#" class=""><i class="fa  fa-angle-double-down"></i></a></div>
              <div class="popup_inner">
                 <div class="header clearfix">
                     <h4>Step 5.Measurement</h4>
                     <ul id="buttons">
                      <li id="prev"><button>Previous</button></li>
                       <!-- <li id="next"><button>Next</button></li> -->
                     </ul>
                 </div>
                 <div class="popup_body">
                   <div class="scrollbar"></div>
                   <div class="scrollable">
                      <h5>Choose the size of the shirt</h5>
                      <div class="sizeTabs">
                       <ul>
                         <li id="slim_fit" name="slim fit" class="active">Slim fit</li>
                         <li id="normal_fit" name="normal fit" >Normal fit</li>
                       </ul>
                      </div>
                      <div class="sizeContent" id="slim_fit_content">
<!--
                        <ul>
                          <li>
                            <div class="title_bar">
                              <h6>Slim Fit</h6>
                            </div>
                            <div class="top_bar">
                               <p><small>Collar<span>  (cm)</span></small></p>
                            </div>
                            <div class="bottom_bar">
                              <p><small>Chest<span>  (cm)</span></small></p>
                            </div>
                            <div class="inchDiv">
                              <div class="top_bar">
                                 <p><small>Collar<span>  (inch)</span></small></p>
                              </div>
                              <div class="bottom_bar">
                                <p><small>Chest<span>  (inch)</span></small></p>
                              </div>
                            </div>
                          </li>
                          <li>
                              <div class="title_bar">
                              <h6>XS</h6>
                            </div>
                            <div class="top_bar">
                               <p><small>20</small></p>
                            </div>
                            <div class="bottom_bar">
                              <p><small>50</small></p>
                            </div>
                            <div class="inchDiv">
                              <div class="top_bar">
                                 <p><small>20</small></p>
                              </div>
                              <div class="bottom_bar">
                                <p><small>20</small></p>
                              </div>
                            </div>
                          </li>
                          <li>
                             <div class="title_bar">
                              <h6>S</h6>
                            </div>
                            <div class="top_bar">
                               <p><small>23</small></p>
                            </div>
                            <div class="bottom_bar">
                              <p><small>55</small></p>
                            </div>
                            <div class="inchDiv">
                              <div class="top_bar">
                                 <p><small>20</small></p>
                              </div>
                              <div class="bottom_bar">
                                <p><small>20</small></p>
                              </div>
                            </div>
                          </li>
                          <li class="active">
                            <div class="title_bar">
                              <h6>M</h6>
                            </div>
                            <div class="top_bar">
                               <p><small>26</small></p>
                            </div>
                            <div class="bottom_bar">
                              <p><small>60</small></p>
                            </div>
                            <div class="inchDiv">
                              <div class="top_bar">
                                 <p><small>20</small></p>
                              </div>
                              <div class="bottom_bar">
                                <p><small>20</small></p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="title_bar">
                              <h6>L</h6>
                            </div>
                            <div class="top_bar">
                               <p><small>30</small></p>
                            </div>
                            <div class="bottom_bar">
                              <p><small>65</small></p>
                            </div>
                            <div class="inchDiv">
                              <div class="top_bar">
                                 <p><small>20</small></p>
                              </div>
                              <div class="bottom_bar">
                                <p><small>20</small></p>
                              </div>
                            </div>
                          </li>
                          <li>
                             <div class="title_bar">
                              <h6>XL</h6>
                            </div>
                            <div class="top_bar">
                               <p><small>33</small></p>
                            </div>
                            <div class="bottom_bar">
                              <p><small>70</small></p>
                            </div>
                            <div class="inchDiv">
                              <div class="top_bar">
                                 <p><small>20</small></p>
                              </div>
                              <div class="bottom_bar">
                                <p><small>20</small></p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="title_bar">
                              <h6>XXL</h6>
                            </div>
                            <div class="top_bar">
                               <p><small>36</small></p>
                            </div>
                            <div class="bottom_bar">
                              <p><small>75</small></p>
                            </div>
                            <div class="inchDiv">
                              <div class="top_bar">
                                 <p><small>20</small></p>
                              </div>
                              <div class="bottom_bar">
                                <p><small>20</small></p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="title_bar">
                              <h6>XXXL</h6>
                            </div>
                            <div class="top_bar">
                               <p><small>40</small></p>
                            </div>
                            <div class="bottom_bar">
                              <p><small>80</small></p>
                            </div>
                            <div class="inchDiv">
                              <div class="top_bar">
                                 <p><small>20</small></p>
                              </div>
                              <div class="bottom_bar">
                                <p><small>20</small></p>
                              </div>
                            </div>
                          </li>
                        </ul>
-->

                      </div>
                      <div class="sizeContent" id="normal_fit_content">
<!--
                        <ul>
                          <li>
                            <div class="title_bar">
                              <h6>Slim Fit</h6>
                            </div>
                            <div class="top_bar">
                               <p><small>Collar<span>  (cm)</span></small></p>
                            </div>
                            <div class="bottom_bar">
                              <p><small>Chest<span>  (cm)</span></small></p>
                            </div>
                            <div class="inchDiv">
                              <div class="top_bar">
                                 <p><small>Collar<span>  (inch)</span></small></p>
                              </div>
                              <div class="bottom_bar">
                                <p><small>Chest<span>  (inch)</span></small></p>
                              </div>
                            </div>
                          </li>
                          <li>
                              <div class="title_bar">
                              <h6>XS</h6>
                            </div>
                            <div class="top_bar">
                               <p><small>20</small></p>
                            </div>
                            <div class="bottom_bar">
                              <p><small>50</small></p>
                            </div>
                            <div class="inchDiv">
                              <div class="top_bar">
                                 <p><small>20</small></p>
                              </div>
                              <div class="bottom_bar">
                                <p><small>20</small></p>
                              </div>
                            </div>
                          </li>
                          <li>
                             <div class="title_bar">
                              <h6>S</h6>
                            </div>
                            <div class="top_bar">
                               <p><small>23</small></p>
                            </div>
                            <div class="bottom_bar">
                              <p><small>55</small></p>
                            </div>
                            <div class="inchDiv">
                              <div class="top_bar">
                                 <p><small>20</small></p>
                              </div>
                              <div class="bottom_bar">
                                <p><small>20</small></p>
                              </div>
                            </div>
                          </li>
                          <li class="active">
                            <div class="title_bar">
                              <h6>M</h6>
                            </div>
                            <div class="top_bar">
                               <p><small>26</small></p>
                            </div>
                            <div class="bottom_bar">
                              <p><small>60</small></p>
                            </div>
                            <div class="inchDiv">
                              <div class="top_bar">
                                 <p><small>20</small></p>
                              </div>
                              <div class="bottom_bar">
                                <p><small>20</small></p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="title_bar">
                              <h6>L</h6>
                            </div>
                            <div class="top_bar">
                               <p><small>30</small></p>
                            </div>
                            <div class="bottom_bar">
                              <p><small>65</small></p>
                            </div>
                            <div class="inchDiv">
                              <div class="top_bar">
                                 <p><small>20</small></p>
                              </div>
                              <div class="bottom_bar">
                                <p><small>20</small></p>
                              </div>
                            </div>
                          </li>
                          <li>
                             <div class="title_bar">
                              <h6>XL</h6>
                            </div>
                            <div class="top_bar">
                               <p><small>33</small></p>
                            </div>
                            <div class="bottom_bar">
                              <p><small>70</small></p>
                            </div>
                            <div class="inchDiv">
                              <div class="top_bar">
                                 <p><small>20</small></p>
                              </div>
                              <div class="bottom_bar">
                                <p><small>20</small></p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="title_bar">
                              <h6>XXL</h6>
                            </div>
                            <div class="top_bar">
                               <p><small>36</small></p>
                            </div>
                            <div class="bottom_bar">
                              <p><small>75</small></p>
                            </div>
                            <div class="inchDiv">
                              <div class="top_bar">
                                 <p><small>20</small></p>
                              </div>
                              <div class="bottom_bar">
                                <p><small>20</small></p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="title_bar">
                              <h6>XXXL</h6>
                            </div>
                            <div class="top_bar">
                               <p><small>40</small></p>
                            </div>
                            <div class="bottom_bar">
                              <p><small>80</small></p>
                            </div>
                            <div class="inchDiv">
                              <div class="top_bar">
                                 <p><small>20</small></p>
                              </div>
                              <div class="bottom_bar">
                                <p><small>20</small></p>
                              </div>
                            </div>
                          </li>
                        </ul>
-->
                      </div>
                      <ul class="bottom_btn_sets">
                        <li id="addToCart2">Add to cart </li>
                         <li id="splRqst">Add a Special Request </li>
                      </ul>
                   </div>
                 </div>
              </div>
          </div>
    </div>

  <!---->

  <div id="right_panel">
    <div class="rightPanelInner">
     <div class="variable_price">
      <div class="pricePreload"></div>
         <?php $product = Mage::getModel('catalog/product')->loadByAttribute('name', 'Vertical Folded Collar');
                                
                                    $price =  Mage::helper('core')->currency($product->getPrice(), true, false);?>
                                  <p>RM <span><?php echo str_replace("$","",$price);?></span></p>  
                                  
        
     </div>
      <div class="cart_btn">
        <a href="#"><div><i class="fa fa-shopping-cart"></i> <span class="cart_text"> ADD TO CART</span></div></a>
     </div>
     <ul class="right_side_bar_btn">

       <li><a href="javascript:void(0);" class="save2"><img src="images/save_btn.png" alt="#"> Save</a></li>




       <li id="reload"><a href="javascript:void(0);"><img src="images/reset_btn.png" alt="#"> Reset</a></li>

       <li><a class="share share_btn" href="javascript:void(0);"><img src="images/share_btn.png" alt="#"> Share</a></li>
     </ul>
     </div>
  </div>
  <div class="shirtControls">
    <ul>
    <!-- <span id="rangeInput"><input id="aaaa" type="range" min="85" max="200"  value="85"  /><p></p></span> -->
      <!--<li id="rotateOverlay"></li>-->
      <li id="zoomViewport">
        <img src="images/zoom.png" alt="#">
      </li>


      <li id="rotateViewport"><img src="images/rotate.png"></li>
      <li id="rotateBack"><img src="images/rotate_bk.png"></li>
    </ul>
  </div>
<span id="span_save">
 <div id="shirt_viewport">
     
      <?php echo html_entity_decode($rows[0]['data']);?>
  </div>
  
  </span>
  </div>
</body> 
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->
<script src="js/jquery-1.11.0.min.js"></script>
<script>
$('div').data('finaldesignselectedByUser', 'design2');
$('div').data('finalContrastFebric','contrastFabric1');
$('div').data('finalBaseFebric','baseFebric1');
</script>
<!-- custom scrollbar -->
<script src="js/jquery-1.11.0.min.js"></script>
    
    
    <script>
        
        function change()
        {
            
            var baseName = $('#base_fabric_sec').html();
            
            //alert(baseName);
            
        }
        
        </script>

<!-- custom scrollbar -->

<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.min.js"></script>

<script>
    var designname="<?php echo $pro_name?>";
    $(document).ready(function(){
    	jQuery.ajax({
 url     : 'get_fab_code.php',
 type    : 'post',
 data    : {designname:designname},
 success : function( response){
  if(response){
 	 //alert(response);
	 var colorCodes = new Array();
	 var dataval = $.parseJSON(response);
	 colorCodes = dataval["embroiderycode"];

	 //selection the customize contrast
	 	customize_contrast_user_contrast = dataval["user_contrast"];// selection of the the no-contrast part (1 or 0);
	 	customize_contrast_must_contrast = dataval["must_contrast"];
	 	customize_contrast_no_contrast = dataval["no_contrast"];
	 	//alert(customize_contrast_user_contrast+' '+ customize_contrast_must_contrast +''+customize_contrast_no_contrast);
	 	if(customize_contrast_user_contrast == 1){
	 		$('.noContrast').show();
	 		 
	 		$('.noContrast').bind('click',function(){
	 			var noContrastClick = 1
	 			$(this).addClass('noContrastClicked');
	 			
	 			$('div').data('noContrastSelected','1');
	 			//alert($('div').data('noContrastSelected'));
	 			for(i=0;i<12;i++){
	 				var haveContrast = $('#forContrastArray li').eq(i).text();
	 				if(haveContrast != 'no'){
	 					var contrastLi = haveContrast;
	 					//alert(contrastLi);
	 					$('.shirtHolder li#'+contrastLi).find('img').attr('src','products/design/no_img.png');
	 				}
	 			}
	 			
	 		});

	 		//showing the no contrast section in front End
	 	}else{
	 		$('.noContrast').hide();

	 		//hideing the no contrast section in front End

	 	}

	 	// no contrast section


	 	


	 var designList = ['no','no','no','no','no','no','no','no','no','no','no','no'];

	 var designPattern = [ 'base',
							'inner_back',
							'full_collar',
							'inner_collar',
							'outer_collar',
							'base_top',
							'inner_placket',
							'outer_placket',
							'full_sleev',
							'hulf_sleev',
							'left_cuff',
							'right_cuff'
				];
				var designContrastPattern = [ 'base_contrast',
												'inner_back_contrast',
												'full_collar_contrast',
												'inner_collar_contrast',
												'outer_collar_contrast',
												'base_top_contrast',
												'inner_placket_contrast',
												'outer_placket_contrast',
												'full_sleev_contrast',
												'hulf_sleev_contrast',
												'left_cuff_contrast',
												'right_cuff_contrast'
											];

			for(i=0;i<12;i++){
				var aa = designPattern[i];
				var bb = designContrastPattern[i];
				//alert(dataval[aa]);
				if(dataval[aa] == 1){
					//designSet[aa] = aa;
					$('#forArray ul li#'+aa).text(aa);
					designList[i] = aa;
					//alert(designSet[aa]);
					//alert(designSet[5]);

				}else {
						$('#forArray ul li#'+aa).text('no');
				}
				/****main fabcric selection****/

				if(dataval[bb] == 1){
					//alert(bb);
					var u = bb;
					updatedString = u.replace('_contrast','');
					//alert(updatedString);
					$('#forContrastArray ul li#'+updatedString).text(updatedString);
					//designList[i] = aa;
					//alert(designSet[aa]);
					//alert(designSet[5]);

				}else {
					var u = bb;
					updatedString = u.replace('_contrast','');
						$('#forContrastArray ul li#'+updatedString).text('no');
				}
				/****contrast fabcric selection****/
			}

			if(customize_contrast_no_contrast == 1){

	 		$('#contrastFebric').hide();
	 		$('#popups .popup #baseFebric').css({'width':'100%'});
	 		$('#fabric .productImg').css({'width':'15%'});
	 		$('#baseFebric li').bind('click',function(){

	 			for(i=0;i<12;i++){
	 				var haveContrast = $('#forContrastArray li').eq(i).text();
	 				
	 				if(haveContrast != 'no'){
	 					var contrastLi = haveContrast;
	 					//alert(contrastLi);
	 					$('.shirtHolder li#'+contrastLi).addClass('sdfsdsdafds').find('img').attr('src','products/design/no_img.png');	 					
	 				}
	 			}

	 		});
	 		
	 	}



			/**********************************************************************/


			var designS = id;

		 	var totaleLiLength = $('.shirtHolder ul li').length;
		  for(i=0;i<totaleLiLength;i++){
		  // console.log("dfsdf");
		  //alert("sdfsdfsadfsadf");
		 		 var initArray = $('#forArray li').eq(i).text();
		 		// alert(initArray);
		 		var listId = $('.shirtHolder ul li').eq(i).attr('id');
		 		if(listId == initArray){
					//alert(listId+'=='+initArray);
		 		 console.log('This is :'+initArray );

		 		 $('.shirtHolder ul li').eq(i).find('img').after('<div class="preload"></div>').hide()
		 		 .attr('src','products/design/'+ designS +'/'+ initArray +'.png').one('load', function() {
		 								 $(this).fadeIn().next().remove();
		 							});
		 		 //$('.shirtHolder ul li').eq(i).find('img').attr('src','http://www.ihaveapc.com/wp-content/uploads//2011/07/Stunning-HD-Wallpaper-155.jpg');
		 		 //$('#ajaxloader').hide();
		 		}else{
		 		 console.log("not Found");
		 		 //$('#ajaxloader').show();
		 		 $('.shirtHolder ul li').eq(i).find('img').attr('src','products/design/no_img.png');
		 		 //$('#ajaxloader').hide();
		 		}
		 	}


			//$('div').data('designListarray',designList);

		 //ContrastBasedChanges();

		// var basefabricname = new Array();
		// basefabricname = dataval["test"];
		//alert(dataval['optnplck']);
		//alert(dataval['opnclr']);
		//alert(dataval['opnslv']);

		var placket = dataval['optnplck'];
		var collar = dataval['opnclr'];
		if(placket == 0){
				$('#customize ul li#c2').css({'position':'relative'});
			$('#customize ul li#c2').prepend( "<div class='disabled_li'></div>");
		}
		if(collar == 0){
			$('#customize ul li#c3').css({'position':'relative'});
			$('#customize ul li#c3').prepend( "<div class='disabled_li'></div>");
		}

		 $("#slim_fit_content").html(dataval["slimsize"]);
		 $("#normal_fit_content").html(dataval["normalsize"]);

		//alert(basefabricname['fab1name']);

		//$.each(dataval.test,function (key, data) {
    //console.log(key);
	//alert(key);
    //$.each(data, function (index, data) {
      // alert(index +'===='+ data);
//

  //  });
//});

	//	$.each(dataval.test,function() { alert(this.keys(0)); });

		//alert(colorCodes[0]);
	 //ranit's code

	 for(i=0;i<10;i++){
	 	$('.EmColors li').eq(i).attr('id',colorCodes[i]).css({'background':'#'+colorCodes[i]});
	 }


	 //base fabric
	 	var bL = $('#baseFebric ul li').length;

	 for(i=0;i<bL;i++){
	 	var fNameClass = ".name_fabric"+(i+1);
	 	var fName = dataval["fab"+ (i+1) +"name"] ;
	 	var fCode = dataval["fab"+ (i+1) +"code"] ;
	 	//alert("xx");
	 	//alert(""+fNameClass+ "=="+fName+" and code "+fCode );
	 	if(fName == null || fCode == null){
	 		//alert(fNameClass);
	 		var n = i+1;
	 		$(".name_fabric"+n).parent().parent().parent().addClass("have_to_disabled");
	 		/*$('#fabric li.have_to_disabled').css({'position':'relative'}).prepend( "<div class='disabled_li'></div>");*/
	 	}
	 	var j = i+1;
	 	$(".name_fabric"+j).text(fName);
	 	$(".code_fabric"+j).text(fCode);
		//$(".code_fabric1").text(fb1_code);


	 }

	 //contrast fabric

	 var cL = $('#contrastFebric ul li').length;
	 var countOfNoContrast = 0;
	 var nofabric = 0;
	 for(x=0;x<cL;x++){
	 	var CfName = dataval["confab"+ (x+1) +"name"] ;
	 	var CfCode = dataval["confab"+ (x+1) +"code"] ;
	 	//console.log(CfName+" and code "+CfCode );
	 //	alert("countOfNoContrast");
	 	/*if(CfName == null && CfCode == null){
	 		countOfNoContrast = countOfNoContrast + 1;

	 	}*/
	 	/*if(CfName == null && CfCode == null ){
	 		nofabric= nofabric+1;
	 		alert(nofabric);
	 	}*/

	 	if(CfName == null || CfCode == null ){
	 		nofabric = nofabric+1;
	 		var o = x+1;
	 		$(".con_name_fabric"+o).parent().parent().parent().addClass("have_to_disabled");
	 		/*$('#fabric li.have_to_disabled').css({'position':'relative'}).prepend( "<div class='disabled_li'></div>");*/
	 	}
	 	if(nofabric>=cL){
	 		$('#contrastFebric').hide();
	 		$('#popups .popup #baseFebric').css({'width':'100%'});
	 		$('#fabric .productImg').css({'width':'15%'});
	 	}

	 	var z = x+1;
	 	$(".con_name_fabric"+z).text(CfName);
		$(".con_code_fabric"+z).text(CfCode);
	 }

$('#fabric li.have_to_disabled').css({'position':'relative'}).prepend( "<div class='disabled_li'></div>");
$('#fabric li.have_to_disabled').unbind('click');
/*

  var fab1= dataval["fab1name"];
  var fb1_code = dataval["fab1code"];

   var fab2= dataval["fab2name"];
  var fb2_code = dataval["fab2code"];

   var fab3= dataval["fab3name"];
  var fb3_code = dataval["fab3code"];

  var fab4= dataval["fab4name"];
  var fb4_code = dataval["fab4code"];

  var fab5= dataval["fab5name"];
  var fb5_code = dataval["fab5code"];

  var fab6= dataval["fab6name"];
  var fb6_code = dataval["fab6code"];

  var fab7= dataval["fab7name"];
  var fb7_code = dataval["fab7code"];

  var fab8= dataval["fab8name"];
  var fb8_code = dataval["fab8code"];

  var fab9= dataval["fab9name"];
  var fb9_code = dataval["fab9code"];

  var fab10= dataval["fab10name"];
  var fb10_code = dataval["fab10code"];*/


  /*************************************
             RANIT'S CODE
  **************************************/

/*

  $(".name_fabric1").text(fab1);
$(".code_fabric1").text(fb1_code);

$(".name_fabric2").text(fab2);
$(".code_fabric2").text(fb2_code);

$(".name_fabric3").text(fab3);
$(".code_fabric3").text(fb3_code);

$(".name_fabric4").text(fab4);
$(".code_fabric4").text(fb4_code);


$(".name_fabric5").text(fab5);
$(".code_fabric5").text(fb5_code);

$(".name_fabric6").text(fab6);
$(".code_fabric6").text(fb6_code);

$(".name_fabric7").text(fab7);
$(".code_fabric7").text(fb7_code);

$(".name_fabric8").text(fab8);
$(".code_fabric8").text(fb8_code);

$(".name_fabric9").text(fab9);
$(".code_fabric9").text(fb9_code);

$(".name_fabric10").text(fab10);
$(".code_fabric10").text(fb10_code);
  */


  /*Contrast fabric*/
 /* var con_fab1= dataval["confab1name"];
  var con_fb1_code = dataval["confab1code"];

   var con_fab2= dataval["fab2name"];
  var con_fb2_code = dataval["fab2code"];

   var con_fab3= dataval["fab3name"];
  var con_fb3_code = dataval["fab3code"];

  var con_fab4= dataval["fab4name"];
  var con_fb4_code = dataval["fab4code"];

  var con_fab5= dataval["fab5name"];
  var con_fb5_code = dataval["fab5code"];

  var con_fab6= dataval["fab6name"];
  var con_fb6_code = dataval["fab6code"];

  var con_fab7= dataval["fab7name"];
  var con_fb7_code = dataval["fab7code"];

  var con_fab8= dataval["fab8name"];
  var con_fb8_code = dataval["fab8code"];

  var con_fab9= dataval["fab9name"];
  var con_fb9_code = dataval["fab9code"];

  var con_fab10= dataval["fab10name"];
  var con_fb10_code = dataval["fab10code"];*/

/*Contrast fabric*/
/*
$(".con_name_fabric1").text(con_fab1);
$(".con_code_fabric1").text(con_fb1_code);

$(".con_name_fabric2").text(con_fab2);
$(".con_code_fabric2").text(con_fb2_code);

$(".con_name_fabric3").text(con_fab3);
$(".con_code_fabric3").text(con_fb3_code);

$(".con_name_fabric4").text(con_fab4);
$(".con_code_fabric4").text(con_fb4_code);


$(".con_name_fabric5").text(con_fab5);
$(".con_code_fabric5").text(con_fb5_code);

$(".con_name_fabric6").text(con_fab6);
$(".con_code_fabric6").text(con_fb6_code);

$(".con_name_fabric7").text(con_fab7);
$(".con_code_fabric7").text(con_fb7_code);

$(".con_name_fabric8").text(con_fab8);
$(".con_code_fabric8").text(con_fb8_code);

$(".con_name_fabric9").text(con_fab9);
$(".con_code_fabric9").text(con_fb9_code);

$(".con_name_fabric10").text(con_fab10);
$(".con_code_fabric10").text(con_fb10_code);

$(".con_name_fabric11").text(con_fab11);
$(".con_code_fabric11").text(con_fb11_code);

$(".con_name_fabric12").text(con_fab12);
$(".con_code_fabric12").text(con_fb12_code);

$(".con_name_fabric13").text(con_fab13);
$(".con_code_fabric13").text(con_fb13_code);*/




var tempText1 = $('#li#base_fabric_name').text();
	var tempText2 = $('#li#base_fabric_code').text();
	var tempText3 = $('#li#contrast_fabric_name').text();
	var tempText4 = $('#li#contrast_fabric_code').text();
	var tempText5 = $('#li#sleev_area').text();	
	var tempText7 = $('#li#emb_area').text();
	

	if(tempText1 == undefined){
		$('#li#base_fabric_name').text('Not Selected');
	}
	if(tempText2 == undefined){
		$('#li#base_fabric_code').text('Not Selected');
	}
	if(tempText3 == undefined){
		$('#li#contrast_fabric_name').text('Not Selected');
	}
	if(tempText4 == undefined){
		$('#li#contrast_fabric_code').text('Not Selected');
	}

	var tempText5_UP = tempText5.split('undefined');
						if(tempText5_UP.length > 1){
							//do nothing
						}else{
							$('#li#sleev_area').text('Sleev : Not Selected');
						}
	var tempText7_UP = tempText7.split('undefined');
						if(tempText7_UP.length > 1){
							//do nothing
						}else{
							$('#li#emb_area').text('Embriodery : Not Selected');
						}


  }else{
alert('xxxxxxx');
  }
 }
 });
 });
    </script>

<script src="js/html2canvas.js" type="text/javascript"></script>

<!-- ready made shirt slider -->
<!-- <script src="js/designs.js"></script> -->

<?php  if($_REQUEST['id']!='')
 { ?>
 <script>
$('#design').bind('click',function(){
	
	var designNSelected = "<?php echo $design_name ?>";
	$('div').data('designNSelected',designNSelected );
	$('#design li#design1').addClass("Working");
});

</script>
<script src="js/shirt_new.js"></script>

 <?php } ?>
 <?php  if($_REQUEST['id']=='')
 { ?>
<script src="js/shirt.js"></script>
 <?php } ?>
<script src="js/custom.js"></script>
<script src="js/mainResponsive.js"></script>
<!--<script src="js/shirt_customization.js"></script>-->
<script>
function save()
{


var custom_design_name = $('#saved_Option_Name').val();
var design = $('div').data('finaldesignselectedByUser');
 var baseFabric = $('div').data('finalBaseFebric');
var contrastFabric = $('div').data('finalContrastFebric');
 var show = document.getElementById("shirt_viewport").innerHTML;
	var element = $("#shirt_viewport"); // global variable
         var getCanvas; // global variable
         html2canvas(element, {
         onrendered: function (canvas) {
                //$("#previewImage").append(canvas);
                getCanvas = canvas;
				var imgageData = getCanvas.toDataURL("image/png");
				//alert(imgageData);
				var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
 jQuery.ajax({
 url     : 'data_store.php',
 type    : 'POST',
 data    : {design:design, newData:newData, custom_design_name:custom_design_name,show:show,baseFabric:baseFabric,contrastFabric:contrastFabric},
 success : function( response){
  if(response){
  // alert(response);
  $('#saveInner').find('form').html('<h5 style="text-align:center;"> ' + response +'</h5>').parent().parent().delay(4000).fadeOut(5000);

  }else{

  }
 }
 });
 }

         });
}
</script>

<script>
function sharefb()
{

 var hiddenspan = $('.hiddenSpan').text();

 jQuery.ajax({
 url     : 'show_image.php',
 type    : 'POST',
 data    : {hiddenspan:hiddenspan},
 success : function( response){
  if(response){
  // alert(response);

  }else{

  }
 }
 })
}
</script>
<script>
    var fabcode_alt = "<?php echo $row["contast_fabric"] ?>";
fabcode_alt = fabcode_alt.trim();
	var confabcode_alt = "<?php echo $row["base_fabric"] ?>";
confabcode_alt = confabcode_alt.trim();
	var sleev = "<?php echo $row["sleev"] ?>";

	var desname = "<?php echo $pro_name ?>";

	//alert(desname);
	var slim_or_normal = "<?php echo $row["slim_or_normal"] ?>";
	var measurement_size = "<?php echo $row["measurement_size"] ?>";
	
    
    </script>
<script>
function addtoCart()
{
    
    
	var fabcode_alt = $('div').data('baseFabric_name');
    
    
    
    
    

	var confabcode_alt = $('div').data('contrastFabric_name');
    
    
	var sleev = $('div').data('selected_Sleev');

	var desname = $('#User_design_name').text();
    
    //alert(desname);

	//alert(desname);
	var slim_or_normal = $('div').data('Slim_or_normal'); // same slim or normal
	var measurement_size = $('div').data('measurement_size');
	var rqst_data= $('div').data('Spl_rqst_data');
	//alert(measurement_size);
	//alert(slim_or_normal);

	var emdtext = $('div').data('Embriodery_text');
    
    //alert(fabcode_alt);
    
    if(fabcode_alt== undefined )
        {
            
            fabcode_alt = "<?php echo $row["contast_fabric"] ?>";
            
           // alert(fabcode_alt);

        
        }
    if(confabcode_alt== undefined )
        {
            
            confabcode_alt = "<?php echo $row["base_fabric"] ?>";
            
            //alert(confabcode_alt);

        
        }   
    
    if(sleev== undefined )
        {
            
            sleev = "<?php echo $row["sleev"] ?>";
            
            //alert(sleev);

        
        }
    //alert(desname);
    if(desname == 'undefined' ){
            desname = "<?php echo $pro_data["name"] ?>"; 
            //alert(desname);
            
            
        }
//    
	
    
    
    if(slim_or_normal == undefined){
        
    slim_or_normal = "<?php echo $row["slim_or_normal"] ?>";
        
    }
    
    if(measurement_size == undefined){
        
    measurement_size = "<?php echo $row["measurement_size"] ?>";
        
    }
	
	
    
    
        fabcode_alt = fabcode_alt.trim();

    confabcode_alt = confabcode_alt.trim();

    
    

	var element = $("#shirt_viewport"); // global variable
         var getCanvas; // global variable
         html2canvas(element, {
         onrendered: function (canvas) {
                //$("#previewImage").append(canvas);
                getCanvas = canvas;
				var imgageData = getCanvas.toDataURL("image/png");
				var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");

				var d = new Date();
    			var n = d.getTime();

				var embcolor = $('div').data('embroidery_color');

				var embtext = $('div').data('Embriodery_text');

				//alert(embtext);

				jQuery.ajax({
				 url     : 'change_new.php',
				 type    : 'POST',
				 data    : {measurement_size:measurement_size, slim_or_normal:slim_or_normal,fabcode_alt:fabcode_alt, desname:desname, confabcode_alt:confabcode_alt,sleev:sleev,emdtext:emdtext,newData:newData,n:n,rqst_data:rqst_data},
				 success : function( response){
				  if(response){
				   //alert(response);
           var cart = response;
           $('span.circle').text(cart);
				   console.log(response);
           $('li.pop_bottom_btn_set').fadeOut();
           $('#addto_Inner').html('<h4 style="text-align:center;"> Successfully Added !!!</h4><img src="images/tick2.gif"/>');
           $('#addto_Inner img').fadeOut(1000)
           $('#addto_Inner').html('<h4 style="text-align:center;"> Successfully Added !!!</h4><a class="gotoCartBtn" href="http://www.uniterreneprojects.com/dev/vertical-menswere/checkout/cart">Goto Cart</a>');

				  }else{

				  }
				 }
				 });

             }

         });




}


</script>


</html>

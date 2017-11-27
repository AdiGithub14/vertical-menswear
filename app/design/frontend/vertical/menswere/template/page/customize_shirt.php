<?php
require_once 'app/Mage.php';

umask(0);
Mage::init('default');
 if($_REQUEST['id']!='')
 {
	 $connection = Mage::getSingleton('core/resource')->getConnection('core_read');
	$id = $_GET['id'];
	 $sql        = "SELECT * FROM  `social_sharing` where `id`=$id
LIMIT 0 , 30 ";
	 $rows       = $connection->fetchAll($sql);

//echo html_entity_decode($rows[0]['social_innerdata']);
//die;
 }

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
  <ul id="infoHolers">
      <li class="prevImg">
        <img src="products/design/design1/design1.png">
      </li>
      <li class="prevInfo">
        <ul id='User_updated_info'>
         <h4> <li id="User_design_name">Your Design Name</li></h4>

           <li id="fabric_section">

             <ul id="base_fabric_sec">
               <li id=base_fabric_name>base_fabric_name</li>
               <li id=base_fabric_code>base_fabric_code</li>
             </ul>
             <ul id="contrast_fabric_sec">
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

          <?php
            require_once 'app/Mage.php';

umask(0);
Mage::init('default');
            $sessionCustomer = Mage::getSingleton("customer/session");

if($sessionCustomer->isLoggedIn()) { 
            
            ?>
 <li><a href="<?php echo $url;?>customer/account/logout/"><i class="fa fa-lock"></i> Sign Out</a></li>

        <?php    }
            else { ?>
            
            <li><a href="<?php echo $url;?>customer/account/login/"><i class="fa fa-lock"></i>  In</a></li>
   
<?php } ?>
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
                               <?php $product = Mage::getModel('catalog/product')->loadByAttribute('name', 'Vertical Folded Collar');
                                
                                    $price =  Mage::helper('core')->currency($product->getPrice(), true, false);
                                    echo str_replace("$","RM",$price);
                                  ?>
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
                                <?php $product = Mage::getModel('catalog/product')->loadByAttribute('name', 'Vertical Mandarin Collar');
                                
                                    $price =  Mage::helper('core')->currency($product->getPrice(), true, false);
                                    echo str_replace("$","RM",$price);
                                  ?>
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
                               <?php $product = Mage::getModel('catalog/product')->loadByAttribute('name', 'Vertical Denim');
                                
                                    $price =  Mage::helper('core')->currency($product->getPrice(), true, false);
                                    echo str_replace("$","RM",$price);
                                  ?>
                              </p>
                           </div>
                           </div>


                         </li>
                         <li id="d4" >
                            <div class="productImg">
                                <img src="images/design4.png" alt="#">
                            </div>
                           <div  class="productName">
                              <h5 >Vertical Double Collar</h5>
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
                      <ul>
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
                                 <input type="radio" name="sleev" value="full_sleev">
                              </div>
                              <div class="inputlabel clearfix">
                                <img src="images/long.png">
                                 <label>Long Sleeve</label>
                                   <div class="price_sec"><p><strong>RM135</strong></p></div>
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
                            <span>For Example your initials, Maximum 10 charactes Including Punction</span>
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

                      </div>
                      <div class="sizeContent" id="normal_fit_content">
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
        <p>RM <span>60.00</span></p>
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
<?php  if($_REQUEST['id']=='')
 { ?>
    <div id="shirtMove">

      <div class="shirtHolder ui-widget-content">

        <ul>

          <li id="base"><img  src="">
          <!--Gupi hle delete krte hbe-->
          <span id="forShirtV" class="abs bottomSpan"></span>
          </li>

          <li id="inner_back"><img  src=""></li>

          <li id="full_collar"><img  src=""></li>

          <li id="inner_collar"><img  src=""></li>

          <li id="outer_collar"><img  src=""></li>

          <li id="base_top"><img  src=""></li>

          <li id="inner_placket"><img  src=""></li>

          <li id="outer_placket"><img  src=""></li>

          <li id="full_sleev"><img  src=""></li>

          <li id="hulf_sleev"><img  src=""></li>

          <li id="left_cuff"><img  src=""></li>

          <li id="right_cuff"><img  src=""></li>
			<!--Gupi hle delete krte hbe-->
            <li id='viewport_2'></li>
        </ul>

      </div>
 <?php  }
 else {?>

 <?php echo html_entity_decode($rows[0]['social_innerdata']);?>

 <?php } ?>
      </div>


  </div>
</span>

</div>
</body>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- custom scrollbar -->
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.min.js"></script>

<script src="js/html2canvas.js" type="text/javascript"></script>
<!-- ready made shirt slider -->
<!-- <script src="js/designs.js"></script> -->

<?php  if($_REQUEST['id']!='')
 { ?>
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
function addtoCart()
{
	var fabcode_alt = $('div').data('baseFabric_name');

	var confabcode_alt = $('div').data('contrastFabric_name');

	var sleev = $('div').data('selected_Sleev');

	var desname = $('#User_design_name').text();

	//alert(desname);
	var slim_or_normal = $('div').data('Slim_or_normal'); // same slim or normal
	var measurement_size = $('div').data('measurement_size');
	var rqst_data= $('div').data('Spl_rqst_data');
	//alert(measurement_size);
	//alert(slim_or_normal);

	var emdtext = $('div').data('Embriodery_text');

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

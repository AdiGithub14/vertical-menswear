<?php
require_once 'app/Mage.php';
umask(0);
Mage::init('default');
Mage::getSingleton('core/session', array('name' => 'frontend'));
$log_status = 0;
$sessionCustomer = Mage::getSingleton("customer/session");
if($sessionCustomer->isLoggedIn()) {
  $log_status = 1;
  
} 
 if($_REQUEST['id']!='')
 {
	 $connection = Mage::getSingleton('core/resource')->getConnection('core_read');
	$id = $_GET['id'];
	 $sql        = "SELECT * FROM  `social_sharing` where `id`=$id
LIMIT 0 , 30 ";
	 $rows       = $connection->fetchAll($sql);
     
     
     foreach($rows as $row)
     {
         
        // print_r($rows);
         
        $design_name = $row["desname"];
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
    <div class="close_this"> X </div>
    <ul>
      <li>
        <textarea name="spl_rqst" id="spical_request_field" placeholder="Please Type Your Request Here"></textarea>
      </li>
      <li>
        <button type="submit" id="spl_rqst_btn" name="button">Submit</button>
      </li>
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
      <li class="prevImg"> <img src="products/design/design1/design1.png"> </li>
      <li class="prevInfo">
        <ul id='User_updated_info'>
          <h4>
            <li id="User_design_name">Your Design Name</li>
          </h4>
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
      <li class="pop_bottom_btn_set">
        <button id="processed" onClick="addtoCart();" class="cart_btn">
        <a href="#">Add To Cart</a>
        </button>
      </li>
      <li class="pop_bottom_btn_set">
        <button  class="cart_btn ">
        <a href="#" class="save2 ">Save</a>
        </button>
      </li>
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
        <li id="input_area_for_save">
          <input type="text" name="saved_Option_Name" id="saved_Option_Name" placeholder="Please Enter a Name to save">
        </li>
        <li id="save_btn_area">
          <input type="button" name="save__Btn" onClick="save()" id="save_btn" value="Save" class="cart">
        </li>
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
      <?php //$url = Mage::getBaseUrl();?>
      <div class="logo"> <a href="<?php echo $url;?>"><img src="images/logo.png" ></a> </div>
      <div class="top_menu">
        <ul>
          <li>
            <?php if($log_status == 0) {?>
            <a href="<?php echo $url;?>customer/account/login/"><i class="fa fa-lock"></i> Sign In</a>
            <?php } 
         
         else {
         
         ?>
            <a href="<?php echo $url;?>customer/account/logout/"><i class="fa fa-lock"></i> Sign Out</a>
            <?php } ?>
          </li>
          <li><a href="<?php echo $url?>/wishlist/"><i class="fa fa-heart"></i><span> wish list</span></a></li>
          <li><a href="<?php echo $url?>/checkout/cart"><i class="fa fa-shopping-bag"></i><span> shopping bag </span><span class="circle">0</span></a></li>
        </ul>
      </div>
    </div>
  </div>
</header>
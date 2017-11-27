<?php 
require_once 'app/Mage.php'; 

umask(0);  
Mage::init('default');

$id = $_GET['id'];

$connection = Mage::getSingleton('core/resource')->getConnection('core_read');
$sql        = "SELECT * FROM  `custmize_shirt` where `Save_id`=$id
LIMIT 0 , 30 ";
$rows       = $connection->fetchAll($sql); 

//echo html_entity_decode($rows[0]['data']);


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>VERTICAL MENSWEAR</title>
<link href="css/custom.css" type="text/css" rel="stylesheet">
<link href="css/responsive.css" type="text/css" rel="stylesheet">
<link href="css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css"> 
</head>
<body id="customizeBody">
<div class="share_overlay">
       <div class="share_block">
         <div class="share_inner">
           <div class="close_btn"><a href="javascript:void(0);" ><i class="fa fa-times"></i></a></div>
           <ul class="clearfix">
               <li><a class="fb_link" target="_blank" href="http://www.facebook.com/sharer.php?s=100&p[url]=www.uniterreneprojects.com/dev/vertical-menswere/customize_shirt_new_import.php?id=862967900"><i class="fa fa-facebook"></i> Share on  Facebook</a></li>
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
      <div class="logo"> <a href="#"><img src="images/logo.png" ></a> </div>
      <div class="top_menu">
        <ul>
          <li><a href="#"><i class="fa fa-lock"></i><span> Sign In</span></a></li>
          <li><a href="#"><i class="fa fa-heart"></i><span> wish list</span></a></li>
          <li><a href="#"><i class="fa fa-shopping-bag"></i><span> shopping bag </span><span class="circle">0</span></a></li>
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
             <li id="addToCart">
                <img src="images/cart_icon.png" alt="#">
                <p>Add to Cart</p>
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
                      <ul>
                         <li id="d1" >
                            <div class="productImg">
                                <img src="images/design1.png" alt="#">
                            </div>
                           <div class="productName">
                              <h5>Vertical Designer Collar</h5>
                              <div class="productPrice">
                              <p class="code">
                               RM 135.00
                              </p>
                           </div>
                           </div>
                           
                                
                         </li>
                         <li id="d2" >
                            <div class="productImg">
                                <img src="images/design2.png" alt="#">
                            </div>
                           <div class="productName">
                              <h5>Vertical Mandarin Collar</h5>
                              <div class="productPrice">
                              <p class="code">
                               RM 125.00
                              </p>
                           </div>
                           </div>
                           
                                
                         </li>
                         <li id="d3" >
                            <div class="productImg">
                                <img src="images/design3.png" alt="#">
                            </div>
                           <div class="productName">
                              <h5>Vertical Denim</h5>
                              <div class="productPrice">
                              <p class="code">
                               RM 139.50
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
                              <h5>Vertical Folded Collar</h5>
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
                              <h5>Vertical Horizon Matched (Half-Matched)</h5>
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
                              <h5>Vertical Casual Smart </h5>
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
                               KM-MD1-P001
                              </p>
                              <p class="code_fabric">
                              <small>Cotton Drill, White</small>
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
                               KM-MD33-P003
                              </p>
                              <p class="code_fabric">
                              <small>Cotton Drill, Black</small>
                              </p>
                           </div>
                                
                         </li>
                         <li id="fab3" >
                            <div class="productImg">
                                <img src="images/fb3.png" alt="#">
                            </div>
                           <div class="productPrice">
                              <p class="code_fabric">
                               KM-MD32-P006
                              </p>
                              <p class="code_fabric">
                              <small>Cotton Drill, Dark Grey</small>
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
                               KM-MD21-P002
                              </p>
                              <p class="code_fabric">
                              <small>Cotton Drill, Red</small>
                              </p>
                           </div>
                                
                         </li>
                         <li id="fab5" >
                            <div class="productImg">
                                <img src="images/fb5.png" alt="#">
                            </div>
                           <div class="productPrice">
                              <p class="code_fabric">
                               KM-MD28-P015
                              </p>
                              <p class="code_fabric">
                              <small>Cotton Drill, Navy Blue</small>
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
                               KM-MD30-P005
                              </p>
                              <p class="code_fabric">
                              <small>Cotton Drill, Maroon</small>
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
                                KM-MD62-P014
                              </p>
                              <p class="code_fabric">
                              <small>Cotton Drill, Grey</small>
                              </p>
                           </div>
                                
                         </li>
                          <li id="fab8" >
                            <div class="productImg">
                                <img src="images/fb8.png" alt="#">
                            </div>
                           <div class="productPrice">
                              <p class="code_fabric">
                                KM-MD45-P010
                              </p>
                              <p class="code_fabric">
                              <small>Cotton Drill, Dark Maroon</small>
                              </p>
                           </div>
                                
                         </li>
                          <li id="fab9" >
                            <div class="productImg">
                                <img src="images/fb8.png" alt="#">
                            </div>
                           <div class="productPrice">
                              <p class="code_fabric">
                                KM-MD91-P007
                              </p>
                              <p class="code_fabric">
                              <small>Cotton Drill, Blue</small>
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
                                KM-MD78-P008
                              </p>
                              <p class="code_fabric">
                              <small>Cotton Drill, Purple</small>
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
                              KM-MD1-P001
                              </p>
                              <p class="code_fabric">
                               <small>Cotton Drill, White</small>
                              </p>
                           </div>
                                
                         </li>
                         <li id="cst2" >
                            <div class="productImg">
                                <img src="images/cst2.png" alt="#">
                            </div>
                           <div class="productPrice">
                              <p class="code_fabric">
                              KM-MD21-P002
                              </p>
                              <p class="code_fabric">
                               <small>Cotton Drill, Red</small>
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
                              KM-MD33-P003
                              </p>
                              <p class="code_fabric">
                               <small>Cotton Drill, Black</small>
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
                              KM-MD30-P005
                              </p>
                              <p class="code_fabric">
                               <small>Cotton Drill, Maroon</small>
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
                              KM-MD32-P006
                              </p>
                              <p class="code_fabric">
                               <small>Cotton Drill, Dark Grey</small>
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
                              KM-MD47-P011
                              </p>
                              <p class="code_fabric">
                               <small>Cotton Drill, Pink</small>
                              </p>
                           </div>
                                
                         </li>
                         <li id="cst7" >
                            <div class="productImg">
                                <img src="images/cst7.png" alt="#">
                            </div>
                           <div class="productPrice">
                               <p class="code_fabric">
                              YF637-3-C014
                              </p>
                              <p class="code_fabric">
                               <small>Checkered Cotton, Red</small>
                              </p>
                           </div>
                                
                         </li>
                         <li id="cst8" >
                            <div class="productImg">
                                <img src="images/cst8.png" alt="#">
                            </div>
                           <div class="productPrice">
                              <p class="code_fabric">
                              GL-C013
                              </p>
                              <p class="code_fabric">
                               <small>Checkered Cotton, Black</small>
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
                              KM-B&W1-C011
                              </p>
                              <p class="code_fabric">
                               <small>Checkered Cotton, Black</small>
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
                              GL-F011
                              </p>
                              <p class="code_fabric">
                               <small>Floral Cotton</small>
                              </p>
                           </div>
                                
                         </li>
                         <li id="cst11" >
                            <div class="productImg">
                                <img src="images/cst8.png" alt="#">
                            </div>
                           <div class="productPrice">
                              <p class="code_fabric">
                              GL-F012
                              </p>
                              <p class="code_fabric">
                               <small>Floral Cotton</small>
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
                              GL-S007
                              </p>
                              <p class="code_fabric">
                               <small>Stripe Cotton, B&W </small>
                              </p>
                           </div>
                         </li>
                         <li id="cst13" >
                            <div class="productImg">
                                <img src="images/cst8.png" alt="#">
                            </div>
                           <div class="productPrice">
                              <p class="code_fabric">
                              GL-S002
                              </p>
                              <p class="code_fabric">
                               <small>Stripe Cotton, Pink</small>
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
                              GL-S004
                              </p>
                              <p class="code_fabric">
                               <small>Stripe Cotton, Light Blue</small>
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
                              GL-S003
                              </p>
                              <p class="code_fabric">
                               <small>Stripe Cotton, Red</small>
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
                               <div class="input_sec">
                                  <input type="radio" name="sleev" value="hulf_sleev"> <label> Short Sleeve </label>
                                </div> 
                               <div class="price_sec"><p><strong>RM125</strong></p></div>
                              </div>
                            <div class="sleeve_sec">
                               <div class="input_sec">
                                  <input type="radio" name="sleev" value="full_sleev"> <label> Long Sleeve </label>
                                </div> 
                               <div class="price_sec"><p><strong>RM135</strong></p></div>
                              </div>
                         </li>
                         <li id="c2" >
                             <h5>Customize Placket</h5> 
                            <div class="sleeve_sec">
                               <div class="input_sec">
                                  <input type="radio" name="sleev" value="covered_plaket"> <label> Covered Placket </label>
                                </div> 
                              </div>
                            <div class="sleeve_sec">
                               <div class="input_sec">
                                  <input type="radio" name="sleev" value="normal_plaket"> <label> Exposed Placket </label>
                                </div> 
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
                      <div class="emOptions">
                        <!-- <h4>Placement</h4>
                        <select id="placement_of_embroidery">
                          <option value="no">Select A Place</option>
                          <option value="collar">Inner Collar</option>
                          <option value="pocket">Pocket/ Chest</option>                         
                          <option value="mercedes">Mercedes</option>
                          <option value="audi">Audi</option>
                        </select>  -->
                        <h4>Enabel Embroidery? <span id="addOnPrice">Add on price: <b>RM10</b></span></h4>
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
                            <input type="text" id="userInput" maxlength="10" placeholder="" disabled>
                              <span class="abs bottomSpan">  </span>
                            </div> 
                        </div>

                      </div>
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
       <li><a onClick="save()" href="#"><img src="images/save_btn.png" alt="#"> Save</a></li>

       <li id="reload"><a href="#"><img src="images/reset_btn.png" alt="#"> Reset</a></li>

       <li><a class="share share_btn" href="#"><img src="images/share_btn.png" alt="#"> Share</a></li>
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

<!-- custom scrollbar -->

<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.min.js"></script>



<script src="js/html2canvas.js" type="text/javascript"></script>

<!-- ready made shirt slider -->

<script src="js/designs.js"></script>
<?php  if($_REQUEST['id']!='')
 { ?>
<script src="js/shirt_new.js"></script>

 <?php } ?>
 <?php  if($_REQUEST['id']=='')
 { ?>
<script src="js/shirt.js"></script>
 <?php } ?>
<script src="js/custom.js"></script>

<!--<script src="js/shirt_customization.js"></script>-->

<script type="text/javascript">

  //alert($('#header').height());

</script>
<script>
function save()
{
var design = $('div').data('finaldesignselectedByUser');
 var baseFabric = $('div').data('finalBaseFebric');
var contrastFabric = $('div').data('finalContrastFebric');
 var show = document.getElementById("shirt_viewport").innerHTML;
	
 jQuery.ajax({
 url     : 'data_store.php',
 type    : 'POST',
 data    : {design:design, show:show,baseFabric:baseFabric,contrastFabric:contrastFabric},
 success : function( response){
  if(response){
   alert(response);
   
  }else{
	  
  }
 }
 })
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
   alert(response);
   
  }else{
	  
  }
 }
 })
}
</script>

</head>

</html>

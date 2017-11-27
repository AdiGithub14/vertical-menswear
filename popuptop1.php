 <div id="design" class="popup ">
      <div class="default_close close"><a href="#" class=""><i class="fa fa-times"></i></a></div>
      <div class="responsive_close close"><a href="#" class=""><i class="fa  fa-angle-double-down"></i></a></div>
      <div class="popup_inner">
        <div class="header clearfix">
          <h4>Step 1. Choose <span> Design</span></h4>
          <ul id="buttons">
            <li id="prev">
              <button>Previous</button>
            </li>
            <li id="next">
              <button>Next</button>
            </li>
          </ul>
        </div>
        <div class="popup_body">
          <div class="scrollbar"></div>
          <div class="scrollable">
            <ul class="scrollableds">
              <?php $entityTypeId = Mage::getModel('eav/entity')
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
                    ->addFieldToFilter('attribute_set_id', $attributeSetId);             
  
  $i = 1;
       
foreach($productCollection as $_product){
    $pro_data = $_product->getData();
    
    //print_r($pro_data['name']);?>
              <li id="d<?php echo $i;?>" data-id="producrId" >
                <div class="productImg"> <img src="images/design<?php echo $i;?>.png" alt="#"> </div>
                <div class="productName">
                  <h5><?php print_r($pro_data['name']);?></h5>
                  <div class="productPrice">
                    <p class="code">
                      <?php $product = Mage::getModel('catalog/product')->loadByAttribute('name', $pro_data['name']);
                                
                                  //echo  $pro_data['price'];
                             $price =   explode(".",$pro_data['price']);
                                    //echo str_replace("$","RM",$price);
                                    
                                    echo "MYR".$price[0].".00";
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
          </div>
        </div>
      </div>
    </div>
    <div id="fabric" class="popup">
      <div class="default_close close"><a href="#" class=""><i class="fa fa-times"></i></a></div>
      <div class="responsive_close close"><a href="#" class=""><i class="fa  fa-angle-double-down"></i></a></div>
      <div class="popup_inner clearfix">
        <div class="noContrast"> <span>No Contrast</span> </div>
        <div class="header">
          <h4>Step 2. Choose Fabric</h4>
          <ul id="buttons">
            <li id="prev">
              <button>Previous</button>
            </li>
            <li id="next">
              <button>Next</button>
            </li>
          </ul>
        </div>
        <div id="baseFebric" class="popup_body fab_body">
          <h5>Base Fabric</h5>
          <div class="scrollbar"></div>
          <div class="scrollable">
            <ul>
              <?php if($_REQUEST['id']!='')
{
    
    
    $_product = Mage::getModel('catalog/product')->loadByAttribute('name', $design_name);
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
                <div class="productImg"> <img src="products/design/design1/fabric/baseFabric/<?php echo $imagename;?>" alt="#"> <img src="images/easy_iron.png" class="easy_iron" alt="#"> </div>
                <div class="productPrice">
                  <p class="code_fabric"> <small class="<?php $class_name;?>"><?php echo $fabname[$j];?></small> </p>
                  <p class="code_fabric <?php echo $class_name2;?>"> <?php echo $fabcode[$j];?> </p>
                </div>
              </li>
              <?php }
}
 
  else { ?>
              <li id="fab1" >
                <div class="productImg"> <img src="images/fb1.png" alt="#"> <img src="images/easy_iron.png" class="easy_iron" alt="#"> </div>
                <div class="productPrice">
                  <p class="code_fabric"> <small class="name_fabric1">xxxx</small> </p>
                  <p class="code_fabric code_fabric1"> </p>
                </div>
              </li>
              <li id="fab2" >
                <div class="productImg"> <img src="images/fb2.png" alt="#"> <img src="images/easy_iron.png" class="easy_iron" alt="#"> </div>
                <div class="productPrice">
                  <p class="code_fabric"> <small class="name_fabric2">Cotton Drill, Black</small> </p>
                  <p class="code_fabric code_fabric2"> KM-MD33-P003 </p>
                </div>
              </li>
              <li id="fab3" >
                <div class="productImg"> <img src="images/fb3.png" alt="#"> <img src="images/easy_iron.png" class="easy_iron" alt="#"> </div>
                <div class="productPrice">
                  <p class="code_fabric"> <small class="name_fabric3">Cotton Drill, Dark Grey</small> </p>
                  <p class="code_fabric code_fabric3"> KM-MD32-P006 </p>
                </div>
              </li>
              <li id="fab4" >
                <div class="productImg"> <img src="images/fb4.png" alt="#"> <img src="images/easy_iron.png" class="easy_iron" alt="#"> </div>
                <div class="productPrice">
                  <p class="code_fabric"> <small class="name_fabric4">Cotton Drill, Red</small> </p>
                  <p class="code_fabric code_fabric4"> KM-MD21-P002 </p>
                </div>
              </li>
              <li id="fab5" >
                <div class="productImg"> <img src="images/fb5.png" alt="#"> <img src="images/easy_iron.png" class="easy_iron" alt="#"> </div>
                <div class="productPrice">
                  <p class="code_fabric"> <small class="name_fabric5">Cotton Drill, Navy Blue</small> </p>
                  <p class="code_fabric code_fabric5"> KM-MD28-P015 </p>
                </div>
              </li>
              <li id="fab6" >
                <div class="productImg"> <img src="images/fb6.png" alt="#"> <img src="images/easy_iron.png" class="easy_iron" alt="#"> </div>
                <div class="productPrice">
                  <p class="code_fabric"> <small class="name_fabric6">Cotton Drill, Maroon</small> </p>
                  <p class="code_fabric code_fabric6"> KM-MD30-P005 </p>
                </div>
              </li>
              <li id="fab7" >
                <div class="productImg"> <img src="images/fb7.png" alt="#"> <img src="images/easy_iron.png" class="easy_iron" alt="#"> </div>
                <div class="productPrice">
                  <p class="code_fabric"> <small class="name_fabric7">Cotton Drill, Grey</small> </p>
                  <p class="code_fabric code_fabric7"> KM-MD62-P014 </p>
                </div>
              </li>
              <li id="fab8" >
                <div class="productImg"> <img src="images/fb8.png" alt="#"> <img src="images/easy_iron.png" class="easy_iron" alt="#"> </div>
                <div class="productPrice">
                  <p class="code_fabric"> <small class="name_fabric8">Cotton Drill, Dark Maroon</small> </p>
                  <p class="code_fabric code_fabric8"> KM-MD45-P010 </p>
                </div>
              </li>
              <li id="fab9" >
                <div class="productImg"> <img src="images/fb8.png" alt="#"> <img src="images/easy_iron.png" class="easy_iron" alt="#"> </div>
                <div class="productPrice">
                  <p class="code_fabric"> <small class="name_fabric9">Cotton Drill, Blue</small> </p>
                  <p class="code_fabric code_fabric9"> KM-MD91-P007 </p>
                </div>
              </li>
              <li id="fab10" >
                <div class="productImg"> <img src="images/fb8.png" alt="#"> <img src="images/easy_iron.png" class="easy_iron" alt="#"> </div>
                <div class="productPrice">
                  <p class="code_fabric"> <small class="name_fabric10">Cotton Drill, Purple</small> </p>
                  <p class="code_fabric code_fabric10"> KM-MD78-P008 </p>
                </div>
              </li>
              <?php }?>
            </ul>
          </div>
        </div>
        <div id="contrastFebric" class="popup_body fab_body">
          <h5>Contrast Fabric</h5>
          <div class="scrollbar"></div>
          <div class="scrollable">
            <ul>
              <?php if($_REQUEST['id']!='')
					  {
						$_product = Mage::getModel('catalog/product')->loadByAttribute('name', $design_name);
						
						
						
						$pro_data_con = $_product->getData();
						
						$test = array();
						
						for($i=1;$i<=20;$i++)
						{
						$con ='con_fab'.$i;
						$test[$i] = $pro_data_con[$con];
						$fabname_code_con[$i] = explode("|",$pro_data_con[$con]);
						$fabname_con[$i] = $fabname_code_con[$i][0];
						$fabcode_con[$i] = $fabname_code_con[$i][1];
						
						?>
              <?php $imagename = "cs".$i.".png";
                        
                        $class_name = "con_name_fabric".$i;
                        
                        $class_name2 = "con_code_fabric".$i;
                        ?>
              <li id="cst<?php echo $i;?>" >
                <div class="productImg"> <img src="products/design/design1/fabric/contrastFebric/cst<?php echo $i;?>.png" alt="#"> <img src="images/easy_iron.png" class="easy_iron" alt="#"> </div>
                <div class="productPrice">
                  <p class="code_fabric"> <small class="<?php echo $class_name;?>"><?php echo $fabname_con[$i];?></small> </p>
                  <p class="code_fabric <?php echo $class_name2;?>"> <?php echo $fabcode_con[$i];?> </p>
                </div>
              </li>
              <?php }
						  
					  }
					  else {
					  
					  ?>
              <li id="cst1" >
                <div class="productImg"> <img src="images/cst1.png" alt="#"> <img src="images/easy_iron.png" class="easy_iron" alt="#"> </div>
                <div class="productPrice">
                  <p class="code_fabric"> <small class="con_name_fabric1">Cotton Drill, White</small> </p>
                  <p class="code_fabric con_code_fabric1"> GL-C013 </p>
                </div>
              </li>
              <li id="cst2" >
                <div class="productImg"> <img src="images/cst2.png" alt="#"> <img src="images/easy_iron.png" class="easy_iron" alt="#"> </div>
                <div class="productPrice">
                  <p class="code_fabric"> <small class="con_name_fabric2">Cotton Drill, Red</small> </p>
                  <p class="code_fabric con_code_fabric2"> KM-MD21-P002 </p>
                </div>
              </li>
              <li id="cst3" >
                <div class="productImg"> <img src="images/cst3.png" alt="#"> <img src="images/easy_iron.png" class="easy_iron" alt="#"> </div>
                <div class="productPrice">
                  <p class="code_fabric"> <small class="con_name_fabric3">Cotton Drill, Black</small> </p>
                  <p class="code_fabric con_code_fabric3"> KM-MD33-P003 </p>
                </div>
              </li>
              <li id="cst4" >
                <div class="productImg"> <img src="images/cst4.png" alt="#"> <img src="images/easy_iron.png" class="easy_iron" alt="#"> </div>
                <div class="productPrice">
                  <p class="code_fabric"> <small class="con_name_fabric4">Cotton Drill, Maroon</small> </p>
                  <p class="code_fabric con_code_fabric4"> KM-MD30-P005 </p>
                </div>
              </li>
              <li id="cst5" >
                <div class="productImg"> <img src="images/cst5.png" alt="#"> <img src="images/easy_iron.png" class="easy_iron" alt="#"> </div>
                <div class="productPrice">
                  <p class="code_fabric"> <small class="con_name_fabric5">Cotton Drill, Dark Grey</small> </p>
                  <p class="code_fabric con_code_fabric5"> KM-MD32-P006 </p>
                </div>
              </li>
              <li id="cst6" >
                <div class="productImg"> <img src="images/cst6.png" alt="#"> <img src="images/easy_iron.png" class="easy_iron" alt="#"> </div>
                <div class="productPrice">
                  <p class="code_fabric"> <small class="con_name_fabric6">Cotton Drill, Pink</small> </p>
                  <p class="code_fabric con_code_fabric6"> KM-MD47-P011 </p>
                </div>
              </li>
              <li id="cst7" >
                <div class="productImg"> <img src="images/cst7.png" alt="#"> <img src="images/easy_iron.png" class="easy_iron" alt="#"> </div>
                <div class="productPrice">
                  <p class="code_fabric"> <small class="con_name_fabric7">Checkered Cotton, Red</small> </p>
                  <p class="code_fabric con_code_fabric7"> YF637-3-C014 </p>
                </div>
              </li>
              <li id="cst8" >
                <div class="productImg"> <img src="images/cst8.png" alt="#"> <img src="images/easy_iron.png" class="easy_iron" alt="#"> </div>
                <div class="productPrice">
                  <p class="code_fabric"> <small class="con_name_fabric8">Checkered Cotton, Black</small> </p>
                  <p class="code_fabric con_code_fabric8"> GL-C013 </p>
                </div>
              </li>
              <li id="cst9" >
                <div class="productImg"> <img src="images/cst8.png" alt="#"> <img src="images/easy_iron.png" class="easy_iron" alt="#"> </div>
                <div class="productPrice">
                  <p class="code_fabric"> <small class="con_name_fabric9">Checkered Cotton, Black</small> </p>
                  <p class="code_fabric con_code_fabric9"> KM-B&W1-C011 </p>
                </div>
              </li>
              <li id="cst10" >
                <div class="productImg"> <img src="images/cst8.png" alt="#"> <img src="images/easy_iron.png" class="easy_iron" alt="#"> </div>
                <div class="productPrice">
                  <p class="code_fabric"> <small class="con_name_fabric10">Floral Cotton</small> </p>
                  <p class="code_fabric con_code_fabric10"> GL-F011 </p>
                </div>
              </li>
              <li id="cst11" >
                <div class="productImg"> <img src="images/cst8.png" alt="#"> <img src="images/easy_iron.png" class="easy_iron" alt="#"> </div>
                <div class="productPrice">
                  <p class="code_fabric"> <small class="con_name_fabric11">Floral Cotton</small> </p>
                  <p class="code_fabric con_code_fabric11"> GL-F012 </p>
                </div>
              </li>
              <li id="cst12" >
                <div class="productImg"> <img src="images/cst8.png" alt="#"> <img src="images/easy_iron.png" class="easy_iron" alt="#"> </div>
                <div class="productPrice">
                  <p class="code_fabric"> <small class="con_name_fabric12">Stripe Cotton, B&W </small> </p>
                  <p class="code_fabric con_code_fabric12"> GL-S007 </p>
                </div>
              </li>
              <li id="cst13" >
                <div class="productImg"> <img src="images/cst8.png" alt="#"> <img src="images/easy_iron.png" class="easy_iron" alt="#"> </div>
                <div class="productPrice">
                  <p class="code_fabric"> <small class="con_name_fabric13">Stripe Cotton, Pink</small> </p>
                  <p class="code_fabric con_code_fabric13"> GL-S002 </p>
                </div>
              </li>
              <li id="cst14" >
                <div class="productImg"> <img src="images/cst8.png" alt="#"> <img src="images/easy_iron.png" class="easy_iron" alt="#"> </div>
                <div class="productPrice">
                  <p class="code_fabric"> <small class="con_name_fabric14">Stripe Cotton, Light Blue</small> </p>
                  <p class="code_fabric con_code_fabric14"> GL-S004 </p>
                </div>
              </li>
              <li id="cst15" >
                <div class="productImg"> <img src="images/cst8.png" alt="#"> <img src="images/easy_iron.png" class="easy_iron" alt="#"> </div>
                <div class="productPrice">
                  <p class="code_fabric"> <small class="con_name_fabric15">Stripe Cotton, Red</small> </p>
                  <p class="code_fabric con_code_fabric15"> GL-S003 </p>
                </div>
              </li>
              <?php }?>
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
            <li id="prev">
              <button>Previous</button>
            </li>
            <li id="next">
              <button>Next</button>
            </li>
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
                  <div class="inputlabel"> <img src="images/short.png">
                    <label>Short Sleeve</label>
                    <div class="price_sec">
                      <p><strong class="hulf">
                        <?php $product = Mage::getModel('catalog/product')->loadByAttribute('name', 'Vertical Folded Collar');
                                
                                    $price =  Mage::helper('core')->currency($product->getPrice(), true, false);
                                    $price = str_replace("$","MYR",$price);
                                    $price =(int)$price;
                                    $price = $price - 10;
                                    //echo $price;
                                  ?>
                        </strong></p>
                    </div>
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
                  <div class="inputlabel clearfix"> <img src="images/long.png">
                    <label>Long Sleeve</label>
                    <div class="price_sec">
                      <p><strong class="long">
                        <?php $product = Mage::getModel('catalog/product')->loadByAttribute('name', 'Vertical Folded Collar');
                                
                                    $price =  Mage::helper('core')->currency($product->getPrice(), true, false);
                                    echo str_replace("$","MYR",$price);
                                  ?>
                        </strong></p>
                    </div>
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
                  <div class="inputlabel clearfix"> <img src="images/covered.png">
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
                  <div class="inputlabel clearfix"> <img src="images/uncovered.png">
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
                    <input type="radio" name="sleev" value="collar_1">
                    <label> Collar 1 </label>
                  </div>
                </div>
                <div class="sleeve_sec">
                  <div class="input_sec">
                    <input type="radio" name="sleev" value="collar_2">
                    <label> Collar 2 </label>
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
            <li id="prev">
              <button>Previous</button>
            </li>
            <li id="next">
              <button>Next</button>
            </li>
          </ul>
        </div>
        <div class="popup_body">
          <div class="scrollbar"></div>
          <div class="scrollable">
            <div class="empopup"> <span>First, Please Select <b>Color.</b> <br>
              Then, Enter Your <b>Text.</b></span> </div>
            <!-- Em popup End -->
            <div class="emOptions"> 
              <!-- <h4>Placement</h4>
                        <select id="placement_of_embroidery">
                          <option value="no">Select A Place</option>
                          <option value="collar">Inner Collar</option>
                          <option value="pocket">Pocket/ Chest</option>
                          <option value="mercedes">Mercedes</option>
                          <option value="audi">Audi</option>
                        </select>  -->
              <h4>Enable Embroidery? <span id="addOnPrice">Add on price: <b>MYR10</b></span></h4>
              <ul class="enableOptions">
                <li>
                  <button id="YesEm"class="EnableEm">Yes</button>
                </li>
                <li>
                  <button id="NoEm" class="EnableEm">No</button>
                </li>
              </ul>
              <div class="mainC">
                <div class="mainCInner"></div>
                <h5>Choose Color</h5>
                <!--
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
-->
                <ul class='EmColors'>
                  <!--
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
-->
                  <?php for ($n=1;$n<=10;$n++)
{  ?>
                  <li id=""></li>
                  <?php } ?>
                </ul>
                <h4 class="emText">Embroidery Text <span id="choosedColor"></span></h4>
                <span>For example, your initials. Maximum 8 charactes including punctuation and space</span>
                <div class="inputField"> <span class="ab">Enter Your Text : </span>
                  <input type="text" id="userInput" maxlength="8" placeholder="" disabled>
                  <!-- <span class="abs bottomSpan popup_text_field">  </span> --> 
                </div>
                <div class="bottomFabric"> <span class="abs bottomSpan popup_text_field"> </span> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
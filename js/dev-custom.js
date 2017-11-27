
function save()
{
var custom_design_name = $('#saved_Option_Name').val();
var design = $('div').data('finaldesignselectedByUser');
 var baseFabric = $('div').data('contrastFabric_name');
var contrastFabric = $('div').data('baseFabric_name');
    
var sleev = $('div').data('selected_Sleev');    
var slim_or_normal = $('div').data('Slim_or_normal'); // same slim or normal
var measurement_size = $('div').data('measurement_size');
//var rqst_data= $('div').data('Spl_rqst_data');   
var desname = $('div').data('embroidery_color');
    var emdtext = $('div').data('Embriodery_text');
    
   
    
 var show = document.getElementById("shirt_viewport").innerHTML;
	var element = $("#shirt_viewport"); // global variable
         var getCanvas; // global variable
         html2canvas(element, {
         onrendered: function (canvas) {
                //$("#previewImage").append(canvas);
                getCanvas = canvas;
				var imgageData = getCanvas.toDataURL("image/png");
				var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
 jQuery.ajax({
 url     : 'data_store.php',
 type    : 'POST',
 data    : {show:show,newData:newData,sleev:sleev,slim_or_normal:slim_or_normal,measurement_size:measurement_size,desname:desname,design:design,  custom_design_name:custom_design_name,baseFabric:baseFabric,contrastFabric:contrastFabric},
 success : function( response){
  if(response){
  alert(response);
  $('#saveInner').find('form').html('<h5 style="text-align:center;"> ' + response +'</h5>').parent().parent().delay(4000).fadeOut(5000);
  }else{
  }
 }
 });
 }
         });
}
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
function addtoCart()
{
    
    
	var fabcode_alt = $('div').data('baseFabric_name');//basefabric namae
	var confabcode_alt = $('div').data('contrastFabric_name');// contrast fabric name  
	var sleev = $('div').data('selected_Sleev');//selected sleeve
	var desname = $('#User_design_name').text();//design name    
	var slim_or_normal = $('div').data('Slim_or_normal'); // same slim or normal
	var measurement_size = $('div').data('measurement_size'); // measurment size
	var rqst_data= $('div').data('Spl_rqst_data');//spl rqst data
	var emdtext = $('div').data('Embriodery_text');//embriodery text
  var emdColor = $('div').data('embroidery_color');//embroidery color
  var noContrast = $('div').data('noContrastSelected');// no contrast
  var finalNocontrast = 'no';// final no contrast value
  if(noContrast == 1){
     finalNocontrast = 'yes';
  }else{
    finalNocontrast = 'no';
  }
  //alert(emdColor+' == '+finalNocontrast);
    
    //alert(fabcode_alt);
    
    if(fabcode_alt== undefined )
        {
            
            fabcode_alt = addtocartpostdata.fabcode_alt;
            
           // alert(fabcode_alt);
        
        }
    if(confabcode_alt== undefined )
        {
            
            confabcode_alt = addtocartpostdata.confabcode_alt;
            
            //alert(confabcode_alt);
        
        }   
    
    if(sleev== undefined )
        {
            
            sleev = addtocartpostdata.sleev;
            
            //alert(sleev);
        
        }
    //alert(desname);
    if(desname == 'undefined' ){
            desname = addtocartpostdata.desname; 
            //alert(desname);
            
            
        }
//    
	
    
    
    if(slim_or_normal == undefined){
        
    slim_or_normal = addtocartpostdata.slim_or_normal;
        
    }
    
    if(measurement_size == undefined){
        
    measurement_size = addtocartpostdata.measurement_size;
        
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
				
				  //emdColor =   emdColor.replace("#", "");
				
				jQuery.ajax({
				 url     : 'change_new.php',
				 type    : 'POST',
				 data    : {measurement_size:measurement_size, slim_or_normal:slim_or_normal,fabcode_alt:fabcode_alt, desname:desname, confabcode_alt:confabcode_alt,sleev:sleev,emdtext:emdtext,newData:newData,n:n,rqst_data:rqst_data,finalNocontrast:finalNocontrast,emdColor:emdColor},
				 success : function( response){
				  if(response){
				   //alert(response);
           var cart = response;
           $('span.circle').text(cart);
				   console.log(response);
           $('li.pop_bottom_btn_set').fadeOut();
           $('#addto_Inner').html('<h4 style="text-align:center;"> Successfully Added !!!</h4><img src="images/tick2.gif"/>');
           $('#addto_Inner img').fadeOut(1000)
           $('#addto_Inner').html('<h4 style="text-align:center;"> Successfully Added !!!</h4><a class="gotoCartBtn" href="http://www.uniterreneprojects.com/dev/vertical-menswere/checkout/cart">Go To Cart</a>');
				  }else{
				  }
				 }
				 });
             }
         });
}
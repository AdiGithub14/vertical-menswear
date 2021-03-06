

$(window).load(function(){
	$('.overLoader').fadeOut();
	$('.close a').attr('href','javascript:void(0);');
	
})
$(document).ready(function(){
	//alert($('div').data('finaldesignselectedByUser'));



/**************************************************
		//FOR DEFAULT FRONT AND BACK SYSTEM
		**********************************************************/

		$('li#rotateViewport').bind('click',function(){
			$('li#rotateViewport').fadeOut();
			$('li#rotateBack').css({'display':'inline-block'});

			$('.shirtHolder ul li#base').find('img').after('<div class="preload"></div>').hide()			
			.attr('src','products/design/base/design1_base_back.png').one('load', function() {
                    $(this).fadeIn().next().remove();
                 });
				 
				 
			$('.shirtHolder ul li#inner_back').find('img').after('<div class="preload"></div>').hide()
			.attr('src','products/design/base/design1_innerBack_back.png').one('load', function() {
                    $(this).fadeIn().next().remove();
                 });
				 
			$('.shirtHolder ul li#base_top').find('img').after('<div class="preload"></div>').hide()	
			.attr('src','products/design/base/design1_buttons_back.png').one('load', function() {
                    $(this).fadeIn().next().remove();
                 });
		})

		$('#rotateBack').bind('click',function(){
			$(this).hide();
			$('#rotateViewport').css({'display':'inline-block'});

			$('.shirtHolder ul li#base').find('img').after('<div class="preload"></div>').hide()
			.attr('src','products/design/base/base.png').one('load', function() {
                    $(this).fadeIn().next().remove();
                 });
				 
			$('.shirtHolder ul li#inner_back').find('img').after('<div class="preload"></div>').hide()
			.attr('src','products/design/base/inner_back.png').one('load', function() {
                    $(this).fadeIn().next().remove();
                 });
				 
			$('.shirtHolder ul li#base_top').find('img').after('<div class="preload"></div>').hide()
			.attr('src','products/design/base/base_top.png').one('load', function() {
                    $(this).fadeIn().next().remove();
                 });


		})















		/****************************************************/
			$('#design #buttons li#next').bind('click', function(){
				var isClicked = $('div').data('finaldesignselectedByUser');
				if(isClicked == undefined){
					//alert('Please Select a Design');
					$('.errorPop').show().delay(2000).fadeOut();
				}else{		

				showTheFebricPopup();
				$('.steps_scroll li#design').removeClass('active');
				$('.steps_scroll li#febric').addClass('active');
				changeShirtViewport();	
				}
			});
			$('#fabric #buttons li#prev').bind('click', function(){
				showTheDesignPopup();
				$('.steps_scroll li#design').addClass('active');
				$('.steps_scroll li#febric').removeClass('active');
				changeShirtViewport();	
			});
			$('#fabric #buttons li#next').bind('click', function(){
				var isClicked = $('div').data('finalBaseFebric');
				var isClicked2 = $('div').data('finalContrastFebric');
				if(isClicked == undefined && isClicked2 != undefined || isClicked2 == undefined && isClicked != undefined){
					
					showTheCustomizePopup();
				$('.steps_scroll li#febric').removeClass('active');
				$('.steps_scroll li#customize_shirt').addClass('active');
				changeShirtViewport();	
				}else{	
					//alert('Please Select a a Febric');	
					$('.errorPop').show().delay(2000).fadeOut();			
				}
			});
			$('#customize #buttons li#prev').bind('click', function(){
				showTheFebricPopup();
				$('.steps_scroll li#febric').addClass('active');
				$('.steps_scroll li#customize_shirt').removeClass('active');
				changeShirtViewport();	
			});
			$('#customize #buttons li#next').bind('click', function(){
				showTheEmbroideryPopup();
				$('.steps_scroll li#customize_shirt').removeClass('active');
				$('.steps_scroll li#embroidery_li').addClass('active');
				changeShirtViewport();	
			});
			$('#embroidery #buttons li#prev').bind('click', function(){
				showTheCustomizePopup();
				$('.steps_scroll li#customize_shirt').addClass('active');
				$('.steps_scroll li#embroidery_li').removeClass('active');
				changeShirtViewport();	
			});
		/****************************************************/

		

		var newHeight = $('.steps_bar').offset().top;
		$('#popups .popup').css({'top':newHeight+'px'});


		$('#zoomViewport').bind('click',function(){
		$(this).toggleClass('activeBgForZoom')
		$('.shirtHolder ul li img').toggleClass('zoom');
		var state = $('.shirtHolder ul li img').hasClass('zoom');

		if($('.shirtHolder ul li img').hasClass('zoom') == true){
			$( "#shirt_viewport" ).append('<div class="appendDiv">You Can Drag the Image for Better Experience</div>');
			$( ".appendDiv" ).hide().fadeIn(2000).delay(500).fadeOut();
			$( "#shirtMove" ).css({'transition':'all .6s ease-in-out','position':'relative','cursor':'pointer'}).draggable({
			disabled: false,
			addClasses: false,
			 stop: function(event, ui) {
			 		//alert(ui.position.top);
			        if(ui.position.top> 200 || ui.position.left> 700)
			        {   
			        //alert('Return back');
			        $("#shirtMove").animate({"top": "0px"}, 600);
			        $("#shirtMove").animate({"left": "0px"}, 600);
			        }
			        else if(ui.position.top<-1200 ||  ui.position.left<-700)
			        {
			            $("#shirtMove").animate({"top": "0px"}, 600);
			             $("#shirtMove").animate({"left": "0px"}, 600);
			        }                                                   
			    }
			
		}).css({'transition':'none'});
		}else{
			$( ".appendDiv" ).hide();
			$( "#shirtMove" ).css({'transition':'all .6s ease-in-out','position':'initial','top':'0','left':'0','cursor':'default'})
							.css({'transition':'all .6s ease-in-out'})
							.draggable({ disabled: true });
		}
		
	});

	$(window).resize(function(){location.reload();});
	
	$('#reload').bind('click',function(){
		window.location.reload();
	});

	var l = $('.shirtHolder ul li').length;
	var arr = [
			'products/design/base/base.png',
			'products/design/base/inner_back.png',
			'products/design/base/no_img.png',
			'products/design/base/no_img.png',
			'products/design/base/no_img.png',
			'products/design/base/base_top.png',
			'products/design/base/no_img.png',
			'products/design/base/no_img.png',
			'products/design/base/no_img.png',
			'products/design/base/no_img.png',
			'products/design/base/no_img.png',
			'products/design/base/no_img.png'
	];
	for(i=0; i<l;i++){
				var m = $('.shirtHolder ul li').eq(i).find('img').attr('src');
				$('.shirtHolder ul li').eq(i).find('img').after('<div class="preload"></div>') // some preloaded "loading" image
                 .hide().attr('src',arr[i]).one('load', function() {
                    $(this).fadeIn().next().remove();
                 });
				}
	

	/*------------------------------------------------------------------------
	
	--------------------------------------------------------------------------*/

	




	
	$('.steps_bar ul li').bind('click',showThePopup);
	$('.close').bind('click',closeThePopup);
	$('.scrollable ul li').bind('click',changeCustomizeArea);
	$('#contrastFebric  ul li').bind('click',ContrastBasedChanges);
	$('#baseFebric ul li').bind('click',BaseFebricBasedChanges);
	$('.buttons li#next').bind('click',goForNextSlab);



	/* -------------------------------------------------------------------------
				Disableing the click functions to other list items
	-------------------------------------------------------------------------- */
	$('.steps_bar ul li:gt(0)').unbind('click').addClass('disabled');

	$('#fabric  ul li').bind('click',function(){
		$('.steps_bar ul li:eq(2)').bind('click',showThePopup).removeClass('disabled');
	});

	$('#customize  ul li').bind('click',function(){
		$('.steps_bar ul li:eq(3)').bind('click',showThePopup).removeClass('disabled');
	});

/*----------------------------------------------------------------------------------
                       			GETTING THE VALUES FROM USER
------------------------------------------------------------------------------------*/

	$('#design .scrollable ul li').bind('click',function(){
		$('.pricePreload').show();
		$('div').data('finaldesignselectedByUser',$(this).attr('id'));
		//alert();
		$('div').data('designBasedPrice',$(this).find('p.code').text());
		$('#right_panel .variable_price p').text($('div').data('designBasedPrice'));
		$('.pricePreload').delay(1000).fadeOut('slow');
		console.log('final Design selected by user: '+$('div').data('finaldesignselectedByUser'));
	});//Getting the Final Design Selected by user

	$('#baseFebric .scrollable ul li').bind('click',function(){
		$('div').data('finalBaseFebric',$(this).attr('id'));
		console.log('final Base Febric selected by user: '+$('div').data('finalBaseFebric'));
	});//Getting the Final Base Febirc Selected by User

	$('#contrastFebric .scrollable ul li').bind('click',function(){		
		$('div').data('finalContrastFebric',$(this).attr('id'));
		console.log('final Contrast Febric selected by user: '+$('div').data('finalContrastFebric'));
	});//Getting the Final Contrast Febirc Selected by User

	



	/*---------buttons-----------*/

	var stepItemLen = $(".steps_scroll li").length;

	//for(i=0;i<=stepItemLen;i++){
		//$('.steps_bar ul li').eq(i+1).addClass('disabled');
	//}
	
		if (stepItemLen<=5){
		$('#btn_up').hide();
	    $('#btn_bottom').hide();
		}
		
	console.log ('item there ' + stepItemLen);
	if(stepItemLen > 5){
		$('#btn_bottom').show();	
	}//showing the bottom btn
	var cItemsDown = 5;
		var itemboxHeight=$(".steps_scroll li").outerHeight(true),
			negativeHeight = -(itemboxHeight-5),
			positiveHeight = itemboxHeight - 5 ;
			var totalPaddingNeed = itemboxHeight * stepItemLen,
				incrementOrDecrement = 550;
				var abc = 0;
	$('#btn_bottom').bind('click', function(){
		//console.log("-------Clicked on Down-----------");
		incrementOrDecrement = incrementOrDecrement + itemboxHeight;
		console.log('IncrementIng down :'+incrementOrDecrement+" Left : "+totalPaddingNeed);
		$('#btn_up').show();						
			//console.log(negativeHeight)			;
		$('.steps_scroll').css({'margin-top': '+='+ negativeHeight +'px'});
		cItemsDown +=1;
		abc = abc + negativeHeight;
		console.log('total down:'+ abc);
		console.log('clicked : '+cItemsDown);		
		var itemLeftoScroll = stepItemLen - 5 ;
		var overPadding = itemLeftoScroll * negativeHeight;
		console.log("item left to come :"+itemLeftoScroll);
		console.log("OverAll  Padding :"+overPadding);
		
		console.log("-----------------------------------------");
		if(incrementOrDecrement == totalPaddingNeed){
				$('#btn_bottom').hide();
		}
		
		
	});
		var cItemsUp = 0;
		var def = 0;
	$('#btn_up').bind('click', function(){
		console.log("---------Clicked on Up----------");
		incrementOrDecrement = incrementOrDecrement - itemboxHeight;
		console.log('IncrementIng Up :'+incrementOrDecrement+" Left : "+totalPaddingNeed);
		$('#btn_bottom').show();	
		var aa = $('.steps_scroll').css({'margin-top': '+='+ positiveHeight +'px'});
		cItemsUp+=1;	
		def = def + positiveHeight;	
		console.log('total up:'+ def);
		console.log('up clicked :'+ cItemsUp);
		console.log("-----------------------------------------");
		//console.log(aa);
		if((abc + def) == 0){
		$('#btn_up').hide();
		$('#btn_bottom').show();	
		}
	
	});

/* custom scroll bar */
custom_scroll_for_baseFabric();
custom_scroll_for_contrastFebric();	
custom_scroll_for_mainDesign();

function custom_scroll_for_mainDesign(){
 var $scrollable = $('#design .scrollable'),
    $scrollbar  = $('#design .scrollbar'),
    H   = $scrollable.outerHeight(true),
    sH  = $scrollable[0].scrollHeight,
    sbH = H*H/sH;
	//alert('H :'+H+' sH : '+ sH +'  sbH :'+sbH+' Total to scroll : '+(H*sbH));
	console.log('scrollable height ' + H);
	console.log('scrollbar scroll ' + sH);
	console.log('scroll ' + sbH);

 $('#design .scrollbar').height( sbH ).draggable({
    axis : 'y',
     containment : 'popup_body', 
      drag: function(e, ui) {
            $scrollable.scrollTop(sH/H*ui.position.top);
		   //$scrollable.position.top = Math.min( 100, ui.position.top );
			
    }
});

$scrollable.scroll(function(){
    $scrollbar.css({top: $(this).scrollTop()/H*sbH});
	//console.log($(this).scrollTop() );
});

}
/*-------------------*/
function custom_scroll_for_baseFabric(){
 var $scrollable = $('#baseFebric .scrollable'),
    $scrollbar  = $('#baseFebric .scrollbar'),
    H   = $scrollable.outerHeight(true),
    sH  = $scrollable[0].scrollHeight,
    sbH = H*H/sH;
	console.log('scrollable height ' + H);
	console.log('scrollbar scroll ' + sH);
	console.log('scroll ' + sbH);

 $('#baseFebric .scrollbar').height( sbH ).draggable({
    axis : 'y',
     containment : 'popup_body', 
      drag: function(e, ui) {
            $scrollable.scrollTop(sH/H*ui.position.top);
		   //$scrollable.position.top = Math.min( 100, ui.position.top );
			
    }
});

$scrollable.scroll(function(){
    $scrollbar.css({top: $(this).scrollTop()/H*sbH});
	//console.log($(this).scrollTop() );
});

}
/*---------------------------*/

function custom_scroll_for_contrastFebric(){
 var $scrollable = $('#contrastFebric .scrollable'),
    $scrollbar  = $('#contrastFebric .scrollbar'),
    H   = $scrollable.outerHeight(true),
    sH  = $scrollable[0].scrollHeight,
    sbH = H*H/sH;
	console.log('scrollable height ' + H);
	console.log('scrollbar scroll ' + sH);
	console.log('scroll ' + sbH);

 $('#contrastFebric .scrollbar').height( sbH ).draggable({
    axis : 'y',
     containment : 'popup_body', 
      drag: function(e, ui) {
            $scrollable.scrollTop(sH/H*ui.position.top);
		   //$scrollable.position.top = Math.min( 100, ui.position.top );
			
    }
});

$scrollable.scroll(function(){
    $scrollbar.css({top: $(this).scrollTop()/H*sbH});
	//console.log($(this).scrollTop() );
});

}


/*-------------buttons-------------------*/



	var winWidth=$(window).width(),
		LeftBar=$(".stepsbar_wrapper").outerWidth(true);
		RightBar=$("#right_panel").width(),
		popWidth= $(".popup").innerWidth(),
		TotalLeftRight= LeftBar+RightBar,
		normalWidth = winWidth - (115 + RightBar);
		ShirtViewport = winWidth-TotalLeftRight ;

	$('#shirt_viewport').css({'width':(normalWidth-10)+'px'});

});






//functions---------


function showThePopup(){
	$('.arrow').fadeOut();
	//$('.steps_bar ul li:gt(0)').bind('click',);
	var choosedOption = $(this).attr('id');	
	$('div').data('choosedOption',choosedOption);//choosed by user on data-choosedOption veriable	

	switch($('div').data('choosedOption')) {

		    case 'design':
		        	showTheDesignPopup();
		        	goForDesign();        	
		          break;

		    case 'febric':
		        	showTheFebricPopup();
		        	goForFebric();
		          break;

		    case 'customize_shirt':		   			
		        	showTheCustomizePopup();
		        	goForCustomize();
		          break;

		    case 'embroidery_li':
		    		showTheEmbroideryPopup();
		    		goForEmbroidery();
		      	 break;
		          
		    default:
		         break;
}


	$('.steps_scroll li.active').removeClass('active');
	$(this).addClass('active'); //adding the active class

	$('.close').show();	//showing the popup close button
	
	changeShirtViewport();	
	
	
}

/*----------------------------------------------------------------------------------
                       			POPUP SHOWING SECTION
------------------------------------------------------------------------------------*/


//show the design popup

function showTheDesignPopup(){
	//alert("aa");
	closeTheFebricPopup();
	closeTheCustomizePopup();
	closeTheEmbroideryPopup();	
	$('#popups #design').css({'left':'135px','transition':'all .3s ease-in-out'});

}
function showTheFebricPopup(){
	closeTheDesignPopup();
	closeTheCustomizePopup();
	closeTheEmbroideryPopup();
	$('#popups #fabric').css({'left':'135px','transition':'all .3s ease-in-out'});

}

function showTheCustomizePopup(){

	//alert("Final Design : "+$('div').data('finaldesignselectedByUser')+' Final Base fabric : '+ $('div').data('finalBaseFebric') +' Final Contrast Fabric : '+$('div').data('finalContrastFebric') );
	closeTheDesignPopup();
	closeTheFebricPopup();
	//closeTheCustomizePopup();
	closeTheEmbroideryPopup();
	$('#popups #customize').css({'left':'135px','transition':'all .3s ease-in-out'});

}


function showTheEmbroideryPopup(){

	//alert("Final Design : "+$('div').data('finaldesignselectedByUser')+' Final Base fabric : '+ $('div').data('finalBaseFebric') +' Final Contrast Fabric : '+$('div').data('finalContrastFebric') );
	closeTheDesignPopup();
	closeTheFebricPopup();
	closeTheCustomizePopup();
	$('#popups #embroidery').css({'left':'135px','transition':'all .3s ease-in-out'});

}



/*----------------------------------------------------------------------------------
                       			POPUP CLOSE SECTION
------------------------------------------------------------------------------------*/
//close the popup

function closeTheDesignPopup(){
	$(this).hide();
	$('#popups  #design').css({'left':'-100%','transition':'all .3s ease-in-out'});
	$('.steps_scroll li.active').removeClass('active');
	redoTheViewPort();
}

function closeTheFebricPopup(){
	$(this).hide();
	$('#popups  #fabric').css({'left':'-100%','transition':'all .3s ease-in-out'});
	$('.steps_scroll li.active').removeClass('active');
	redoTheViewPort();
}

function closeTheCustomizePopup(){
	$(this).hide();
	$('#popups  #customize').css({'left':'-100%','transition':'all .3s ease-in-out'});
	$('.steps_scroll li.active').removeClass('active');
	redoTheViewPort();
}

function closeTheEmbroideryPopup(){
	$(this).hide();
	$('#popups  #embroidery').css({'left':'-100%','transition':'all .3s ease-in-out'});
	$('.steps_scroll li.active').removeClass('active');
	redoTheViewPort();
}

function closeThePopup(){
	$(this).hide();
	$('#popups  .popup').css({'left':'-100%','transition':'all .3s ease-in-out'});
	$('.steps_scroll li.active').removeClass('active');
	redoTheViewPort();
	$('.arrow').fadeIn();
}

/*----------------------------------------------------------------------------------
                       			POPUP CLOSE SECTION
------------------------------------------------------------------------------------*/





/*----------------------------------------------------------------------------------
                       			SHIRT VIEWPORT CHANGES
------------------------------------------------------------------------------------*/

//change the shirrt viewport

function changeShirtViewport(){
	$('#shirt_viewport').css({'width':(normalWidth - popWidth) +'px','transition':'all .3s ease-in-out'});
}

//resize the shirt viewport width

function redoTheViewPort(){
	$('#shirt_viewport').css({'width':(normalWidth-10)+'px'});
}
/*----------------------------------------------------------------------------------
                       			SHIRT VIEWPORT CHANGES
------------------------------------------------------------------------------------*/






/*----------------------------------------------------------------------------------
                       			FOR DESIGN SECTION
------------------------------------------------------------------------------------*/

//function goForDesign

function goForDesign(){

	var choosedByuser = $('div').data('choosedOption');
	console.log("user choosed option :" +choosedByuser);
	var totalItems = $('#design .scrollable ul li').length;
	console.log('Total items in Design Popup : '+totalItems);
	for(i=0;i<=totalItems;i++){
		$('#design .popup_body ul li').eq(i)
							  .attr('id','design'+(i+1));
		
		$('#design .popup_body ul li').eq(i).find('img').after('<div class="preload"></div>').hide()
		.attr('src', 'products/'+choosedByuser +'/'+ choosedByuser+(i+1) +'/'+ choosedByuser+(i+1) +'.png').one('load', function() {
                    $(this).fadeIn().next().remove();
                 });

	}	



}



/*----------------------------------------------------------------------------------
                       			FOR FEBRIC SECTION
------------------------------------------------------------------------------------*/
//function goForFebric

function goForFebric(){
	var choosedByuser = $('div').data('choosedOption');
	console.log("user choosed option :" +choosedByuser);
	var totalBaseFebric = $('#baseFebric .scrollable ul li').length;
	var totalContrastFebric = $('#contrastFebric .scrollable ul li').length;
	console.log('Total Base Febric : '+ totalBaseFebric + ' and Total contrast Febric : '+totalContrastFebric);
	for(i=0;i<=totalBaseFebric;i++){
		$('#baseFebric .scrollable ul li').eq(i)
							  .attr('id','baseFebric'+(i+1));
		$('#baseFebric .scrollable ul li').eq(i)
											  .find('img')
											  .attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/baseFabric/fb'+(i+1)+'.png');
	}
	for(i=0;i<=totalContrastFebric;i++){
		$('#contrastFebric .scrollable ul li').eq(i)
							  .attr('id','contrastFabric'+(i+1));
		$('#contrastFebric .scrollable ul li').eq(i)
											  .find('img')
											  .attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/contrastFebric/cst'+(i+1)+'.png');
	}
}


/*----------------------------------------------------------------------------------
                       			FOR CUSTOMIZE AREA SECTION
------------------------------------------------------------------------------------*/

function goForCustomize(){

	$('#customize .scrollable ul li').bind('click',function(){	


		//-----For Sleev selection------//

		//getting the not checked item		
		$('div').data('customize_sleev_not_checked',$('input[name=sleev]:not(:checked)').val());

		//getting the checked item of sleev section
		$('div').data('customize_sleev_checked',$('input[name=sleev]:checked').val());

		//getting the checked item of plaket section
		$('div').data('customize_plaket_checked',$('input[name=plaket]:checked').val());

		//getting the checked item of collar section
		$('div').data('customize_collar_checked',$('input[name=collar]:checked').val());

		/*if($('div').data('customize_sleev_checked') == 'hulf_sleev'){
			$('.shirtHolder ul li#'+$('div').data('customize_sleev_not_checked')).find('img').attr('src','products/design/no_img.png');
			$('.shirtHolder ul li#left_cuff').find('img').attr('src','products/design/no_img.png');
			$('.shirtHolder ul li#right_cuff').find('img').attr('src','products/design/no_img.png');
		}*/


		//for sleev

		switch ($('div').data('customize_sleev_checked')){
			case 'hulf_sleev':
			console.log('hulf_sleev');
			$('.shirtHolder ul li#left_cuff').find('img').attr('src','products/design/no_img.png');
			$('.shirtHolder ul li#right_cuff').find('img').attr('src','products/design/no_img.png');
			$('.shirtHolder ul li#full_sleev').find('img').attr('src','products/design/no_img.png');
			$('.shirtHolder ul li#hulf_sleev').find('img').attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/baseFabric/'+ $('div').data('finalBaseFebric') +'/hulf_sleev.png');
					break;
			case 'full_sleev' :
			console.log('full_sleev');
			$('.shirtHolder ul li#hulf_sleev').find('img').attr('src','products/design/no_img.png');
			$('.shirtHolder ul li#full_sleev').find('img').attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/baseFabric/'+ $('div').data('finalBaseFebric') +'/full_sleev.png');
			$('.shirtHolder ul li#left_cuff').find('img').attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/baseFabric/'+ $('div').data('finalBaseFebric') +'/left_cuff.png');
			$('.shirtHolder ul li#right_cuff').find('img').attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/baseFabric/'+ $('div').data('finalBaseFebric') +'/right_cuff.png');
					break;
			default:
					break;
		}




		// for plaket

		switch($('div').data('customize_plaket_checked')){
			case 'covered_plaket':
				$('.shirtHolder ul li#inner_Placket').find('img').attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/contrastFebric/'+ $('div').data('finalContrastFebric') +'/inner_Placket.png');
				$('.shirtHolder ul li#outer_placket').find('img').attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/contrastFebric/'+ $('div').data('finalContrastFebric') +'/covered_plaket.png');

				break;
			case 'normal_plaket':
				$('.shirtHolder ul li#inner_Placket').find('img').attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/contrastFebric/'+ $('div').data('finalContrastFebric') +'/inner_Placket.png');
				$('.shirtHolder ul li#outer_placket').find('img').attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/contrastFebric/'+ $('div').data('finalContrastFebric') +'/outer_placket.png');
				break;
		}
		

		//for collar

		 switch($('div').data('customize_collar_checked')){
		 		case 'collar_1':
		 			$('.shirtHolder ul li#inner_collar').find('img').attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/contrastFebric/'+ $('div').data('finalContrastFebric') +'/custom_c_inner.png');
		 			$('.shirtHolder ul li#outer_collar').find('img').attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/contrastFebric/'+ $('div').data('finalContrastFebric') +'/custom_c_outter.png');
		 			break;
		 		case 'collar_2':
		 			$('.shirtHolder ul li#inner_collar').find('img').attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/contrastFebric/'+ $('div').data('finalContrastFebric') +'/custom_c_inner.png');
		 			$('.shirtHolder ul li#outer_collar').find('img').attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/contrastFebric/'+ $('div').data('finalContrastFebric') +'/custom_c_outter.png');
		 			break;
		 }




		
	});
	
}


/*----------------------------------------------------------------------------------
                       			FOR Embriodery AREA SECTION
------------------------------------------------------------------------------------*/

function goForEmbroidery(){

	$('.abs').unbind('click').addClass('disabled');
	$('#userInput').addClass('disabled');
	$('#placement_of_embroidery').focusout(function(){
		if($('#placement_of_embroidery').val() != 'no'){
		$('#userInput').removeAttr('disabled').removeClass('disabled');
		$('.abs').removeClass('disabled').bind('click',function(){
		$(this).css({'top':'-20px','color':'#000','transition':'all .2s ease-in-out'});
		$('#userInput').focus();
		var name = $('#userInput');
		var result = $('.abs');
		name.keyup(function(){
			result.text('Your Text : '+name.val());
		});	
	});
	}else{
		$('#userInput').attr('disabled','disabled');
	}
	});
	

	
	$('#userInput').focusout(function(){
		if($('#userInput').val() == ''){
			$('.abs').css({'top':'10px','color':'gainsboro','transition':'all .2s ease-in-out'});
		}
	});
	$('#userInput').focusin(function(){
		if($('#userInput').val() == ''){
			$('.abs').css({'top':'-20px','color':'#000','transition':'all .2s ease-in-out'});
			var name = $('#userInput');
			var result = $('.abs');
			name.keyup(function(){
			result.text('Your Text : '+name.val());
		});	
		}
	});

	
}











//function popInnerListProcessing

function popInnerListProcessing(){
	var choosedByuser = $('div').data('choosedOption');
	console.log("user choosed option :" +choosedByuser);
	var totalItems = $('.scrollable ul li').length;
	console.log("Total items on popup list :" +totalItems);
	for(i=0;i<=totalItems;i++){
		$('.popup_body ul li').eq(i)
							  .attr('id',choosedByuser+(i+1));

		$('.popup_body ul li').eq(i).find('img').attr('src', 'products/'+choosedByuser +'/'+ choosedByuser+(i+1) +'/'+ choosedByuser+(i+1) +'.png');
	}	
}


/*----------------------------------------------------------------------------------
                       			CHANGING THE CUSTOMIZE AREA
------------------------------------------------------------------------------------*/


//function changeCustomizeArea

function changeCustomizeArea(){

	$('.steps_bar ul li:eq(1)').bind('click',showThePopup).removeClass('disabled');

	//Active the current item

	$('.scrollable ul li.activeDesignLi').removeClass('activeDesignLi');
	$(this).addClass('activeDesignLi');

	//---------------


	var choosedByuser = $('div').data('choosedOption');
	var designNumber = $(this).attr('id');
	var productName = $('#'+designNumber+' div.productName').text();
	var productPrice = $('#'+designNumber+' p.code').text();
	console.log('productName'+productName);
	$('div').data('productName',productName);
	$('div').data('productPrice',productPrice);
	switch(designNumber){
		case 'design1' :
				selectedDesign1();
				break;
		case 'design2' :
				selectedDesign2();
				break;
		case 'design3' :
				selectedDesign3();
				break;
		case 'design4' :
				selectedDesign4();
				break;
		case 'design5' :
				selectedDesign5();
				break;
		case 'design6' :
				selectedDesign6();
				break;
		case 'design7' :
				selectedDesign7();
				break;
		default:
				break;
	}
	
}


/*----------------------------------------------------------------------------------
                       			CHANGING THE CUSTOMIZE AREA
------------------------------------------------------------------------------------*/








//contrast Febric

function ContrastBasedChanges(){
	var selectedContrast = $(this).attr('id');
	var preSelectedDesign = $('div').data('finaldesignselectedByUser');
	switch(preSelectedDesign){

		case 'design1':				
				var totalLength = $('.shirtHolder ul li').length;
				console.log("Total length  of shirt Viewport li :"+totalLength);
					
				var totaleLiLength = $('.shirtHolder ul li').length;
				console.log('Total length of List : '+totaleLiLength );
				for(i=0;i<totaleLiLength;i++){
				// console.log("dfsdf");
					 var listId = $('.shirtHolder ul li').eq(i).attr('id');
					 if(listId == mainDesign1Contrast[i]){
					 	console.log('This is :'+mainDesign1Contrast[i] );
					 	$('.shirtHolder ul li').eq(i).find('img').after('<div class="preload"></div> ').hide()
						.attr('src','products/design/'+ preSelectedDesign +'/fabric/contrastFebric/'+selectedContrast+'/'+ mainDesign1Contrast[i] +'.png').one('load', function() {
                    $(this).fadeIn().next().remove();
                 });
					 }else{
					 	console.log("not Found");
					 	//$('.shirtHolder ul li').eq(i).find('img').attr('src','products/design/'+ preSelectedDesign +'/'+ listId +'.png');
					 }

					 console.log("Id of List Items : "+ (i+1) +' is :'+listId);
					}

				break;

		case 'design2':
				var totalLength = $('.shirtHolder ul li').length;
				console.log("Total length  of shirt Viewport li :"+totalLength);
					
				var totaleLiLength = $('.shirtHolder ul li').length;
				console.log('Total length of List : '+totaleLiLength );
				for(i=0;i<totaleLiLength;i++){
				// console.log("dfsdf");
					 var listId = $('.shirtHolder ul li').eq(i).attr('id');
					 if(listId == mainDesign2Contrast[i]){
					 	console.log('This is :'+mainDesign2Contrast[i] );
					 	$('.shirtHolder ul li').eq(i).find('img').after('<div class="preload"></div>').hide()
						.attr('src','products/design/'+ preSelectedDesign +'/fabric/contrastFebric/'+selectedContrast+'/'+ mainDesign2Contrast[i] +'.png').one('load', function() {
                    $(this).fadeIn().next().remove();
                 });
					 }else{
					 	console.log("not Found");
					 	//$('.shirtHolder ul li').eq(i).find('img').attr('src','products/design/'+ preSelectedDesign +'/'+ listId +'.png');
					 }

					 console.log("Id of List Items : "+ (i+1) +' is :'+listId);
					}


				break;
		default:
			break;
	}
	/*var mainDesign1Contrast = [ base,inner_back,full_collar,inner_collar, outer_collar,base_top,inner_Placket,outer_placket,full_sleev,
						    hulf_sleev,
						    left_cuff,
						    right_cuff ]*/

	
}

//base Febric
function BaseFebricBasedChanges(){
	var selectedContrast = $(this).attr('id');
	var preSelectedDesign = $('div').data('finaldesignselectedByUser');

	switch(preSelectedDesign){

		case 'design1':
				var totalLength = $('.shirtHolder ul li').length;
				console.log("Total length  of shirt Viewport li :"+totalLength);
				
				var totaleLiLength = $('.shirtHolder ul li').length;
				console.log('Total length of List : '+totaleLiLength );
				for(i=0;i<totaleLiLength;i++){
				// console.log("dfsdf");
					 var listId = $('.shirtHolder ul li').eq(i).attr('id');
					 if(listId == mainDesign1Contrast[i]){
					 	console.log('This is :'+mainDesign1Contrast[i] );
					 	//$('.shirtHolder ul li').eq(i).find('img').attr('src','products/design/'+ preSelectedDesign +'/fabric/contrastFebric/'+selectedContrast+'/'+ mainDesign1Contrast[i] +'.png');
					 }else{

					 	var noImgVar = $('.shirtHolder ul li').eq(i).find('img').attr('src');
					 	if(noImgVar == 'products/design/no_img.png'){
					 		//do nothing
					 	}else{

					 		$('.shirtHolder ul li').eq(i).find('img').after('<div class="preload"></div>').hide()
							.attr('src','products/design/'+ preSelectedDesign +'/fabric/baseFabric/'+selectedContrast+'/'+ listId +'.png').one('load', function() {
                    $(this).fadeIn().next().remove();
                 });
					 	}
					 	console.log("For base fabric changes");
					 	//$('.shirtHolder ul li').eq(i).find('img').attr('src','products/design/'+ preSelectedDesign +'/fabric/baseFabric/'+selectedContrast+'/'+ listId +'.png');
					 	//$('.shirtHolder ul li').eq(i).find('img').attr('src','products/design/'+ preSelectedDesign +'/'+ listId +'.png');
					 }

					 console.log("Id of List Items : "+ (i+1) +' is :'+listId);
					}
			 break;





			 case 'design2':
			 	var totalLength = $('.shirtHolder ul li').length;
				console.log("Total length  of shirt Viewport li :"+totalLength);
				
				var totaleLiLength = $('.shirtHolder ul li').length;
				console.log('Total length of List : '+totaleLiLength );
				for(i=0;i<totaleLiLength;i++){
				// console.log("dfsdf");
					 var listId = $('.shirtHolder ul li').eq(i).attr('id');
					 if(listId == mainDesign2Contrast[i]){

					 	

					 	console.log('This is :'+mainDesign2Contrast[i] );
					 	//$('.shirtHolder ul li').eq(i).find('img').attr('src','products/design/'+ preSelectedDesign +'/fabric/contrastFebric/'+selectedContrast+'/'+ mainDesign1Contrast[i] +'.png');
					 }else{			
					 	
					 	var noImgVar = $('.shirtHolder ul li').eq(i).find('img').attr('src');
					 	if(noImgVar == 'products/design/no_img.png'){
					 		//do nothing
					 	}else{
					 		
					 		$('.shirtHolder ul li').eq(i).find('img').after('<div class="preload"></div>').hide()
							.attr('src','products/design/'+ preSelectedDesign +'/fabric/baseFabric/'+selectedContrast+'/'+ listId +'.png').one('load', function() {
                    $(this).fadeIn().next().remove();
                 });
							
					 	}
					 	console.log("For base fabric changes");
					 	//$('.shirtHolder ul li').eq(i).find('img').attr('src','products/design/'+ preSelectedDesign +'/fabric/baseFabric/'+selectedContrast+'/'+ listId +'.png');
					 	//$('.shirtHolder ul li').eq(i).find('img').attr('src','products/design/'+ preSelectedDesign +'/'+ listId +'.png');
					 }


					 console.log("Id of List Items : "+ (i+1) +' is :'+listId);
					}
			 break;
	}
	/*var mainDesign1Contrast = [ base,inner_back,full_collar,inner_collar, outer_collar,base_top,inner_Placket,outer_placket,full_sleev,
						    hulf_sleev,
						    left_cuff,
						    right_cuff ]*/

	
}





/*------------------------------------------------------------------------
                              SELECTED DESIGNS AREA
--------------------------------------------------------------------------*/

function selectedDesign1(){		
		
		//for rotateing
		/*******************************************************************
		*****************************************************************************/

		$('li#rotateViewport').bind('click',function(){
			$('li#rotateViewport').fadeOut();
			$('li#rotateBack').css({'display':'inline-block'});

			$('.shirtHolder ul li#base').find('img').after('<div class="preload"></div>').hide()
			.attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/design1_base_back.png').one('load', function() {
                    $(this).fadeIn().next().remove();
                 });


			$('.shirtHolder ul li#inner_back').find('img').after('<div class="preload"></div>').hide()
			.attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/design1_innerBack_back.png').one('load', function() {
                    $(this).fadeIn().next().remove();
                 });


			$('.shirtHolder ul li#base_top').find('img').after('<div class="preload"></div>').hide()
			.attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/design1_buttons_back.png').one('load', function() {
                    $(this).fadeIn().next().remove();
                 });

		})

		/*******************************************************************
		*****************************************************************************/

		$('#rotateBack').bind('click',function(){
			$(this).hide();

			$('#rotateViewport').css({'display':'inline-block'});

			$('.shirtHolder ul li#base').find('img').after('<div class="preload"></div>').hide()
			.attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/base.png').one('load', function() {
                    $(this).fadeIn().next().remove();
                 });


			$('.shirtHolder ul li#inner_back').find('img').after('<div class="preload"></div>').hide()
			.attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/inner_back.png').one('load', function() {
                    $(this).fadeIn().next().remove();
                 });



			$('.shirtHolder ul li#base_top').find('img').after('<div class="preload"></div>').hide()
			.attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/base_top.png').one('load', function() {
                    $(this).fadeIn().next().remove();
                 });



		});

		/*******************************************************************
		*****************************************************************************/




	var totalLength = $('.shirtHolder ul li').length;
		console.log("Total length  of shirt Viewport li :"+totalLength);
		
		var totaleLiLength = $('.shirtHolder ul li').length;
		console.log('Total length of List : '+totaleLiLength );
		//$('#ajaxloader').show();
		for(i=0;i<totaleLiLength;i++){
		// console.log("dfsdf");

			 var listId = $('.shirtHolder ul li').eq(i).attr('id');
			 if(listId == mainDesign1[i]){
			 	console.log('This is :'+mainDesign1[i] );
			 	
			 	$('.shirtHolder ul li').eq(i).find('img').after('<div class="preload"></div>').hide()
				.attr('src','products/design/design1/'+ mainDesign1[i] +'.png').one('load', function() {
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

			 console.log("Id of List Items : "+ (i+1) +' is :'+listId);
			}$('#ajaxloader').delay(350).fadeOut();
}







//For design 2

function selectedDesign2(){		

		/*var mainDesign2 = [ base,inner_back,full_collar,inner_collar, outer_collar,base_top,inner_Placket,outer_placket,full_sleev,
						    hulf_sleev,
						    left_cuff,
						    right_cuff ]*/

		var totalLength = $('.shirtHolder ul li').length;
		console.log("Total length  of shirt Viewport li :"+totalLength);
		
		var totaleLiLength = $('.shirtHolder ul li').length;
		console.log('Total length of List : '+totaleLiLength );
			//$('#ajaxloader').show();
		for(i=0;i<totaleLiLength;i++){

		// console.log("dfsdf");
			 var listId = $('.shirtHolder ul li').eq(i).attr('id');
			 if(listId == mainDesign2[i]){
			 	console.log('This is :'+mainDesign2[i] );
			 	//$('#ajaxloader').show();
			 	$('.shirtHolder ul li').eq(i).find('img').after('<div class="preload"></div>').hide()
				.attr('src','products/design/design2/'+ mainDesign2[i] +'.png').one('load', function() {
                    $(this).fadeIn().next().remove();
                 });
			 	//$('#ajaxloader').hide();
			 }else{
			 	console.log("not Found");
			 	//$('#ajaxloader').show();
			 	$('.shirtHolder ul li').eq(i).find('img').attr('src','products/design/no_img.png');
			 	//$('#ajaxloader').hide();
			 }

			 console.log("Id of List Items : "+ (i+1) +' is :'+listId);
			}//$('#ajaxloader').delay(350).fadeOut();


}




/*----------------------------------------------------------------------------------
                       			NAVIGATON BUTTONS
------------------------------------------------------------------------------------*/



function showNavBtns(){
	$('.buttons li#prev').show();
	$('.buttons li#next').show();
	if($('div').data('choosedOption') == 'design'){
		//alert("d");
		$('.buttons li#prev').hide();
	}else{
		$('.buttons li#prev').show();
	}
	
}

/*----------------------------------------------------------------------------------
                       			NAVIGATON BUTTONS
------------------------------------------------------------------------------------*/






/*----------------------------------------------------------------------------------
                       			FOR NEXT/PREV BUTTONS
------------------------------------------------------------------------------------*/

//goForNextSlab

function goForNextSlab(){
	alert('You choosed the design : '+ $('div').data('finaldesignselectedByUser') + ' Product name' +$('div').data('productName')+' Price : '+$('div').data('productPrice'));
}
/*----------------------------------------------------------------------------------
                       			FOR NEXT/PREV BUTTONS
------------------------------------------------------------------------------------*/
$(window).on("contextmenu",function(e){
       return false;
    }); 

$(window).load(function(){
	$('.overLoader').fadeOut();
	$('.close a').attr('href','javascript:void(0);');
	$('div').data('winWidth',$(window).width());
});

$(document).ready(function(){




	$('stepsbar_wrapper li').bind('click',function(){
		$('.arrow').hide();
	});
		
	$('#userInput').keyup(function(){
		can3();
	});

	//$('.popup_body').append('<div class="gupiLoader">loading...... <br/><img Src="images/loading.gif"></div>');

$('div').data('winWidth',$(window).width());

$('.shirtControls ul li#zoomViewport').unbind('click', view);


/*$('#zoomViewport').bind('click',function(){
	$('.shirtHolder ul li img').unbind();
});*/


/**************************************************
		//FOR DEFAULT FRONT AND BACK SYSTEM
		**********************************************************/



		$('#rotateBack').bind('click',function(){
			$(this).hide();
			$('#rotateViewport').css({'display':'inline-block'});

			/*$('.shirtHolder ul li#base').find('img').after('<div class="preload"></div>').hide()
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
				$('.pricePreload').show();
		$('div').data('finaldesignselectedByUser',$(this).attr('id'));





                 */


		})

		// embrodery popup inner animation
		$('#choosedColor').attr('presetBg',"white");

		$('#YesEm').bind('click',function(){

			$('#embroidery .bottomFabric span').addClass('BottomSpanToRemove');

			$('.empopup').fadeIn().delay(2000).fadeOut(2000);

			var baseF = $('div').data('finalBaseFebric');
			//alert(baseF);
			//alert($('#baseFebric li#'+baseF).find('img').attr('src'));
			var src = $('#baseFebric li#'+baseF).find('img').attr('src');
			$('.bottomFabric').css({'background':'url('+ src +')','background-size':'100%'});
			$('#zoomViewport').unbind();
			$('div').data('Embriodery_Yes_or_no','yes');
			$('.mainCInner').fadeOut("slow");
			$('.pricePreload').show();
			var withHs = $('div').data('designPreiceHS');
			var addOnPrice = $('#addOnPrice').find('b').text().replace(/[^0-9]/gi, '');
			var addOnPrice = parseInt(addOnPrice);
			var Pfinal = withHs + addOnPrice;
			var final = parseFloat(Pfinal).toFixed(2);
			$('.variable_price p').text('RM '+final);
			//alert(final);
			$('.pricePreload').delay(1000).fadeOut('slow');
		});

		$('#forShirtV').removeClass('disabled');
		$('#NoEm').bind('click',function(){


			var baseF = $('div').data('finalBaseFebric');
			//alert(baseF);
			//alert($('#baseFebric li#'+baseF).find('img').attr('src'));
			//var src = $('#baseFebric li#'+baseF).find('img').attr('src');
			$('.bottomFabric').css({'background':'transparent'});

			$('#zoomViewport').bind('click',view);
			$('div').data('Embriodery_Yes_or_no','no');
			$('.mainCInner').fadeIn("fast");
			$('.pricePreload').show();
			var withHs = $('div').data('designPreiceHS');
			var Pfinal = withHs;
			var final = parseFloat(Pfinal).toFixed(2);
			$('.variable_price p').text('RM '+final);
			$('.pricePreload').delay(1000).fadeOut('slow');
		});
		for(i=0;i<10;i++){
			var idColor = $('.EmColors li').eq(i).attr('id');
			 //$(this).css({'background':'#'+idColor});
			$('.EmColors li').eq(i).css({'background':'#'+idColor}).attr('title','Color Code : #'+idColor);
			 //alert(idColor);
		}

		$('.EmColors li').bind("mousemove",function(){
			var thisId = $(this).attr('id');
			$('#choosedColor').css({'background':'#'+thisId});
			$('#choosedColor').attr('presetBg',thisId);
		});












		/****************************************************/
			$('#design #buttons li#next').bind('click', function(){
				var isClicked = $('div').data('finaldesignselectedByUser');
				if(isClicked == undefined){
					alert('Please Select a Design');
				}else{

				showTheFebricPopup();
				$('.steps_scroll li#design').removeClass('active');
				$('.steps_scroll li#febric').addClass('active');
				changeShirtViewport();
				goForFebric();
				}
			});
			$('#fabric #buttons li#prev').bind('click', function(){
				showTheDesignPopup();
				$('.steps_scroll li#design').addClass('active');
				$('.steps_scroll li#febric').removeClass('active');
				changeShirtViewport();
				goForDesign();
			});
			$('#fabric #buttons li#next').bind('click', function(){
				var isClicked = $('div').data('finalBaseFebric');
				var isClicked2 = $('div').data('finalContrastFebric');

				if(isClicked == undefined && isClicked2 != undefined || isClicked2 == undefined && isClicked != undefined || isClicked != undefined && isClicked2 != undefined){

					showTheCustomizePopup();
					goForCustomize();
				$('.steps_scroll li#febric').removeClass('active');
				$('.steps_scroll li#customize_shirt').addClass('active');
				changeShirtViewport();
				}else{
					alert('Please Select a a Febric');
				}
			});
			$('#customize #buttons li#prev').bind('click', function(){
				showTheFebricPopup();
				$('.steps_scroll li#febric').addClass('active');
				$('.steps_scroll li#customize_shirt').removeClass('active');
				changeShirtViewport();
				goForFebric();
			});
			$('#customize #buttons li#next').bind('click', function(){
				showTheEmbroideryPopup();
				$('.steps_scroll li#customize_shirt').removeClass('active');
				$('.steps_scroll li#embroidery_li').addClass('active');
				changeShirtViewport();
				goForEmbroidery();
			});
			$('#embroidery #buttons li#prev').bind('click', function(){
				showTheCustomizePopup();
				$('.steps_scroll li#customize_shirt').addClass('active');
				$('.steps_scroll li#embroidery_li').removeClass('active');
				changeShirtViewport();
				goForCustomize();
			});
			$('#embroidery #buttons li#next').bind('click', function(){
				$('#measurement').bind();
				showthemeasurementpopup();
				$('.steps_scroll li#embroidery_li').removeClass('active');
				$('.steps_scroll li#measurement').addClass('active');
				changeShirtViewport();
				goforMeasurement();
				//goForEmbroidery();
			});
			$('#measurement_pop #buttons li#prev').bind('click', function(){
				showTheEmbroideryPopup();
				$('.steps_scroll li#embroidery_li').addClass('active');
				$('.steps_scroll li#measurement').removeClass('active');
				changeShirtViewport();
				goForEmbroidery();
			});
		/****************************************************/

		//$('div').data('winWidth',$(window).width());
		if($('div').data('winWidth') >= 992){
			//alert($('div').data('winWidth'));
			var newHeight = $('.steps_bar').offset().top;
			$('#popups .popup').css({'top':newHeight+'px'});
		}else{
			//alert($('div').data('winWidth'));
			$('#popups .popup').css({'top':'100%'});
		}



		$('#aaaa').on("change mousemove", function() {
		   // $('#rangeInput p').text($(this).val());
		    $('.shirtHolder ul li img').css({'height':$(this).val() + '%'});
		});



		/*$('#zoomViewport').bind('click',function(){


			//$('#rangeInput').show();
		//$(this).toggleClass('activeBgForZoom');
		//Santanu
		//alert('test');
		 if (!$(this).hasClass('activeBgForZoom')) {
			//alert("gi");
			$(this).find('img').attr('src', 'images/zoom_active.png');
			$(this).addClass('activeBgForZoom');
        } else  {
			$(this).find('img').attr('src', 'images/zoom.png');
			$(this).removeClass('activeBgForZoom');
			//$('.cycle-slideshow').cycle('resume');
		}

		$('.shirtHolder ul li img').toggleClass('zoom');
		var state = $('.shirtHolder ul li img').hasClass('zoom');
		//alert(state);
		if($('.shirtHolder ul li img').hasClass('zoom') == true){
			$( "#shirt_viewport" ).append('<div class="appendDiv">You can drag the image for better experience</div>');
			$( ".appendDiv" ).hide().fadeIn(2000).delay(500).fadeOut();
			$( "#shirtMove" ).css({'transition':'all .6s ease-in-out','position':'relative','cursor':'pointer'}).draggable({
			disabled: false,
			addClasses: false,
			 stop: function(event, ui) {
			 		  // alert(ui.position.top);
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

	});*/

	//$(window).resize(function(){location.reload();});

	$('#reload').bind('click',function(){
		window.location.reload();
	});

	


	/*------------------------------------------------------------------------

	--------------------------------------------------------------------------*/

// jQuery('#right_panel .share_btn').bind('click', function(){
		  
// 		});
   $('.share_block .share_inner .close_btn').bind('click', function(){
		  $('.share_overlay').fadeOut();
		});





	$('.steps_bar ul li').bind('click',showThePopup);
	$('#addToCart2').bind('click',showOverallInfo);
	$('#right_panel .cart_btn').bind('click',showOverallInfo);
	$('.close').bind('click',closeThePopup);
	$('#design .popup_body  ul li').bind('click',function(){
		   $(".right_side_bar_btn li a.share").bind('click',function(){
		   	can();
		   	$('.share_overlay').fadeIn();

		   })
		$('.steps_bar ul li:eq(1)').bind('click',showThePopup).removeClass('disabled');
		//Active the current item
		$('.popup_body  .scrollable ul li.activeDesignLi').removeClass('activeDesignLi');
		$(this).addClass('activeDesignLi');
	});
	$('#fabric .popup_body  li').bind('click',function(){
		$(this).addClass('activeDesignLi');
		$(this).siblings().removeClass('activeDesignLi');
		
	});
	$('#fabric #contrastFebric  ul li').bind('click',ContrastBasedChanges);
	$('#fabric #contrastFebric  ul li').bind('click',function(){
		if($('#fabric .noContrast').hasClass('noContrastClicked')){				
			$('#fabric').find('.noContrast').removeClass('noContrastClicked');
			$('div').data('noContrastSelected','0');
			//alert($('div').data('noContrastSelected'));
		}
	});
	$('#fabric #baseFebric ul li').bind('click',BaseFebricBasedChanges);
	$('.buttons li#next').bind('click',goForNextSlab);
	$('#splRqst').bind('click',function(){
		$('.rqst_overlay').fadeIn();

	});
	$('.close_this').bind('click',function(){
			$('.rqst_overlay').fadeOut();
	})


	/* -------------------------------------------------------------------------
				Disableing the click functions to other list items
	-------------------------------------------------------------------------- */
	//$('.steps_bar ul li:gt(0)').unbind('click').addClass('disabled');// Unbinding all the list items in the menu

	$('#embroidery_li').bind('click',function() {

		$('.steps_bar ul li#measurement').removeClass('disabled').bind('click',function(){
			showthemeasurementpopup();
			goforMeasurement();
			changeShirtViewport();
		});

	});

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

		$('.shirtControls ul li').bind();
		//$('.shirtControls ul li').bind('click', view);



		$('#rotateOverlay').hide();
		var Fdesign = $(this).attr('id');
		//enable the rotate function
		enableTheRotateFunction(Fdesign);

		$('.pricePreload').show();
		$('div').data('finaldesignselectedByUser',$(this).attr('id'));
		/******************/

			var addOnPrice = $(this).find('p.code').text().replace(/[^0-9]/gi, '');
				var addOnPrice = parseInt(addOnPrice);
				var preAddPrice = parseFloat(addOnPrice/100);
				$('div').data('designPreice',preAddPrice);
				//alert(preAddPrice);
				var final = parseFloat(preAddPrice).toFixed(2);
				$('.variable_price p').text('RM '+final);

		/*************************/
		/******************/

		//alert($(this).find('h5').text());
		$('div').data('Final_design_name',$(this).find('h5').text());

		//final design Name $('div').data('Final_design_name');



		/******************/

		//alert();
		//$('div').data('designBasedPrice',$(this).find('p.code').text());

		//$('#right_panel .variable_price p').text($('div').data('designBasedPrice'));

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
		//alert(normalWidth-10);
		if($('div').data('winWidth') >= 992){
			$('#shirt_viewport').css({'width':(normalWidth-10)+'px'});
		}else{
			$('#shirt_viewport').css({'width':winWidth+'px'});
		}

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

		    case 'measurement':
		    		showthemeasurementpopup();
		    		//goForEmbroidery();
		    		goforMeasurement();
		      	 break;

		    default:
		         break;
}


	$('.steps_scroll li.active').removeClass('active');
	$(this).addClass('active'); //adding the active class

	$('.close').show();	//showing the popup close button
	if($('div').data('winWidth') >= 992){
		changeShirtViewport();
	}else{
		//do Nothing
		changeShirtViewportRes();
	}


}

/*----------------------------------------------------------------------------------
                       			POPUP SHOWING SECTION
------------------------------------------------------------------------------------*/


//show the design popup

function showTheDesignPopup(){
	//var winWidth = $(window).width();
	//alert(winWidth);
	if($('div').data('winWidth') >= 992){
		closeTheFebricPopup();
		closeTheCustomizePopup();
		closeTheEmbroideryPopup();
		closeTheMeasurementPopup();
		$('#popups #design').css({'left':'135px','transition':'all .3s ease-in-out'});
	}else{
		closeTheFebricPopup();
		closeTheCustomizePopup();
		closeTheEmbroideryPopup();
		closeTheMeasurementPopup();
		$('#popups #design').css({'top':'0px','transition':'all .3s ease-in-out'});
	}

}
function showTheFebricPopup(){
	//blinking the no contrast div
	for(i=0;i<10;i++) {
			$('.noContrast').fadeTo('fast', 0.5).fadeTo('fast', 1.0);
		}
	if($('div').data('winWidth') >= 992){
		closeTheDesignPopup();
		closeTheCustomizePopup();
		closeTheEmbroideryPopup();
		closeTheMeasurementPopup();
		$('#popups #fabric').css({'left':'135px','transition':'all .3s ease-in-out'});
	}else{
		closeTheDesignPopup();
		closeTheCustomizePopup();
		closeTheEmbroideryPopup();
		closeTheMeasurementPopup();
		$('#popups #fabric').css({'top':'0px','transition':'all .3s ease-in-out'});
	}

}

function showTheCustomizePopup(){
	if($('div').data('winWidth') >= 992){
		//alert("Final Design : "+$('div').data('finaldesignselectedByUser')+' Final Base fabric : '+ $('div').data('finalBaseFebric') +' Final Contrast Fabric : '+$('div').data('finalContrastFebric') );
		closeTheDesignPopup();
		closeTheFebricPopup();
		//closeTheCustomizePopup();
		closeTheEmbroideryPopup();
		closeTheMeasurementPopup();
		$('#popups #customize').css({'left':'135px','transition':'all .3s ease-in-out'});
	}else{
		//alert("Final Design : "+$('div').data('finaldesignselectedByUser')+' Final Base fabric : '+ $('div').data('finalBaseFebric') +' Final Contrast Fabric : '+$('div').data('finalContrastFebric') );
		closeTheDesignPopup();
		closeTheFebricPopup();
		//closeTheCustomizePopup();
		closeTheEmbroideryPopup();
		closeTheMeasurementPopup();
		$('#popups #customize').css({'top':'0px','transition':'all .3s ease-in-out'});
	}

}


function showTheEmbroideryPopup(){
	if($('div').data('winWidth') >= 992){
		//alert("Final Design : "+$('div').data('finaldesignselectedByUser')+' Final Base fabric : '+ $('div').data('finalBaseFebric') +' Final Contrast Fabric : '+$('div').data('finalContrastFebric') );
		closeTheDesignPopup();
		closeTheFebricPopup();
		closeTheCustomizePopup();
		closeTheMeasurementPopup();
		$('#popups #embroidery').css({'left':'135px','transition':'all .3s ease-in-out'});
	}else{
		//alert("Final Design : "+$('div').data('finaldesignselectedByUser')+' Final Base fabric : '+ $('div').data('finalBaseFebric') +' Final Contrast Fabric : '+$('div').data('finalContrastFebric') );
		closeTheDesignPopup();
		closeTheFebricPopup();
		closeTheCustomizePopup();
		closeTheMeasurementPopup();
		$('#popups #embroidery').css({'top':'0px','transition':'all .3s ease-in-out'});
	}

}


function showthemeasurementpopup(){

	if($('div').data('winWidth') >= 992){
		//alert("Final Design : "+$('div').data('finaldesignselectedByUser')+' Final Base fabric : '+ $('div').data('finalBaseFebric') +' Final Contrast Fabric : '+$('div').data('finalContrastFebric') );
		closeTheDesignPopup();
		closeTheFebricPopup();
		closeTheCustomizePopup();
		closeTheEmbroideryPopup();
		$('#popups #measurement_pop').css({'left':'135px','transition':'all .3s ease-in-out'});
	}else{
		//alert("Final Design : "+$('div').data('finaldesignselectedByUser')+' Final Base fabric : '+ $('div').data('finalBaseFebric') +' Final Contrast Fabric : '+$('div').data('finalContrastFebric') );
		closeTheDesignPopup();
		closeTheFebricPopup();
		closeTheCustomizePopup();
		closeTheEmbroideryPopup();
		$('#popups #measurement_pop').css({'top':'0px','transition':'all .3s ease-in-out'});
	}

}
















/*----------------------------------------------------------------------------------
                       			POPUP CLOSE SECTION
------------------------------------------------------------------------------------*/
//close the popup
function closeThePopup(){
	$('.arrow').fadeIn();

	$('span#forShirtV').text('');
	$(this).hide();
		if($('div').data('winWidth') >= 992){
			$('#popups  .popup').css({'left':'-100%','transition':'all .3s ease-in-out'});
			$('.steps_scroll li.active').removeClass('active');
			redoTheViewPort();
			$('.arrow').fadeIn();
	}else{
			$('#popups  .popup').css({'top':'100%','transition':'all .3s ease-in-out'});
			$('.steps_scroll li.active').removeClass('active');
			changeShirtViewportRes();
			$('.arrow').fadeIn();
	}
}

function closeTheDesignPopup(){
	$(this).hide();
	if($('div').data('winWidth') >= 992){
		$('#popups  #design').css({'left':'-100%','transition':'all .3s ease-in-out'});
		$('.steps_scroll li.active').removeClass('active');
		redoTheViewPort();
	}else{
		$('#popups  #design').css({'left':'0','top':'100%','transition':'all .3s ease-in-out'});
		$('.steps_scroll li.active').removeClass('active');
		changeShirtViewportRes();
	}
}

function closeTheFebricPopup(){
	$(this).hide();
	if($('div').data('winWidth') >= 992){
		$('#popups  #fabric').css({'left':'-100%','transition':'all .3s ease-in-out'});
		$('.steps_scroll li.active').removeClass('active');
		redoTheViewPort();
	}else{
		$('#popups  #fabric').css({'top':'100%','transition':'all .3s ease-in-out'});
		$('.steps_scroll li.active').removeClass('active');
		changeShirtViewportRes();
	}
}

function closeTheCustomizePopup(){
	$(this).hide();
	if($('div').data('winWidth') >= 992){
		$('#popups  #customize').css({'left':'-100%','transition':'all .3s ease-in-out'});
		$('.steps_scroll li.active').removeClass('active');
		redoTheViewPort();
	}else{
		$('#popups  #customize').css({'top':'100%','transition':'all .3s ease-in-out'});
		$('.steps_scroll li.active').removeClass('active');
		changeShirtViewportRes();

	}
}

function closeTheEmbroideryPopup(){
	$(this).hide();
	if($('div').data('winWidth') >= 992){
		$('#popups  #embroidery').css({'left':'-100%','transition':'all .3s ease-in-out'});
		$('.steps_scroll li.active').removeClass('active');
		redoTheViewPort();
	}else{
		$('#popups  #embroidery').css({'top':'100%','transition':'all .3s ease-in-out'});
		$('.steps_scroll li.active').removeClass('active');
		changeShirtViewportRes();
	}
}


function closeTheMeasurementPopup(){
	$(this).hide();
	if($('div').data('winWidth') >= 992){
		$('#popups  #measurement_pop').css({'left':'-100%','transition':'all .3s ease-in-out'});
		$('.steps_scroll li.active').removeClass('active');
		redoTheViewPort();
	}else{
		$('#popups  #measurement_pop').css({'top':'100%','transition':'all .3s ease-in-out'});
		$('.steps_scroll li.active').removeClass('active');
		changeShirtViewportRes();
	}
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

function changeShirtViewportRes(){
	$('#shirt_viewport').css({'width':'100%','transition':'all .3s ease-in-out'});
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


//ranit php

/*$.get('numberoffiles.php', function(data) {
  alert(data);
});*/





function goForDesign(){


	/*var hei = $('#popups .productImg').height();
		$('#popups .productImg').css({'height':hei+'px'});*/
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
                    //$('.gupiLoader').fadeOut();
                 });


	}
	var aa = $('div').data('designNSelected');
	$('#design li#'+ aa).addClass("activeDesignLi");
	//$('div').data('finaldesignselectedByUser',aa );
	/*var l = $('#fabric li').length;
	for(i=0;i<l;i++){
	var preDefinedImgSrc = $('#fabric li img').eq(i).attr('src');
		var letestLink = preDefinedImgSrc.replace('undefined',aa);
		$('#fabric li img').eq(i).attr('src',letestLink );
	}*/
	
	var newSelectedDesign = $('div').data('designNSelected');
	$('div').data('finaldesignselectedByUser',newSelectedDesign );
	//alert($('div').data('finaldesignselectedByUser'));


}//end



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
											  .find('img:not(img.easy_iron)').after('<div class="preload"></div>').hide()
		.attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/baseFabric/fb'+(i+1)+'.png').one('load', function() {
                    $(this).fadeIn().next().remove();
                 });
	}
	for(i=0;i<=totalContrastFebric;i++){
		$('#contrastFebric .scrollable ul li').eq(i)
							  .attr('id','contrastFabric'+(i+1));
		$('#contrastFebric .scrollable ul li').eq(i)
											  .find('img:not(img.easy_iron)').after('<div class="preload"></div>').hide()
		.attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/contrastFebric/cst'+(i+1)+'.png').one('load', function() {
                    $(this).fadeIn().next().remove();
                 });
	}
	var l = $('#fabric li').length;
	var aa = $('div').data('designNSelected');
	for(i=0;i<l;i++){
	var preDefinedImgSrc = $('#fabric li img').eq(i).attr('src');
		var letestLink = preDefinedImgSrc.replace('undefined',aa);
		$('#fabric li img').eq(i).attr('src',letestLink );
	}
}


/*----------------------------------------------------------------------------------
                       			FOR CUSTOMIZE AREA SECTION
------------------------------------------------------------------------------------*/

function goForCustomize(){

	$('div').data('selected_Sleev','Long Sleeve');//makeing  long sleeve as a default
	var DPrice = $('div').data('designPreice');
					//var addOnPrice = $('.variable_price p').text().replace(/[^0-9]/gi, '');
						//var addOnPrice = parseInt(addOnPrice);
						//var preAddPrice = parseFloat(addOnPrice/100);

						var Prefinal = DPrice  ;
						//alert(Prefinal);
						$('div').data('designPreiceHS',Prefinal);

						//var Prefinal = DPrice;
						//alert(preAddPrice);
						var final = parseFloat(Prefinal).toFixed(2);
						$('.variable_price p').text('RM '+final);
	$('#forShirtV').css({'top':'76%','left':'0','right':'64%','font-size':'9px','transform':'rotate(5deg)'});

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
					$('#forShirtV').css({'top':'67%','left':'12%','right':'0'});
					$('div').data('selected_Sleev','Short Sleeve');
					$('#forShirtV').addClass('For_hulf_sleev');
					$('#forShirtV').removeClass('For_full_sleev');
			$('.pricePreload').show();
				//$('div').data('finaldesignselectedByUser',$(this).attr('id'));
				/******************/
					var DPrice = $('div').data('designPreice');
					//var addOnPrice = $('.variable_price p').text().replace(/[^0-9]/gi, '');
						//var addOnPrice = parseInt(addOnPrice);
						//var preAddPrice = parseFloat(addOnPrice/100);
						var Prefinal = DPrice - 10 ;
						$('div').data('designPreiceHS',Prefinal);
						//alert(preAddPrice);
						var final = parseFloat(Prefinal).toFixed(2);
						$('.variable_price p').text('RM '+final);

				/*************************/
				//alert();
				//$('div').data('designBasedPrice',$(this).find('p.code').text());

				//$('#right_panel .variable_price p').text($('div').data('designBasedPrice'));

			$('.pricePreload').delay(1000).fadeOut('slow');

			$('#rotateBack').hide();
			$('#rotateViewport').css({'display':'inline-block'});
			//console.log('hulf_sleev');

			for(i=0;i < $('.shirtHolder ul li').length;i++){
		        		$('.shirtHolder ul li').eq(i).removeClass('to_Be_Rotate');
						var imgSrc = $('.shirtHolder ul li').eq(i).find('img').attr('src');
						var foundNoImg = imgSrc.split('no_img');
						if(foundNoImg.length > 1){
							//do nothing
						}else{
							//getting the changable id of li;


							var y = $('.shirtHolder ul li').eq(i).attr('id');
							//gottedL.push($('.shirtHolder ul li').eq(i).attr('id'));
							$('.shirtHolder ul li#'+y).addClass('for_hulf_sleev');

							ddd = $('.shirtHolder ul li#'+y+' img').attr('src');
							n = ddd.search("HS.png");
							//alert(n);
							if(n<1){
								eee = ddd.replace( ".png","HS.png");
							$('.shirtHolder ul li#'+y+' img').after('<div class="preload"></div>').hide()
							.attr('src',eee).one('load', function() {
			                    $(this).fadeIn().next().remove();
			                 });

							}
							//var ccc=$('.shirtHolder ul li#'+y+' img').attr('src');
							//alert(ccc);


							//alert($('.shirtHolder ul li').eq(i).attr('id'));
						}
					}


			/*$('.shirtHolder ul li#left_cuff').find('img').attr('src','products/design/no_img.png');
			$('.shirtHolder ul li#right_cuff').find('img').attr('src','products/design/no_img.png');
			$('.shirtHolder ul li#full_sleev').find('img').attr('src','products/design/no_img.png');*/

			/*$('.shirtHolder ul li#base').find('img').attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/baseFabric/'+ $('div').data('finalBaseFebric') +'/base_hulf_sleev.png');
			$('.shirtHolder ul li#base_top').find('img').attr('src','products/design/no_img.png');
			$('.shirtHolder ul li#inner_back').find('img').attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/contrastFebric/'+ $('div').data('finalContrastFebric') +'/inner_back_hulf_sleev.png');*/

			//$('li#rotateViewport').bind('click',customRotateBack);
			//$('#rotateBack').bind('click',customRotateFront);


			break;
			case 'full_sleev' :
			$('#forShirtV').css({'top':'76%','left':'0','right':'64%','font-size':'9px','transform':'rotate(5deg)'});
			$('div').data('selected_Sleev','Long Sleeve');
			$('#forShirtV').addClass('For_full_sleev');
			$('#forShirtV').removeClass('For_hulf_sleev');
			$('#rotateBack').hide();


			$('.pricePreload').show();
				//$('div').data('finaldesignselectedByUser',$(this).attr('id'));
				/******************/
					var DPrice = $('div').data('designPreice');
					//var addOnPrice = $('.variable_price p').text().replace(/[^0-9]/gi, '');
						//var addOnPrice = parseInt(addOnPrice);
						//var preAddPrice = parseFloat(addOnPrice/100);

						var Prefinal = DPrice  ;
						//alert(Prefinal);
						$('div').data('designPreiceHS',Prefinal);

						//var Prefinal = DPrice;
						//alert(preAddPrice);
						var final = parseFloat(Prefinal).toFixed(2);
						$('.variable_price p').text('RM '+final);

				/*************************/
				//alert();
				//$('div').data('designBasedPrice',$(this).find('p.code').text());

				//$('#right_panel .variable_price p').text($('div').data('designBasedPrice'));

			$('.pricePreload').delay(1000).fadeOut('slow');



			$('#rotateViewport').css({'display':'inline-block'});


			console.log('full_sleev');

			for(i=0;i<12;i++){
		        		$('.shirtHolder ul li').eq(i).removeClass('to_Be_Rotate');
						var imgSrc = $('.shirtHolder ul li').eq(i).find('img').attr('src');
						var foundNoImg = imgSrc.split('no_img');
						if(foundNoImg.length > 1){
							//do nothing
						}else{
							//getting the changable id of li

							var y = $('.shirtHolder ul li').eq(i).attr('id');
							//gottedL.push($('.shirtHolder ul li').eq(i).attr('id'));
							$('.shirtHolder ul li#'+y).addClass('for_hulf_sleev');
							var ddd = $('.shirtHolder ul li#'+y).find('img').attr('src');
							var eee = ddd.replace( "HS.png",".png");
							$('.shirtHolder ul li#'+y).find('img').after('<div class="preload"></div>').hide()
							.attr('src',eee).one('load', function() {
			                    $(this).fadeIn().next().remove();
			                 });
							//alert(eee);
							//alert(y);
							//alert($('.shirtHolder ul li').eq(i).attr('id'));
						}
					}

			/*$('.shirtHolder ul li#base_top').find('img').attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/baseFabric/'+ $('div').data('finalBaseFebric') +'/base_top.png');
			$('.shirtHolder ul li#base').find('img').attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/baseFabric/'+ $('div').data('finalBaseFebric') +'/base.png');
			$('.shirtHolder ul li#inner_back').find('img').attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/contrastFebric/'+ $('div').data('finalContrastFebric') +'/inner_back.png');*/

			/*$('.shirtHolder ul li#hulf_sleev').find('img').attr('src','products/design/no_img.png');
			$('.shirtHolder ul li#full_sleev').find('img').attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/baseFabric/'+ $('div').data('finalBaseFebric') +'/full_sleev.png');
			$('.shirtHolder ul li#left_cuff').find('img').attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/baseFabric/'+ $('div').data('finalBaseFebric') +'/left_cuff.png');
			$('.shirtHolder ul li#right_cuff').find('img').attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/baseFabric/'+ $('div').data('finalBaseFebric') +'/right_cuff.png');*/
			//$('li#rotateViewport').bind('click',customRotateBackFullSleev);
			//$('#rotateBack').bind('click',customRotateFrontFullSleev);

					break;
			default:

			$('#forShirtV').css({'top':'76%','left':'0','right':'65%','font-size':'9px','transform':'rotate(5deg)'});
			$('div').data('selected_Sleev','Long Sleeve');
			$('#forShirtV').addClass('For_full_sleev');
			$('#forShirtV').removeClass('For_hulf_sleev');
			$('#rotateBack').hide();


			$('.pricePreload').show();
				//$('div').data('finaldesignselectedByUser',$(this).attr('id'));
				/******************/
					var DPrice = $('div').data('designPreice');
					//var addOnPrice = $('.variable_price p').text().replace(/[^0-9]/gi, '');
						//var addOnPrice = parseInt(addOnPrice);
						//var preAddPrice = parseFloat(addOnPrice/100);

						var Prefinal = DPrice  ;
						//alert(Prefinal);
						$('div').data('designPreiceHS',Prefinal);

						//var Prefinal = DPrice;
						//alert(preAddPrice);
						var final = parseFloat(Prefinal).toFixed(2);
						$('.variable_price p').text('RM '+final);

				/*************************/
				//alert();
				//$('div').data('designBasedPrice',$(this).find('p.code').text());

				//$('#right_panel .variable_price p').text($('div').data('designBasedPrice'));

			$('.pricePreload').delay(1000).fadeOut('slow');



			$('#rotateViewport').css({'display':'inline-block'});


			console.log('full_sleev');

			for(i=0;i<12;i++){
		        		$('.shirtHolder ul li').eq(i).removeClass('to_Be_Rotate');
						var imgSrc = $('.shirtHolder ul li').eq(i).find('img').attr('src');
						var foundNoImg = imgSrc.split('no_img');
						if(foundNoImg.length > 1){
							//do nothing
						}else{
							//getting the changable id of li

							var y = $('.shirtHolder ul li').eq(i).attr('id');
							//gottedL.push($('.shirtHolder ul li').eq(i).attr('id'));
							$('.shirtHolder ul li#'+y).addClass('for_hulf_sleev');
							var ddd = $('.shirtHolder ul li#'+y).find('img').attr('src');
							var eee = ddd.replace( "HS.png",".png");
							$('.shirtHolder ul li#'+y).find('img').after('<div class="preload"></div>').hide()
							.attr('src',eee).one('load', function() {
			                    $(this).fadeIn().next().remove();
			                 });
							//alert(eee);
							//alert(y);
							//alert($('.shirtHolder ul li').eq(i).attr('id'));
						}
					}

			/*$('.shirtHolder ul li#base_top').find('img').attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/baseFabric/'+ $('div').data('finalBaseFebric') +'/base_top.png');
			$('.shirtHolder ul li#base').find('img').attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/baseFabric/'+ $('div').data('finalBaseFebric') +'/base.png');
			$('.shirtHolder ul li#inner_back').find('img').attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/contrastFebric/'+ $('div').data('finalContrastFebric') +'/inner_back.png');*/

			/*$('.shirtHolder ul li#hulf_sleev').find('img').attr('src','products/design/no_img.png');
			$('.shirtHolder ul li#full_sleev').find('img').attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/baseFabric/'+ $('div').data('finalBaseFebric') +'/full_sleev.png');
			$('.shirtHolder ul li#left_cuff').find('img').attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/baseFabric/'+ $('div').data('finalBaseFebric') +'/left_cuff.png');
			$('.shirtHolder ul li#right_cuff').find('img').attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/baseFabric/'+ $('div').data('finalBaseFebric') +'/right_cuff.png');*/
			//$('li#rotateViewport').bind('click',customRotateBackFullSleev);
			//$('#rotateBack').bind('click',customRotateFrontFullSleev);
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


//custom rotate for sleevs

		function customRotateBack(){
			//alert("custom rotate");
			$('.shirtHolder ul li#base').find('img').attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/baseFabric/'+ $('div').data('finalBaseFebric') +'/base_hulf_sleev_back.png');
			$('.shirtHolder ul li#base_top').find('img').attr('src','products/design/no_img.png');
			$('.shirtHolder ul li#inner_back').find('img').attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/contrastFebric/'+ $('div').data('finalContrastFebric') +'/inner_back_hulf_sleev_back.png');
		}
		function customRotateFront(){
			//alert("custom rotate");
			$('.shirtHolder ul li#base').find('img').attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/baseFabric/'+ $('div').data('finalBaseFebric') +'/base_hulf_sleev.png');
			$('.shirtHolder ul li#base_top').find('img').attr('src','products/design/no_img.png');
			$('.shirtHolder ul li#inner_back').find('img').attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/contrastFebric/'+ $('div').data('finalContrastFebric') +'/inner_back_hulf_sleev.png');
		}


		function customRotateBackFullSleev(){
			//alert("custom rotate");
			$('.shirtHolder ul li#base').find('img').attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/baseFabric/'+ $('div').data('finalBaseFebric') +'/base.png');
			$('.shirtHolder ul li#base_top').find('img').attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/baseFabric/'+ $('div').data('finalBaseFebric') +'/base_top.png');
			$('.shirtHolder ul li#inner_back').find('img').attr('src','products/design/'+ $('div').data('finaldesignselectedByUser') +'/fabric/contrastFebric/'+ $('div').data('finalContrastFebric') +'/inner_back.png');
		}
}


/*----------------------------------------------------------------------------------
                       			FOR Embriodery AREA SECTION
------------------------------------------------------------------------------------*/

function goForEmbroidery(){

	$('#rotateViewport').unbind();
	$('.abs').unbind('click').addClass('disabled');
	$('#userInput').addClass('disabled');
	//removeing the image
	$('.stepsbar_wrapper ul li:not("#measurement")').bind('click',function() {
	//	alert('working');
		$('li#viewport_2').css({'background':'transparent'});
	});
	//alert(preSE);
	$('.EmColors li').bind("click",function(){
			$('div').data('embroidery_color','#'+$(this).attr('id'));
			//alert($('div').data('embroidery_color'));
			var preSE = $('#choosedColor').attr('presetbg');
	if( preSE != 'white'){
		$('.bottomSpan').css({'color':'#'+preSE});
			//alert(preSE);
		$('#userInput').removeAttr('disabled').removeClass('disabled');
		$('.ab').removeClass('disabled').bind('click',function(){
		$(this).css({'top':'-20px','color':'#000','transition':'all .2s ease-in-out'});
		$('#userInput').focus();
		var name = $('#userInput');
		var result = $('.abs');
		name.keyup(function(){
			result.text(' '+name.val());
			//$('div').data('Embriodery_text',name.val());
		});

	});
		$('#userInput').focusout(function(){
			//alert($(this).val());
			$('div').data('Embriodery_text',$(this).val());
		});
	}else{
		$('#userInput').attr('disabled','disabled');
	}
	$('#placement_of_embroidery').focusout(function(){

	});
		});






	$('#userInput').focusout(function(){
		if($('#userInput').val() == ''){
			$('.ab').css({'top':'10px','color':'#000','transition':'all .2s ease-in-out'});
		}
	});
	$('#userInput').focusin(function(){
		if($('#userInput').val() == ''){
			$('.ab').css({'top':'-20px','color':'#000','transition':'all .2s ease-in-out'});
			var name = $('#userInput');
			var result = $('.abs');
			name.keyup(function(){
			result.text(''+name.val());
		});
		}
	});


}


// measurement


function goforMeasurement(){


	//toggle the active state
$('div').data('Slim_or_normal','slim fit');
	$('.sizeContent ul li').bind('click',function(){
		$(this).siblings().removeClass('active');
		$(this).addClass('active');

	});
	$('#slim_fit').bind('click',function(){
		$('#slim_fit_content').show();
		$('#normal_fit_content').hide();
		$('div').data('Slim_or_normal','slim fit');
	});
	$('#normal_fit').bind('click',function(){
			$('#normal_fit_content').show();
		$('#slim_fit_content').hide();
		$('div').data('Slim_or_normal','normal fit');
	});
	$('div').data('main_sizeing','slim fit');
	$('.sizeTabs ul li').bind('click',function(){
		$(this).siblings().removeClass('active');
		$(this).addClass('active');
//	alert(	$(this).attr('name'));
		var main_size = $(this).attr('name')
		$('div').data('main_sizeing',main_size );
	});
$('div').data('measurement_size','M');
$('#slim_fit_content ul li:gt(0)').bind('click',function () {
		//alert(	$('div').data('Slim_or_normal'));
	//	alert($(this).find('.title_bar').find('h6').text());
	measurementSize = $(this).find('.title_bar').find('h6').text();
	$('div').data('measurement_size',measurementSize );
//	alert(	$('div').data('measurement_size'));
});
$('#normal_fit_content ul li:gt(0)').bind('click',function () {
		//alert(	$('div').data('Slim_or_normal'));
		//alert($(this).find('.title_bar').find('h6').text());
		measurementSize = $(this).find('.title_bar').find('h6').text();
		$('div').data('measurement_size',measurementSize );
	//	alert(	$('div').data('measurement_size'));
});

$('#spl_rqst_btn').bind('click',function() {
		spl_rqst_f = $('#spical_request_field').val();
		if(spl_rqst_f == ''){
			//alert("please Enter Proper Text !!!!!");
			$('.rqst_inner').addClass('wrong_Input');
			$('#spical_request_field').css({'border':'2px solid red'})
			 $(".rqst_inner").effect( "shake", {times:2}, 200 );


		}else{
			$(".rqst_inner").css({'border':'10px solid rgba(0, 0, 0, .5)'});
			$('div').data('Spl_rqst_data',spl_rqst_f);
			$('.rqst_overlay').delay(1000).fadeOut();
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

		$('.popup_body ul li').eq(i).find('img').after('<div class="preload"></div>').hide()
		.attr('src', 'products/'+choosedByuser +'/'+ choosedByuser+(i+1) +'/'+ choosedByuser+(i+1) +'.png').one('load', function() {
                    $(this).fadeIn().next().remove();
                 });
	}
}


/*----------------------------------------------------------------------------------
                       			CHANGING THE CUSTOMIZE AREA
------------------------------------------------------------------------------------*/
/*Developer Team Code*/
	//var designds = $('div').data('designListarray');

	//alert(finalStructureOfdesign);

$('ul.scrollableds li').bind('click',function(){

			//$('div').data('designListarray');
			var id = $(this).attr('id');
			//alert(id);
			var designname = $('#'+id+' h5').text();
		//alert(designname);
		//var spanDesing = designname;
		//$('#spanDesign').val(designname);

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
	 var price = dataval["price"];	
		var p2 = price.replace(/[^0-9]/gi, '');
		var priceWithSleev = p2/100;
		var priceWithOutSleev = priceWithSleev - 10;
			//var Pfinal = withHs + addOnPrice;
			//var final = parseFloat(Pfinal).toFixed(2);
	// alert (priceWithSleev+' == '+priceWithOutSleev);

	 $('#c1 .price_sec strong.hulf').text('RM '+priceWithOutSleev);
	 $('#c1 .price_sec strong.long').text('RM '+priceWithSleev);
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
	 			$('#contrastFebric  ul li.activeDesignLi').removeClass('activeDesignLi');
	 			
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
							$('#li#sleev_area').text('Sleeve : Not Selected');
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

 /***************************/






});
// var finalStructureOfdesign = [];
// var forArrayLength = $('#forArray li').length;
//
// for(i=0;i<forArrayLength;i++){
// 	var initArray = $('#forArray li').eq(i).text();
// 			finalStructureOfdesign.push(initArray);
// 			//alert(finalStructureOfdesign);
// }

//function changeCustomizeArea

function changeCustomizeArea(){


	var sD = $(this).attr('id');
	/**********************************************************************/


			var designS = sD;


			//var cp_value= ucfirst(designS,true) ;

			/*******************************************************************
			*****************************************************************************/

			//var convertedArray = eval('main'+cp_value);

					/************************************************************
					***************************************************************/

					// var forArrayLength = $('#forArray li').length;
					// var finalStructureOfdesign = [];
					// for(i=0;i<forArrayLength;i++){
					// 	var initArray = $('#forArray li').eq(i).text();
					// 	    finalStructureOfdesign.push(initArray);
					// 			//alert(finalStructureOfdesign);
					// }//alert(finalStructureOfdesign);



					/************************************************************
					***************************************************************/
		//alert(convertedArray);
		/*var totalLength = $('.shirtHolder ul li').length;
			console.log("Total length  of shirt Viewport li :"+totalLength);

			var totaleLiLength = $('.shirtHolder ul li').length;
			console.log('Total length of List : '+totaleLiLength );*/
			//$('#ajaxloader').show();
			// for(i=0;i<totaleLiLength;i++){
			// // console.log("dfsdf");
			// 		var initArray = $('#forArray li').eq(i).text();
			// 	 var listId = $('.shirtHolder ul li').eq(i).attr('id');
			// 	 if(listId == initArray){
			// 	 	console.log('This is :'+initArray );
			//
			// 	 	$('.shirtHolder ul li').eq(i).find('img').after('<div class="preload"></div>').hide()
			// 		.attr('src','products/design/'+ designS +'/'+ initArray +'.png').one('load', function() {
	    //                 $(this).fadeIn().next().remove();
	    //              });
			// 	 	//$('.shirtHolder ul li').eq(i).find('img').attr('src','http://www.ihaveapc.com/wp-content/uploads//2011/07/Stunning-HD-Wallpaper-155.jpg');
			// 	 	//$('#ajaxloader').hide();
			// 	 }else{
			// 	 	console.log("not Found");
			// 	 	//$('#ajaxloader').show();
			// 	 	$('.shirtHolder ul li').eq(i).find('img').attr('src','products/design/no_img.png');
			// 	 	//$('#ajaxloader').hide();
			// 	 }

				//  console.log("Id of List Items : "+ (i+1) +' is :'+listId);
				// }$('#ajaxloader').delay(350).fadeOut();





	/***************************************************************/
	//selectedDesign(sD);
	$('.steps_bar ul li:eq(1)').bind('click',showThePopup).removeClass('disabled');

	//Active the current item

	$('.popup_body .scrollable ul li.activeDesignLi').removeClass('activeDesignLi');
	$(this).addClass('activeDesignLi');


	var choosedByuser = $('div').data('choosedOption');
	var designNumber = $(this).attr('id');
	var productName = $('#'+designNumber+' div.productName').text();
	var productPrice = $('#'+designNumber+' p.code').text();
	console.log('productName'+productName);
	$('div').data('productName',productName);
	$('div').data('productPrice',productPrice);
	/*switch(designNumber){
		case 'design1' :
				selectedDesign(sD);
				break;
		case 'design2' :
				selectedDesign(sD);
				break;
		case 'design3' :
				selectedDesign(sD);
				break;
		case 'design4' :
				selectedDesign(sD);
				break;
		case 'design5' :
				selectedDesign(sD);
				break;
		case 'design6' :
				selectedDesign(sD);
				break;
		case 'design7' :
				selectedDesign(sD);;
				break;
		default:
				break;
	}*/

}


/*----------------------------------------------------------------------------------
                       			CHANGING THE CUSTOMIZE AREA
------------------------------------------------------------------------------------*/







//design base change on viewport
//contrast Febric

function ContrastBasedChanges(){
//alert(designds);
	var selectedContrast = $(this).attr('id');
	var preSelectedDesign = $('div').data('finaldesignselectedByUser');
	// var cp_value= ucfirst(preSelectedDesign,true) ;
	// var convertedArray = eval('main'+ cp_value +'Contrast');
	saveTheContrastFabricProductPriceData(selectedContrast);
	contrastChange();

	function contrastChange(){

				var totalLength = $('.shirtHolder ul li').length;
				console.log("Total length  of shirt Viewport li :"+totalLength);

				var totaleLiLength = $('.shirtHolder ul li').length;
				console.log('Total length of List : '+totaleLiLength );
				for(i=0;i<totaleLiLength;i++){
				// console.log("dfsdf");
					 var initArray3 = $('#forContrastArray li').eq(i).text();
					 var listId = $('.shirtHolder ul li').eq(i).attr('id');
					 if(listId == initArray3){
					 	//console.log('This is :'+convertedArray[i] );
					 	$('.shirtHolder ul li').eq(i).find('img').after('<div class="preload"></div> ').hide()
						.attr('src','products/design/'+ preSelectedDesign +'/fabric/contrastFebric/'+selectedContrast+'/'+ initArray3 +'.png').one('load', function() {
                    $(this).fadeIn().next().remove();
                 });
					 }else{
					 	console.log("not Found");
					 	//$('.shirtHolder ul li').eq(i).find('img').attr('src','products/design/'+ preSelectedDesign +'/'+ listId +'.png');
					 }

					 console.log("Id of List Items : "+ (i+1) +' is :'+listId);
					}
	}



}

//base Febric
function BaseFebricBasedChanges(){	
	var selectedContrast = $(this).attr('id');
	var preSelectedDesign = $('div').data('finaldesignselectedByUser');
	//alert(preSelectedDesign);
	// var cp_value= ucfirst(preSelectedDesign,true) ;
	// //alert(cp_value);
	// var convertedArray = eval('main'+ cp_value +'Contrast');
	//alert(convertedArray);
	saveTheBaseFabricProductPriceData(selectedContrast);
	baseCahnge();

	function baseCahnge(){

				var totalLength = $('.shirtHolder ul li').length;
				//console.log("Total length  of shirt Viewport li :"+totalLength);

				var totaleLiLength = $('.shirtHolder ul li').length;
				//console.log('Total length of List : '+totaleLiLength );
				for(i=0;i<totaleLiLength;i++){
				// console.log("dfsdf");
					 var initArray2 = $('#forContrastArray li').eq(i).text();
					 var listId = $('.shirtHolder ul li').eq(i).attr('id');
					 if(listId == initArray2){
					 	console.log('This is :'+initArray2 );
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
					 }

					 console.log("Id of List Items : "+ (i+1) +' is :'+listId);
					}
				}


}





/*------------------------------------------------------------------------
                              SELECTED DESIGNS AREA
--------------------------------------------------------------------------*/

function ucfirst(str,force){
          str=force ? str.toLowerCase() : str;
          return str.replace(/(\b)([a-zA-Z])/,
                   function(firstLetter){
                      return   firstLetter.toUpperCase();
           });
      }

// function selectedDesign(sD){
//
// 		var designS = sD;
//
//
// 		var cp_value= ucfirst(designS,true) ;
//
// 		/*******************************************************************
// 		*****************************************************************************/
//
// 		var convertedArray = eval('main'+cp_value);
//
// 				/************************************************************
// 				***************************************************************/
//
// 				// var forArrayLength = $('#forArray li').length;
// 				// var finalStructureOfdesign = [];
// 				// for(i=0;i<forArrayLength;i++){
// 				// 	var initArray = $('#forArray li').eq(i).text();
// 				// 	    finalStructureOfdesign.push(initArray);
// 				// 			//alert(finalStructureOfdesign);
// 				// }//alert(finalStructureOfdesign);
//
//
//
// 				/************************************************************
// 				***************************************************************/
// 	//alert(convertedArray);
// 	var totalLength = $('.shirtHolder ul li').length;
// 		console.log("Total length  of shirt Viewport li :"+totalLength);
//
// 		var totaleLiLength = $('.shirtHolder ul li').length;
// 		console.log('Total length of List : '+totaleLiLength );
// 		//$('#ajaxloader').show();
// 		for(i=0;i<totaleLiLength;i++){
// 		// console.log("dfsdf");
// 				var initArray = $('#forArray li').eq(i).text();
// 			 var listId = $('.shirtHolder ul li').eq(i).attr('id');
// 			 if(listId == initArray){
// 			 	console.log('This is :'+initArray );
//
// 			 	$('.shirtHolder ul li').eq(i).find('img').after('<div class="preload"></div>').hide()
// 				.attr('src','products/design/'+ designS +'/'+ initArray +'.png').one('load', function() {
//                     $(this).fadeIn().next().remove();
//                  });
// 			 	//$('.shirtHolder ul li').eq(i).find('img').attr('src','http://www.ihaveapc.com/wp-content/uploads//2011/07/Stunning-HD-Wallpaper-155.jpg');
// 			 	//$('#ajaxloader').hide();
// 			 }else{
// 			 	console.log("not Found");
// 			 	//$('#ajaxloader').show();
// 			 	$('.shirtHolder ul li').eq(i).find('img').attr('src','products/design/no_img.png');
// 			 	//$('#ajaxloader').hide();
// 			 }
//
// 			 console.log("Id of List Items : "+ (i+1) +' is :'+listId);
// 			}$('#ajaxloader').delay(350).fadeOut();








//For design 2

/*function selectedDesign2(){




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


}*/




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


function enableTheRotateFunction(Fdesign){
	var aa = Fdesign;
	//alert(aa);

	switch(aa) {

		    case 'design1':
		    		$('#zoomViewport').bind('click',view);

		    		$('#rotateViewport').bind('click',function(){
						$(this).hide();
						$('#rotateBack').css({'display':'inline-block'});
						/*alert(gottedL[0]);
						alert(gottedL[1]);
						alert(gottedL[2]);*/

		        	for(i=0;i<12;i++){
		        		$('.shirtHolder ul li').eq(i).removeClass('to_Be_Rotate');
						var imgSrc = $('.shirtHolder ul li').eq(i).find('img').attr('src');
						var foundNoImg = imgSrc.split('no_img');
						if(foundNoImg.length > 1){
							//do nothing
						}else{
							//getting the changable id of li

							var y = $('.shirtHolder ul li').eq(i).attr('id');
							//gottedL.push($('.shirtHolder ul li').eq(i).attr('id'));
							$('.shirtHolder ul li#'+y).addClass('to_Be_Rotate');
							var ddd = $('.shirtHolder ul li#'+y).find('img').attr('src');
							var eee = ddd.replace( ".png","_back.png");
							var ddd = $('.shirtHolder ul li#'+y).find('img').after('<div class="preload"></div>').hide()
							.attr('src',eee).one('load', function() {
			                    $(this).fadeIn().next().remove();
			                 });							
						}
					}

					});
					$('#rotateBack').bind('click',function(){
						$(this).hide();
						$('#rotateViewport').css({'display':'inline-block'});
						/*alert(gottedL[0]);
						alert(gottedL[1]);
						alert(gottedL[2]);*/
						//alert("sdfsdf");
		        	for(i=0;i<12;i++){
		        		$('.shirtHolder ul li').eq(i).removeClass('to_Be_Rotate');
						var imgSrc = $('.shirtHolder ul li').eq(i).find('img').attr('src');
						var foundNoImg = imgSrc.split('no_img');
						if(foundNoImg.length > 1){
							//do nothing
						}else{
							//getting the changable id of li

							var y = $('.shirtHolder ul li').eq(i).attr('id');
							//gottedL.push($('.shirtHolder ul li').eq(i).attr('id'));
							$('.shirtHolder ul li#'+y).addClass('to_Be_Rotate');
							var ddd = $('.shirtHolder ul li#'+y).find('img').attr('src');
							var eee = ddd.replace( "_back.png",".png");
							var ddd = $('.shirtHolder ul li#'+y).find('img').after('<div class="preload"></div>').hide()
							.attr('src',eee).one('load', function() {
			                    $(this).fadeIn().next().remove();
			                 });
							//alert(eee);
							//alert(y);
							//alert($('.shirtHolder ul li').eq(i).attr('id'));
						}
					}

					});
		          break;

		    case 'design2':
		    		$('#rotateViewport').bind('click',function(){
						$(this).hide();
						$('#rotateBack').css({'display':'inline-block'});
						/*alert(gottedL[0]);
						alert(gottedL[1]);
						alert(gottedL[2]);*/

		        	for(i=0;i<12;i++){
		        		$('.shirtHolder ul li').eq(i).removeClass('to_Be_Rotate');
						var imgSrc = $('.shirtHolder ul li').eq(i).find('img').attr('src');
						var foundNoImg = imgSrc.split('no_img');
						if(foundNoImg.length > 1){
							//do nothing
						}else{
							//getting the changable id of li
							var y = $('.shirtHolder ul li').eq(i).attr('id');
							//gottedL.push($('.shirtHolder ul li').eq(i).attr('id'));
							$('.shirtHolder ul li#'+y).addClass('to_Be_Rotate');
							var ddd = $('.shirtHolder ul li#'+y).find('img').attr('src');
							var eee = ddd.replace( ".png","_back.png");
							var ddd = $('.shirtHolder ul li#'+y).find('img').attr('src',eee)
							//alert(y);
							//alert($('.shirtHolder ul li').eq(i).attr('id'));
						}
					}
					});

					$('#rotateBack').bind('click',function(){
						$(this).hide();
						$('#rotateViewport').css({'display':'inline-block'});

						for(i=0;i<12;i++){
		        		$('.shirtHolder ul li').eq(i).removeClass('to_Be_Rotate');
						var imgSrc = $('.shirtHolder ul li').eq(i).find('img').attr('src');
						var foundNoImg = imgSrc.split('no_img');
						if(foundNoImg.length > 1){
							//do nothing
						}else{
							//getting the changable id of li

							var y = $('.shirtHolder ul li').eq(i).attr('id');
							//gottedL.push($('.shirtHolder ul li').eq(i).attr('id'));
							$('.shirtHolder ul li#'+y).addClass('to_Be_Rotate');
							var ddd = $('.shirtHolder ul li#'+y).find('img').attr('src');
							var eee = ddd.replace( "_back.png",".png");
							var ddd = $('.shirtHolder ul li#'+y).find('img').attr('src',eee)
							//alert(eee);
							//alert(y);
							//alert($('.shirtHolder ul li').eq(i).attr('id'));
						}
					}

					});
		          break;



		    default:
		         break;
}

	


	$('#rotateViewport').bind('click',function(){
			$(this).hide();
			$('#rotateBack').css({'display':'inline-block'});
			/*alert(gottedL[0]);
			alert(gottedL[1]);
			alert(gottedL[2]);*/



		});
	$('#rotateBack').bind('click',function(){
			$(this).hide();
			$('#rotateViewport').css({'display':'inline-block'});


		});
}


function saveTheBaseFabricProductPriceData(selectedContrast){
	var currentLiId = selectedContrast;
	var finalDesign = $('div').data('finaldesignselectedByUser');
	//alert($('#'+ currentLiId + ' .productPrice').find('.code_fabric').length);
	var lengthOf = $('#'+ currentLiId + ' .productPrice').find('.code_fabric').length
	for(i=0;i<lengthOf;i++){
		$('#'+ currentLiId + ' .productPrice').find('.code_fabric').eq(i).attr('id','Bcode_fabric_'+(i+1));
	}
	/*alert($('#'+ currentLiId + ' .productPrice').find('#code_fabric_1').text());
	alert($('#'+ currentLiId + ' .productPrice').find('#code_fabric_2').text());*/
	$('div').data('baseFabric_code',$('#'+ currentLiId + ' .productPrice').find('#Bcode_fabric_1').text());
	$('div').data('baseFabric_name',$('#'+ currentLiId + ' .productPrice').find('#Bcode_fabric_2').text());

	//alert('base Fabric Code :'+$('div').data('baseFabric_code'));
	//base Fabric name $('div').data('baseFabric_name');
	//base Fabric code $('div').data('baseFabric_code');
}

function saveTheContrastFabricProductPriceData(selectedContrast){
	var currentLiId = selectedContrast;
	var finalDesign = $('div').data('finaldesignselectedByUser');
	//alert($('#'+ currentLiId + ' .productPrice').find('.code_fabric').length);
	var lengthOf = $('#'+ currentLiId + ' .productPrice').find('.code_fabric').length
	for(i=0;i<lengthOf;i++){
		$('#'+ currentLiId + ' .productPrice').find('.code_fabric').eq(i).attr('id','Ccode_fabric_'+(i+1));
	}
	/*alert($('#'+ currentLiId + ' .productPrice').find('#code_fabric_1').text());
	alert($('#'+ currentLiId + ' .productPrice').find('#code_fabric_2').text());*/
	$('div').data('contrastFabric_code',$('#'+ currentLiId + ' .productPrice').find('#Ccode_fabric_1').text());
	$('div').data('contrastFabric_name',$('#'+ currentLiId + ' .productPrice').find('#Ccode_fabric_2').text());

	//alert('contrast Fabric Code :'+$('div').data('contrastFabric_code'));
	//contrast Fabric name $('div').data('contrastFabric_name');
	//contrast Fabric code $('div').data('contrastFabric_code');
}
function showOverallInfo(){

	$('.addto_Overlay').fadeIn();
	$('.addto_Overlay').bind('click',function(){
		//$(this).hide();
	})
	$('#processed').bind('click',function(){
		//$('.addto_Overlay').hide();
		$('#processed a').css({'background':'rgba(0,0,0, .5)','cursor':'no-drop'});
		$('#processed a').html("<img src='images/loading.gif'>");
	});
	can2();
	$('#User_design_name').text(''+$('div').data('Final_design_name'));
	$('#base_fabric_name').text(''+$('div').data('baseFabric_name'));
	$('#base_fabric_code').text(''+$('div').data('baseFabric_code'));
	$('#contrast_fabric_name').text(''+$('div').data('contrastFabric_name'));
	$('#contrast_fabric_code').text(''+$('div').data('contrastFabric_code'));
	$('#sleev_area').text('Sleeve : '+$('div').data('selected_Sleev'));
	$('#emb_area').text('Embriodery : '+$('div').data('Embriodery_Yes_or_no'));

	
}
function can2(){
	     var element = $("#shirt_viewport"); // global variable
         var getCanvas; // global variable
         html2canvas(element, {
         onrendered: function (canvas) {
                //$("#previewImage").append(canvas);
                getCanvas = canvas;
				var imgageData = getCanvas.toDataURL("image/png");
				var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
				$('.prevImg').find('img').attr('src', newData);//.css({'background-image':'url('+newData+')'})

             }

         });


		 }

$('.save2').bind('click',function(){
	$('.addto_Overlay').fadeOut();
	$('.saveOverlay').fadeIn();

});

$('#save_btn').bind('click',function(){
		$('#save_btn_area').html('<h5 style="text-align:center;font-weight:bold;">Saveing.......</h5><img src="images/loading.gif">');
	});

$('.closeIt').bind('click',function(){
	$('.saveOverlay').fadeOut();
});
/*----------------------------------------------------------------------------------
                       			IMAGE CONVERTER
------------------------------------------------------------------------------------*/
// $('#User_design_name').text(''+$('div').data('Final_design_name'));
// 	$('#base_fabric_name').text(''+$('div').data('baseFabric_name'));
// 	$('#base_fabric_code').text(''+$('div').data('baseFabric_code'));
// 	$('#contrast_fabric_name').text(''+$('div').data('contrastFabric_name'));
// 	$('#contrast_fabric_code').text(''+$('div').data('contrastFabric_code'));
// 	$('#sleev_area').text('Sleev : '+$('div').data('selected_Sleev'));
// 	$('#emb_area').text('Embriodery : '+$('div').data('Embriodery_Yes_or_no'));


  //   $(".right_side_bar_btn li a.share").bind('click', function () {
		// can ();
		// //convertImg ();
  //   });

   $(".right_side_bar_btn li a.share").unbind();
function can(){
	var desname = $('div').data('Final_design_name');

	var fabcode_alt = $('div').data('baseFabric_name');

	var confabcode_alt = $('div').data('contrastFabric_name');

	var sleev = $('div').data('selected_Sleev');
	var no_contrast = $('div').data('noContrastSelected');
	
	
	var slim_or_normal = $('div').data('Slim_or_normal'); // same slim or normal

	var measurement_size = $('div').data('measurement_size');

	var rqst_data= $('div').data('Spl_rqst_data');

	var emdtext = $('div').data('Embriodery_text');

	alert(desname+ ' == '+ fabcode_alt +' == '+ confabcode_alt +' == '+ sleev +' == '+ slim_or_normal +' == '+ measurement_size +' == '+ rqst_data +' == '+ emdtext+' == '+no_contrast);


	
    
    
    
	     var element = $("#shirt_viewport"); // global variable
         var getCanvas; // global variable
         html2canvas(element, {
         onrendered: function (canvas) {
                //$("#previewImage").append(canvas);
                getCanvas = canvas;
				var imgageData = getCanvas.toDataURL("image/png");
				var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
				var innerdata = document.getElementById("shirt_viewport").innerHTML;
	 jQuery.ajax({
 url     : 'social_share.php',
 type    : 'POST',
 data    : {innerdata:innerdata,desname:desname,fabcode_alt:fabcode_alt,confabcode_alt:confabcode_alt,sleev:sleev,no_contrast:no_contrast,
           slim_or_normal:slim_or_normal,measurement_size:measurement_size,rqst_data:rqst_data,emdtext:emdtext
           },
 success : function( response){
  if(response){
	//  alert("here");
 // $('.hiddenSpan').text(response);
var linkdsd =  'http://www.facebook.com/sharer.php?s=100&p[url]=www.uniterreneprojects.com/dev/vertical-menswere/customize_shirt.php?id='+response;
$(".fb_link").attr("href",linkdsd);
  }else{

  }
 }
 })
	            $('#img').attr('src', newData);
             }

         });


		 }



function can3(){
	     var element = $("#shirt_viewport"); // global variable
         var getCanvas; // global variable
         html2canvas(element, {
         onrendered: function (canvas) {
                //$("#previewImage").append(canvas);
                getCanvas = canvas;
				var imgageData = getCanvas.toDataURL("image/png");
				var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
				$('#viewport_2').css({'background-image':'url('+newData+')'});//.attr('src', newData);.css({'background-image':'url('+newData+')'})

             }

         });


		 }



		 function view (){

		 		//$('#rangeInput').show();
		//$(this).toggleClass('activeBgForZoom');
		//Santanu
		//alert('test');
		 if (!$(this).hasClass('activeBgForZoom')) {
			//alert("gi");
			$(this).find('img').attr('src', 'images/zoom_active.png');
			$(this).addClass('activeBgForZoom');
        } else  {
			$(this).find('img').attr('src', 'images/zoom.png');
			$(this).removeClass('activeBgForZoom');
			//$('.cycle-slideshow').cycle('resume');
		}

		$('.shirtHolder ul li img').toggleClass('zoom');
		var state = $('.shirtHolder ul li img').hasClass('zoom');
		//alert(state);
		if($('.shirtHolder ul li img').hasClass('zoom') == true){
			$( "#shirt_viewport" ).append('<div class="appendDiv">You Can Drag The Image For Better Experience</div>');
			$( ".appendDiv" ).hide().fadeIn(2000).delay(500).fadeOut();
			$( "#shirtMove" ).css({'transition':'all .6s ease-in-out','position':'relative','cursor':'pointer'}).draggable({
			disabled: false,
			addClasses: false,
			 stop: function(event, ui) {
			 		  // alert(ui.position.top);
			        if(ui.position.top> 200 || ui.position.left> 500)
			        {
			        //alert('Return back');
			        $("#shirtMove").animate({"top": "0px"}, 600);
			        $("#shirtMove").animate({"left": "0px"}, 600);
			        }
			        else if(ui.position.top<-740 ||  ui.position.left<-500)
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
		 }

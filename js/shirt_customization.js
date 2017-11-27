// JavaScript Document
	 $('#btn_up').hide();
	 $('#btn_bottom').hide();
 
 
$(document).ready(function(){	
	
	    
	var stepItemLen = $(".steps_scroll li").length;
	
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
		//for(i=0; i<=stepItemLen;i++){			
		//}
		//$('.steps_scroll li').last().css({'background':'red'});
		
		
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
	
	

/* popup section */	

var winWidth=$(window).width();
var LeftBar=$(".stepsbar_wrapper").width();
var RightBar=$("#right_panel").width();
var popWidth= $(".popup").innerWidth();
var TotalLeftRight= LeftBar+RightBar;
var ShirtViewport = winWidth-TotalLeftRight ;

//showing the popup on click to the left menu 
	$('steps_scroll li').bind('click',showThePopup);
	$('.close').bind('click',closeThePopup);
	
	

$("#shirt_viewport").css({'width':ShirtViewport + "px"} );

$("#design_list").bind('click',function(){
	
	$(".popup").css({"left":"115px"});
	
	var TotalLeftRightPop = LeftBar+RightBar+popWidth;
	console.log('LeftBar :'+LeftBar+' RightBar : '+ RightBar +' and popWidth : '+ popWidth);
	console.log('TotalLeftRightPop :'+TotalLeftRightPop);
     var ShirtViewportWithPop = winWidth-(TotalLeftRightPop); 
	   $("#shirt_viewport").css({'width':(ShirtViewportWithPop) + "px", "transition":"all .5s ease-in"});	   
	});
	
	$(".close").bind('click',function(){
	
	 $("#shirt_viewport").css({'width':ShirtViewport + "px"} );
	});

/* custom scroll bar */
 var $scrollable = $('.scrollable'),
    $scrollbar  = $('.scrollbar'),
    H   = $scrollable.outerHeight(true),
    sH  = $scrollable[0].scrollHeight,
    sbH = H*H/sH;
	console.log('scrollable height ' + H);
	console.log('scrollbar scroll ' + sH);
	console.log('scroll ' + sbH);

 $('.scrollbar').height( sbH ).draggable({
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


/* step scroll add active class */

$('.steps_scroll li').bind('click', function(){
	$('.steps_scroll li.active').removeClass('active');
	$(this).addClass('active');
	});




});<!--end ready-->



//function show the popup

function showThePopup(){
	
}

//Function close the popup

function closeThePopup(){
	 $(".popup").css({"left":"-100%", "transition":"all .5s ease-in"});
}

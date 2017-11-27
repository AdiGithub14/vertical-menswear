$('div').data('ResponsiveWinWidth',$(window).width());

//alert($('div').data('ResponsiveWinWidth'));

if($('div').data('ResponsiveWinWidth') <768){
	//main code here to be written
$('#popups .popup').css({'width':'100%','height':'100%','z-index':'9999999999'});
$('.preload').css({'top':'-10px'});
	
}
if($('div').data('ResponsiveWinWidth') < 500){
			  	var totalW = ($('ul.steps_scroll li').outerWidth(true) + 3)*($('ul.steps_scroll li').length);
			 // alert(($('ul.steps_scroll li').width())*($('ul.steps_scroll li').length));
			 $('ul.steps_scroll').css({'width':totalW+'px'});
			  }
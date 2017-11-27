jQuery(window).load(function() {
   // $("#flexiselDemo1").flexisel();
   jQuery('.menu-button').bind('click',function(){
	  //alert("gdfgft"); 
	  jQuery('.menu-bar').slideToggle();
	   
	   
   });
    jQuery("#flexiselDemo2").flexisel({
        enableResponsiveBreakpoints: true,
		 visibleItems : 1,
		  autoPlay : true,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 1
            },
            tablet: { 
                changePoint:768,
                visibleItems: 1
            }
        }
    });

   jQuery("#flexiselDemo3").flexisel({
        visibleItems: 1,
       animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,            
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 1
            },
            tablet: { 
                changePoint:768,
               visibleItems: 1
           }
        }
    });

    jQuery("#flexiselDemo4").flexisel({
        clone:false
    });
    
});

jQuery(document).ready(function() {
    jQuery('.search').bind("click", function(){
		jQuery('.search_field a').css({'z-index':'99'});
		jQuery('.search_field').show();
		});
		
		jQuery('.search_field a').bind("click", function(){
		jQuery('.search_field').hide();
		});
		
	   var winHeight= jQuery(window).height();
	   //var searchHeight= $('.search_box_inside').height();	
	   
	   var searchPos=winHeight/2;
	   
	   jQuery('.search_box_inside').css({'top':searchPos});
	   
	   var headHeight= jQuery("#header").height();
	   var winHeight=jQuery(document).height();
	   var inbodyHeight= winHeight-headHeight;
	   console.log(winHeight);
	   
	   jQuery(".inner_body").css({'height':inbodyHeight});
	   
	   
	   
/*--------------------------------------------------------------------------------------------
                                         SHARE POP UP	  
--------------------------------------------------------------------------------------------*/										   
	
	// jQuery('#right_panel .share_btn').bind('click', function(){
	// 	  jQuery('.share_overlay').fadeIn();
	// 	});
 //   jQuery('.share_block .share_inner .close_btn').bind('click', function(){
	// 	  jQuery('.share_overlay').fadeOut();
	// 	});
	   
			
});

// shirt customize window height:

var headHeight= jQuery("#header").height();
	   var winHeight=jQuery(window).height();
	   var inbodyHeight= winHeight-headHeight;
	  // console.log(winHeight);
	   
	   jQuery("#viewport").css({'height':inbodyHeight});
	   

	   
	   
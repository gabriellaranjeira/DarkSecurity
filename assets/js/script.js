(function($){
    "use strict";
   //=======================
    //Back to top
    //=======================
    if($("#back_to_top").length > 0)
    {
        var offset = 220;
          $(window).on('scroll', function() {
                if ($(this).scrollTop() > offset) 
                {
                        $("#back_to_top").fadeIn('slow');
                } 
                else 
                {
                        $("#back_to_top").fadeOut('slow');
                }
        });
        $('#back_to_top').click(function(event) {
                event.preventDefault();
                $('html, body').animate({scrollTop: 0}, 800);
                return false;
        }); 
    }
})(jQuery);


(function($) {
    "use strict";
    if($(".dropdown-toggle").length > 0)
    {
        $('.dropdown-toggle').click(function() {
            var location = $(this).attr('href');
            window.location.href = location;
            return false;
        });
    }
})(jQuery);

(function($) {
"use strict";
if($("#second_slider").length > 0)
{
  $("#second_slider").owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 3 seconds 
      items : 3,
      pagination: false,
      navigation: true,
      navigationText: ["",""]
 
  });
}
})(jQuery);

(function($) {
    "use strict";
        if($("#modal_cl").length > 0)
        {
            $("#modal_cl").click(function(){
               $('#testerer').get(0).stopVideo(); 
            });
        }
        
	

        if($(".banner").length > 0)
        {
       $('.banner').revolution(
          {
              delay:5000,
              startheight:580,
              startwidth:1200,
    
              hideThumbs:300,
    
              thumbWidth:158,	
              thumbHeight:108,
              thumbAmount:3,
    
              navigationType:"both",					
              navigationArrows:"verticalcentered",		
              navigationStyle:"round",				
    
              touchenabled:"on",					
              onHoverStop:"on",					
    
              navOffsetHorizontal:200,
              navOffsetVertical:20,
    
              stopAtSlide:-1,
              stopAfterLoops:-1,
    
              shadow:0,						
              fullWidth:"on"					
          });
      }
          if($(".banner2").length > 0)
          {
          $('.banner2').revolution(
          {
              delay:5000,
              startheight:397,
              startwidth:1200,
    
              hideThumbs:300,
    
              thumbWidth:158,	
              thumbHeight:108,
              thumbAmount:3,
    
              navigationType:"both",					
              navigationArrows:"verticalcentered",		
              navigationStyle:"round",				
    
              touchenabled:"on",					
              onHoverStop:"on",					
    
              navOffsetHorizontal:200,
              navOffsetVertical:20,
    
              stopAtSlide:-1,
              stopAfterLoops:-1,
    
              shadow:0,						
              fullWidth:"on"					
          });
      }
        
          		  
          
    })(jQuery);
(function($){
    
"use strict";
    if($("#Grid").length > 0)
    {
        $('#Grid').rmsIt();
    }
    if($("#trending_video").length > 0 || $("#modal_cl").length > 0)
    {
        $("#trending_video,#modal_cl").click(function(){
            $('.PopUPVideo')[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');  
        });
    }

    //==================================
    // Palet js
    //==================================
    if($("#toggle_button").length > 0)
    {
            var tp = true;
            $("#toggle_button").click(function(e){
                e.preventDefault();
                if(tp)
                {
                    $("#themes_panel").animate({'margin-left': '0px'}, 1000);
                    tp = false;
                }
                else
                {
                    $("#themes_panel").animate({'margin-left': '-254px'}, 1000);
                    tp = true;
                }
            });
    }

    if($("#google_map2").length > 0)
    {
        map = new GMaps({
        div: '#google_map2',
        zoom: 0,
        lat: -12.043333,
        lng: -77.028333
        });
    }
})(jQuery);

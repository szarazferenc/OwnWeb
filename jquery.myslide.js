/* - DOCUMENT INFORMATION
------------------------------------------------- 
--	Name: Száraz Ferenc Blog	
--	URL: http://ideas.szarazferenc.hu
--	Author: Száraz Ferenc
--	Author URI: http://szarazferenc.hu
--  Script name: jquery.myslide
--  Version 1.0.2
--  Copyright 2014 Száraz Ferenc @ szarazferenc.hu
--  Licensed under the MIT
--
--  Example:
--     $('#container').myslide({
--        inner: 'span',  //content tag : any valid html tag under div#container - default: div
--        transition_time: 500, // fadeIn/fadeOut time : 400- 1000 maybe - default: 800
--        time_between_slides: 2000, //pause between two transaction : 400- 100000 maybe - default: 6000
--        containerposition: true // page center : true/false - default: false
--     });
--
--      HTML:
--      <script>
--      #container{overflow: hidden;}
--      #container span{display: none; float: left; position: absolute;}
--      </script>
--  
--      <div id="container">
--          <span>line one</span>
--          <span>line two</span>
--          <span>line three</span>
--      </div>
*/


(function( $ ){
    var windowwidth = $(window).width();    
    var windowheight =  $(window).height();
     
    
    $.fn.myslide = function( options ){
        var settings = $.extend({
            inner: "div",
            transition_time: "800",
            time_between_slides: "6000",
            container: this.selector,
            containerposition: false
        }, options );
    var changetime = settings.transition_time + settings.time_between_slides;
        
        function slides() {return $(settings.container).find(settings.inner);}
            slides().fadeOut();
            slides().first().addClass('active');
            if(settings.containerposition){slides().first().css({'left': ((windowwidth - slides().first().width())/2) + 'px'});}
            slides().first().fadeIn(settings.transition_time);
                $interval = setInterval(function() {
                	var $i = $(settings.container).find(settings.inner + '.active').index();
                	slides().eq($i).removeClass('active');
                	slides().eq($i).fadeOut(settings.transition_time);
                	if (slides().length == $i + 1) $i = -1;
                    if(settings.containerposition){slides().eq($i + 1).css({'left': ((windowwidth - slides().eq($i + 1).width())/2) + 'px'});}
                	slides().eq($i + 1).fadeIn(settings.transition_time);
                	slides().eq($i + 1).addClass('active');
                }, changetime);
        
    }
})( jQuery );
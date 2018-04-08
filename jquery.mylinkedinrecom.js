(function( $ ){
    $.fn.mylinkedin_recom = function(){
       
        $('#recombar_ul li:first').before($('#recombar_ul li:last'));  
  
        $('#right_scroll').click(function(){
            var item_width = $('#recombar_ul li').outerWidth()+50;
            console.log('right scroll-item_width: '+item_width)  
            var left_indent = parseInt($('#recombar_ul').css('left')) - item_width;  
            $('#recombar_ul').animate({'left' : left_indent}, 500,function(){  
                $('#recombar_ul li:last').after($('#recombar_ul li:first'));
                $('#recombar_ul').css({'left' : '-485px'});  
            });  
        });  
  
        $('#left_scroll').click(function(){  
            var item_width = $('#recombar_ul li').outerWidth()+50;
            console.log('left scroll-item_width: '+item_width)   
            var left_indent = parseInt($('#recombar_ul').css('left')) + item_width;  
            $('#recombar_ul').animate({'left' : left_indent}, 500,function(){  
            $('#recombar_ul li:first').before($('#recombar_ul li:last'));
            $('#recombar_ul').css({'left' : '-485px'});  
            });  
  
        });  
        
    }
})( jQuery );
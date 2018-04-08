var stay = '';

$.getScript("settings.js", function(){

});

function bgScroll() {
    var scrollDif, lastScrollTop, bgTopOffset_a, bgTopOffset_b, bgOffset, parallax;

    parallax = 5;

    var scroll = function () {
        scrollDif = lastScrollTop - $(document).scrollTop();
        if ($('#fore_bg').css('backgroundPositionY')) {
            bgTopOffset_a = parseInt($('#back_bg').css('backgroundPositionY'));
            bgTopOffset_b = parseInt($('#fore_bg').css('backgroundPositionY'));
        } else {
            bgTopOffset_a = parseInt($('#back_bg').css('backgroundPosition').split(' ')[1]);
            bgTopOffset_b = parseInt($('#fore_bg').css('backgroundPosition').split(' ')[1]);
        }

        bgOffset = scrollDif / parallax;

        if ($('#fore_bg').css('backgroundPositionY')) {
            $('#back_bg').css('backgroundPositionY', bgTopOffset_a + bgOffset + 'px');
            $('#fore_bg').css('backgroundPositionY', bgTopOffset_b + (bgOffset * 2) + 'px');
        } else {
            $('#back_bg').css('backgroundPosition', 'center ' + parseInt(bgTopOffset_a + bgOffset) + 'px');
            $('#fore_bg').css('backgroundPosition', 'center ' + parseInt(bgTopOffset_b + (bgOffset * 2)) + 'px');
        }

        lastScrollTop = $(document).scrollTop();
    }

    $(window).scroll(function () {
        scroll();
    });
}

function myScrollTo(to) {
    $('html,body, #core_container').animate({
        scrollTop: $('#core_content_' + to).offset().top -= 100
    }, 1500, 'easeInOutCirc');
    return false;
}

function mywhereYscroll(){
    var data;
    var home_c = $('#core_home_container').height();
    var about_c = $('#core_about_container').height();
    var cv_c = $('#core_cv_container').height();
    var contact_c = $('#core_contact_container').height();
    
    $(window).scroll(function () {
        data = window.pageYOffset != 'undefined' ? window.pageYOffset: document.documentElement.scrollTop? document.documentElement.scrollTop: document.body.scrollTop? document.body.scrollTop:0;
        if(data<= 50){
            $("#core_header_container").animate({"height" : "150"}, 50, function(){
                $(this).css({"background": "rgb(60, 60, 60)", "border": "none"});
                $("#logo").attr({
                    src : "image/logo.png",
                    width: "200",
                    height: "81"
                });                
            })
        }
        else
        {
            $("#core_header_container").animate({"height" : "100"}, 50, function(){
                $(this).css({"background": "rgb(50, 50, 50)"});
                $("#logo").attr({
                    src : "image/logo_mini.png",
                    width: "149",
                    height: "56"
                });
            })
        }
        var home_border = home_c;
        var about_border = home_c+about_c;
        var cv_border = home_c+about_c+cv_c;
        var pushstat
        
            if(data<home_border){
                pushstat="#home";
            }
            else if( (home_border<data) && (data<about_border) ){
                pushstat="#about";
            }
            else if( (about_border<data) && (data<cv_border) ){
                pushstat="#cv";
            }
            else if(cv_border<data){
                pushstat="#contact";
            }
            
            window.history.pushState(null, window.title, window.location.pathname+pushstat);
    });

    


}

function mypagehight(){
    var pageheight = $(window).height()-120;
    var homepageheight = $(window).height()-$('#line_wtob').height()-150;
    $('#core_content_home').css({"min-height": pageheight})
    $('#core_content_about').css({"min-height": pageheight})
    $('#core_content_cv').css({"min-height": pageheight})
    $('#core_content_contact').css({"min-height": pageheight})
    return false;
}

$(document).ready(function () {
    $(window).scroll(function(){
        scroll_data = window.pageYOffset != 'undefined' ? window.pageYOffset: document.documentElement.scrollTop? document.documentElement.scrollTop: document.body.scrollTop? document.body.scrollTop:0;
      $("#core_footer_techinfo").css('top', (scroll_data+( ($(window).height()/2) - ($("#core_footer_techinfo").height()/2)) ) + 'px');
      
    });
    

     $("html").niceScroll({
         styler: "fb",
         cursorwidth: "6px",
         cursorborder: "0px",
         cursorcolor: "#ffffff",
         cursoropacitymin: ".05",
         zindex: "9999",
         spacebarenabled: false
     });
     
     $("#contact_message").niceScroll({
         styler: "fb",
         cursorwidth: "6px",
         cursorborder: "0px",
         cursorcolor: "#323232",
         cursoropacitymin: ".05",
         zindex: "9999",
         spacebarenabled: false
     });
     
    $('#core_about_productivitystat').myslide({
        inner: 'div',
        transition_time: 800,
        time_between_slides: 8000,
    });
    $('.line3').myslide({
        inner: 'span',
        transition_time: 800,
        time_between_slides: 6000,
        //containerposition: 'center'
    });
    
    $('#about_inspire_box').myslide({
      inner: 'div',
      transition_time: 400,
      time_between_slides: 15000,
      //containerposition: 'center'
    });
      
    $('#recombar_ul').mylinkedin_recom();

    
    var hash = window.location.href.split('#');
    var to = hash[1];
    if (hash[1] == undefined) {
        to = 'home'
    }

    mypagehight();
    myScrollTo(to);
    bgScroll();
    mywhereYscroll();

    $(".core_cv_content_yellowhead").lettering();
});

$("#core_page_headlogo").click(function(){
    myScrollTo("home");
})

$('#core_head_menu').on('click', 'a', function () {
    var hash = $(this).attr('href').split('#');
    myScrollTo(hash[1]);
});

$('#about_inspire_box img').click(function(){
    $("#about_inspire_collector").show();
    $("#about_inspire_box").hide();
});

$('#about_inspire_collector').mouseleave(function(){
    $("#about_inspire_box").show();
    $("#about_inspire_collector").hide();
});

$('.collector_image').click(function(){
    var container = $('#about_inspire_box'); a = this.id; b = container.find('div.active').index();
    function inspire() {return container.find('div');}
    inspire().eq(b).removeClass('active');
    inspire().eq(b).fadeOut();
    inspire().each(function(i){
        if($(this).attr('who')== a){
            inspire().eq($(this).index()).addClass('active');
            inspire().eq($(this).index()).fadeIn();
            }
    });
    container.show();
    $("#about_inspire_collector").hide();
});

function colorize_form(formname, error){
    if(error==1){ $(formname).css({"background-color": "red"},1000); }
    else if(error==0){ $(formname).css({"background-color": "#E2E2E2", "border": "#E2E2E2 1px solid"}, 1000); }
}

var cn = $("#contact_name");
var ce = $("#contact_email");
var cm = $("#contact_message");
var yn = 'Your name';
var ye = 'Your email address';
var ym = 'What would you like to say to me?';

cn.blur(function() {
    var value = $(this).html();
    if( value.match(/[a-z,A-Z, ]{5,}/)==null && value!=""){colorize_form(this, 1);}
    else if(value==yn){colorize_form(this, 0);}
    else if(value==""){colorize_form(this, 0); $(this).html(yn);}
    else{colorize_form(this, 0);}
});
cn.click(function(){if($(this).html()==yn){$(this).html("");}});
cn.focusin(function(){if($(this).html()==yn){$(this).html("");}});
cn.keypress(function(bill) { if(bill.keyCode == 13 && !$(this).data('multiline')) { return false; } });

ce.blur(function() {
    var value = $(this).html();
    if(value==ye){colorize_form(this, 0);}
    else if( value.match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i)==null && value!=""){colorize_form(this, 1);}
    else if(value==""){colorize_form(this, 0); $(this).html(ye);}
    else{colorize_form(this, 0);}
});
ce.click(function(){if($(this).html()==ye){$(this).html("");}});
ce.focusin(function(){if($(this).html()==ye){$(this).html("");}});
ce.keypress(function(bill) { if(bill.keyCode == 13 && !$(this).data('multiline')) { return false; } });

cm.blur(function() {
    var value = $(this).html();
    if( value.match(/[a-zA-Z0-9!,\.-//\()_ ]{4,}/)==null && value!=""){colorize_form(this, 1);}
    else if(value==ym){colorize_form(this, 0);}
    else if(value==""){colorize_form(this, 0); $(this).html(ym);}
    else{colorize_form(this, 0);}
});
cm.click(function(){if($(this).html()==ym){$(this).html("");}});
cm.focusin(function(){if($(this).html()==ym){$(this).html("");}});

$('#contact_sendbtn').click(function(){
    var formData = [], v_in_name=0, v_in_email=0, v_in_message=0;
    if(cn.html().match(/[a-z,A-Z, ]{5,}/)!=null ){v_in_name=1; formData.push({name : 'contact_name', value : cn.html()});}
    if(ce.html().match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i)!=null){v_in_email=1; formData.push({name : 'contact_email', value : ce.html()});}
    if(cm.html().match(/[a-zA-Z0-9!,\.-//\()_ ]{4,}/)!=null){v_in_message=1; formData.push({name : 'contact_message', value : cm.html()});}

     if(v_in_name==1 && v_in_email==1 && v_in_message==1){
        $('#cfwait').show();
      $.ajax(
         {
         	url : "wortex_89_message.php?do=corecontact",
             type: "POST",
             data : formData,
         }).done(function(data, textStatus, jqXHR) 
         {
             if(textStatus=="success" && data=="1"){
                 cn.html(yn);
                 ce.html(ye);
                 cm.html(ym);
                 
                 $("#core_contact_form").slideUp();
                 $('#cfwait').hide();
                 $("#ccfsuccess").slideDown(1500, function(){
                     $("#ccfsuccess").delay(3500).slideUp(1500, function(){
                         $("#core_contact_form").slideDown(1500);
                     });
                 });
             }
             else
             {
                 $('#cfwait').hide();
                 $("#core_contact_form").slideUp();
                 $("#ccferror").slideDown(1500);
             }
         }).fail(function(jqXHR, textStatus, errorThrown) {
                 $('#cfwait').hide();
                 $("#core_contact_form").slideUp();
                 $("#ccferror").slideDown(1500, function(){
                     $("#ccferror").delay(3500).slideUp(1500, function(){
                         $("#core_contact_form").slideDown(1500);
                     });
                 });
             } );
     }
     else
     {
         $('#cfwait').hide();
         $("#core_contact_form").slideUp();
         $("#ccffail").slideDown(1500, function(){
             $("#ccffail").delay(3500).slideUp(1500, function(){
                 $("#core_contact_form").slideDown(1500);
             });
         });
         
     }
});

$('#core_footer_about').click(function(){
    $('#core_footer_techinfo').show();
});

$('#techinfo_close').click(function(){
    $('#core_footer_techinfo').hide();
});

$('#topofthepage').click(function(){
    window.history.pushState(null, null, window.location.pathname+'#home');
    $('html, body').animate({ scrollTop: 0 }, 'slow');    
});
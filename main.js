$(document).ready(function () {
     $("#6d657373616765").niceScroll({
         styler: "fb",
         cursorwidth: "6px",
         cursorborder: "0px",
         cursorcolor: "#323232",
         cursoropacitymin: ".05",
         zindex: "9999",
     });
     $('#main_footer_productivitystat').myslide({
        inner: 'div',
        transition_time: 700,
        time_between_slides: 3000,
    });
    visit_mymainpage();
});

var cn = $("#6e616d65"), ce = $("#656d61696c"), cm = $("#6d657373616765"), pk = $("#passkey");
var yn = cn.html(), ye = ce.html(), ym = cm.html(), ypk = pk.html();
var cn_pattern = /[a-z,A-Z, ]{5,}/;
var ce_pattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
var cm_pattern = /[a-zA-Z0-9!,\.-/%!/\()_ ]{4,}/;

function opa (a,b){$( "#contact_box" ).animate({opacity: a}, b, "linear" );}


$( "#main_footer_contact" ).click(function() {$( "#contact_box" ).toggle( 1000, "easeInOutQuint" ); opa(0.8,500); });
$( "#main_page_container" ).click(function() {$( "#contact_box" ).hide( 1000, "easeInOutQuint" ); opa(0.8,500); });
$("#contact_box").click(function() {opa(1,500);});

pk.click(function() {
    var passkey_data = $(this).html();
  if(passkey_data==ypk){$(this).html("");}
});

pk.focusout(function() {
  if($(this).html()==""){$(this).html(ypk);}
});

pk.keyup(function() {
    var value = $(this).html();
    if( value.match(/[a-z,A-Z,0-9]{5}/)!=null)
    {
    $(this).html('');  
    $.get( "backend_log_system.php?action=passkey_" + value);
    $( "body" ).animate({opacity: 0.00}, 1000, function() {pk.val(""); window.location.href = 'http://'+window.location.hostname+'/'+value;});
    }
});

function colorize_form(formname, error){
    if(error==1){ $(formname).css({"background-color": "red"},1000); }
    else if(error==0){ $(formname).css({"background-color": "#FFFFFF", "border": "#E2E2E2 1px solid"}, 1000); }
}

cn.blur(function() {
    var value = $(this).html();
    if( value.match(cn_pattern)==null && value!=""){colorize_form(this, 1);}
    else if(value==yn){colorize_form(this, 0);}
    else if(value==""){colorize_form(this, 0); $(this).html(yn);}
    else{colorize_form(this, 0);}
});
cn.click(function(){if($(this).html()==yn){$(this).html("");}});
cn.focusin(function(){if($(this).html()==yn){$(this).html("");}});
cn.keypress(function(bill) {value = $(this).html(); if(bill.keyCode == 13 && !$(this).data('multiline')){ return false; }});
cn.keyup(function(){ if($(this).html().match(cn_pattern)!=null){colorize_form(this, 0);} });

ce.blur(function() {
    var value = $(this).html();
    if(value==ye){colorize_form(this, 0);}
    else if( value.match(ce_pattern)==null && value!=""){colorize_form(this, 1);}
    else if(value==""){colorize_form(this, 0); $(this).html(ye);}
    else{colorize_form(this, 0);}
});
ce.click(function(){if($(this).html()==ye){$(this).html("");}});
ce.focusin(function(){if($(this).html()==ye){$(this).html("");}});
ce.keypress(function(bill) { value = $(this).html(); if(bill.keyCode == 13 && !$(this).data('multiline')) { return false; }});
ce.keyup(function(){ if($(this).html().match(ce_pattern)!=null){colorize_form(this, 0);} });

cm.blur(function() {
    var value = $(this).html();
    if( value.match(cm_pattern)==null && value!=""){colorize_form(this, 1);}
    else if(value==ym){colorize_form(this, 0);}
    else if(value==""){colorize_form(this, 0); $(this).html(ym);}
    else{colorize_form(this, 0);}
});
cm.click(function(){if($(this).html()==ym){$(this).html("");}});
cm.focusin(function(){if($(this).html()==ym){$(this).html("");}});
cm.keyup(function(){ if($(this).html().match(cm_pattern)!=null){colorize_form(this, 0);} });



$("#sendbtn").click(function(){
    console.log("click megvolt");
    var formData = [], v_6e616d65=0, v_656d61696c=0, v_6d657373616765=0;
    if(cn.html().match(/[a-z,A-Z, ]{5,}/i)!=null ){v_6e616d65=1; formData.push({name : '6e616d65', value : cn.html()});}
    if(ce.html().match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i)!=null ){v_656d61696c=1; formData.push({name : '656d61696c', value : ce.html()});}
    if(cm.html().match(/[a-zA-Z0-9!,\.-/%!/\()_ ]{4,}/i)!=null){v_6d657373616765=1; formData.push({name : '6d657373616765', value : cm.html()});}
    console.log(formData);
    console.log(v_6e616d65+v_656d61696c+v_6d657373616765);

    if(v_6e616d65==1 && v_656d61696c==1 && v_6d657373616765==1){
     $.ajax(
        {
        	url : "wortex_89_message.php?do=contact",
            type: "POST",
            data : formData,
        }).done(function(data, textStatus, jqXHR) 
        {
            console.log(data+";"+textStatus)
            if(textStatus=="success" && data=="1"){
                cn.html(yn);
                ce.html(ye);
                cm.html(ym);
                $("#cfdiv").hide();
                $("#cfsuccess").show(2000, function(){
                    $("#cfsuccess").hide( 1000, "easeInOutQuint", function(){
                        $("#cfdiv").show(10, function(){
                            opa(0.8,400);
                            $( "#contact_box" ).hide( 400, "easeInOutQuint" );
                        }); 
                    });
                });
                
                
                   
            }
        }).fail(function(jqXHR, textStatus, errorThrown) {}
    );
    }
    else
    {
        $("#cfdiv").hide();
        $("#cffail").show(2000, function(){
            $("#cffail").hide( 3000, "easeInOutQuint", function(){
                $("#cfdiv").show( 1000, "easeInOutQuint");
            });
        });
    }
    
    
});

function visit_mymainpage(){
    var a = 'mainpagevisit';
      $.ajax(
         {
         	url : "wortex_89_message.php?do=visitmainpage",
             type: "POST",
             data : a,
         }).done(function(data, textStatus, jqXHR){}).fail(function(jqXHR, textStatus, errorThrown){});
}


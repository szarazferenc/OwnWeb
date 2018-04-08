$('#autofeltolt').click(function(){
    $("#singup_name").html('Teszt Elek');
    $("#singup_email").html('teszt@elek.hu');
    $("#singup_corpname").html('CorpNameThisIs');
    $("#singup_web").html('http://www.domail.hu');
    $("#singup_message").html('Na ez itt a teszt üzenet');
});

$(document).ready(function () {
    $("html").niceScroll({
        styler: "fb",
        cursorwidth: "6px",
        cursorborder: "0px",
        cursorcolor: "#ffffff",
        cursoropacitymin: ".05",
        zindex: "9999"
    });
         $("#singup_message").niceScroll({
         styler: "fb",
         cursorwidth: "6px",
         cursorborder: "0px",
         cursorcolor: "#323232",
         cursoropacitymin: ".05",
         zindex: "9999",
         spacebarenabled: false
     });
});

$("#passkey").click(function() {
    var passkey_data = $(this).val();
  if(passkey_data=="your passkey"){
    $(this).val("");
  }
});

$("#passkey").focusout(function() {
    var passkey_data = $(this).val();
  if(passkey_data==""){
    $(this).val("Your passkey");
  }
});

$("#passkey").keyup(function() {
    var value = $(this).val();
    if( value.match(/[a-z,A-Z,0-9]{5}/)!=null)
    {
        $(this).val('');
        $.get( "backend_log_system.php?action=passkey_" + value);
    $( "body" ).animate({opacity: 0.01}, 1000, function() {$("#passkey").val("Your passkey"); window.location.href = 'http://'+window.location.hostname+'/'+value;});
    }
});

$('#unreg_singup').click(function(){
    $('#unregistred_notice').hide();
    $('#singupform').show();
});

$('#unreg_goback').click(function(event){
    event.preventDefault();
    history.back(1);
});

function colorize_form(formname, error){
    if(error==1){ $(formname).css({"background-color": "red"},1000); }
    else if(error==0){ $(formname).css({"background-color": "#E2E2E2", "border": "#E2E2E2 1px solid"}, 1000); }
}

var sn = $("#singup_name"), se = $("#singup_email"), scn = $("#singup_corpname"), sw = $("#singup_web"), sm = $("#singup_message");
var yn = 'Your name', ye = 'Your email address', ycn = 'Company/Organization', yw = 'Website', ym = 'Please describe in a few words why are you want passkey.';

sn.blur(function() {
    var value = $(this).html();
    if( value.match(/[a-z,A-Z, ]{5,}/)==null && value!=""){colorize_form(this, 1);}
    else if(value==yn){colorize_form(this, 0);}
    else if(value==""){colorize_form(this, 0); $(this).html(yn);}
    else{colorize_form(this, 0);}
});
sn.click(function(){if($(this).html()==yn){$(this).html("");}});
sn.focusin(function(){if($(this).html()==yn){$(this).html("");}});
sn.keypress(function(bill) { if(bill.keyCode == 13 && !$(this).data('multiline')) { return false; } });

se.blur(function() {
    var value = $(this).html();
    if(value==ye){colorize_form(this, 0);}
    else if( value.match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i)==null && value!=""){colorize_form(this, 1);}
    else if(value==""){colorize_form(this, 0); $(this).html(ye);}
    else{colorize_form(this, 0);}
});
se.click(function(){if($(this).html()==ye){$(this).html("");}});
se.focusin(function(){if($(this).html()==ye){$(this).html("");}});
se.keypress(function(bill) { if(bill.keyCode == 13 && !$(this).data('multiline')) { return false; } });

scn.blur(function() {
    var value = $(this).html();
    if( value.match(/[a-z,A-Z, ]{5,}/)==null && value!=""){colorize_form(this, 1);}
    else if(value==ycn){colorize_form(this, 0);}
    else if(value==""){colorize_form(this, 0); $(this).html("");}
    else{colorize_form(this, 0);}
});
scn.click(function(){if($(this).html()==ycn){$(this).html("");}});
scn.focusin(function(){if($(this).html()==ycn){$(this).html("");}});
scn.keypress(function(bill) { if(bill.keyCode == 13 && !$(this).data('multiline')) { return false; } });

sw.blur(function() {
    var value = $(this).html();
    if(value=="http://" || value=="https://"){colorize_form(this, 0); $(this).html(yw);}
    else if( value.match(/^http(s)?:\/\/(www\.)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/)==null && value!=""){colorize_form(this, 1);}
    else if(value==yw){colorize_form(this, 0);}
    else if(value==""){colorize_form(this, 0); $(this).html(yw);}
    else{colorize_form(this, 0);}
});
sw.click(function(){if($(this).html()==yw){$(this).html("http://");}});
sw.focusin(function(){if($(this).html()==yw){$(this).html("http://");}});
sw.keypress(function(bill) { if(bill.keyCode == 13 && !$(this).data('multiline')) { return false; } });

sm.blur(function() {
    var value = $(this).html();
    if( value.match(/[a-zA-Z0-9!,\.-/%!/\()_ ]{4,}/)==null && value!=""){colorize_form(this, 1);}
    else if(value==ym){colorize_form(this, 0);}
    else if(value==""){colorize_form(this, 0); $(this).html(ym);}
    else{colorize_form(this, 0);}
});
sm.click(function(){if($(this).html()==ym){$(this).html("");}});
sm.focusin(function(){if($(this).html()==ym){$(this).html("");}});


$("#unreg_submit").click(function(){
    var formData = [], v_in_name=0, v_in_email=0, v_in_corpname=0, v_in_corpwebpage=0, v_in_message=0;
    if(sn.html().match(/[a-z,A-Z, ]{5,}/i)!=null ){v_in_name=1; formData.push({name : 'singup_name', value : sn.html()});}
    if(se.html().match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i)!=null ){v_in_email=1; formData.push({name : 'singup_email', value : se.html()});}
    if(scn.html().match(/[a-z,A-Z, ]{5,}/i)!=null || scn.html()=="" ){v_in_corpname=1; formData.push({name : 'singup_corpname', value : scn.html()});}
    if(sw.html().match(/^http(s)?:\/\/(www\.)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/i)!=null || sw.html()== yw ){v_in_corpwebpage=1; formData.push({name : 'singup_web', value : sw.html()});}
    if(sm.html().match(/[a-zA-Z0-9!,\.-/%!/\()_ ]{4,}/i)!=null){v_in_message=1; formData.push({name : 'singup_message', value : sm.html()});}

    if(v_in_name==1 && v_in_email==1 && v_in_corpname==1 && v_in_corpwebpage==1 && v_in_message==1){
        $('#sfwait').show();
     $.ajax(
        {
        	url : "wortex_89_message.php?do=passkeyreq",
            type: "POST",
            data : formData,
        }).done(function(data, textStatus, jqXHR) 
        {
            if(textStatus=="success" && data=="1"){
                $("#singupform").hide();
                $('#sfwait').hide();
                $("#sfsuccess").fadeIn(400);
                $( "body" ).delay(3000).animate({opacity: 0.01}, 1000, function() {window.location.href = 'http://'+window.location.hostname;});
                
            }
        }).fail(function(jqXHR, textStatus, errorThrown) {});
    }
    else
    {
        $("#sfwait").hide();
        $("#singupform").hide();
        $("#sffail").fadeIn(400).delay(2000);
        $("#sffail").fadeOut(2000, function(){
            $("#sffail").hide(3000, function(){
                $("#singupform").fadeIn(700);
            });
        });
    }
    
    
});
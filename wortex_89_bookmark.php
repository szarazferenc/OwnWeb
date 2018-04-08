<?php

/**
 * @author Szaraz Ferenc
 * @copyright 2014
 */

?>

<style>
#bookmark_notice{display: none; position:absolute; top: 40%; left: 15%; background-color: rgb(54,54,54); z-index: 99; width: 70%; margin: 0 auto 0 auto; padding: 20px 20px; border: rgb(67,67,67) 1px solid; border-radius: 6px; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; filter:alpha(opacity= 99); opacity: 0.99; -moz-opacity:0.99;}
#bookmark_notice_ok{width: 100px; height: 25px; background-color: rgb(153, 153, 153); font-size: 16px; cursor: pointer; border-radius: 6px; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; padding: 2px 0 2px 0; color: #FFFFFF;}

#bookmark_warning{display: none; position:absolute; top: 10%; left: 15%; background-color: rgb(255,0,0); z-index: 99; width: 70%; margin: 0 auto 0 auto; padding: 20px 20px; border: rgb(67,67,67) 1px solid; border-radius: 6px; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; filter:alpha(opacity= 99); opacity: 0.99; -moz-opacity:0.99; color: rgb(0,0,0);}
#bookmark_warning_ok{width: 100px; height: 25px; background-color: rgb(153, 153, 153); font-size: 16px; cursor: pointer; border-radius: 6px; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; padding: 2px 0 2px 0; color: #FFFFFF;}


</style>
<div id="bookmark_notice">
    <table cellpadding="10" style="width: 100%;">
        <tr>
	       <td style="width: 50%; height: auto; vertical-align: text-top; text-align: justify; text-justify: distribute;"><span class="notice_warning">Tájékoztató</span><br /><br />A böngésződ sajnos nem támogatja az automatikus kedvencekhez adást. Nyomd meg a CTRL+D (Apple gépeken a Command+D) billentyűkombinációt <ins>miután</ins> az OK gombra kattintottál.<br />Köszönöm a megértésed.</td>
	       <td style="width: 50%; height: auto; vertical-align: text-top; text-align: justify; text-justify: distribute;"><span class="notice_warning">Notice</span><br /><br />Your browser does not support auto bookmark.<br />Press CTRL+D to bookmark (Command+D for Apple) <ins>after</ins> you click OK<br />Thank you for your understanding.</td>
        </tr>
    </table>
    <br /><br />
    <div id="bookmark_notice_ok"><center>OK</center></div>
</div>

<div id="bookmark_warning">
    <table cellpadding="10" style="width: 100%;">
        <tr>
	       <td style="width: 50%; height: auto; vertical-align: text-top; text-align: justify; text-justify: distribute;"><span class="notice_warning">Figyelem!</span><br /><br />Kérlek csak az OK gomb megnyomása után használd a CTRL+D billentyűkombinációt a kedvencekhez adáshoz.<br />Köszönöm a megértésed.</td>
	       <td style="width: 50%; height: auto; vertical-align: text-top; text-align: justify; text-justify: distribute;"><span class="notice_warning">Warning</span><br /><br />Please, first press the OK button and after use the CTRL+D shortcut.<br />Thank you for your understanding.</td>
        </tr>
    </table>
    <br /><br />
    <div id="bookmark_warning_ok"><center>Értem!</center></div>
</div>

<script>
$.ctrl = function(key, callback, args) {
    var isCtrl = false;
    $(document).keydown(function(e) {
        if(!args) args=[];        
        if(e.ctrlKey) isCtrl = true;
        if(e.keyCode == key.charCodeAt(0) && isCtrl) {
            callback.apply(this, args);
            return false;
        }
    }).keyup(function(e) {
        if(e.ctrlKey) isCtrl = false;
    });        
};


$(document).ready(function(){
        $("#bookmark_notice").slideDown(600);
        $.ctrl('D', function(s,b) {$(s).show(); $(b).hide();}, ['#bookmark_warning', '#bookmark_notice_ok']);
  
});

$('#bookmark_notice_ok').click(function(){
    $("#bookmark_notice").hide();
    window.location.href = '<?php echo $_SERVER['SERVER_NAME']; ?>';
});

$('#bookmark_warning_ok').click(function(){
    $("#bookmark_warning").hide();
    $('#bookmark_notice_ok').show();
});

</script>
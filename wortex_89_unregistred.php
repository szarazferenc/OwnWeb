<?php

/**
 * @author Szaraz Ferenc
 * @copyright 2014
 */
?>

<div id="unreg_page_container">
    <div id="unreg_header">
        <div id="main_logo"><img src="image/logo.png" width="160" height="66" /></div>
        
    </div>
    <div id="unreg_body_content">
    <div id="unregistred_notice">
         <?php if(isset($_SESSION['unreg_passkey'])){echo"Your passkey:'".$_SESSION['unreg_passkey']."' is unregistered!<br />";} ?>Please type a valid passkey!<br />
            <input type="text" id="passkey" value="your passkey" class="unreg_passkey_input"/>
            <div id="unreg_yellow">OR</div>
            <div id="unreg_singup">Sing up</div>
            <div id="unreg_yellow">OR</div>
            <div id="unreg_goback">Go back</div>
        </div>
        <div id="singupform">
        <div id="sfwait">Sending in progress.</div>
        Please fill this form below for the passkey
            <table style="width: 100%;" cellpadding="2" cellspacing="2">
                <tr>
                    <td>
                        <table style="width: 100%;" cellpadding="2" cellspacing="2">
                            <tr>
                                <td style="width: 50%;">
                                    <div id="singup_name" class="singup_form_input" contenteditable="true">Your name</div>
                                </td>
                                <td style="width: 50%;">
                                    <div id="singup_email" class="singup_form_input" contenteditable="true">Your email address</div>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 50%;">
                                    <div id="singup_corpname" class="singup_form_input" contenteditable="true">Company/Organization</div>
                                </td>
                                <td style="width: 50%;">
                                    <div id="singup_web" class="singup_form_input" contenteditable="true">Website</div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                    <div  id="singup_message" class="singup_form_textarea" contenteditable="true">Please describe in a few words why are you want passkey.</div>
                    </td>
                </tr>
            </table>
            <div id="unreg_submit">Send</div>
            <?php //<div id="autofeltolt">UP!</div>  ?>
            <div id="unreg_form_text">Thank you for your interest. When you sign up, you won't get instant access to my site.<br />I'll write you a message soon.</div>
        </div>
        <div id="sfsuccess">Your request was sent!<br /> I'll write you a message soon.</div>
        <div id="sffail">Please fill the fields correctly!<br /><br />Try again!</div>
        </div>    
</div>
<div id="unreg_footer">
    <table id="main_footer_table">
        <tr>
	       <td style="width: 100%; text-align: center; vertical-align: central;">
           <div id="main_footer_copyright">
                        © 2013 Száraz Ferenc | szarazferenc.hu - All Rights Reserved.<br />"Copyright is for losers&copy;&trade;" Banksy
           </div>
        </tr>
    </table>
</div>


<script src="unreg.js"></script>
<?php 
unset($_SESSION['unreg_passkey']); 
?>
<?php

/**
 * @author Szaraz Ferenc
 * @copyright 2014
 */

echo"<div id=\"main_page_container\">
    <div id=\"main_header\">
        <div id=\"main_logo\"><!-- <img src=\"image/logo.png\" width=\"160\" height=\"66\" /> --></div>
        <div id=\"main_available\"><!-- aval --></div>
    </div>

    <div id=\"main_body_content\">
    <div id=\"main_body_banner\">
<img src=\"image/banner.jpg\" width=\"820\" height=\"296\" />
    </div>
    <div id=\"main_body_text\">
        <table id=\"main_textarea\">
            <tr>
                <td>
                    <div class=\"main_textarea_text_left\"><div class=\"main_textarea_head\">Who I Am</div>My name is Ferenc SZÁRAZ. I am a project manager, business analyst and online channel specialist, creative thinker and self-starter man who likes working hard in a team to achieve a target.</div>
                </td>
                <td>
                    <div class=\"main_textarea_text_center\"><div class=\"main_textarea_head\">What I Do</div>I help the team to do the best work that they can do, make everyone’s job as productive and stress free as possible.</div>
                </td>
                <td>
                    <div class=\"main_textarea_text_right\"><div class=\"main_textarea_head\">Why I Do It</div>I like finding solutions for problems that have not been solved, or that just need a fresher or more simplified solution. I have a good eye for detail, and a passion for innovation together with a strong commercial awareness.</div>
                </td>
            </tr>
        </table>
        <div id=\"main_body_passkey_text\">If you would like to see my CV and other details, please type your personal passkey!<br />
        <div id=\"passkey\" class=\"main_body_passkey_input\" contenteditable=\"true\">passkey</div>
        </div>
    </div>

    
    </div>
</div>
<div id=\"contact_box\">
    <div id=\"cfdiv\">
        <div class=\"contact_box_head\">Question, comment or request? Send me a note.</div>
        <div id=\"6e616d65\" class=\"contact_in\" contenteditable=\"true\">Your name</div>
        <div id=\"contact_box_space\"></div>
        <div id=\"656d61696c\" class=\"contact_in\" contenteditable=\"true\">Your email address</div>
        <div id=\"contact_box_space\"></div>
        <div id=\"6d657373616765\" class=\"contact_text\" contenteditable=\"true\">What would you like to say to me?</div>
        <div id=\"sendbtn\" class=\"contact_btn\">Send</div>
    </div>
    <div id=\"cfsuccess\"><span class=\"contact_box_head\"><p align=\"center\">Thanks for your message!</p></span></div>
    <div id=\"cffail\"><span class=\"contact_box_head\"><p align=\"center\">Please fill the fields correctly!<br /><br />Try again!</p></span></div>
</div>

<div id=\"main_footer\">
    <table id=\"main_footer_table\">
            <tr>
                <td style=\"width: 30%;\">
                    <div id=\"main_footer_contact\">
                        <img src=\"image/message.png\" title=\"Contact\" width=\"23\" height=\"26\" />
                            <span class=\"title\">Contact</span>
                    </div>
                </td>
                <td style=\"width: 40%;\">
                    <div id=\"main_footer_copyright\">&copy; 2015 Száraz Ferenc | szarazferenc.hu - All Rights Reserved.<br />\"Copyright is for losers&copy;&trade;\" Banksy
                    </div>
                </td>
                <td valign=\"top\" style=\"width: 30%;\">
                    <div id=\"main_footer_productivitystat\"> 
                                <div title=\"Workday+night worked in this year\">
                                    <img src=\"image/dataimages/bman.png\" width=\"19\" height=\"21\" />
                                    <span class=\"counter\">".workdaycalc()."</span>
                                    <span class=\"title\">day</span>
                                </div>
                                <div title=\"595 email+message written in this year\">
                                    <img src=\"image/dataimages/mail.png\" width=\"19\" height=\"21\" />
                                    <span class=\"counter\">".emailwrittencalc(1)."</span>
                                    <span class=\"title\"> mail</span>
                                </div>
                                <div title=\"pizza slice enjoyed in this year\">
                                    <img src=\"image/dataimages/pizza.png\" width=\"19\" height=\"21\" />
                                    <span class=\"counter\">".pizzapastacalc()."</span>
                                    <span class=\"title\"> slice</span>
                                </div>
                                <div title=\"coffee+energy drink killed in this year\">
                                    <img src=\"image/dataimages/coffee.png\" width=\"19\" height=\"21\" />
                                    <span class=\"counter\">".coffeeenergydrinkcalc()."</span>
                                    <span class=\"title\"> cup</span>
                                </div>
                                <div title=\"sunnyside eggs eaten in this year\">
                                    <img src=\"image/dataimages/ssegg.png\" width=\"19\" height=\"21\" />
                                    <span class=\"counter\">".eggcalc()."</span>
                                    <span class=\"title\"> eggs</span>
                                </div>
                                <div title=\"contact lens used in this year\">
                                    <img src=\"image/dataimages/lens.png\" width=\"19\" height=\"21\" />
                                    <span class=\"counter\">".lenscalc()."</span>
                                    <span class=\"title\"> lens</span>
                                </div>
                                <div title=\"UFO seen in this year\">
                                    <img src=\"image/dataimages/alien.png\" width=\"19\" height=\"21\" />
                                    <span class=\"counter\">".aliencalc()."</span>
                                    <span class=\"title\"> seen</span>
                                </div>
                                <div title=\"14 767 megajules (MJ) power used in this year\">
                                    <img src=\"image/dataimages/energy.png\" width=\"19\" height=\"21\" />
                                    <span class=\"counter\">".powercalc(1)."</span>
                                    <span class=\"title\"> J</span>
                                </div>
                                <div title=\"chocolate bar aten in this year\">
                                    <img src=\"image/dataimages/chocolatebar.png\" width=\"19\" height=\"21\" />
                                    <span class=\"counter\">".chocolatebarcalc()."</span>
                                    <span class=\"title\"> bar</span>
                                </div>
                                <div title=\"5 600 kilometres traveled by train in this year\">
                                    <img src=\"image/dataimages/train.png\" width=\"19\" height=\"21\" />
                                    <span class=\"counter\">".trainkmcalc(1)."</span>
                                    <span class=\"title\"> km</span>
                                </div>
                    </div>
                </td>
            </tr>
        </table>
</div>";
?>

<script src="main.js"></script>
<script src="jquery.myslide.js"></script>

<?php

/**
 * @author Szaraz Ferenc
 * @copyright 2014
 */

$productivitystat[0]['title']="Workday+night worked in this year";
$productivitystat[0]['image']="bman.png";
$productivitystat[0]['counter']= workdaycalc();
$productivitystat[0]['counter_title']= " day";

$productivitystat[1]['title']= emailwrittencalc(0)." email+message written in this year";
$productivitystat[1]['image']="mail.png";
$productivitystat[1]['counter']= emailwrittencalc(1);
$productivitystat[1]['counter_title']= " mail";

$productivitystat[2]['title']="Pizza and pasta enjoyed in this year";
$productivitystat[2]['image']="pizza.png";
$productivitystat[2]['counter']= pizzapastacalc();
$productivitystat[2]['counter_title']= " slice";

$productivitystat[3]['title']= "Coffee+energy drink killed in this year";
$productivitystat[3]['image']= "coffee.png";
$productivitystat[3]['counter']= coffeeenergydrinkcalc();
$productivitystat[3]['counter_title']= " cup";

$productivitystat[4]['title']= "Ideas borned in this year";
$productivitystat[4]['image']= "ideas.png";
$productivitystat[4]['counter']= ideascalc();
$productivitystat[4]['counter_title']= " idea";

$productivitystat[5]['title']= "Goal scored in this year";
$productivitystat[5]['image']= "goal.png";
$productivitystat[5]['counter']= goalcalc();
$productivitystat[5]['counter_title']= " goal";

$productivitystat[6]['title'] = "Sunny side eggs eaten in this year";
$productivitystat[6]['image'] = "ssegg.png";
$productivitystat[6]['counter'] = eggcalc();
$productivitystat[6]['counter_title'] = " eggs";

$productivitystat[7]['title'] = docucalc(0)." doc line written in this year";
$productivitystat[7]['image'] = "documentum.png";
$productivitystat[7]['counter'] = docucalc(1);
$productivitystat[7]['counter_title'] = " line";

$productivitystat[8]['title'] = "Paper clip used in this year";
$productivitystat[8]['image'] = "paperclip.png";
$productivitystat[8]['counter'] = paperclipcalc();
$productivitystat[8]['counter_title'] = " clip";

$productivitystat[9]['title'] = "Movie and serries viewed in this year";
$productivitystat[9]['image'] = "movie.png";
$productivitystat[9]['counter'] = moviecalc();
$productivitystat[9]['counter_title'] = " movie";

$productivitystat[10]['title'] = "Snowman built in this year";
$productivitystat[10]['image'] = "snowman.png";
$productivitystat[10]['counter'] = snowmancalc();
$productivitystat[10]['counter_title'] = " build";

$productivitystat[11]['title'] = "Contact lens used in this year";
$productivitystat[11]['image'] = "lens.png";
$productivitystat[11]['counter'] = lenscalc();
$productivitystat[11]['counter_title'] = " lens";

$productivitystat[12]['title'] = "Game played in this year";
$productivitystat[12]['image'] = "games.png";
$productivitystat[12]['counter'] = gamecalc();
$productivitystat[12]['counter_title'] = " played";

$productivitystat[13]['title'] = "Alien seen in this year";
$productivitystat[13]['image'] = "alien.png";
$productivitystat[13]['counter'] = aliencalc();
$productivitystat[13]['counter_title'] = " seen";

$productivitystat[14]['title'] = "Credit card used ".transactioncalc(0)." times in this year";
$productivitystat[14]['image'] = "bankcard.png";
$productivitystat[14]['counter'] = transactioncalc(1);
$productivitystat[14]['counter_title'] = " transaction";

$productivitystat[15]['title'] = "Razor blade used in this year";
$productivitystat[15]['image'] = "blade.png";
$productivitystat[15]['counter'] = razorcalc();
$productivitystat[15]['counter_title'] = " shave";

$productivitystat[16]['title'] = "Key lost in this year";
$productivitystat[16]['image'] = "key.png";
$productivitystat[16]['counter'] = keylostcalc();
$productivitystat[16]['counter_title'] = " lost";

$productivitystat[17]['title'] = "Power button used in this year on my laptop";
$productivitystat[17]['image'] = "powerbutton.png";
$productivitystat[17]['counter'] = powerbuttoncalc();
$productivitystat[17]['counter_title'] = " pressed";

$productivitystat[18]['title'] = powercalc(0)." megajules (MJ) power used in this year";
$productivitystat[18]['image'] = "energy.png";
$productivitystat[18]['counter'] = powercalc(1);
$productivitystat[18]['counter_title'] = " J";

$productivitystat[19]['title'] = "Connected to wifi in this year";
$productivitystat[19]['image'] = "wifi.png";
$productivitystat[19]['counter'] = wificalc();
$productivitystat[19]['counter_title'] = " connection";

$productivitystat[20]['title'] = "Beer drunk in this year";
$productivitystat[20]['image'] = "beer.png";
$productivitystat[20]['counter'] = beercalc();
$productivitystat[20]['counter_title'] = " pint of beer";

$productivitystat[21]['title'] = "Coctail drunk in this year";
$productivitystat[21]['image'] = "coctail.png";
$productivitystat[21]['counter'] = coctailcalc();
$productivitystat[21]['counter_title'] = " umbrella";

$productivitystat[22]['title'] = "Sheet to chad in this year";
$productivitystat[22]['image'] = "shredder.png";
$productivitystat[22]['counter'] = chadcalc();
$productivitystat[22]['counter_title'] = " chad";

$productivitystat[23]['title'] = "Scoop of ice cream aten in this year";
$productivitystat[23]['image'] = "icecream.png";
$productivitystat[23]['counter'] = scoopcalc();
$productivitystat[23]['counter_title'] = " scoop";

$productivitystat[24]['title'] = "Chocolate bar aten in this year";
$productivitystat[24]['image'] = "chocolatebar.png";
$productivitystat[24]['counter'] = chocolatebarcalc();
$productivitystat[24]['counter_title'] = " bar";

$productivitystat[25]['title'] = "Birthday cake aten in this year";
$productivitystat[25]['image'] = "bdaycake.png";
$productivitystat[25]['counter'] = bdaycakecalc();
$productivitystat[25]['counter_title'] = " bday cake";

$productivitystat[26]['title'] = "Watch bought in this year";
$productivitystat[26]['image'] = "watch.png";
$productivitystat[26]['counter'] = watchcalc();
$productivitystat[26]['counter_title'] = " bought";

$productivitystat[27]['title'] = trainkmcalc(0)." kilometres traveled by train in this year";
$productivitystat[27]['image'] = "train.png";
$productivitystat[27]['counter'] = trainkmcalc(1);
$productivitystat[27]['counter_title'] = " km";



echo"<div id=\"core_about_productivitystat\">
    <div id=\"core_about_productivitystat_section\">";
for($i=0;$i<=(count($productivitystat)-1);$i++){
    if($i==15){echo"</div><div id=\"core_about_productivitystat_section\">";}
        echo"
        <span class=\"core_about_productivitystat_box\" title=\"".$productivitystat[$i]['title']."\">
            <img src=\"image/dataimages/".$productivitystat[$i]['image']."\" width=\"19\" height=\"21\" />
            <span class=\"productivitystat_counter\">".$productivitystat[$i]['counter']."</span>
            <span class=\"productivitystat_title\">".$productivitystat[$i]['counter_title']."</span>
        </span>";
}
echo"</div>
    </div>";

?>
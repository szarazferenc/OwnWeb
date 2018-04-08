<?php
/**
 * @author Száraz Ferenc
 * @email email@szarazferenc.hu
 * @copyright 2013
 *
 * @filemane : wortex_89_function.php
 */

function workdaycalc (){
    $result=round(((strftime("%U")*5)*1.1), 0);
    $_SESSION['debug'][]="dolgozott napok: ".$result;
    return $result;
}

function emailwrittencalc ($a){
    $result=(strftime("%U")*5)*17;
    $resarray[0]=number_format($result, 0, '.', ' ');
    $resarray[1]=(round($result, -2)/1000)."k";
    if($a==0)
    {return $resarray[0];}
    elseif($a==1)
    {return $resarray[1];}
    $_SESSION['debug'][]="emailek száma: ".$resarray[0]." and ".$resarray[1];
}

function pizzapastacalc (){
    $result=round((strftime("%U")*3.62), 0);
    return $result;
    $_SESSION['debug'][]="pizzaszeletek száma: ".$result;
}

function coffeeenergydrinkcalc (){
    $result_coffee=round((strftime("%U")*14.37), 0);
    $result_energydrink=round((strftime("%U")*6.16), 0);
    return round((($result_coffee+$result_energydrink)/2), 0);
    $_SESSION['debug'][]="kv-k száma: ".$result;
}

function ideascalc(){
    $result=12;
    return $result;
}

function goalcalc (){
    $result_goal=round((strftime("%U")*1.39), 0);
    return round((($result_goal)/2), 0);
}

function eggcalc(){
    $result=round(((strftime("%U")*5)*0.8), 0);
    $_SESSION['debug'][]="megevett tükörtojci".$result;
    return $result;
}
function docucalc($a){
    $result=(strftime("%U")*5)*47;
    $resarray[0]=number_format($result, 0, '.', ' ');
    $resarray[1]=(round($result, -2)/1000)."k";
    if($a==0)
    {return $resarray[0];}
    elseif($a==1)
    {return $resarray[1];}
    $_SESSION['debug'][]="doksisorok száma: ".$resarray[0]." and ".$resarray[1];
}
function paperclipcalc(){
    $result=round(((strftime("%U")*0.2)), 0);
    $_SESSION['debug'][]="elhasznált gemkapcsok: ".$result;
    return $result;
}
function moviecalc(){
    $result=round(((strftime("%U")*5)*1.37), 0);
    $_SESSION['debug'][]="megnézett filmek: ".$result;
    return $result;
}
function snowmancalc(){
    $result=0;
    return $result;
}
function lenscalc(){
    $result=round(((strftime("%U")*3)), 0);
    $_SESSION['debug'][]="elhasznált lencsék: ".$result;
    return $result;
}
function gamecalc(){
    $result=round(((strftime("%U")*0.02)), 0);
    $_SESSION['debug'][]="lejátszott játékok: ".$result;
    return $result;
}
function aliencalc(){
    $result=0;
    return $result;
}
function transactioncalc($a){
    $result=(strftime("%U")*5)*4;
    $resarray[0]=number_format($result, 0, '.', ' ');
    $resarray[1]=(round($result, -2)/1000)."k";
    if($a==0)
    {return $resarray[0];}
    elseif($a==1)
    {
        if($resarray[0]<=999)
        {return $resarray[0];}
        else
        {return $resarray[1];}
    }
    $_SESSION['debug'][]="bankkártya tranzakciók száma: ".$resarray[0]." and ".$resarray[1];
        
}
function razorcalc(){
    $result=round(((strftime("%U")*4*1.1)), 0);
    $_SESSION['debug'][]="borotválkozások száma: ".$result;
    return $result;
}
function keylostcalc(){
    $result=0;
    return $result;
}

function powerbuttoncalc(){
    $result=round(((strftime("%U")*2)), 0);
    $_SESSION['debug'][]="kikapcsológomb: ".$result;
    return $result;
}
function powercalc($a){
    $result=(strftime("%U")*7)*(110000/365);
    $resarray[0]=number_format($result, 0, '.', ' ');
    $resarray[1]=(round($result, -2)/1000)."G";
    if($a==0)
    {return $resarray[0];}
    elseif($a==1)
    {return $resarray[1];}
    $_SESSION['debug'][]="energiafelhasználás: ".$resarray[0]." és ".$resarray[1];
}
function wificalc(){
    $result=round(((strftime("%U")*7*3)), 0);
    $_SESSION['debug'][]="wifi csatlakozás: ".$result;
    return $result;
}

function beercalc(){
    $result=round(((strftime("%U")*1*3)), 0);
    $_SESSION['debug'][]="sör korsó: ".$result;
    return $result;
}
function coctailcalc(){
    $result=0;
    return $result;
}
function chadcalc(){
    $result=round(((strftime("%U")*5*0.234)), 0);
    $_SESSION['debug'][]="ív papírt daráltam le: ".$result;
    return $result;
}
function scoopcalc(){
    $result=round(((strftime("%U")*1*2)), 0);
    $_SESSION['debug'][]="ív papírt daráltam le: ".$result;
    return $result;
}
function chocolatebarcalc(){
    $result=round(((strftime("%U")/2)), 0);
    $_SESSION['debug'][]="ív papírt daráltam le: ".$result;
    return $result;
}
function bdaycakecalc(){
    if(date('z')>=254){$result=1;}else{$result=0;}
    $_SESSION['debug'][]="szülinapi torták száma: ".$result;
    return $result;
}
function watchcalc(){
    $result=round(((strftime("%U")/21)), 0);
    $_SESSION['debug'][]="órát vettem: ".$result;
    return $result;
}
function trainkmcalc($a){
    $result=(strftime("%U")*5)*160;
    $resarray[0]=number_format($result, 0, '.', ' ');
    $resarray[1]=(round($result, -2)/1000)."k";
    if($a==0)
    {return $resarray[0];}
    elseif($a==1)
    {return $resarray[1];}
    $_SESSION['debug'][]="utazott km szám: ".$resarray[0]." and ".$$resarray[1];
}

function loremipsum($a){
    for($i=0;$i<=$a;$i++){
        echo"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquam vehicula mauris, tristique porta sapien pellentesque non. Nulla mi felis, dictum molestie nisi non, hendrerit ornare urna. Phasellus ligula dui, luctus ac dapibus non, laoreet in erat. Aenean dignissim vitae dolor sed hendrerit. Mauris sed diam ante. Nullam eu dignissim felis. Proin turpis quam, faucibus ac purus ac, auctor tincidunt libero. Fusce vulputate egestas dolor ac pretium.<br />";
    }
}









?>
<?php
$allow_subdomain = '.'.$_SERVER['SERVER_NAME'];
ini_set('session.cookie_domain', $allow_subdomain);
session_start();

/**
 * @author Száraz Ferenc
 * @email email@szarazferenc.hu
 * @copyright 2013
 *
 * @filemane : index.php
 */


//globális kapcsolók star
$_SESSION['debugswitch']=0;

//globális kapcsolók stop

//include files start
include("wortex_89_panam1_sixsix.php");
include("wortex_89_lang.php");
include("wortex_89_function.php");
include("wortex_89_translate.php");


$debug[] = "REQUEST[param] : <strong>".$_REQUEST["param"]."</strong>";

if( preg_match('/^[A-Za-z0-9\/]*$/i', $_REQUEST["param"]) )
{
    $req_param = split("/", $_REQUEST["param"]);
    $get_param = $_GET;
    $debug[]="jo a REQUEST[param]";
}

if( (isset($_REQUEST["param"])) AND (!empty($_REQUEST["param"])) )
{
   if($req_param[0]=="bookmark")
   {
        $_SESSION['authority']=3;
   }
   elseif($req_param[0]=="unregistered")
   {
        $_SESSION['authority']=4;
   }
   elseif($req_param[0]=="minicv")
   {
        $_SESSION['authority']=5;
   }
   elseif( (isset($req_param[0])) AND (!empty($req_param[0])) AND (preg_match('/^[A-Za-z0-9]{5}/i', $req_param[0])) AND (strlen($req_param[0])==5) )
   {
        $debug[]="OK, van param! 5 jegyű a $!req_param[0] és <strong>nem none</strong>";
        $sql="SELECT * FROM published_key WHERE idkey='".$req_param[0]."' AND active='1'";
        $debug[]= $sql;
        $result = mysql_query($sql);
        $num_rows = mysql_num_rows($result);
            if($num_rows==1)
            {
                while ($row = mysql_fetch_array($result))
                {
                    @setcookie("szarazferenc", $row['idkey'], time()+2592000, '/', $allow_subdomain, null, true);
                    $_SESSION['identity_key']=$row['idkey'];
                    $_SESSION['authority']=1;
                    $_SESSION['published']=$row['name'];
                    $_SESSION['published_date']=date('d.m.Y', strtotime($row['cvdate']));
                    
                    
                    if($_COOKIE["szarazferenc_lng"]!=$row['lng']){
                        $_SESSION['lng']= $row['lng'];
                        @setcookie("szarazferenc_lng", $row['lng'], time()+2592000, '/', $allow_subdomain, null, true);
                    }
                }            
            }
            else
            {
                $_SESSION['unreg_passkey'] = $req_param[0];
                header("Location: /unregistered");
                
            }
        
   }
   else
   {
        header("Location: /");
   }
}
elseif( (isset($_COOKIE["szarazferenc"])) AND (ereg("[A-Z,a-z,0-9]{5}", $_COOKIE["szarazferenc"])) )
{
        //$debug.= "<br />COOKIES: ".$_COOKIE["szarazferenc"];
        $toparam=$_COOKIE["szarazferenc"];
        header("Location: /".$toparam);
        $debug[]="Nincs semmi a $!REQUEST[param] -ban semmi, de COOKIES-ban azonosítottuk!!!";
}
else
{
    $_SESSION['authority']=0;
}


include("header.php");

//print_r($_SESSION);

if($_SESSION['authority']==1){
        include("wortex_89_core.php");
        $debug[]="CORE oldal töltése authority ==1";
}
elseif($_SESSION['authority']==0)
{
        include("wortex_89_main.php");
        $debug[]="<br />authority ==0<br /> main.php-t töltötte be";
}
elseif($_SESSION['authority']==3)
{
        include("wortex_89_bookmark.php");
        $debug[]="<br />authority ==0<br /> wortex_89_bookmark.php-t töltötte be";
}
elseif($_SESSION['authority']==4)
{
        include("wortex_89_unregistred.php");
        $debug[]="<br />authority ==4<br /> wortex_89_unregistred.php-t töltötte be";
}
elseif($_SESSION['authority']==5)
{
        include("wortex_89_minicv.php");
        $debug[]="<br />authority ==4<br /> wortex_89_minicv.php-t töltötte be";
}


if($_SESSION['debugswitch']==1){ include("debugwindow.php"); }

include("footer.php");

?>
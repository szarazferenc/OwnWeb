<?php

/**
 * @author Száraz Ferenc
 * @email email@szarazferenc.hu
 * @copyright 2013
 *
 * @filemane : wortex_89_lang.php
 */

if(!isset($_SESSION['lng']) )
{
    if(!isset($_COOKIE["szarazferenc_lng"]))
    {
        setcookie ("szarazferenc_lng", 'hu', time()+84000, '/', $allow_subdomain, null, true);
        $_SESSION['lng']='en';
    }
    else
    {
        $_SESSION['lng'] = $_COOKIE["szarazferenc_lng"];
    }
    
}
if( (isset($_GET['lng'])) AND (($_GET['lng']=="en")OR($_GET['lng']=="hu")) )
{
    empty($_SESSION['lng']);
    $_SESSION['lng'] = $_GET['lng'];
    if(isset($_COOKIE["szarazferenc_lng"]))
    {
        setcookie ("szarazferenc_lng", "", time() - 3600, '/', $allow_subdomain, null, true);
        setcookie ("szarazferenc_lng", $_GET['lng'], time()+2592000, '/', $allow_subdomain, null, true);
    }
    header("Location: ".$_SERVER['SERVER_NAME']);
}

?>
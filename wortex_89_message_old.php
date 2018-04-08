<?php
session_start();
/**
 * @author Szaraz Ferenc
 * @copyright 2014
 */

function callsendmsg($subject, $message, $from, $fromname, $test){
    $header = "MIME-Version: 1.0" . "\r\n";
    $header .= "Content-type: text/html; charset=utf-8\r\n";
    $header .= "From: \"". $fromname . "\" <".$from.">\r\n";
    $header .= "Reply-To: " . $from."\r\n";
    $header .= "Subject: " . $subject . "\r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $header .= "Return-Path: ".$from."\r\n";
    
    $to = 'me@szarazferenc.hu';
    if($test==0){
        $mailresult = mail($to, $subject, $message, $header);
        if($mailresult){$result=1;}else{$result=0;}        
    }
    else
    {$result=1;
        $fp = fopen('postdata.txt', 'a');
        fwrite($fp, $headers);
        fwrite($fp, $subject);
        fwrite($fp, $message);
        fwrite($fp, $test);
        fwrite($fp, "-----------------------------------------------------------------");
        fclose($fp);
    
    }

    echo $result;
}

$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$idkey =  $_SESSION['identity_key'];
$idname = $_SESSION['published'];
//email küldés tesztelése: 1== teszt aktív ; 0== teszt inaktív!
if($_SERVER['SERVER_NAME']=='szarazferenc.local'){$test=1;}else{$test=0;}


if((isset($_GET['do'])) AND (!empty($_GET['do'])) AND (preg_match('/^[a-z]*$/i', $_GET['do']))){
    if($_GET['do']=='contact'){
        $msg="
FROM: ".$_POST['656d61696c']."<br />
NAME: ".$_POST['6e616d65']."<br />
IP: ".$_SERVER['REMOTE_ADDR']."<br />
HOST: ".$hostname."<br />
DATE: ".date('Y-m-d H:i:s')."<br />
LOCATION: maincontact<br />
MESSAGE: ".$_POST['6d657373616765'];
            $subject = 'szarazferenc.hu-ról érkezett, feladó: '.$_POST['6e616d65'].' -';
            $from = $_POST['656d61696c'];
            $fromname = $_POST['6e616d65'];
        callsendmsg($subject, $msg, $from, $fromname, $test);
    }
    elseif($_GET['do']=='corecontact'){
        $msg="
IDENTITY NAME: ".$idname."<br />
IDENTITY KEY: ".$idkey."<br />
FROM: ".$_POST['contact_email']."<br />
NAME: ".$_POST['contact_name']."<br />
IP: ".$_SERVER['REMOTE_ADDR']."<br />
HOST: ".$hostname."<br />
DATE: ".date('Y-m-d H:i:s')."<br />
LOCATION: corecontact<br />
MESSAGE: ".$_POST['contact_message'];
            $subject = 'szarazferenc.hu-ról érkezett, feladó: '.$_POST['contact_name'].' -';
            $from = $_POST['contact_email'];
            $fromname = $_POST['contact_name'];
        callsendmsg($subject, $msg, $from, $fromname, $test);
    }
    elseif($_GET['do']=='passkeyreq'){
        $msg="
FROM: ".$_POST['singup_email']."<br />
NAME: ".$_POST['singup_name']."<br />
CORP NAME: ".$_POST['singup_corpname']."<br />
CORPWEB: ".$_POST['singup_web']."<br />
IP: ".$_SERVER['REMOTE_ADDR']."<br />
HOST: ".$hostname."<br />
DATE: ".date('Y-m-d H:i:s')."<br />
LOCATION: passkeyreq<br />
MESSAGE: ".$_POST['singup_message'];
            $subject = 'szarazferenc.hu-ról érkezett, feladó: '.$_POST['singup_name'].' -';
            $from = $_POST['singup_email'];
            $fromname = $_POST['singup_name'];
        callsendmsg($subject, $msg, $from, $fromname, $test);
    }
    elseif($_GET['do']=='bugreport'){
        
    }
    else{
        echo"0";
        
    }
}
else{
    echo"0";
}

?>
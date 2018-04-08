<?php
function callsendmsg($subject, $message, $from, $fromname){
    $header = "MIME-Version: 1.0" . "\r\n";
    $header .= "Content-type: text/html; charset=utf-8\r\n";
    $header .= "From: \"". $fromname . "\" <".$from.">\r\n";
    $header .= "Reply-To: " . $from."\r\n";
    $header .= "Subject: " . $subject . "\r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $header .= "Return-Path: ".$from."\r\n";
    
    $to = 'me@szarazferenc.hu';
    
@mail($to, $subject, $message, $header);

}



if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

$file="er65mtp1v.txt";

$myfile = fopen($file, "r") or die("Unable to open file!");
$contents = fread($myfile, filesize($file));
fwrite($myfile, $txt);
fclose($myfile);

if($contents!=$ip){
    $myfile = fopen($file, "w+") or die("Unable to open file!");
        fwrite($myfile, $ip);
        fwrite($myfile, $txt);
    fclose($myfile);
    
        $msg=$ip;
        $subject = 'home server actual ip';
        $from = 'me@szarazferenc.hu';
        $fromname = 'Száraz Ferenc_Raspberry';
    callsendmsg($subject, $msg, $from, $fromname);
}

?>
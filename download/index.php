<?php
session_start();

if((isset($_GET['w'])) AND (!empty($_GET['w'])) AND (preg_match('/^[A-Za-z0-9_].[a-z]{3}/i', $_GET['w']))){
    $basedir = $_SESSION['identity_key'];
    $file = $basedir."/".$_GET['w'];
    $extension=substr($_GET['w'], -3);
    if($extension=="pdf"){
        $mimetype="application/pdf";
    }elseif($extension=="txt"){
        $mimetype="text/plain";
    }elseif($extension=="docx"){
        $mimetype="application/vnd.openxmlformats-officedocument.wordprocessingml.document";
    }

    if (!file_exists($file)) {
        die ('The file does not exist.');
        exit;
    }
    else{
        
        header('Content-Description: File Transfer');
        header('Content-Type: '.$mimetype.'');
        header('Content-Disposition: attachment; filename="' . basename($file).'"');
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Pragma: no-cache');
        header('Content-Length: ' . filesize($file));
        readfile($file);
    }
}else{
    header('Location: http://szarazferenc.hu/');
}

?>
<?php
session_start();
/**
 * @author Szaraz Ferenc
 * @copyright 2014
 */

include("wortex_89_panam1_sixsix.php");

if( (isset($_GET['action'])) AND (!empty($_GET['action']))){
    $data = "IDENTITY NAME: ".$_SESSION['published']." - IDENTITY KEY: ".$_SESSION['identity_key']." - REMOTE_ADDR_NAME: ".gethostbyaddr($_SERVER["REMOTE_ADDR"]);
    $insert_sql="INSERT INTO logtable VALUES ('', NOW(), '".$_SERVER["REMOTE_ADDR"]."', '".$where."', '".$_GET['action']."');";
    
    mysql_query($insert_sql) or die ("Probléma a beszúrásnál: ".mysql_error()." --".$insert_sql);     
}

?>
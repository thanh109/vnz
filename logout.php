<?php
ob_start("ob_gzhandler");
error_reporting (E_ALL);
error_reporting(0); 
date_default_timezone_set('Asia/Calcutta');
$usercookie = (isset($_COOKIE['INFO'])) ? $_COOKIE['INFO'] : false;
$passcookie = (isset($_COOKIE['PHEPSSID'])) ? $_COOKIE['PHEPSSID'] : false;
if($usercookie && $passcookie) {
setcookie('PHEPSSID',null, 1);
}
header("location:./index.php");
ob_end_flush();
?>
<?php
ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];
@$http_referer = $_SERVER['HTTP_REFERER'];
//$THE_REFER=strval(isset($_SERVER['HTTP_REFERER'])); 
function loggedin()
{
if(isset($_SESSION['mobile'])&& !empty($_SESSION['mobile']))
{
return true;
$_SESSION['mobile']= $mobile;
}
else
{
return false;
}
}
?>
<?php
require_once 'core.inc.php';
include 'reg.html';
define('server','localhost','true');
define('user','root','true');
define('password','','true');
define('database','reviewra','true');
$cid=mysql_connect(server,user,password) or exit("connection failed");
mysql_select_db(database,$cid) or die("Database Selection");
if(isset($_REQUEST['submit']))
{

$mobile=$_REQUEST['mobile'];
$email=$_REQUEST['email'];
$username=$_REQUEST['username'];
$occupation=$_REQUEST['occupation'];
$password=$_REQUEST['password'];
$passwordagain=$_REQUEST['passwordagain'];
$gender=$_REQUEST['gender'];
if(!empty($mobile)&&!empty($email)&&!empty($username)&&!empty($occupation)&&!empty($password)&&!empty($passwordagain)&&!empty($gender))
{
  if($password!= $passwordagain)
   {
echo "Passwords do not match..!";
    }
	else
	{
$query="INSERT into register (mobile,email,username,occupation,password,passwordagain,gender) values ('$mobile','$email','$username','$occupation','$password','$passwordagain','$gender') ";
$result=mysql_query($query,$cid);
$no=mysql_affected_rows($cid);
mysql_close($cid);
//return $no;
echo 'Congratulations you are registered..!';
          }
	 
	 }
	 else
	 {
	 
	 echo "Enter all fields";
	 }
	} 
  
if(isset($_REQUEST['signin']))
{
header('Location:jaes1.php');
}
?>

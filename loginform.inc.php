<!DOCTYPE HTML>
<html>
<head>

</head>
<body>
<form >
<div id='div2'>
<?php
	if(isset($_REQUEST['submit']))
{
$mobile = $_REQUEST['mobile'];
$password = $_REQUEST['password'];
//$password_hash= md5($password);
if(!empty($mobile) && !empty($password))
{
$query= " SELECT username FROM register WHERE `mobile` = '".mysql_real_escape_string($mobile)."' AND `password` = '".mysql_real_escape_string($password)."'";
if($query_run = mysql_query($query))
{
$query_num_rows = mysql_num_rows($query_run);
if($query_num_rows == 0)
{
echo "Invalid username or password";
}
else
if($query_num_rows == 1)
{
//echo $user_id= mysql_result($query_run,0,'id');
//$_SESSION['user_id']= $user_id;
header('Location:pages/index.html');
}
}
}
else{
echo "you must enter your mobile and password";
}
}
?>	
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mobile  </br></br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type ="text" name="mobile" > </br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password:</br></br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name ="password"  ></br></br></br></br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value ="       Login        " id="submit" name="submit"/></br></br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dint Sign Up? <a href="register.php" style="text-decoration:none">Register </a>
</div>
</form>
<div id="footer">
@DelveMItt|Made by Esha Vishwakarma|Jyant Usrete|Contact-eshavish@gmail.com
</div>
</body>
</html>
<?php
require_once 'core.inc.php';
define('server','localhost','true');
define('user','root','true');
define('password','','true');
define('database','reviewra','true');
$cid=mysql_connect(server,user,password) or exit("connection failed");
mysql_select_db(database,$cid) or die("Database Selection");
?>
<html>
<head>
<style>
#container-div1{
width:600px;
border-radius: 15px;
height:110px;
background-color:#EEEBED;
padding:10px;
}
#container-div2{
width:600px;
border-radius: 15px;
height:110px;
background-color:#EEEBED;
padding:10px;
}
#container-div3{
width:600px;
border-radius: 15px;
height:110px;
background-color:#EEEBED;
padding:10px;
}
#container-div4{
width:600px;
border-radius: 15px;
height:110px;
background-color:#EEEBED;
padding:10px;
}
#img{
float:right;
margin-right:100px;
margin-top:50px;
}
#generate{
background-color:#EEEBED;
width:300px;
height:200px;
float:right;
margin-right:200px;
border-radius: 15px;
}
#hoverdiv{
display:none;
position:absolute;
font-size:14px;
background-color: #fff;
color: #404040;
border: 1px solid #999;
padding:7px;
}

</style>
<script src='jquery-1.11.3.min.js' ></script>
					<script>
					$(document).ready(function(){
					$('#submit').click(function(){
					$('#submit').text('Request sent');
					
					},function(){
					$('#submit').text(' Request Sent');
					});
					//second one
					$('#submit1').click(function(){
					$('#submit1').text('Request sent');
					
					},function(){
					$('#submit1').text(' Request Sent');
					});
					//third one
					$('#submit2').click(function(){
					$('#submit2').text('Request sent');
					
					},function(){
					$('#submit2').text(' Request Sent');
					});
					//fourth one
					$('#submit3').click(function(){
					$('#submit3').text('Request sent');
					
					},function(){
					$('#submit3').text(' Request Sent');
					});
					//hover
					$('.hover').mousemove(function(e){
					var hovertext = $(this).attr('hovertext');
					$('#hoverdiv').text(hovertext).show();
					$('#hoverdiv').css('top',e.clientY+10).css('left',e.clientX+10);
					}).mouseout(function(){
					
					$('#hoverdiv').hide();
					});
					
					
					
					
					});
					
					
					</script>
<head>
<body>
<form>
<div id="div1" align="center">
<img src="images/expl2.gif" >
</div>
</br>
<div id="img">
<img src="images/lets2.gif"/>
</div>
</br>
<!--try -->


<div id="hoverdiv"></div>
<div id="container-div1">
<div id="div2">
<?php
echo "Going to-";
$query="SELECT place_to FROM registerride WHERE id='30'";
$result=mysql_query($query,$cid);
$values = mysql_fetch_array($result);
echo ucwords($values["place_to"]);
?>
</div>

<div id="div3">
<?php
echo "By -";
$query="SELECT name FROM registerride WHERE id='30'";
$result=mysql_query($query,$cid);
$values = mysql_fetch_array($result);
echo ucwords($values["name"]);
?>
</div></br>
<div id="div4">
<?php
echo "Description -";
$query="SELECT journey FROM registerride WHERE id='30'";
$result=mysql_query($query,$cid);
$values = mysql_fetch_array($result);
echo ucwords($values["journey"]);
?>
</div></br>
<div id="right">
<a  id="submit"><input type="submit" name="submit" id="submit" value="Send Ride Request" /></a>
</div>
</div>
</br>
<!--second ride-->
<div id="container-div2">
<div id="div5">
<?php
echo "Going to-";
$query="SELECT place_to FROM registerride WHERE id='31'";
$result=mysql_query($query,$cid);
$values = mysql_fetch_array($result);
echo ucwords($values["place_to"]);
?>
</div>

<div id="div6">
<?php
echo "By -";
$query="SELECT name FROM registerride WHERE id='31'";
$result=mysql_query($query,$cid);
$values = mysql_fetch_array($result);
echo ucwords($values["name"]);
?>
</div></br>
<div id="div7">
<?php
echo "Description -";
$query="SELECT journey FROM registerride WHERE id='31'";
$result=mysql_query($query,$cid);
$values = mysql_fetch_array($result);
echo ucwords($values["journey"]);
?>
</div></br>
<div id="right1">
<a id="submit1"><input type="submit" name="submit1" id="submit1" value="Send Ride Request" /></a>
</div>
</div>
</br>
<!--try one-->
<a class="hover" href="fillform.php" hovertext="Fill a simple form"><div id="generate" align="center" >

<p> <font size="6" face="Cooper Black">Generate ride Request ?</font></p>
</div></a>
<!--third one-->
<div id="container-div3">
<div id="div8">
<?php
echo "Going to-";
$query="SELECT place_to FROM registerride WHERE id='32'";
$result=mysql_query($query,$cid);
$values = mysql_fetch_array($result);
echo ucwords($values["place_to"]);
?>
</div>

<div id="div9">
<?php
echo "By -";
$query="SELECT name FROM registerride WHERE id='32'";
$result=mysql_query($query,$cid);
$values = mysql_fetch_array($result);
echo ucwords($values["name"]);
?>
</div></br>
<div id="div10">
<?php
echo "Description -";
$query="SELECT journey FROM registerride WHERE id='32'";
$result=mysql_query($query,$cid);
$values = mysql_fetch_array($result);
echo ucwords($values["journey"]);
?>
</div></br>
<div id="right2">
<a id="submit2"><input type="submit" name="submit2" id="submit2" value="Send Ride Request" /></a>
</div>
</div>
</br>

<!--fourth one-->
<div id="container-div4">
<div id="div11">
<?php
echo "Going to-";
$query="SELECT place_to FROM registerride WHERE id='33'";
$result=mysql_query($query,$cid);
$values = mysql_fetch_array($result);
echo ucwords($values["place_to"]);
?>
</div>

<div id="div12">
<?php
echo "By -";
$query="SELECT name FROM registerride WHERE id='33'";
$result=mysql_query($query,$cid);
$values = mysql_fetch_array($result);
echo ucwords($values["name"]);
?>
</div></br>
<div id="div13">
<?php
echo "Description -";
$query="SELECT journey FROM registerride WHERE id='33'";
$result=mysql_query($query,$cid);
$values = mysql_fetch_array($result);
echo ucwords($values["journey"]);
?>
</div></br>
<div id="right3">
<a id="submit3"><input type="submit" name="submit2" id="submit2" value="Send Ride Request" /></a>
</div>
</div>

</form>
</body>
</html>

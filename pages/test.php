<?php
require_once 'core.inc.php';
define('server','localhost','true');
define('user','root','true');
define('password','','true');
define('database','reviewra','true');
$cid=mysql_connect(server,user,password) or exit("connection failed");
mysql_select_db(database,$cid) or die("Database Selection");
if(isset($_REQUEST['submit']))
{
$mobile1=$_REQUEST['mobile1'];
$review=$_REQUEST['t1'];
if(!empty($mobile1)&&!empty($review))
{
$query="INSERT into review (mobile,Crystal) values ('$mobile1','$review') ";
$result=mysql_query($query,$cid);
$no=mysql_affected_rows($cid);
mysql_close($cid);
}
else
{
echo "Enter each field";
}

}
if(isset($_REQUEST['back']))
{
header('Location:restaurant.php');
}
?>
<html>
<head>
<style type='text/css'>
body{
background-color:#D2C7EB;
}
#overview{
margin-left:40px;
margin-right:50px;
background-color:#FFFFFF;
height:290px;
}
#main_review1{
margin-left:40px;
margin-right:50px;
background-color:#FFFFFF;

}
#user_review{
margin-left:40px;
margin-right:50px;
background-color:#FFFFFF;
height:1050px;

}
#r1{
padding:30px;
margin-top:30px;
margin-left:30px;
margin-right:30px;
border-radius: 25px;
background: #FFCCFF;
 border-width: 5px;
 height:150px;
}
#text1_right{
float:right;
margin-right:200px;
}
#r1_left{
float:left;
}
#r2{
padding:30px;
margin-top:30px;
margin-left:30px;
margin-right:30px;
border-radius: 25px;
background: #FFCCFF;
 border-width: 5px;
 height:150px;
}
#text2_right{
float:right;
margin-right:320px;
}
#r2_left{
float:left;
}
#r3{
padding:30px;
margin-top:30px;
margin-left:30px;
margin-right:30px;
border-radius: 25px;
background: #FFCCFF;
 border-width: 5px;
  height:150px;
}
#text3_right{
float:right;
margin-right:320px;
}
#r3_left{
float:left;
}
#left-main{
padding-left:50px;
float:left;
}
#right-main{
float:right;
margin-right:400px;
font:Times new Roman;

}
#container-div{
background-color:#EEEBED;
height:80px;
}
#left-element{
padding:10px;
float:left;
}
#right-element{
padding:30px;
float:right;
}
#accept{
margin-top:30px;
margin-left:30px;
height:200px;
width:700px;
}
#t1{
height:200px;
width:700px;

}

</style>
</head>
<body>
<form method="POST">
<div id="container-div">
        <div id="left-element">
            <img src="Delvelogo.png" />
          </div>
          <div id="right-element">
           <input type="submit" id='back' name='back' value="Return to home page" />
           </div>
    </div>
	</br></br></br>	
       <div align="center">
	<font size="6" >The Crystal Restaurant</font>
	    </div>
		<hr style="width =100%; margin-top:30px;" />
		</br>
		<div  id="overview">
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="4" ><b>Overview</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Review</b></font>
         
			</br>
			</br>
		<div id="main">			
		<div id="left-main">
		<img src="images/crystal.jpg" height=200 width=300 />
		</div>
		<div id="right-main">
		<font size="4">
		  &nbsp;&nbsp;&nbsp;&nbsp;#7 of 31 Restaurants in Jabalpur</br>
          &nbsp;&nbsp;&nbsp;&nbsp;4.5 of 5 stars 11 reviews</br>
          &nbsp;&nbsp;&nbsp;&nbsp;“Serves tasty food” 10/07/2015</br>
        &nbsp;&nbsp;&nbsp;&nbsp;“Good ambiance good food ...” 21/06/2015
		  </font>  
			</br>
			</br>
			</br>
			</br>
			</br>
			&nbsp;&nbsp;&nbsp;&nbsp;<input type ="submit" id="writer" class="writer" name="writer" value="Write Your Own Review" />
		</div>
		</div>
<hr style="width =100%; margin-top:250px;" />	
		</div>
		<div id="main_review1">
		<img src="images/Pic2.png" height=200 width=280/>
		<hr style="width =100%;" />
		</div>
		<div id="user_review">
		<div align="center">
		<font size="6" face="times newroman"/>Reviews from the DelveMItt Community</font>
		</div>
		<div id="r1">
		<div id="text1_right"
		<font size="5">"Nice Restaurant"</font>
		</br>
		</br></br>
		<font size="4">Good food in reasonable price. Quantity of food is more as compare to other restaurent. </br>Tasty food and cleaniness is maintained. </br> Over crowded during peak hours.</font>
		</div>
		<div id="r1_left">
		<img src="images/girl.png" height=100 width=120 />
		</br></br>
		&nbsp;&nbsp;&nbsp;&nbsp;Narayani Singh
		</div>
		</div>
		<!-- second review -->
		<div id="r2">
		<div id="text2_right">
		<font size="5">“One of d best!”</font>
		</br>
		</br></br>
		<font size="4">dis restaurant as well as hotel is awesome! in my list since childhood..</br>100% veg restaurant..food is amazing..ambiance is gd too..</br>over all awesome.</font>
		</div>
		<div id="r2_left">
		<img src="images/boy.jpg" height=100 width=120 />
		</br></br>
		&nbsp;&nbsp;&nbsp;&nbsp;Siddharth Taran
		</div>
		</div>
		<!-- third review -->
		<div id="r3">
		<div id="text3_right">
		<font size="5">“Delicious Food..!”</font>
		</br>
		</br></br>
		<font size="4">dis restaurant as well as hotel is awesome! in my list since childhood..</br>100% veg restaurant..food is amazing..ambiance is gd too..</br>over all awesome.</font>
		</div>
		<div id="r3_left">
		<img src="images/girl1.png" height=100 width=120 />
		</br></br>
		&nbsp;&nbsp;&nbsp;&nbsp;Simon Loren
		</div>
		</div>
		<div id="accept">
		<input type="textarea" name="t1" value="" id="t1" placeholder="Write your own review"/>		
		<input type="text" name="mobile1" value="" id="mobile1" placeholder="Enter mobile"/>
	    <input type="submit" name="submit" class="submit" id="submit" value="Submit" /></br>
		</div>
		
	
	
	  
</form>
</body>
</html>

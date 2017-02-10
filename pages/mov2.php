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
$query="INSERT into review (mobile,Roopali) values ('$mobile1','$review') ";
$result=mysql_query($query,$cid);
$no=mysql_affected_rows($cid);
mysql_close($cid);
}
else
{
echo "Enter each field";
}

}
if(isset($_REQUEST['back2']))
{
header('Location:movies.php');
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
width:600px;
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
margin-right:230px;
width:600px;
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
margin-right:230px;
width:600px;
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
font:Times new Roman;
width:500px;
margin-right:300px;
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
           <input type="submit" id='back2' name='back2' value="Return to home page" />
           </div>
    </div>
	</br></br></br>	
       <div align="center">
	<font size="6" >Ranjhanaa</font>
	    </div>
		<hr style="width =100%; margin-top:30px;" />
		</br>
		<div  id="overview">
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="4" ><b>Overview</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Review</b></font>
         
			</br>
			</br>
		<div id="main">			
		<div id="left-main">
		<img src="images/bahubali.jpg" height=200 width=300 />
		</div>
		<div id="right-main">
		<font size="4">
		  <font size= "4" >Rating:</font></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size ="4"  color ="#B266FF"; >9.2/10 IMBD </font></br>
          </br>
		  <input type="submit" id="submit2" class="" name="submit2" value="Write Review" /></br></br>
Baahubali: The Beginning, also presented as Bāhubali: The Beginning is a 2015 Indian bilingual epic historical fiction film directed by S. S. Rajamouli. Produced by Shobu Yarlagadda and Prasad Devineni, it is the first of two cinematic parts<br/><pre>Release date: July 10, 2015 (India)
Music director: M.M. Keeravaani
Producers: Shobu Yarlagadda, Prasad Devineni</pre>	
		  </font>  
			</br>
			</br>
			</br>
			</br>
			</br>
			
		</div>
		</div>
<hr style="width =300%; margin-top:250px;" />	
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
		<font size="5">"Great Movie..!"</font>
		</br>
		</br></br>
		<font size="4">Lovely movie, it had a twist and a blend of action, drama, romance, a little bit fiction too.</br> The movie is worth a watch. it displays the actuality of the people, their nature and all i loved the romantic part of the movie as well.</br> It was fun, interesting and very very entertaining too.</font>
		</div>
		<div id="r1_left">
		<img src="images/girl.png" height=100 width=120 />
		</br></br>
		&nbsp;&nbsp;&nbsp;&nbsp;Devyanshi rai
		</div>
		</div>
		<!-- second review -->
		<div id="r2">
		<div id="text2_right">
		<font size="5">“Amazing...Fantastic!”</font>
		</br>
		</br></br>
		<font size="4">Dhanush who had earlier wooed the South Indian audience with his acting skills, chose a script tailor made for him to launch himself into Bollywood.</br> The movie, doesn't disappoint those who enjoyed the stories where love stands above everything else in life.</font>
		</div>
		<div id="r2_left">
		<img src="images/boy.jpg" height=100 width=120 />
		</br></br>
		&nbsp;&nbsp;&nbsp;&nbsp;Rohan Roy
		</div>
		</div>
		<!-- third review -->
		<div id="r3">
		<div id="text3_right">
		<font size="5">“Must Watch”</font>
		</br>
		</br></br>
		<font size="4">Simply marvelous.... especially from a movie where the hero has so very unorthodox looks for a Bollywood actor but,wait ...u will forget that as d story moves on beautifully crafted on screen by the "tanu weds manu"(another interesting flick)director and acted upon by same guy..</font>
		</div>
		<div id="r3_left">
		<img src="images/girl1.png" height=100 width=120 />
		</br></br>
		&nbsp;&nbsp;&nbsp;&nbsp;Yamini Sen
		</div>
		</div>
		<!--accepting review-->
		<div id="accept">
		<input type="textarea" name="t1" value="" id="t1" placeholder="Write your own review"/>		
		<input type="text" name="mobile1" value="" id="mobile1" placeholder="Enter mobile"/>
	    <input type="submit" name="submit" class="submit" id="submit" value="Submit" /></br>
		</div>
		
		
	
	
	  
</form>
</body>
</html>

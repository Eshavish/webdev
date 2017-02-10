<?php 
 $mysql_host = 'localhost';
 $mysql_user = 'root';
 $mysql_pass = '';
 $mysql_db ='reviewra';
 if(!mysql_connect($mysql_host ,$mysql_user ,$mysql_pass)||!mysql_select_db($mysql_db))
 {
 die(mysql_error());
 }
 $cid=mysql_connect($mysql_host ,$mysql_user ,$mysql_pass) or exit("connection failed");
mysql_select_db($mysql_db,$cid) or die("Database Selection");
?> 
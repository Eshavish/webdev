<?php
/*define('server','localhost','true');
define('user','root','true');
define('password','','true');
define('database','reviewra','true');
$cid=mysql_connect(server,user,password) or exit("connection failed");
mysql_select_db(database,$cid) or die("Database Selection");
$query="SELECT username FROM register WHERE email='esha.vishwakarma@yahoo.com'  ";
$result=mysql_query($query,$cid);
$values = mysql_fetch_array($result);
echo $values["username"];
//print_r($values);
/*foreach($values as $e)
{
echo $e;
}
*/

$value="hi i am esha";
 echo ucwords($value);


?>
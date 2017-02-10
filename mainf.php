<html>
<head>
<style type="text/css">
body
{
background-image:url("fifth.jpg");
height:40px;
width:40px;
}
</style>
</head>
<body>

</body>
</html>

<?php
require 'core.inc.php';
require 'connect.inc.php';

if(loggedin())
{
include 'jquery1.php';

}
else
{
require 'loginform.inc.php';
}
?>  

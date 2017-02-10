<?php
 if(logged==true)
 {
 header('Location:index.html');
 }
 else
 {
 header('Location:protected.php');
 
 }

?>
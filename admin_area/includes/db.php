<?php 

$db = mysqli_connect("localhost","root","","fashion");
if(mysqli_errno($db))
{
 echo mysqli_error(); 
}
?>

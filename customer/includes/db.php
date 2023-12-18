<?php
   $db = new mysqli("localhost","root","","fashion");
   if($db->connect_error){
   die("connection Failed!".$db->connect_error);   
  }
?>

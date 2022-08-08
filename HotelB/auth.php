<?php
//live connection
  $username = "sql6511475";
  $password = "bKuSytCkW8";
  $hostname = "sql6.freesqldatabase.com";
  
$con = mysqli_connect($hostname, $username, $password);
if(!$con){
  die ("Unable to connect to MySQL");
} 

$db = "sql6510378";
$selected = mysqli_select_db($con,$db)
or die("Could not select database");
?>
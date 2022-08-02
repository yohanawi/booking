//<?php
  //$username = "unleashe_hotel";
  //$password = "unleashe_hotel";
  //$hostname = "localhost"; 

  //connection to the database
  //$dbhandle = mysql_connect($hostname, $username, $password) 
  //or die(mysql_error());

  //select a database to work 
  //$db = "unleashe_hotel";
  //$selected = mysql_select_db($db,$dbhandle) 
  //or die(mysql_error());

  $username = "root";
  $password = "";
  $hostname = "localhost";

  $con = mysqli_connect($hostname, $username, $password);
  if (!$con) {
    die("Unable to connect to MySQL");
  }


  $db = "unleashe_hotel";
  $selected = mysqli_select_db($con, $db)
    or die("Could not select database");
  ?>
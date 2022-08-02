<?php
//execute the SQL query and return records
$result = mysqli_query($con,"SELECT id, model,year FROM cars");

//fetch tha data from the database 
while ($row = mysqli_fetch_array($result)) {
   echo "ID:".$row{'id'}." Name:".$row{'model'}."Year: ". //display the results
   $row{'year'}."<br>";
}
//close the connection
mysqli_close($con);
?>
<?php 

$server="localhost";
$username="id17281856_root";
$password="DiptayanDasgupta@10";
$db="id17281856_basic_banking_system";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
  
}

else
die("connection to this database failed due to " .mysqli_connect_error());


?>

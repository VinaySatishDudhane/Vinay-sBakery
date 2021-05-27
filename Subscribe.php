<?php
include("connection1.php");

$SName=$_POST["SName"];
$SEmail=$_POST["SEmail"];

$sql= " INSERT INTO Subscribe(SName,SEmail) VALUES ('$SName','$SEmail')";

if(mysqli_query($con,$sql))
{
  echo"Successfully data Stored!";
}
else {
  echo "Error while storing data into database";
}
 ?>

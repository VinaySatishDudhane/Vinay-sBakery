<?php
include("connection1.php");

$CName=$_POST["CName"];
$CEmail=$_POST["CEmail"];
$CSubject=$_POST["CSubject"];
$CPhoneNumber=$_POST["CPhoneNumber"];
$CMessage=$_POST["CMessage"];

$sql= " INSERT INTO Contact(CName,CEmail,CSubject,CPhoneNumber,CMessage) VALUES ('$CName','$CEmail','$CSubject','$CPhoneNumber','$CMessage')";

if(mysqli_query($con,$sql))
{
  echo"Successfully data Stored!";
}
else {
  echo "Error while storing data into database";
}
 ?>

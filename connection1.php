<?php
$servername="localhost";
$username="root";
$password="";
$dbname="Bakery";

$con = mysqli_connect($servername,$username,$password,$dbname);

if(!$con)
{
  echo "Error while connection";
}
?>

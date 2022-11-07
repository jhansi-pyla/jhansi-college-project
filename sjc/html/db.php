<?php
$hostname="localhost";
$username="root";
$password="";
$databasename="register";
$conn="mysqli_connect($hostname,$username,$password,$databasename";
if (!$conn) {
  die("connection failed".mysqli_connect_server());
}
echo "done";
?>
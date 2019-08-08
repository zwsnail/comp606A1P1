<?php

error_reporting(0);

$dbServername = "localhost";
$dbUsername = "root";
$dBPassword = "";
$dBName = "loginsystemtut";

$conn = mysqli_connect($dbServername, $dbUsername, $dBPassword, $dBName);



if(!$conn){
  header("location: sitedown.php");
}


$conn->autocommit(true);

error_reporting(E_ALL);

?>
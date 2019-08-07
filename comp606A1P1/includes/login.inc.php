<?php
require_once "dbh.inc.connection.php";

$username = $_POST["uid"];
$password = $_POST["pwd"];

$sql = "SELECT * FROM users WHERE uidUsers='$username' AND pwdUsers='$password'";
$result = $conn->query($sql);
if(!$result) die ("Database access failed");


if($result->fetch_array()) {
    echo $username." ,welcome back!";
}else
    echo "Sorry, something wrong.";


$result->close();





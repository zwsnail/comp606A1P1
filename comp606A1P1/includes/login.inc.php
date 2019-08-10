<?php
require_once "dbh.inc.connection.php";
session_start();


$username = $_POST["uid"];
$password = $_POST["pwd"];

$sql = "SELECT * FROM users WHERE (uidUsers='$username') AND (pwdUsers='$password')";
$result = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($result);
$row = mysqli_fetch_array($result, MYSQLI_NUM);


if($rows ==1) {
    $_SESSION['uid'] = true;
    $_SESSION['uid'] = $username;
    header("Location: ../welcome.php?");
}else
    header("Location: ../welcome.php?");








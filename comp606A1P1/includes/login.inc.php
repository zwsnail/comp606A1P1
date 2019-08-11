<?php
require_once "dbh.inc.connection.php";
session_start();


$username = $_POST["uid"];//get the user inputs from index.php page
$password = $_POST["pwd"];
//search the database by the inputs
$sql = "SELECT * FROM users WHERE (uidUsers='$username') AND (pwdUsers='$password')";
$result = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($result);
$row = mysqli_fetch_array($result, MYSQLI_NUM);


if($rows ==1) {// the username and password match, set the session
    $_SESSION['uid'] = true;
    $_SESSION['uid'] = $username;
    header("Location: ../welcome.php?");
}else// direct to welcome page
    header("Location: ../welcome.php?");








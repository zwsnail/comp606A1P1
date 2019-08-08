<?php
require_once "dbh.inc.connection.php";







$username = $_POST["uid"];
$password = $_POST["pwd"];

$sql = "SELECT * FROM users WHERE (uidUsers='$username') AND (pwdUsers='$password')";
$result = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($result);
$row = mysqli_fetch_array($result, MYSQLI_NUM);



if($rows ==1) {
    session_start();
    // Set session variables
    $_SESSION['loggedin'] = true;
    $_SESSION['uid'] = $username;
    header("Location: ../welcome.php?");
}else
    echo "Sorry, something wrong.";


mysqli_close($conn);





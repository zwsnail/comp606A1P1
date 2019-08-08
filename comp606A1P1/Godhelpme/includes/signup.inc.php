<?php
require_once "dbh.inc.connection.php";
session_start();

if($conn->connect_error) die ("Database access failed");

$username = $_POST['uid'];
$password = $_POST['pwd'];
$passwordRepeat = $_POST['pwd-repeat'];

$sql = "INSERT INTO users (uidUsers, pwdUsers) VALUES ('$username', '$password');";
$result = mysqli_query($conn, $sql);

if($result){//if the user name has been taken
    $sql2 = "SELECT uidUsers FROM users";
    $result = $conn->query($sql2);
    $row = mysqli_fetch_array($result, MYSQLI_NUM);
    
    if($row[0] == $username) {
        header("Location: ../signup.php?error=usertaken");
        exit();
    }else if($password !== $passwordRepeat){
        header("Location: ../signup.php?error=passwordcheck");
        exit();
    }else{
        header("Location: ../welcome1.php?success_signup");
        echo "<h1>Welcome " . $username . "!</h1>";
        exit();
    }
}else{
    echo "Unknown Error!";
}





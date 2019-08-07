<?php
require_once "dbh.inc.connection.php";


if($conn->connect_error) die ("Database access failed");


$stmt = $conn->prepare("INSERT INTO users (uidUsers, pwdUsers) VALUES (?, ?)");
$stmt->bind_param('ss', $username, $password);


$username = $_POST['uid'];
$password = $_POST['pwd'];
$passwordRepeat = $_POST['pwd-repeat'];

$stmt->execute();

//can I make UNIQE in sql table??
//if the user name has been taken
$sql = "SELECT * FROM users WHERE uidUsers ='$username'";//or only just directly select the username?
$result = $conn->query($sql);
$row= $result->fetch_array(MYSQLI_NUM);
if($row[0] == $username) {//$result->num_rows == 0)?//0 or 1 AI?
    header("Location: ../signup.php?error=usertaken");
    exit();
}else if($password !== $passwordRepeat){
    header("Location: ../signup.php?error=passwordcheck");
    exit();
}else{
    header("Location: ../welcome.php?success_signup");
    exit();
}


$result->close();
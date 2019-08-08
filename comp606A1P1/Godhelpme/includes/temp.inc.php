<?php
  require 'dbh.inc.connection.php';

if (isset($_POST['signup-submit'])) {


  $username = $_POST['name'];
  $password = $_POST['pwd'];
  $passwordRepeat = $_POST['pwd-repeat'];

  if (empty($username) || empty($password) || empty($passwordRepeat)) {
    header("Location: ../signup.php?uid=".$username);
    exit();
  }
  else if ($password !== $passwordRepeat) {
    header("Location ../signup.php?error=passwordcheck&uid=".$username);
    exit();
  }
  else {
    // code for if the username taken
    $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../signup.php?error=sqlerror1");
      exit();
    }
      else {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        if ($resultCheck > 0) {
          header("Location: ../signup.php?error=usertaken");
          exit();
        }
        else {

          $sql = "INSERT INTO users (uidUsers, pwdUsers) VALUES (?, ?)";
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signup.php?error=sqlerror1"); 
            exit();
          }
          else {
            $hashedPwd = password_hash($password, PASSSWORD_DEFAULT);

            mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPwd);
            mysqli_stmt_execute($stmt);
            header("Location: ../signup.php?success_signup");
            exit();
          }

        }
      }

    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

  }
 else {
   header("Location: ../signup.php");
 }




 //$sql = "INSERT INTO users (uidUsers, pwdUsers) VALUES ('$username', '$password');";
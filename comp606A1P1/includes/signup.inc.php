<?php
require_once "dbh.inc.connection.php";
require_once "../header.php";

if($conn->connect_error) die ("Database access failed");

if(isset($_POST['uid'], $_POST['pwd'])){
    $username = $_POST['uid'];
    $password = $_POST['pwd'];
    //get the username in database 
    $sql = "SELECT * FROM users WHERE uidUsers='$username'";
    $result = mysqli_query($conn, $sql);

    
    if(mysqli_num_rows($result) > 0){
        $error = "usertaken";    //check if the username take
        header("Location: ../signup.php?error=usertaken");
        exit();//then head to signup page to resign
    }else if($_POST['pwd']!== $_POST['pwd-repeat']){
        $error = "passwordcheck";//check if the user typed same password
        header("Location: ../signup.php?error=passwordcheck&uid=".$username);//no need to type again
        exit();
    }else{
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $stmt = mysqli_prepare($conn, "INSERT INTO users (uidUsers, pwdUsers) VALUES (?, ?);");
        mysqli_stmt_bind_param($stmt,'ss', $username, $hashedPassword);//salt the password with hash method
        mysqli_stmt_execute($stmt);
        //display the username in this page by a friendly page
        echo <<<_END
        <html>
         <body>
         <style>
          body {background:url(../img/welcome.png) no-repeat fixed center;}
          h1 {color: red;}
          button {background-color: #3647aa;
                padding: 10px 18px;
                color: white;}
         </style>
          <h1>Welcome $username!</h1>
          <button type="button" onclick="window.location.href='../index.php'">Logout</button>
         </body>
        </html>
_END;
        mysqli_stmt_close($stmt);
        mysqli_close($conn);//free the memory
        exit();
    }
}else{//if something wrong display this page
    echo <<<_END
    <html>
     <body>
     <style>
      body {background:url(../img/sitedown.jpg) no-repeat fixed center;}
      h1 {color: red;}
      button {background-color: #3647aa;
            padding: 10px 18px;
            color: white;}
     </style>
      <h1>404 something wrong...</h1>
      <button type="button" onclick="window.location.href='../index.php'">Logout</button>
     </body>
    </html>
_END;
}
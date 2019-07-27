<?php
// define variables and set to empty values
$erro= "";
if (empty($_POST["username"]) || empty($_POST["password"])) {
  $erro = "Username or Password is required";
} else {
  $username = $_POST["username"];
  $password = $_POST["password"]

  // connetion

  $conn = @ mysql_connect("localhost", "root", "") or die("数据库连接错误");
  // select database
  $db = mysqli_select_db($conn, "test");
  //sql query to fetch regstered user
  $query = mysqli_query($conn, "SELECT * FROM userpass WHERE username= '$username' AND password='$password'");

  $rows = mysqli_num_rows($query);
    if($rows == 1){
        header("Location: login_register.php");//redirect to other page
    }else{
      $error = "Username of Password is In valid";
    }
  mysqli_close($conn)//close connection
}
?>




<?php 
include_once("functions/database.php"); 
//收集表单提交数据 
$username = addslashes($_POST['username']); 
$password = addslashes($_POST['password']); 
//连接数据库服务器 
getConnection(); 
//判断用户名和密码是否输入正确 
$sql = "select * from users where userName='$username' and password='$password'"; 
$resultSet = mysql_query($sql); 
if(mysql_num_rows($resultSet)>0){ 
     echo "Success!"; 
}else{ 
     echo "Something Wrong!"; 
} 
closeConnection(); 
?> 

//https://blog.csdn.net/qq_35661627/article/details/78564319





/*另一种！！！！！

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
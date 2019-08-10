<?php
require_once "includes/dbh.inc.connection.php";
require_once "header.php";
session_start();
$username = $_SESSION['uid'];


// Echo session variables
if(isset($_SESSION['uid']) & $_SESSION['uid']==true){
    echo <<<_END
    <h1>Welcome $username!</h1>";
    <button type="button" class="signup" onclick="window.location.href='index.php'">Logout</button>
_END;
}else{
    echo <<<_END
    <h1>Sorry, can't find you, would you like to sign up?</h1>
    <button type="button" class="signup" onclick="window.location.href='signup.php'">Signup</button>
_END;
}



require_once "footer.php"; 


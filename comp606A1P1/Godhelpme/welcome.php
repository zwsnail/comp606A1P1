<?php
require_once "includes/dbh.inc.connection.php";
require_once "header.php";
session_start();



// Echo session variables
if(isset($_SESSION['loggedin']) & $_SESSION['loggedin']==true){
    echo "<h1>Welcome " . $_SESSION['uid'] . "!</h1>";
    echo "<button type='button' class='signup' onclick='window.location.href='index.php''>Logout</button>";
}else{
    echo "Please log in.";
}



require_once "footer.php"; 


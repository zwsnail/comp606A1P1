<?php
session_start();

if (count($_POST) == 0) {
    header("Location: login_register.php");
    exit(0);
};


$valid = true;
$keys = array("username", "password");
foreach($keys as $key){
    if (!array_key_exists($key, $_POST)){
        $valid = false;
    }
}

if ($valid == false){
    header("location: login_register.php");
    exit(0);
}

// now write code to do something with form data in $_POST here
var_dump($_POST);

session_write_close();
?>

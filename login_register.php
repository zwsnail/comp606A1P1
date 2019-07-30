<?php
include("login.php");
?>

<?php require_once("header.php"); ?>


<body>
<div id="login_frame">
 
    <p id="image_logo"><img src="login_icon_small.jpd.png"></p>
 
    <form method="post" action="login.php">
 
        <p><label class="label_input">username</label><input type="text" id="username" class="text_field" require></p>
        <p><label class="label_input">password</label><input type="text" id="password" class="text_field" require></p>
 
        <div id="login_control">
            <input type="submit" id="btn_login" value="Login" a href="welcome.php"/>
            <input type="submit" id="btn_sign_up" value="Register" a href="register.php"/>
            <a id="forget_pwd" href="forget_pwd.html">forget password？</a>
        </div>

    </form>
</div>
<span><?php echo $error; ?><span>


<?php require_once("footer.php"); ?>
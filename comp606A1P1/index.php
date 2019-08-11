<?php
include "includes/dbh.inc.connection.php";
require_once "header.php";

?>
<div id="form_position">
<form action="includes/login.inc.php" method="post">

  <div class="container">
   <h1>Login</h1>
    <hr>
    <b>Username</b>
    <input type="text" placeholder="Enter Username" name="uid" required>
    <b>Password</b>
    <input type="password" placeholder="Enter Password" name="pwd" required>
    <button type="submit" name="login-sumbit">Login</button>
  </div>

  <div class="container">
    <button type="button" class="signup" onclick="window.location.href='signup.php'">Sign up</button>
  </div>
</form>
</div>
</body>


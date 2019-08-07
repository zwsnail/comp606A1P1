<?php
include("includes/dbh.inc.connection.php");
require_once("header.php");
?>
<div id="form_position">
<form action="includes/login.inc.php" method="POST">
  <div class="imgcontainer">
    <img src="img/logo.png" alt="img" class="img">
  </div>

  <div class="container">
    <label for="uid"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uid" required>

    <label for="pwd"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd" required>
    <button type="submit" name="login-sumbit">Login</button>

  </div>

  <div class="container">
    <button type="button" class="signup" onclick="window.location.href='signup.php'">Sign up</button>
  </div>
</form>
</div>
</body>

<span><?php echo $error; ?><span>


<?php require_once("footer.php"); ?>
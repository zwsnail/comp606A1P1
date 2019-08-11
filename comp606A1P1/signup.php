<?php
include "includes/dbh.inc.connection.php";
require_once "header.php";
session_start();
?>

<form action="includes/signup.inc.php" method="POST">
  <div class="container">
    <h1>Sign up</h1>
    <hr>
    <label for="uid"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uid" required>
    <label for="pwd"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd" required>
    <label for="pwd-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="pwd-repeat" required>
    <?php
          if (isset($_GET['error'])){
              if ($_GET['error'] == "passwordcheck"){
                  echo '<h5 style="color:red;">Your passwords do not match!</h5>';}
              else if ($_GET['error'] == "usertaken"){
                  echo '<h5 style="color:red;">Username is already taken!</h5>';}
          }
        ?>
    <button type="submit" class="registerbtn">Sign up</button>
    <br>
    <h6>Already have an account? <a href="index.php">Login</a></h6>

</form>
</body>


<?php require_once("footer.php"); ?>


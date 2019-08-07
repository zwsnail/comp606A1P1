<?php
include("includes/dbh.inc.connection.php");
require_once("header.php");
?>

<form action="includes/signup.inc.php" method="POST">
  <div class="container">
    <h1>Sign up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="uid"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uid" required>

    <label for="pwd"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd" required>

    <label for="pwd-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="pwd-repeat" required>
    <hr>
    <?php
          if (isset($_GET['error'])){
              if ($_GET['error'] == "passwordcheck"){
                  echo '<p style="color:red;">Your passwords do not match!</p>';
              }
              else if ($_GET['error'] == "usertaken"){
                  echo '<p style="color:red;">Username is already taken!</p>';
              }
          }
        ?>
  
    <button type="submit" class="signup-submit">Sign up</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="index.php">Sign in</a>.</p>
  </div>
</form>
</body>


<?php require_once("footer.php"); ?>


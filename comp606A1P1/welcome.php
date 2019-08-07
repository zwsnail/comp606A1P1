<?php
require_once "includes/dbh.inc.connection.php";
require_once "header.php";
?>
<?php 
$username = $_POST["uid"];
echo $username;
//$sql = "select * from users where "
?>
<div>
    <h1>Welcome</h1>
    <br>
    <h3><?php $username?>, you are logged in!</h3>
    <button type="button" class="cancelbtn" onclick="window.location.href=\'index.php\'>Logout</button>';
</div>


<?php require_once("footer.php"); ?>
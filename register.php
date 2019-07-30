<?php require_once("header.php"); ?>
<body>
<div>
<form action="register.php" method="post">
  <fieldset>
    <legend>Create your information:</legend>
    Username:<br>
    <input type="text" name="username" value="" require>
    <br>
    Password:<br>
    <input type="text" name="password" value="" require>
    <br><br>
    <input type="submit" value="Submit">
  </fieldset>
</form>
</div>
</body>

<?php require_once("footer.php"); ?>
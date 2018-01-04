<?php
session_start();
$_SESSION["username"] = "siasmj";
$_SESSION["id"] = 1234;
$_SESSION["auth"] = true;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Create and View Sessions</title>
    <meta charset="utf-8">
  </head>
  <body>
    <p>Username: <?php echo $_SESSION["username"]; ?></p>
    <p>ID: <?php echo $_SESSION["id"]; ?></p>
    <p>Logged in: <?php echo $_SESSION["auth"]; ?></p>
  </body>
</html>

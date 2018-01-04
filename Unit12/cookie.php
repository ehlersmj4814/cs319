<?php
setcookie("username", "none", time() + 86400, "/");
setcookie("id", 1234, time() + 86400, "/");
setcookie("auth", true, time() + 86400, "/");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Create and View Cookies</title>
    <meta charset="utf-8">
  </head>
  <body>
    <p>Username: <?php echo $_COOKIE["username"]; ?></p>
    <p>ID: <?php echo $_COOKIE["id"]; ?></p>
    <p>Logged in: <?php echo $_COOKIE["auth"]; ?></p>
  </body>
</html>

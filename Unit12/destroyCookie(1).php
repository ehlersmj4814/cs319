<?php
setcookie("username", "", time() - 3600, "/");
setcookie("id", "", time() - 3600, "/");
setcookie("auth", "", time() - 3600, "/");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Destroy Cookies</title>
    <meta charset="utf-8">
  </head>
  <body>
    <p>Username: <?php echo $_COOKIE["username"]; ?></p>
    <p>ID: <?php echo $_COOKIE["id"]; ?></p>
    <p>Logged in: <?php echo $_COOKIE["auth"]; ?></p>
  </body>
</html>

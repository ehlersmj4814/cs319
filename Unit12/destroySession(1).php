<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Destroy Sessions</title>
    <meta charset="utf-8">
  </head>
  <body>
    <p>Username: <?php echo $_SESSION["username"]; ?></p>
    <p>ID: <?php echo $_SESSION["id"]; ?></p>
    <p>Logged in: <?php echo $_SESSION["auth"]; ?></p>
  </body>
</html>

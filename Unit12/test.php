<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Testing Cookies and Sessions</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>Cookie Test</h2>
    <p>Username: <?php echo $_COOKIE["username"]; ?></p>
    <p>ID: <?php echo $_COOKIE["id"]; ?></p>
    <p>Logged in: <?php echo $_COOKIE["auth"]; ?></p>
    <h2>Session Test</h2>
    <p>Username: <?php echo $_SESSION["username"]; ?></p>
    <p>ID: <?php echo $_SESSION["id"]; ?></p>
    <p>Logged in: <?php echo $_SESSION["auth"]; ?></p>
  </body>
</html>

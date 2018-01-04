<?php
$first_name = $_REQUEST["fname"];
$last_name = $_REQUEST["lname"];
setcookie("fname", $first_name, time() +86400, "/");
setcookie("lname", $last_name, time() +86400, "/");
header('Location: index1.php');
?>
<?php
session_start();
$_SESSION["fname"] = $_REQUEST["fname"];
$_SESSION["lname"] = $_REQUEST["lname"];
header('Location: index.php');

?>
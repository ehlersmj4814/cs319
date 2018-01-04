<?php 
session_start();
$first_name = $_SESSION["fname"];
$last_name = $_SESSION["lname"];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Home Page</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Home Page</h2>
		<hr>
		<p><a href="index.php">Home</a> | <a href="about.php">About</a> | <a href="form.php">Form</a></p>
		<hr>
		<p>Welcome to the site, <?php echo $first_name." ".$last_name."!"; ?></p>
	</body>
</html>
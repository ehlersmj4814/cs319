<?php
$first_name = $_COOKIE["fname"];
$last_name = $_COOKIE["lname"];
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
		<p><a href="index1.php">Home</a> | <a href="about1.php">About</a> | <a href="form1.php">Form</a></p>
		<hr>
		<p>Welcome to the site, <?php echo $first_name." ".$last_name."!"; ?></p>
	</body>
</html>
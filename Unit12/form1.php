<?php

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Form Page</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Form Page</h2>
		<hr>
		<p><a href="index1.php">Home</a> | <a href="about1.php">About</a> | <a href="form1.php">Form</a></p>
		<hr>
		<form id="names" name="names" action ="formProcess1.php" method="post">
			<p>First Name: <input type="text" name="fname" id="fname"></p>
			<p>Last Name: <input type="text" name="lname" id="lname"></p>
			<p><input type="submit" name="submit" id="submit"></p>
		</form>
	</body>
</html>
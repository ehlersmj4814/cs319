<?php //Matt Ehlers and Bret Bender
session_start();
		//$_SESSION["fullName"] = "Bret Bender";
		//$_SESSION["email"] = "Benderbm@uwec.edu";
?>		
	

<!DOCTYPE html>
	<html lang="en">
		<head>
			<title>Cookies and Sessions</title>
			<h1>View Cookies and Sessions</h1>
			<meta charset="utf-8">
		</head>
		<body>
			
			<hr><p><a href="create.php">Create</a> | 
			<a href="view.php">View</a> | 
			<a href="delete.php">Delete</a>
			</p>
			<hr>
			
			<p>Full Name: <?php echo $_SESSION["fullName"]; ?> </p>
			<p>Email: <?php echo $_SESSION["email"]; ?></p>
			<p>Username: <?php echo $_COOKIE["username"]; ?></p>
			<p>Date: <?php echo $_COOKIE["date"]; ?></p>
		</body>
	</html>
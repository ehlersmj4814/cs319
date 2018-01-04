<?php //Matt Ehlers and Bret Bender
session_start();
		$_SESSION["fullName"] = "Bret Bender";
		$_SESSION["email"] = "Benderbm@uwec.edu";
		
		
	setcookie("username", "Benderbm", time() + 3600, "/");
	setcookie("date",date("F j, Y"), time() + 3600, "/");
	
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
		</body>
	</html>
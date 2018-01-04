<?php
	$user = $_REQUEST["username"];
	$pass = $_REQUEST["password"];
	session_start();
	if($user == "admin" && $pass == "Fall2016"){
		$_SESSION["authenticated"] = 1;
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin Dashboard | Alexamara Marina</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Alexamara Marina</h1>
		<h2>Admin Dashboard</h2>
		<?php
			if($_SESSION["authenticated"] == 1){
		?>
				<hr>
				<p> <a href="dashboard.php">Dashboard</a> | 
				<a href="owners.php">Slip Owners</a> |
				<a href="boats.php">Boats</a> |
				<a href="calculator.php">Slip Calculator</a> |
				<a href="logout.php">Logout</a>
				<hr>
				<p>Welcome, admin!</p>
		<?php
			}else{
		?>
				<p>Username or password is incorrect. Please <a href="index.php">login</a>.</p>
		<?php
			}
		?>
	</body>
</html>
<?php
			$full_name = $_REQUEST["fullName"];
			$email_addr = $_REQUEST["email"];
			$password = $_REQUEST["pass"];
			$pass_auth = $_REQUEST["passAuth"];
			$alert = "";
			
			if ($password != $pass_auth){
				$alert = "Passwords do not match. <a href=\"index.php\">Go back.</a>";
			}elseif ($full_name == ""){
				$alert = "Full name must be entered.<a href=\"index.php\"Go back.</a>";
			}
		?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Account Confirmation</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Account Confirmation</h1>
		<p>Full Name: <?php echo $full_name?></p>
		<p>Email: <?php echo $email_addr?></p>
		<p>Password: <?php echo $password?></p>
		<p>Repeate Password: <?php echo $pass_auth?></p>
		<p> </p>
	</body>
</html>
	